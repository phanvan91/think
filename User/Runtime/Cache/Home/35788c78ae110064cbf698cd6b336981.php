<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>会员中心-联系我们</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="/css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="/css/responsive.css" >
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="/js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="/css/animate/css/animate.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- TODO -->
	<link rel="stylesheet" type="text/css" href="/js/jquery-todo/css/styles.css" />
	<!-- FULL CALENDAR -->
	<link rel="stylesheet" type="text/css" href="/js/fullcalendar/fullcalendar.min.css" />
	<!-- GRITTER -->
	<link rel="stylesheet" type="text/css" href="/js/gritter/css/jquery.gritter.css" />
	<!-- FONTS -->
	<!-- FONTS -->
 <style>
li {list-style-type:none;}
</style>
</head>
<body>
	<!-- HEADER -->
	<script src="/js/jquery/jquery-2.0.3.min.js"></script>
	<header class="navbar clearfix" id="header">
		<div class="container">
				<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="/">
						<img src="/img/logo/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
					</a>
					<!-- /COMPANY LOGO -->
					<!-- TEAM STATUS FOR MOBILE -->
					<div class="visible-xs">
						<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
							<i class="fa fa-users"></i>
						</a>
					</div>
					<!-- /TEAM STATUS FOR MOBILE -->
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div>
				<!-- NAVBAR LEFT -->
		  <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
					<li class="dropdown">
			    <a href="#" class="team-status-toggle dropdown-toggle tip-bottom" data-toggle="tooltip" title="我的钱包">
							<i class="fa fa-users"></i>
							<span class="name">我的钱包</span>
							<i class="fa fa-angle-down"></i>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-cog"></i>
							<span class="name">风格</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu skins">
							<li class="dropdown-title">
								<span><i class="fa fa-leaf"></i> Theme Skins</span>
							</li>
							<li><a href="#" data-skin="default">默认</a></li>
							<li><a href="#" data-skin="night">蓝黑</a></li>
							<li><a href="#" data-skin="earth">棕色</a></li>
							<li><a href="#" data-skin="utopia">黄色</a></li>
							<li><a href="#" data-skin="nature">绿色</a></li>
							<li><a href="#" data-skin="graphite">咖色</a></li>
					  </ul>
					</li>
					
					 <li class="dropdown">
<div style="height:50px; line-height:50px; color:#FFF ; float:left; font-size:16px">公告：</div>

