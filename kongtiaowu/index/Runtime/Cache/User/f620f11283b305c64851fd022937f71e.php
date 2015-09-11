<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/index.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
   <div class="main_left">
   
     <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="info_list">
        <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$v['id']));?>" target="_blank">
         <table>
            <tr>
               <td>标题:<div class="info_div"><?php echo ($v["titl"]); ?></div></td>
               <td>项目名称：<?php echo ($v["name"]); ?></td>
            </tr>
            <tr>
                <td>特点:<div class="info_div"><?php echo ($v["character"]); ?></div></td>
                <td>有效期至：<?php echo ($v["deadline"]); ?></td>
            </tr>
         </table>
        </a>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>      
      
   </div>
   <div class="main_rit">
       广告区域
   </div>
</div>