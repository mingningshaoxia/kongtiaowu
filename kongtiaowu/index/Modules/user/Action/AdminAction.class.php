<?php
class AdminAction extends CommonAction{
	
		public function Login()
		{
		$this->view();
		}
		
		public function Regedit()
		{
		$this->view();
		}
		
	    /*手机注册*/
		public function phonereg()
		{
		if(!IS_POST)_404('非P');
        if(!preg_match('/^[1][3-8]\d{9}$/',$_POST['phone']))$this->error('手机号输入错误');
        if(!isset($_POST['agree']))$this->error('请同意协议');
        $phone=$_POST['phone'];
        $lastCode=M('sms_verify')->query('select code,time from sms_verify where phone ="'.$phone.'" order by id desc limit 1');
        if($_POST['code']!=$lastCode[0]['code'] || !$lastCode)$this->error('验证码错误');
        if(time()-$lastCode[0]['time']>60*60*2)$this->error('验证码超时');
        if(!preg_match('/^[0-9a-zA-Z_. ~!]{6,16}$/',$_POST['password']))$this->error('密码必须由6-16个英文字母和数字的字符串组成');
        if($_POST['password']!=$_POST['r-password'] || !$_POST['password'] )$this->error('两次密码不一致');

             $data=array(
                'phone'=>$phone,
                'password'=>md5($_POST['password']),
                'regtime'=>time(),
                'loginip'=>get_client_ip(),
                );
             $uid=D('User')->addUser($data);
             if($uid)
             {  M('user')->where(array('uid'=>$uid))->setField('status',1);//status修改为1
                $this->success('注册成功',U(GROUP_NAME.'/Admin/login'));
             }
             else
             {
                $this->error('注册失败');
             }
		}
		/*邮件注册*/
		public function mailreg()
		{
		  
		if(!IS_POST)_404('非P');
        if(!preg_match('/^\w+([-.]\w+)*@(126\.com|139\.com|163\.com|188\.com|qq\.com|outlook\.com|yahoo\.com|yahoo\.com.cn|sohu\.com|sina\.com|gmail\.com|hotmail\.com|21cn\.cn)$/',$_POST['email']))
		{
            $this->error('邮箱格式不正确');
        }
        if($_POST['password']!=$_POST['r-password'] || !$_POST['password'])$this->error('两次密码不一致');
        if(!isset($_POST['agree']))$this->error('请同意协议');

        $data=array(
            'email'=>$_POST['email'],
            'password'=>md5($_POST['password']),
            'regtime'=>time(),
            'loginip'=>get_client_ip(),
            'token' =>md5(time().$_POST['email'].$_POST['phone']),
            'expire'=>time()+24*60*60
        );

        $this->db=D('User');

        if($uid=$this->db->addUser($data))
        {

            $row= $this->db->findUser($uid);
            $to=$row['email'];
            $name="kongtiaowu.com";
            $subject="空调屋会员中心 - 账号开通激活";
            $body="请点击以下注册确认链接，激活您的空调屋账号<br>
			<a href=http://www.kongtiaowu.com/Admin/validate?token=".$row['token']."&expire=".$row['expire']."&email=".$row['email']."&uid=".$row['uid'].">
			http://www.kongtiaowu.com/Admin/validate?token=".$row['token']."&expire=".$row['expire']."&email=".$row['email']."&uid=".$row['uid']."</a>";
			think_send_mail($to, $name, $subject, $body, $attachment = null);
			$this->success('邮件已发送到您的邮箱，请在24小时内激活');
					
					}else
					{
						$this->error('注册失败');
					} 
		   
		}
		
		//邮件验证
		public function validate()
		{
			if($_GET['token'])
			{
				$this->db=D('User');
				if($row=$this->db->findUser($_GET['uid']))
				{   if($row['expire']<time())$this->error('激活已超时');
					if($row['token']==$_GET['token'])
					{
						$this->db->where(array('uid'=>$row['uid']))->setField('status','0');
						$this->success('跳转登陆页面',U(GROUP_NAME.'/Admin/login'));
					}
					else
					{
						$this->error('验证码错误');
					}
				}
				else
				{
					die('用户不存在');
				}
	
	
			}
			else
			{
				_404('页面出错');
			}
		} 
		
		//验证手机号是否存在
		 public function isPhone()
		 {   if(!IS_AJAX)_404('非A');
			$phone=$_GET['phone'];
			$exist=M('user')->where(array('phone'=>$phone))->find();
			if($exist)
			{
				$this->ajaxReturn(null,null,0);
			}
			else
			{
				$this->ajaxReturn(null,null,1);
			}
	
		 }
		
		
		//验证邮箱是否存在
		 public function isEmail()
		 {   if(!IS_AJAX)_404('非A');
			$email=$_GET['email'];
			$exist=M('user')->where(array('email'=>$email))->find();
			if($exist)
			{
				$this->ajaxReturn(null,null,0);
			}
			else
			{
				$this->ajaxReturn(null,null,1);
			}
	
		 }     
		
