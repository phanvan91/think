<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>找回密码</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/cloud-admin.css" >
	
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="/js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="/css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<!-- FONTS -->
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="index.html"><img src="/img/logo/logo.png" height="40" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<!--/LOGIN -->
			<!-- REGISTER -->
<section  class="font-400">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box">
								<h2 class="bigintro">找回密码</h2>
								<div class="divide-40"></div>
								<form role="form">
								  <div class="form-group">
									<label for="exampleInputName">帐号</label>
									<i class="fa fa-user"></i>
									<input type="text" class="form-control" id="exampleInputName" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputUsername">手机号</label>
									<i class="fa fa-phone"></i>
									<input type="text" class="form-control" id="exampleInputUsername" >
								  </div>
								   <div class="form-group">
                                   <br>
                                   <i class="fa fa-key"></i>
        <span style="width:70%;float:left;"><input name="mycode" type="text" class="form-control" id="mycode" title="请输入验证码" placeholder="请输入验证码" required ></span>  
        <span style="width:30%; float:left; "><p ><a   href="javascript:void(0);" onClick="sendsmspg(1);" style="height:30px"><input name="sendsmsa"  id="sendsmsa" type="button" class="btn  btn-success" value="获取短信验证码"></a></p></span>
</div>
								  
<div>

									<button type="submit" class="btn btn-success">提交</button>
								  </div>
								</form>
								<!-- SOCIAL REGISTER -->
								<div class="divide-20"></div>
								<!-- /SOCIAL REGISTER -->
								<div class="login-helpers">
									<a href="/Home/Login/login.html" style="color:#FFF">返回登陆</a> <br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/REGISTER -->
			<!-- FORGOT PASSWORD -->
			<section id="forgot_bg"></section>
			<!-- FORGOT PASSWORD -->
	</section>
	<!--/PAGE -->
<script src="/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="/bootstrap-dist/js/bootstrap.min.js"></script>
	<!-- UNIFORM -->
	<script type="text/javascript" src="/js/uniform/jquery.uniform.min.js"></script>
	<!-- BACKSTRETCH -->
	<script type="text/javascript" src="/js/backstretch/jquery.backstretch.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="/js/script.js"></script>
    <script type="text/javascript" src="/bitStyle/js/modernizr.js"></script>
