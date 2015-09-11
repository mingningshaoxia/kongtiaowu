<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/index.css" rel="stylesheet" type="text/css"/>
<script src="__PUBLIC__/index/js/TQEditor.js" type="text/javascript"></script>
<script src="__PUBLIC__/index/js/apiEx.js" type="text/javascript"></script>
<script src="__PUBLIC__/index/js/adddate.js" type="text/javascript"></script>
<div class="main_cnt">
 <form autocomplete="off" action="Addinfo" method="post">
   <table class="tab">
     <tr>
         <td>标&emsp;&emsp;题</td>
         <td>
           <input type="text" class="long_txt" name="titl"/>
         </td>
     </tr>
     <tr>
         <td>项目名称</td>
         <td>
            <input type="text" class="litl_txt" name="name"/>
         </td>
     </tr>
     <tr>
         <td>选择版块</td>
         <td>
           <?php if(is_array($type_name)): $i = 0; $__LIST__ = array_slice($type_name,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input type="checkbox" name="a_type[]" value="<?php echo ($v["id"]); ?>"/><?php echo ($v["type"]); ?>
              <!-- <input type="checkbox" name="a_type" value="2"/>任务网赚
               <input type="checkbox" name="a_type" value="3"/>游戏网赚<input type="checkbox" name="a_type" value="4"/>挂机网赚
               <input type="checkbox" name="a_type" value="5"/>签到网赚<input type="checkbox" name="a_type" value="6"/>购物返利--><?php endforeach; endif; else: echo "" ;endif; ?>
          <!-- <input type="button" value="点击" onclick="fun()"/>-->
         </td>
     </tr>
     <tr>
         <td>有效期至</td>
         <td>
            <input type="text" class="litl_txt" name="deadline" onclick="SelectDate(this,'yyyy-MM-dd')"/>
         </td>
     </tr>
     <tr>
         <td>推荐链接</td>
         <td>
            <input type="text" class="midl_txt" name="url"/>
        </td>
     </tr>
     <tr>
         <td>项目特点</td>
         <td>
             <input type="text" class="long_txt" name="character"/>
         </td>
     </tr>
   </table>
   
   <div class="btm_bx" style="height:200px;">
      <div class="btm_lef">
        项目介绍
      </div>
      <div class="btm_rit">
        <textarea style="height:190px;max-height:190px" name="introduce"></textarea>
      </div>
   </div>
   
   <div class="btm_bx">
      <div class="btm_lef">
        如何操作
      </div>
      <div class="btm_rit">
        <textarea id="e1" rows="12" cols="100" name="handle"></textarea>
      </div>
   </div>
   <div class="sub_bx">
      <input type="submit" class="submt" value="发 布"/>
   </div>
 </form>
</div>
<script type="text/javascript" defer> 
var e= new tqEditor('e1',{toolbar:'full'}); 
</script>