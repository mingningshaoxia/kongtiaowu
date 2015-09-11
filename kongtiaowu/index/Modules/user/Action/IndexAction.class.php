<?php
class IndexAction extends CommonAction{
	
		public function Index()
		{
		    //获得项目
			$pro=M('project')->select();
			$this->assign('pro',$pro);
			//获得文章
			$list=M('article')->select();
			$this->assign('list',$list);		
			$this->dis();			
		}
		
		public function Info_pub()
		{		     
			$name=M('proj_class')->select();
			$this->assign('type_name',$name);
		    $this->dis();
		}
		//信息发布操作
		public function Addinfo()
		{    
		    if(!$_POST['titl'] || !$_POST['name'] ||!$_POST['url']|| !$_POST['handle'])$this->error('请填写完整');
			//向信息表插入数据
			$arr=array(
			 'titl'=>$_POST['titl'],
			 'name'=>$_POST['name'],
			 'deadline'=>$_POST['deadline'],
			 'link'=>$_POST['url'],
			 'character'=>$_POST['character'],
			 'introduce'=>$_POST['introduce'],
			 'handle'=>$_POST['handle'],
			 'time'=>time()
			  );
			$result = M('project')->add($arr);
			if($result)
			{
			  $id = $result;	
			  $this->success('保存成功');
			  //向关联表插入数据
				$str_tag = "";
				$a_type = $_POST['a_type'];
				for($i=0;$i<count($a_type);$i++)
				{
				  $conn=array(
				     'pro_id'=>$id,
					 'type_id'=>$a_type[$i]
				  );
				  M('connection')->add($conn);
				  
				}
			  /*$this->redirect('/user/Index/info_classify');*/
			}
			else
			{
			  $this->error('保存失败');
			}
			
			
			
		}
		
		public function Info_classify()
		{    
		    $info_id=(int)$_GET['id'];
			
			/*$connection = D("connection");
			$con_id = $connection->where("type_id='$info_id'")->find();*/
			$con_id=M()->query('select pro_id from connection where type_id='.$info_id);
			//$con_id=(int)$con_id;
			$arr=array();
			 foreach($con_id as $value){
				 foreach($value as $val)
				 { 
					$list=M()->query('select * from project where id='.$val);
					$arr.add($list);
				 }
			 }
            	
			
			$this->assign('list',$arr);		
			$this->dis();
		}
		public function Info_detail()
		{       
			$id=(int)$_GET['id'];
			$row=M()->query('select * from project where id='.$id );
			$row=$row[0];
			$this->assign('row',$row);
			$this->dis();
		}
       
}