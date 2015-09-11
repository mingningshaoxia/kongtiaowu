<?php
class VipAction extends CommonAction{
		
		public function Share()
		{
			$cate=M('article_class')->select();
			$this->assign('cate',$cate);
			$this->show();
		}
		//添加文章操作
		public function addHandle()
	  {
		if(!$_POST['titl'] || !$_POST['label'] || !$_POST['content'])$this->error('请填写完整');
	
		$arr=array(
		 'titl'=>$_POST['titl'],
		 'cate'=>$_POST['cate'],
		 'label'=>$_POST['label'],
		 'content'=>$_POST['content'],
		 'time'=>time()
		  );
		if(M('article')->add($arr))
		{
		 /* $this->success('文章添加成功！',__URL__.'/user/School/arti_list');*/
		/*  $this->ajaxReturn('','文章添加成功！',1);*/
		  $this->redirect('/user/School/arti_list');
		}
		else
		{
		  $this->error('保存失败'); 
		}
		
		
	  }	
	  
	  public function Project()
	  {
	   $get_info=M('project')->select();	  
	   $this->assign('getpro',$get_info); 	  
	   $this->show();
	  }
	  
	  public function Setting()
	  {	  
	   $this->show();
	  } 
	  
	  public function Collection()
	  {	
	   $get_info=M('project')->select();	  
	   $this->assign('getpro',$get_info);   
	   $this->show();
	  } 
	  
	  public function Changepass()
	  {	  
	   $this->show();
	  } 
}