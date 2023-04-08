<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>会员登录</title>
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
	
</head>
<body class="login" style="background-image:url(/Public/02.jpg);">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
	  <header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="http://%31%65%68%2E%6E%65%74" target="_blank"><img src="/img/logo/logo.png" height="40" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
	  </header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login_bg" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box">
								<h2 class="bigintro">會員登陸</h2>
								<div class="divide-40"></div>
<form name="login_form" action="" method="post">
								  <div class="form-group">
									<label for="exampleInputEmail1">用戶名</label>
									<i class="fa fa-envelope"></i>
									<input type="text" class="form-control" name="account" autofocus id="username" value="" placeholder="用戶名">
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密碼</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control"  name="password"  id="password" placeholder="密碼" value="">
								  </div>
                                   <div class="form-group">
                                   <br>
                                   <i class="fa fa-key"></i>
        <span style="width:70%;float:left;"><input name="mycode" type="text" class="form-control" id="mycode" title="請輸入驗證碼" placeholder="請輸入驗證碼" required ></span>  
        <span style="width:30%;" ><img src="/Home/login/verify.html" name="myHeader" height="35" id="myHeader" onClick="this.src='/Home/login/verify?'+Math.random();" /></span>
</div>
								  <div>
									
									<button  class="btn btn-danger" id="login_btn" type="button" name="submit">登錄</button>
								  </div>
								</form>
								<!-- SOCIAL LOGIN -->
							  <div class="divide-20"></div>
								<div class="social-login center">
									<a href="/Home/Login/login.html" class="btn btn-primary btn-lg">
										中文
									</a>
									<a href="/Home/Login/loginft.html" class="btn btn-info btn-lg">
										繁体
									</a>
									<a href="/Home/Login/loginen.html" class="btn btn-danger btn-lg">
										EN
									</a>
									
				        </div>
								<!-- /SOCIAL LOGIN -->
								<div class="login-helpers">
								<a href="/Home/Reg/forgot.html">找回密碼</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
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
</body>
</html>