<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>网赚-主页面</title>
<meta name="keywords" content="网上赚钱，手机赚钱，游戏赚钱，任务赚钱，挂机赚钱，签到赚钱" />
<meta name="Author" content="mingningshaoxia" />
<meta htcontent-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta htcontent-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="__PUBLIC__/index/css/public.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="__PUBLIC__/index/js/jquery-1.10.1.min.js"></script>

</head>
<body>

  <div class="content">
         <div class="cen_cnt login">
           <?php if($_SESSION['uid']): ?><a href=""><?php echo ($_SESSION['uname']); ?></a><a href="<?php echo U('Admin/quit');?>">退出</a>
           <?php else: ?>
             <a href="<?php echo U('/Admin/regedit');?>">注册</a><a href="<?php echo U('/Admin/login');?>">登录</a><?php endif; ?>
         </div>
  
         <div class="cen_cnt logo">
            <div class="">
         
            </div>
         </div>
  
         <div class="content navbg">
             <div class="cen_cnt">
                <div class="nav" id="nav">
				<input type="hidden" value="$v['id']"/>
                  <a href="<?php echo U('/Index');?>">首页</a>
                   <?php if(is_array($getname)): foreach($getname as $key=>$v): ?><a href="<?php echo U(GROUP_NAME.'/School/arti_list',array('id'=>$v['id']));?>">
                       <?php echo ($v["arti_name"]); ?>
                     </a><?php endforeach; endif; ?>
                </div>
                <div class="tolearn">
                 
                </div>
             </div>
         </div>
  </div>
  
<script type="text/javascript"> 
  $(function(){ 
	var href="http://www.kongtiaowu.com/user/school/arti_list/id/"+id+".html";
	a[href=href].addClass('active');
  
  
    var cur_url=window.location.href;
    $("#nav a").click(function(){
    
    href+=$(this).attr('href');
	console.log("href:"+href);
	if(href==cur_url)
	{	
      $(this).addClass('active');  
    }
    });
  
  });   
</script>