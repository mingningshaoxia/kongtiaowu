<?php
class SchoolAction extends CommonAction{
	    
		public function Arti_list()
		{
		 $info_id=(int)$_GET['id'];
	     $list=M()->query('select * from article where cate='.$info_id);	
		 $this->assign('list',$list);		
		 $this->visible();
		}
		
		public function Arti_detail()
		{
		 $id=(int)$_GET['id'];
		 $row=M()->query('select titl,label,content,time from article where id='.$id);
		 $row=$row[0];
		 	
		 $this->assign('row',$row);	
		 $this->visible();
		}
		
	
}