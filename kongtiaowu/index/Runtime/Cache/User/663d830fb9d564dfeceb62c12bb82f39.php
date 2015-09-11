<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/logreg.css" rel="stylesheet" type="text/javascript"/>
<style>
.cnt_lef{float:right;}
.cnt_rit{float:left;border:none;border-right:1px dotted #CCC;}
</style>
 
 <div class="main_cnt">
   <div class="cnt_rit">
       <img src="__PUBLIC__/index/images/ritpic.jpg"/>
    </div>
    <div class="cnt_lef">
       <div class="cnt_bx" style="margin:110px auto;">
           <form autocomplete="off" action="<?php echo U('/Admin/checklogin');?>" method="post" id="login_form">
            <table class="info_tab">
            <tr>
                 <td align="right">用户名</td>
                 <td>
                    <input class="infobx" name="phoneOrEmail" type="text"/>
                 </td>
            </tr>
            <tr>
                 <td align="right">密&emsp;码</td>
                 <td>
                    <input class="infobx" name="password" type="password"/>
                 </td>
            </tr>
            <tr>
                 <td colspan="2" style="height:25px;">
                     <div class="false" id="error_msg">
                     </div>
                 </td>
             </tr>
             <tr>
                 <td></td>
                 <td>
                     <input type="checkbox" name="auto_login"/>保持一周登录
                     <a style="margin-left:10px;">忘记密码</a>
                 </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="登录" class="submit"/>没有账号
                    <a href="<?php echo U('/Admin/regedit');?>" style="margin-left:5px;">去注册</a>
                </td>
            </tr>
            </table>
            </form>
        </div>
    </div>
  </div>