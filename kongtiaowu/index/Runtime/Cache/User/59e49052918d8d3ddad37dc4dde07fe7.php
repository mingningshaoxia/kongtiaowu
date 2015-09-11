<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/logreg.css" rel="stylesheet" type="text/javascript"/>
 <div class="main_cnt">
    <div class="cnt_lef">
      <div class="cnt_bx">
        <form autocomplete="off">
         <div class="type_choose">       
                 <input type="radio" id="phone_reg" name="reg_type" onClick="radioshow()" checked />手机注册
                 <input type="radio" id="mail_reg" name="reg_type" onClick="radioshow()"/>邮箱注册
         </div> 
       </form>
       
       <form id="reg_phone" autocomplete="off" action="<?php echo U('/Admin/phonereg');?>" method="post">    
        <table class="info_tab" id="maincntlefcenmidlcnt1">
             <tr>
                 <td align="right">手机号:</td>
                 <td>
                     <input class="infobx phone" type="text" name="phone" id="phone"/>
                 </td>
             </tr>
             <tr>
                 <td align="right">验证码:</td>
                 <td>
                     <input type="text" class="shortbx phone" name="code" id="code"/>
                     <input type="button" class="send_txt" value="获取验证码" id="getCode"/>
                 </td>
             </tr>
             <tr>
                 <td align="right">密&emsp;码:</td>
                 <td>
                     <input type="password" class="infobx phone" name="password" id="phone-password"/>
                 </td>
             </tr>
             <tr>
                 <td>确认密码:</td>
                 <td>
                     <input type="password" class="infobx phone" name="r-password" id="r-password"/>
                 </td>
             </tr>
             <tr>
                 <td colspan="2" style="height:25px;">
                     <div class="false" id="error_msg">
                     
                     </div>
                 </td>
             </tr>
             <tr>
                 <td align="center" colspan="2">
                     <input onclick="check()" type="checkbox" checked="checked" id="agr1" name="agree"/>我已认真阅读并同意接受《服务条款》
                 </td>
             </tr>
             <tr>
                 <td align="center" colspan="2">
                     <input type="submit" value="注册" class="submit" id="sub1"/>
                 </td>
             </tr>
        </table>
        </form>
        
        <form id="reg_email" autocomplete="off"  action="<?php echo U('/Admin/mailreg');?>" method="post">
        <table class="info_tab" id="maincntlefcenmidlcnt2" style="display:none;">
             <tr>
                 <td align="right">邮箱:</td>
                 <td>
                     <input type="text" class="infobx email" id="email" name="email"/>
                 </td>
             </tr>
             <tr>
                 <td align="right">密&emsp;码:</td>
                 <td>
                     <input type="password" class="infobx email" id="password2" name="password"/>
                 </td>
             </tr>
             <tr>
                 <td>确认密码:</td>
                 <td>
                     <input type="password" class="infobx email" id="r-password2" name="r-password"/>
                 </td>
             </tr>
             <tr>
                 <td colspan="2" style="height:25px;">
                     <div class="false" id="error_msg2">
                     
                     </div>
                 </td>
             </tr>
             <tr>
                 <td align="center" colspan="2">
                     <input onclick="check()" type="checkbox" checked="checked" id="agr2" name="agree"/>我已认真阅读并同意接受《服务条款》
                 </td>
             </tr>
             <tr>
                 <td align="center" colspan="2">
                     <input type="submit" value="注册" class="submit" id="sub2"/>
                 </td>
             </tr>
        </table>
        </form>
     </div>
     </div>
     <div class="cnt_rit">
        
        <img src="__PUBLIC__/index/images/ritpic.jpg"/>
        
     </div>
     
  </div>

<script>
var a1=document.getElementById("agr1");
var a2=document.getElementById("agr2");
var s1=document.getElementById("sub1");
var s2=document.getElementById("sub2");
function check()
{
  if(a1.checked==true)
  {
    s1.style.background="#EB3939";
    s1.style.border="1px solid #EB3939";
    s1.style.color="#FFF";
    s1.disabled="";
  }
  else
  {
	s1.style.background="#EDEDED";
    s1.style.border="1px solid #CCC";
    s1.style.color="#999";
    s1.disabled="disabled";
  } 
     
  if(a2.checked==true)
  {
   s2.style.background="#EB3939";
   s2.style.border="1px solid #EB3939";
   s2.style.color="#FFF";
   s2.disabled="";
  }
  else
  {
	s2.style.background="#EDEDED";
    s2.style.border="1px solid #CCC";
    s2.style.color="#999";
    s2.disabled="disabled";
  }   
}

function radioshow()
{
 if(phone_reg.checked==true)
 {
	 document.getElementById("maincntlefcenmidlcnt1").style.display="block";
	 document.getElementById("maincntlefcenmidlcnt2").style.display="none";
 }
  if(mail_reg.checked==true)
 {
	 document.getElementById("maincntlefcenmidlcnt1").style.display="none";
	 document.getElementById("maincntlefcenmidlcnt2").style.display="block";
 } 
}
</script>