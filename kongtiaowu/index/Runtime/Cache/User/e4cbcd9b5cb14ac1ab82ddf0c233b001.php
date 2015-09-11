<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/vip.css" rel="stylesheet" type="text/css"/>
<script src="__PUBLIC__/index/js/TQEditor.js" type="text/javascript"></script>
<script src="__PUBLIC__/index/js/apiEx.js" type="text/javascript"></script>
<script src="__PUBLIC__/index/js/adddate.js" type="text/javascript"></script>
<div class="main_cnt">
  <form action="addHandle" method="post" autocomplete="off">
  <div class="arti">
       <table class="arti_tab">
         <tr>
             <td>标&emsp;&emsp;题</td>
             <td>
                 <input type="text" class="litl_txt" name="titl"/>
             </td>
         </tr>
         <tr>
             <td>类&emsp;&emsp;型</td>
             <td>
                 <select class="litl_sele" name="cate">
                     <option value="0">--请选择--</option>
                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["arti_name"]); ?></option><?php endforeach; endif; ?>
                 </select>
             </td>
         </tr>
         <tr>
             <td>标&emsp;&emsp;签</td>
             <td>
                <input type="text" class="litl_txt" name="label"/>
             </td>
         </tr>
         
       </table>
       <div class="arti_btm">
         <div class="arti_lef">
            内&emsp;&emsp;容
         </div>
         <div class="arti_rit">
            <textarea id="e2" rows="12" cols="100" name="content"></textarea>
         </div>
       </div>
  </div>
  
   <div class="sub_bx">
      <input type="submit" class="submt" value="确定发布">
   </div>
  </form>
</div>
<script type="text/javascript" defer> 
var e= new tqEditor('e2',{toolbar:'full'}); 
</script>