		//验证验证码是否正确
		 public function verifyCode()
		 {    if(!IS_AJAX)_404('非A'); 
			  if(!preg_match('/^\d+$/',$_GET['code']))
			 { 
				$this->ajaxReturn('验证码错误',null,2);
			 }
			  if(!preg_match('/^\d+$/',$_GET['phone']))
			 { 
				$this->ajaxReturn('手机号码不正确',null,2);
			 }
			else
			{
			   $lastCode=M('sms_verify')->query('select code,time from sms_verify where phone ="'.$_GET['phone'].'" order by id desc limit 1');
			   if($_GET['code']!=$lastCode[0]['code'] || !$lastCode || time()-$lastCode[0]['time']>60*60*2)
			   { 
				$this->ajaxReturn('验证码错误',null,0);
			   }
			   else
			   {
				 $this->ajaxReturn(null,null,1);
			   }
			}
	
		 }
		
		/*登录处理*/
		public function checklogin()
		{
			  if(!IS_AJAX)_404('非法请求');
        $phoneOrEmail=$_POST['phoneOrEmail'];
        $password=md5($_POST['password']); 
      //组合查询
       if(!$phoneOrEmail)$this->ajaxReturn('账号不能为空',null,0);
       $where['phone']=array('eq',$phoneOrEmail);
       $where['email']=array('eq',$phoneOrEmail);
       $where['_logic']='or';
       $map['_complex']=$where; 
       $row=M('user')->where($map)->find();
     
        if($row)
       {       if($row['password']==$password)
                {   //status修改为了1
                    if($row['status']!=1)$this->ajaxReturn('账号未激活',null,0);
                    $_SESSION['uid']=$row['uid'];
                    if($row['type']==2)
                    {
                     $_SESSION['owner']=$row['uid'];
                    }
                    if(isset($_POST['auto_login']))
                    {
                        setcookie(session_name(),session_id(),time()+3600*24*7,'/','.kongtiaowu.com');
                    }
                   

                    //更新时间IP
                     $data=array(
                      'logintime'=>time(),
                      'loginip'  =>get_client_ip()
                     );
                    M('user')->where(array('uid'=>$row['uid']))->save($data);
                    $this->ajaxReturn('http://www.kongtiaowu.com/Index/index',null,1);
                }
              else
               {
                   $this->ajaxReturn('账号或密码不正确',null,0);
               }


			}
			else
			{
				$this->ajaxReturn('账号或密码不正确',null,0);
			}
		}
		
		
		
		public function ajaxCode()
		{   if(!IS_AJAX)_404('非A');
			  $ip=$_SERVER["REMOTE_ADDR"];
			  $phone=$_GET['phone'];
			  $code=rand(99999,999999);
	$arr=M('sms_verify')->query('select count(*) as count from sms_verify where from_unixtime(time,"%Y-%m-%d") = curdate()
	 and ip ="'.$ip.'"');
	
			  if($arr[0]['count'])//有记录判断当日次数
			  {            if($arr[0]['count']<10)
						  {
		$lasttime=M('sms_verify')->query('select * from sms_verify where from_unixtime(time,"%Y-%m-%d") = curdate()
	 and ip ="'.$ip.'" order by id desc limit 1');
								//判断离上次发送验证码是否有3分钟
								 if(time()-$lasttime[0]['time']>180)
								 {
										 $data=array(
										  'phone'=>$phone,
										  'ip'=>$ip,
										  'code'=>$code,
										  'time'=>time()
											);
	
										 $id=M('sms_verify')->add($data);
										 if($id)
										 {
											set_phone($phone,$code);
											$this->ajaxReturn('','超过3分发送','1');
	
										 }
										 else
										 {
											 $this->ajaxReturn('','超过3分不发送','0');
										 }
								  }
								  else
								  {
									$this->ajaxReturn('','3分内不发送','0');
								  }
	
						  }
						  else
						  {
							 $this->ajaxReturn('','超过5条不发送','0');
						  }
				}
				else//无记录时添加
				{
	
							 $data=array(
							  'phone'=>$phone,
							  'ip'=>$ip,
							  'code'=>$code,
							  'time'=>time()
								);
							 $id=M('sms_verify')->add($data);
							 if($id)
							 {
								$result=set_phone($phone,$code);
								$this->ajaxReturn($result,'无记录发送','1');
	
							 }else
							 {
								 $this->ajaxReturn('','无记录不发送','0');
							 }
	
				}
	
	
		}
		
		
		
		public function quit()
		{
			setcookie(session_name(),session_id(),time()-1,'/');
			session_unset();
			session_destroy();
			$this->redirect('/');
		}
		
	
}