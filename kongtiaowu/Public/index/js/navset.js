$("document").ready(function(){ 
  $(".nav a").click(function(){
    $(".nav a").removeClass("active");//首先移除全部的active
    $(this).addClass("active");//选中的添加acrive
 });
 });