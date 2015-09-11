<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/school.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
   
   <div class="main_left">
     <table>
       <tr>
           <td colspan="6" align="center" style="font-weight:bold"><?php echo ($row["titl"]); ?></td>
       </tr>
       <tr>
           <td align="right">标签:</td>
           <td><?php echo ($row["label"]); ?></td>
           <td align="right">会员:</td>
           <td>李四</td>
           <td align="right">发布时间:</td>
           <td><?php echo (date("Y-m-d",$row["time"])); ?></td>
       </tr>
       <tr>
          <td colspan="6">
           <?php echo ($row["content"]); ?>
          </td>
       </tr>
     </table>
   </div>
   <div class="main_rit">
     广告区域
   </div>
   
</div>