<div style="float:left; width:300px"><marquee scrollamount="3"  style="font-size: 16px;height:50px; line-height:50px;color="#FF9900" width="300px">
<a href="<?php echo U('Kefu/gonggao',array('id'=>$gonggao['if_id']));?>" color="#FF9900">
<font color="#FF9900">
<?php echo ($gonggao["if_theme"]); ?></font></a></marquee>
</div>
					</li>
				</ul>
				<!-- /NAVBAR LEFT -->
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<li>
						<a href="<?php echo U('Index/news');?>" class="dropdown-toggle" title="新闻">
							<i class="fa fa-bell"></i>
												
						</a>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" >
						<a href="<?php echo U('Myuser/lxwm');?>" class="dropdown-toggle" title="邮件">
						<i class="fa fa-envelope"></i>
						
						</a>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img alt="" src="/img/avatars/avatar3.jpg" />
							<span class="username"><?php echo ($userData['ue_theme']); ?></span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-bars"></i> 编码：<?php echo ($userData['ue_id']); ?></a></li>
							<li><a href="#"><i class="fa fa-user"></i> 帐号：<?php echo ($userData['ue_account']); ?></a></li>
							<li><a href="#"><i class="fa fa-phone-square"></i> 手机号：<?php echo ($userData['ue_phone']); ?></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i> 钱包：<?php echo ($userData['ue_money']); ?></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i> 诚信积分：<?php echo ($userData['chengxin']); ?></a></li>
							<li><a href="<?php echo U('Reg/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
		  </ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- TEAM STATUS -->
		<div class="container team-status" id="team-status">
		  <div id="scrollbar">
			<div class="handle">
			</div>
		  </div>
		  <div id="teamslider">
			  <ul class="team-list">
				<li class="current">
				  <a href="<?php echo U('Info/rwhistory');?>" >
				  <span class="image">
					  <img src="/bitStyle/images/e-wallet.png" alt="" />
				  </span>互助钱包
				  <div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 35%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 20%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 10%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"> <?php echo ($userData["ue_money"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/cwhistory');?>">
				  <span class="image">
					  <img src="/bitStyle/images/r-wallet.png" alt="" />
				  </span>
				  <span class="title">
					经理奖钱包
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 15%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 40%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 20%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
                        <span class="badge badge-green"><?php echo ($userData["jl_he"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/cwhistory');?>">
				  <span class="image">
					  <img src="/bitStyle/images/n-wallet.png" alt="" />
				  </span>
				  <span class="title">
					推荐奖钱包
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 65%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 10%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 15%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"><?php echo ($userData["tj_he"]); ?></span> RMB
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				  <a href="<?php echo U('Info/pin');?>">
				  <span class="image">
					  <img src="/bitStyle/images/i-wallet.png" alt="" />
				  </span>
				  <span class="title">
					激活码数量
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 5%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 48%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 27%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
					<span class="status">
						<div class="field">
							<span class="badge badge-green"><?php if($pin_zs): echo ($pin_zs); else: ?>0<?php endif; ?></span> 个
							<span class="pull-right fa fa-check"></span>
						</div>
				    </span>
				  </a>
				</li>
				<li>
				 <a href="<?php echo U('Info/pai');?>">
				  <span class="image">
					  <img src="/bitStyle/images/i-wallet.png" alt="" />
				  </span>
				  <span class="title">
					拍单币数量
				  </span>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" style="width: 21%">
						<span class="sr-only">35% Complete (success)</span>
					  </div>
					  <div class="progress-bar progress-bar-warning" style="width: 20%">
						<span class="sr-only">20% Complete (warning)</span>
					  </div>
					  <div class="progress-bar progress-bar-danger" style="width: 40%">
						<span class="sr-only">10% Complete (danger)</span>
					  </div>
					</div>
				  <span class="status">
						<div class="field">
							<span class="badge badge-green"><?php if($userData["paidan"] != 0): echo ($userData["paidan"]); else: ?>0<?php endif; ?> 个
							<span class="pull-right fa fa-check"></span>
					  </div>
</span>
				  </a>
				</li>
				
			  </ul>
			</div>
		  </div>
		<!-- /TEAM STATUS -->
	</header>
    	<section id="page">
    				<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-20"></div>						
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
							<li class="active">
						    <a href="/">
								<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">首页</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-user fa-fw"></i> <span class="menu-text">用户中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a class="" href="<?php echo U('Info/index');?>"><span class="sub-menu-text">个人资料</span></a></li>
                                    <li><a class="" href="<?php echo U('Info/pin');?>"><span class="sub-menu-text">激活码</span></a></li>
									<li><a class="" href="<?php echo U('Info/pai');?>"><span class="sub-menu-text">排单币</span></a></li>
									<li><a class="" href="<?php echo U('Myuser/index');?>"><span class="sub-menu-text">我的团队</span></a></li>
									<li><a class="" href="<?php echo U('Myuser/xzzh');?>"><span class="sub-menu-text">团队记录</span></a></li>
									<li class="has-sub-sub"> </li>
							  </ul>
						  </li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-briefcase"></i> <span class="menu-text">财务中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Info/rwhistory');?>">我的互助钱包</a></li>
									<li><a href="<?php echo U('Index/pdList');?>">提供帮助记录</a></li>
									<li><a href="<?php echo U('Index/gdList');?>">接受帮助记录</a></li>
									<li><a href="<?php echo U('Info/cwhistory');?>">奖金钱包记录</a></li>
									<li><a href="<?php echo U('Info/nwhistory');?>">总账记录</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-star"></i> <span class="menu-text">抽奖中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Award/index');?>">抽奖</a></li>
								</ul>
							</li>
							<li><a href="<?php echo U('Index/news');?>" class="glyphicons home" ><i class="fa fa-newspaper-o"></i> 新闻公告<?php if($news_count): ?><span class="badge"><?php echo ($news_count); ?></span><?php endif; ?></a></li>
							
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-columns fa-fw"></i> <span class="menu-text">抢单中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Order/orderList');?>">抢单列表</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-shopping-cart"></i> <span class="menu-text">商城中心</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a href="<?php echo U('Good/lists');?>">商城产品</a></li>
									<li><a href="<?php echo U('Good/orderList');?>">订单管理</a></li>
								</ul>
							</li>
							<li> <a href="<?php echo U('Index/reg');?>" class="glyphicons home" ><i class="fa fa-male"></i>注册新会员</a></li>
							
							<?php if($renchou == 1): ?><li> <a href="<?php echo U('Kefu/fromer');?>" class="title" ><i class="fa fa-universal-access"></i>认筹通道</a></li><?php endif; ?>
							<li class="has-sub">
								<a  href="<?php echo U('Myuser/task');?>" class="title"><i class="fa fa-universal-access"></i>获得排单币</a>
							</li>
                            <li class="has-sub">
								<a href="<?php echo U('Reg/logout');?>" class="title"><i class="fa fa-sign-out"></i>退出</a>
							</li>
</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
				
<style type="text/css">

/*浮动客服*/
#floatDivBoxs{width:170px;background:#fff;position:fixed;top:180px;right:0;z-index:999;}
#floatDivBoxs .floatDtt{width:100%;height:45px;line-height:45px; background:#f08326;color:#fff;font-size:18px;text-indent:22px;position:relative;}
#floatDivBoxs .floatDqq{padding:0 14px;}
#floatDivBoxs .floatDqq li{height:45px;line-height:45px;font-size:15px;border-bottom:1px solid #e3e3e3; padding:0 0 0 50px;}
#floatDivBoxs .floatDtxt{font-size:18px;color:#333;padding:12px 14px;}
#floatDivBoxs .floatDtel{padding:0 0 15px 10px;}
#floatDivBoxs .floatDtel img{display:block;}
#floatDivBoxs .floatDbg{width:100%;height:20px;background:url(../images/online_botbg.jpg) no-repeat;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}
.floatShadow{ background:#fff;box-shadow:-2px 0 3px rgba(0,0,0,0.25);}
#rightArrow{width:50px;height:45px;background:url(/Public/online_arrow.jpg) no-repeat;position:fixed;top:180px;right:170px;z-index:999999;}
#rightArrow a{display:block;height:45px;}



</style>
<div id="rightArrow"><a href="javascript:;" title="在线客户"></a></div>
<div id="floatDivBoxs">
	<div class="floatDtt">在线客服</div>
    <div class="floatShadow">
        <ul class="floatDqq">
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服1号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服2号</a></li>
            <li style="padding-left:0px;list-style:none;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=319518833&site=qq&menu=yes"><img src="/Public/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服3号</a></li>
        </ul>
        <div class="floatDtxt">在线时间</div>
        <div class="floatDtel">早上9点到晚上10点</div>
        
    </div>
    
</div>

<script type="text/javascript">
var flag=1;
$('#rightArrow').click(function(){
    
	if(flag==1){
		$("#floatDivBoxs").animate({right: '-175px'},300);
		$(this).animate({right: '-5px'},300);
		$(this).css('background-position','-50px 0');
		flag=0;
	}else{
		$("#floatDivBoxs").animate({right: '0'},300);
		$(this).animate({right: '170px'},300);
		$(this).css('background-position','0px 0');
		flag=1;
	}
});
</script>

		<div id="main-content">
<div class="container">
				<div class="row">
				  <div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
					<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="/">首页</a>
										- 联系我们</li>
									</ul>
									<!-- /BREADCRUMBS -->
								  <div class="description">提示：投资有风险，请使用非关键资金参与！！！</div>
							  </div>
							</div>
					</div>
						<!-- /PAGE HEADER -->
    <div class="col-md-12">
	<div style=" background-color:#003d74; padding:10px; padding-bottom:20px; margin-bottom:20px; color:#fff;border-radius:5px;">
	<h4 class="font-light m-b-xs">联系我们</h4>
	工作时间：客服工作时间-早上9.００-晚上22：０0.请在工作时间内联系客服</div>
    </div>
    
    <div class="col-md-5">
										<!-- BASIC -->
				   <div class="box border primary ">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i><span class="heading">提交问题</span></h4>
												<div class="tools hidden-xs">
													
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
					 </div>
                                           <div class="box-body big">
                                             <form class="form-horizontal margin-none" action="/Home/Myuser/lxwmcl.html" name="xgmm" id="xgmm" method="post">
    <div class="widget-body">
        <div class="form-group">
      <label class="col-sm-3 control-label">问题</label>

      <div class="col-sm-9">

          <select class="form-control m-b" name="otlylx" id="otlylx">
		          <?php if($flag == 1): ?><option value="认筹通道" selected="selected">认筹通道</option><?php else: ?><option value="认筹通道">认筹通道</option><?php endif; ?>
                  <option value="利息问题">利息问题</option><option value="订单错误">订单错误</option><option value="会员资料修正">会员资料修正</option><option value="封号与解封">封号与解封</option><option value="不诚信玩家举报">不诚信玩家举报</option><option value="创业(公益)众筹">创业(公益)众筹</option><option value="平台建议">平台建议</option><option value="发展合作">发展合作</option><option value="其他问题">其他问题</option>           </select>

      </div>
        </div>

        <div class="form-group">
      <label class="col-sm-3 control-label">标题</label>

      <div class="col-sm-9">
          <input type="text" required="" name="lybt" id="lybt" class="form-control">

      </div>
        </div>

        <div class="form-group">
      <label class="col-sm-3 control-label">内容</label>
      <div class="col-sm-9">
          <textarea rows="4" required="" name="lynr" id="lynr" class="form-control" style="width: 100%;"></textarea>

      </div>
        </div>
        <div class="text-center" style="position: relative;">
        <ul id="ul_pics" class="ul_pics clearfix"></ul>
        <a class="btn btn-info btn-sm" id="btn" style="position: relative; z-index: 1;">上传图片</a> <input name="" class="btn btn-primary btn-sm" type="submit" id="btn" value="提交留言">
        <script type="text/javascript" src="/js/xz/jquery.js"></script>
        <script type="text/javascript" src="/plupload/plupload.full.min.js"></script>
        <script type="text/javascript" src="/js/xz/sucaihuo.js"></script>
        <div id="html5_1ah1tcur0qs51h2p1bo41iea1nnq3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 10px; left: 141px; width: 70px; height: 30px; overflow: hidden; z-index: 0;"><input id="html5_1ah1tcur0qs51h2p1bo41iea1nnq3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/png,image/gif,image/bmp,image/tiff"></div></div>
    </div>
      </form>
					 </div>
				   </div>
                   </div>
    
    <div class="col-md-7">
										<!-- BASIC -->
				   <div class="box border primary ">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>问题记录</h4>
												<div class="tools hidden-xs">
													
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
                                           <div class="box-body big">
											<table cellpadding="1" id="example" cellspacing="1" class="table table-bordered table-striped cus_datatable dataTable no-footer" role="grid" aria-describedby="example_info">
				<thead>
				<tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="descending" aria-label="编号: activate to sort column ascending" style="width: 61px;">留言时间</th>
				<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="时间: activate to sort column ascending" style="width: 61px;">留言标题</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="问题类别: activate to sort column ascending" style="width: 104px;">问题类别</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="发件人: activate to sort column ascending" style="width: 83px;">留言内容</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="状态: activate to sort column ascending" style="width: 62px;">回复时间</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="操作: activate to sort column ascending" style="width: 62px;">回复内容</th></tr>
				</thead>
				<tbody>
				    <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr role="row" class="odd">
					<td class="sorting_1"><?php echo ($v["ma_time"]); ?></td>
					<td><?php echo ($v["ma_theme"]); ?></td>
					<td><?php echo ($v["ma_otherinfo"]); ?></td>
					<td><?php echo ($v["ma_note"]); ?></td>
					<td><?php echo ($v["ma_replytime"]); ?></td>
					<td><?php echo ($v["ma_reply"]); ?></td>
				    </tr><?php endforeach; endif; ?>
				</tbody>
                            </table>
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><?php echo ($page); ?></div>
                        <br>
						</div>
				   </div>
                   </div>
</div>

</div>

<!--/PAGE -->

<script src="/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
<script src="/js/jquery-ui-1.10.3.custom//js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
<script src="/bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
<script src="/js/bootstrap-daterangepicker/moment.min.js"></script>
	
<script src="/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
<script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
	<!-- SLIMSCROLL -->
<script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	<!-- BLOCK UI -->
<script type="text/javascript" src="/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	<!-- SPARKLINES -->
<script type="text/javascript" src="/js/sparklines/jquery.sparkline.min.js"></script>
	<!-- EASY PIE CHART -->
<script src="/js/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="/js/easypiechart/jquery.easypiechart.min.js"></script>
	<!-- FLOT CHARTS -->
<script src="/js/flot/jquery.flot.min.js"></script>
<script src="/js/flot/jquery.flot.time.min.js"></script>

<script src="/js/flot/jquery.flot.resize.min.js"></script>
<script src="/js/flot/jquery.flot.pie.min.js"></script>
<script src="/js/flot/jquery.flot.stack.min.js"></script>
<script src="/js/flot/jquery.flot.crosshair.min.js"></script>
	<!-- TODO -->
<script type="text/javascript" src="/js/jquery-todo/js/paddystodolist.js"></script>
	<!-- TIMEAGO -->
<script type="text/javascript" src="/js/timeago/jquery.timeago.min.js"></script>
	<!-- FULL CALENDAR -->
<script type="text/javascript" src="/js/fullcalendar/fullcalendar.min.js"></script>
	<!-- COOKIE -->
<script type="text/javascript" src="/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- GRITTER -->
<script type="text/javascript" src="/js/gritter/js/jquery.gritter.min.js"></script>
<script src="/js/script.js"></script>
<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	
	<!-- /JAVASCRIPTS -->
</body>
</html>