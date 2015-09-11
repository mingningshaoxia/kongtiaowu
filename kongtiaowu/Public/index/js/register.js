$(document).ready(function() {
	
 
     $("#login_form").submit(function(){
       var url=$(this).attr("action");
      $.ajax({
        'url':url,
        'type':'post',
        'dataType':'json',
        'data':$(this).serialize(),
        'success':function(msg){
            if(msg.status==1)  
            {
      location.href=msg.data;
            }
            else
            {
			      $("#error_msg").show();
            $("#error_msg").html(msg.data);
            }
			
         }
      })
       return false;
     })
/****************手机注册验证*********************/

      var phone=$("#maincntlefcenmidlcnt1 .phone");

      var Ele=[];
      
      phone.each(function(){
        Ele.push(this);
        this.status=false;
      }); 


       $("#sub1").on("click",function(){
        
            var code2=$("#code")[0];

                  $.ajax({
                    'url':'/Admin/isPhone',
                    'type':'get',
                    'dataType':'json',
                    'data':'phone='+$("#phone").val(),
                    'success':function(msg){
                        if(msg.status==1)
                        {  
                            showSuccess.call(self); 
                            if(!/^[1][3-8]\d{9}$/.test($("#phone").val()))
                            { var phone1=$("#phone")[0];
                              showError.call(phone1,'手机号码不正确');
                              return false;
                            }            
                           if(!/^[0-9a-zA-Z_. ~!]{6,16}$/.test($("#phone-password").val()))
                            { var password3=$("#phone-password")[0];
                              showError.call(password3,'密码填写有误');
                              return false;
                            }

                            if($("#phone-password").val()!=$("#r-password").val())
                            { var password4=$("#password")[0];
                              showError.call(password4,'两次密码不一致');
                               return false;
                            }
            
              
                            $.ajax({
                              'url':'/Admin/verifyCode',
                              'type':'get',
                              'dataType':'json',
                              'data':{
                                'phone':$("#phone").val(),
                                'code':$("#code").val()
                              },
                              'success':function(msg){
                                  if(msg.status!=1)
                                  { 
                                    showError.call(code2,'验证码不正确');    
                                  }
                                  else
                                  {   showSuccess.call(code2);
                                       for(var i=0;i<Ele.length;i++)
                                       { 
                                         if(Ele[i].status==false)
                                         { 
                                          return false;
                                         }
                                         
                                       }
                                       $("#reg_phone").submit(); 
                                  }
                                 
                               }

                          })
                        }
                        else 
                        { var phone1=$("#phone")[0];
                          showError.call(phone1,'该手机号已被注册');
                        }
                    }

         })
 
              

   
      })

       for(var i=0;i<Ele.length;i++)
       {   
           Ele[i].onblur=function(){
             var name=$(this).attr("name");
             var self=this;
              if(name=='phone')
              {
                if(!/^[1][3-8]\d{9}$/.test(this.value))
                {
                  showError.call(this,'手机号码不正确');
                  return;
                }
                  $.ajax({
                    'url':'/Admin/isPhone',
                    'type':'get',
                    'dataType':'json',
                    'data':'phone='+this.value,
                    'success':function(msg){
                        if(msg.status==1)
                        {
                          showSuccess.call(self)   
                        }
                        else 
                        {
                          showError.call(self,'该手机号已被注册');
                        }
                    }

                  })
              }

              if(name=='password')
              {
                if(!/^[0-9a-zA-Z_. ~!]{6,16}$/.test(this.value))
                {
                   showError.call(this,'密码填写有误');
                }
                else
                {
                  showSuccess.call(this)
                }
              }
              if(name=='r-password')
              {
                 if($("#phone-password").val()!=this.value)
                 {
                  showError.call(this,'两次密码不一致');
                 }
                 else
                 {
                  showSuccess.call(this)
                 }
              }

           }
       }


/****************邮箱注册验证*********************/
      var email=$("#maincntlefcenmidlcnt2 .email");
      var Ele2=[];
      email.each(function(){
        Ele2.push(this);
        this.status=false;
      });   
       for(var i=0;i<Ele2.length;i++)
       {
           Ele2[i].onblur=function(){
             var name=$(this).attr("name");
             var self=this;
              if(name=='email')
              {
                  if(!/^\w+([-.]\w+)*@(126\.com|139\.com|163\.com|188\.com|qq\.com|outlook\.com|yahoo\.com|yahoo\.com.cn|sohu\.com|sina\.com|gmail\.com|hotmail\.com|21cn\.cn)$/.test(this.value))
                  {
                    showError2.call(this,'请填写有效的邮箱');
                    return false;
                  }
                  $.ajax({
                    'url':'/Admin/isEmail',
                    'type':'get',
                    'dataType':'json',
                    'data':'email='+this.value,
                    'success':function(msg){
                        if(msg.status==1)
                        {  
                          showSuccess2.call(self);  
                        }
                        else 
                        {
                          showError2.call(self,'该邮箱已被注册');
                        }
                    }

                  })                  
               }

              if(name=='password')
              {
                if(!/^[0-9a-zA-Z_. ~!]{6,16}$/.test(this.value))
                {
                   showError2.call(this,'密码填写有误');
                }
                else
                {
                  showSuccess2.call(this)
                }
              }
              if(name=='r-password')
              {
                 if($("#password2").val()!=this.value)
                 {
                  showError2.call(this,'两次密码不一致');
                 }
                 else
                 {
                  showSuccess2.call(this)
                 }
              }

           }

       }

       $("#sub2").on("click",function(){
       //alert(2)
        
        var email1=$("#email")[0];
              $.ajax({
                'url':'/Admin/isEmail',
                'type':'get',
                'dataType':'json',
                'data':'email='+$("#email").val(),
                'success':function(msg){
                    if(msg.status==1)
                    { 
                        
                        if(!/^\w+([-.]\w+)*@(126\.com|139\.com|163\.com|188\.com|qq\.com|yahoo\.com|yahoo\.com.cn|sohu\.com|sina\.com|gmail\.com|hotmail\.com|21cn\.cn)$/.test($("#email").val()))
                        { 
                          showError2.call(email1,'邮箱格式不正确');
                          return false;
                        }
                        if(!/^[0-9a-zA-Z_. ~!]{6,16}$/.test($("#password2").val()))
                        {  var password2=$("#password2")[0];
                           showError2.call(password2,'密码填写有误');
                          return false;
                        }

                        if($("#password2").val()!=$("#r-password2").val())
                        { var password3=$("#r-password2")[0];
                          showError2.call(password3,'两次密码不一致');
                           return false;
                        }
                         for(var i=0;i<Ele2.length;i++)
                         {  if(Ele2[i].status==false)
                           {
                            return false;
                           }
                         }

                       $("#reg_email").submit();
                    }
                    else 
                    { 
                      showError2.call(email1,'该邮箱已被注册');
                    }
                }

              })
              
         
       })
/****************ajax短信验证码*********************/
    $("#getCode").click(function(){
    	var phone=$("#phone").val(); 
       if(phone=='') { alert("请输入手机号"); return false; }
	   if(!/^[1][3-8]\d{9}$/.test(phone)) { alert("请填写11位手机号码"); return false; }
      $.ajax({
        'url':'/Admin/isPhone',
        'type':'get',
        'dataType':'json',
        'data':'phone='+phone,
        'success':function(msg){
            if(msg.status==1)
           {  

                  $.ajax({
                     'url':"/Admin/ajaxCode",
                     'data':'phone='+phone,
                     'success':function(msg){
                          if(msg.status==1)
                            {
                              $('#getCode').attr('disabled',"true");
                              hidden=180;
                                  
                                  timer=setInterval("countDown()",1000);
                                  alert('验证码将发送到您的手机')
                             }
                             if(msg.status==0)
                             {
                               $('#getCode').removeAttr("disabled")
                               alert('请稍后再试');
                             }


                         }
                     })
            }
            else 
            {
              alert('该手机号已被使用');
            }
        }

      })






    })
});





        function countDown()
	    {   hidden--;
	        $("#getCode").val(hidden+'秒后重新发送');
	    	if(hidden<=0)
		      {  //hidden=0;
		      	$('#getCode').val("获取验证码");
				$('#getCode').removeAttr("disabled");
				  clearInterval(timer);
			   }
	    }


    function showSuccess()
    { $("#error_msg").hide();
      $("#error_msg").html('');
        this.status=true;
    }

    function showError(msg)
    { $("#error_msg").show();
      $("#error_msg").html(msg);
        this.status=false;
    }

    function showSuccess2()
    {
	  $("#error_msg2").hide();
      $("#error_msg2").html('');
        this.status=true;
    }

    function showError2(msg)
    { 
	  $("#error_msg2").show();
      $("#error_msg2").html(msg);
        this.status=false;
    }


