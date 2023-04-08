<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>后台登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="/js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/cloud-admin.css" >
	
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="/js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="/css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<!-- <!-- FONTS --> -->
    <script language="JavaScript" src="/sncss/js/jquery.js"></script>
<script src="/sncss/js/cloud.js" type="text/javascript"></script>
    <script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
							  <h2 class="bigintro">管理员登录</h2>
								<div class="divide-40"></div>
  <form name="logFrm" id="logFrm" action="/admin.php/Home/Login/logincl" method="post">	
   <input name="ip" type="text" id="ip" style="display:none;">
							<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>  
<script>

document.getElementById('ip').value= returnCitySN["cip"];

</script>							  <div class="form-group">
									<label for="exampleInputEmail1">用户名</label>
									<i class="fa fa-envelope"></i>
									<input  class="form-control" name="account" type="text"  id="account" value="admin" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input type="password" class="form-control" name="password" id="password" value="admin"  >
								  </div>
              <div class="form-group">
                                   <br>
                                   <i class="fa fa-key"></i>
        <span style="width:70%;float:left;"><input name="verCode" type="text" class="form-control" id="verCode" onclick="JavaScript:this.value=''" /></span>  
        <span style="width:30%;" ><img src="/admin.php/Home/login/verify" name="myHeader" height="35" id="myHeader" onClick="this.src='/admin.php/Home/login/verify?'+Math.random();" /></span>
</div>
						  <div>
						  <div class="form-actions">
									
					  <button type="submit" class="btn btn-danger">登录</button>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->

	<!-- /JAVASCRIPTS -->
</body>
</html>