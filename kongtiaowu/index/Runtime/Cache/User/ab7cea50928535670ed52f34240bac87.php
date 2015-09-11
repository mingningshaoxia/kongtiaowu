<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/vip.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
   <!--收藏列表-->
 <?php if(is_array($getpro)): foreach($getpro as $key=>$proj): ?><div class="list_box">
     <table>
       <tr>
         <td>标题：</td><td align="left"><?php echo ($proj["titl"]); ?></td>
         <td>名称：</td><td align="left"><?php echo ($proj["name"]); ?></td>
         <td>有效期：</td><td align="left"><?php echo ($proj["deadline"]); ?></td>
       </tr>
       <tr>
         <td>链接：</td><td align="left"><?php echo ($proj["link"]); ?></td>
         <td>特点：</td><td align="left"><?php echo ($proj["character"]); ?></td>
         <td>发布时间：</td><td align="left"><?php echo ($proj["time"]); ?></td>
       </tr> 
     </table>
   </div><?php endforeach; endif; ?>  
</div>