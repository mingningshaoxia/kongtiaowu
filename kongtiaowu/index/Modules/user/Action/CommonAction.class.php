<?php
class CommonAction extends Action{
	    
		function _initialize()
       {    
	     header("Content-type:text/html;charset=utf-8");
		  if($_SESSION['uid'])
		  { 
			$row=M('user')->where(array('uid'=>$_SESSION['uid']))->find();
		    $_SESSION['uname']=$row['phone']?substr_replace($row['phone'],'****',3,4):$row['email'];	
		  }   
          if(method_exists($this,'_ini'))$this->_ini();
		 
		 
		 //获取网赚学堂导航
	     $artiname=M('article_class')->select();
		 $this->assign('getname',$artiname);
		 //获取个人后台导航
		 $pername=M('person_class')->select();
		 $this->assign('navname',$pername);
		 //获取主页导航	    
		 $proname=M('proj_class')->select();
		 $this->assign('mainnav',$proname);

	   }
		
		protected function view($url)
		{
		 $this->display('Public/header');
		 $this->display($url);/*公共加载样式*/
		 $this->display('Public/footer');
		}
		
		protected function dis($url)
		{
		 $this->display('Public/header1');
		 $this->display($url);/*主页加载样式*/
		 $this->display('Public/footer');
		}
		
		protected function show($url)
		{
		 $this->display('Public/header2');
		 $this->display($url);/*个人后台样式*/
		 $this->display('Public/footer');
		}
		
		protected function visible($url)
		{
		 $this->display('Public/header3');
		 $this->display($url);/*学堂加载样式*/
		 $this->display('Public/footer');
		}
			
}