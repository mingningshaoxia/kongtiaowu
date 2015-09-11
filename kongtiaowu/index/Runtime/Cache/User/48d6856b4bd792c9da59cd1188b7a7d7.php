<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/school.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
   <div class="main_left">
    
      <div class="lef_bx">
      
        <?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="arti_bx">
           <a href="<?php echo U(GROUP_NAME.'/School/arti_detail',array('id'=>$v['id']));?>" target="_blank">
            <div class="arti_bx_lef" name="titl">
              <?php echo ($v["titl"]); ?>
            </div>
           </a> 
            <div class="arti_bx_rit" name="time">
              <?php echo (date("Y-m-d",$v["time"])); ?>
            </div>
           
         </div><?php endforeach; endif; ?>
		<?php ?>
			<input type="hidden" name="getvalue" value=""/>
		<?php ?>
        
      </div> 
       
      <div class="set_page">
        在此分页
      </div>
       
   </div>
   <div class="main_rit">
       广告区域
   </div>
</div>