<script type="text/javascript" src="/bitStyle/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bitStyle/js/jquery.cookie.js"></script>
<script>
		jQuery(document).ready(function() {		
			App.setPage("login_bg");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
    <script type="text/javascript">
$(document).ready(function($){
  $('.alert-danger').hide();
  $('button#login_btn').click(function(){
    $('button#login_btn').attr('disabled','disabled');
    var url = "/Home/Login/logincl.html";
    var account = $("#username").val();
    var password = $("#password").val();
    var mycode = $("#mycode").val();
  
    $.post(url,{account:account,password:password,mycode:mycode},function(data){
      if(data.sf){
        document.location.href='/';
      }else{
    console.log(data.nr);
    if(data.nr){
        $('.alert-danger').html(data.nr).show();
    }else{
        $('.alert-danger').html('登錄失敗').show();
    }
    $('input#login_btn').removeAttr("disabled");
      }
    },'json');
  });
  
    $('#username').focus();
    
  $.removeCookie("alert", { path: '/' });
});
</script>
	<script>
    function checkform_profile(){
    return true;
    }
  function checkform_profile1(){
    var alipay = $("#alipay").val();
    if(/.*[\u4e00-\u9fa5]+.*$/.test(alipay))
    {
      alert("支付宝帐号不能含有汉字！");
      return false;
    } 
    
    var wechat = $("#wechat").val();
    if(/.*[\u4e00-\u9fa5]+.*$/.test(wechat))
    {
      alert("微信号不能含有汉字！");
      return false;
    }
    
    var account = $("#bank_number").val();
    if(isNaN(account))  
    {
      alert("银行账户请输入数字！");  
      return false;  
    } 
    
    
    return true;
    }
  function checkform_profile2(){
    var account = $("#xmm").val();
    var accountqr = $("#xmmqr").val();
    var reg = /[a-zA-Z]+(?=[0-9]+)|[0-9]+(?=[a-zA-Z]+)/g; //要求有英文和数字
    if( account.length<6 ){
      alert("密码至少要6位！");
      return false;
    }
    if( account!== accountqr )
    {
      alert("密码输入不一致！");
      return false;
    }
    if( !reg.test(account) )
    {
      alert("密码要求包含字母和数字！");
      return false;
    }
    return true;
    }
  function checkform_profile3(){
    var account = $("#xejmm").val();
    var accountqr = $("#xejmmqr").val();
    var reg = /[a-zA-Z]+(?=[0-9]+)|[0-9]+(?=[a-zA-Z]+)/g; //要求有英文和数字
    if( account.length<6 ){
      alert("密码至少要6位！");
      return false;
    }
    if( account!== accountqr )
    {
      alert("密码输入不一致！");
      return false;
    }
    if( !reg.test(account) )
    {
      alert("密码要求包含字母和数字！");
      return false;
    }
    return true;
    }
  
  var intDiff =0;
  var intDiff1 =0;
    function sendsmsp(gi){
    if(intDiff>0){
      alert('验证短信已发送请稍后再试!');
      return ;
    }
      if(intDiff<=0){
      var $mobile = $('#phone').val();
    var $action = '/Home/Myuser/xmb';
    $.post($action,{dfzh:$mobile,gi:gi},function(data){
    if(data.sf == 0){
      alert(data.nr);
      document.getElementById('alert_phone').innerHTML = data.nr;
    }else{
      document.getElementById('alert_phone').innerHTML = data.nr;
      intDiff = parseInt(60);//倒计时总秒数量
      $("#sendsms").attr("disabled", true);
        var timer = window.setInterval(function(){        
        $("#sendsms").val(''+intDiff+'秒后重新获取');
        intDiff--;
        if(intDiff<0){
          clearInterval(timer);
          $("#sendsms").removeAttr("disabled");
          $("#sendsms").val('获取短信验证码');
        }
        }, 1000);
        var $action = '/Home/Info/getacticode';
      $.post($action,{dfzh:$mobile,gi:gi},function(data){
        if(data.sf == 0){
          alert(data.nr);
        }
      });
    }
    
    });
    
    
    
      
    
    
     }
    }
  
  
  
  function sendsmspg(gi){
    if(intDiff1>0){
      alert('验证短信已发送请稍后再试!');
      return ;
    }
      if(intDiff1<=0){
      intDiff1 = parseInt(60);//倒计时总秒数量
      $("#sendsmsa").attr("disabled", true);
        var timer = window.setInterval(function(){        
        $("#sendsmsa").val(''+intDiff1+'秒后重新获取');
        intDiff1--;
        if(intDiff1<0){
          clearInterval(timer);
          $("#sendsmsa").removeAttr("disabled");
          $("#sendsmsa").val('获取短信验证码');
        }
        }, 1000);
      var $mobile = '';
        var $action = '/Home/Info/getacticodea';
      $.post($action,{dfzh:$mobile,gi:gi},function(data){
        if(data.sf == 0){
          alert(data.nr);
        }
      });
     }
     
  }
$(function(){
   
   
   

    $('#sendsms').click(function() {
    sendsmsp(0);
    });
  $('#sendsmsa').click(function() {
    sendsmspg(0);
    });
  
  
  
  $('#ymm').val('');
  $('#xmm').val('');
  $('#xmmqr').val('');
  $('#yejmm').val('');
  $('#xejmm').val('');
  $('#xejmmqr').val('');
  $('#phonetex').val('');
  $('#phonetex1').val('');
  $('#trade_pwd22').val('');
  $('#trade_pwd21').val('');
  
  
  $('#phone').val('未填');
  $('#phone1').val('未填');
  $('#lid').val('未填');
  $('#usernameq').val('未填');
  
  $('#alipay').val('未填');
  $('#wechat').val('');
  $('#bank_number').val('未填');
  
  
  
  
  
  
  
  
});


</script>

</body>
</html>