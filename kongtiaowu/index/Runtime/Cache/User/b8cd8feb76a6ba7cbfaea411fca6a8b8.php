<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/vip.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
  <!--项目列表-->
 <?php if(is_array($getpro)): $i = 0; $__LIST__ = array_slice($getpro,0,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$proj): $mod = ($i % 2 );++$i;?><div class="list_box">
   
     <div class="">
        
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
         
     </div>
  
     
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

</body>
</html>