<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>网赚-个人</title>
<meta name="keywords" content="网上赚钱，手机赚钱，游戏赚钱，任务赚钱，挂机赚钱，签到赚钱" />
<meta name="Author" content="mingningshaoxia" />
<meta htcontent-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta htcontent-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="__PUBLIC__/index/css/public.css" type="text/css" rel="stylesheet" />
</head>
<body>

  <div class="content">
         <div class="cen_cnt login">
           <a name="get_name" item="n">李四<?php echo ($n["uname"]); ?></a><a href="<?php echo U('/Index/index');?>">退出</a>
         </div>
  
         <div class="cen_cnt logo">
            <div class="">
         
            </div>
         </div>
  
         <div class="content navbg">
             <div class="cen_cnt">
                <div class="nav">
                <!-- <a class="active">我的项目</a><a>我的分享</a><a>我的设置</a><a>我的收藏</a><a>密码修改</a>-->
                   <?php if(is_array($navname)): foreach($navname as $key=>$v): ?><a href="<?php echo ($v["href"]); ?>"><?php echo ($v["p_name"]); ?></a><?php endforeach; endif; ?>
                </div>
                <div class="tolearn">
                  <a href="<?php echo U('/School/arti_list');?>" target="_blank">网赚学堂</a>
                </div>
             </div>
         </div>
  </div>