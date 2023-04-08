<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>后台管理</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="/cssadmin/css/master.css">
  <link rel="stylesheet" href="/cssadmin/css/tables.css">
  <link href="/sncss/css/style.css" rel="stylesheet" type="text/css" />
  <!---jQuery Files-->
  <script src="/cssadmin/js/jquery-1.7.1.min.js"></script>
  <script src="/cssadmin/js/jquery-ui-1.8.17.min.js"></script>
  <script src="/cssadmin/js/styler.js"></script>
  <script src="/cssadmin/js/jquery.tipTip.js"></script>
  <script src="/cssadmin/js/colorpicker.js"></script>
  <script src="/cssadmin/js/sticky.full.js"></script>
  <script src="/cssadmin/js/global.js"></script>
  <script src="/cssadmin/js/flot/jquery.flot.min.js"></script>
  <script src="/cssadmin/js/flot/jquery.flot.resize.min.js"></script>
  <script src="/cssadmin/js/jquery.dataTables.min.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
  <script language="javascript" type="text/javascript" src="/cssadmin/js/flot/excanvas.min.js"></script>
  <![endif]-->
  
  <script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
</head>
<body>

  <!--- HEADER -->

	<div class="header">
   <a href="http://%31%65%68%2E%6E%65%74" target="_blank"><img src="/cssadmin/img/logo.png" alt="Logo" /></a> 
   <div class="styler">
     <ul class="styler-show">
       <li><div id="colorSelector-top-bar"></div></li>
       <li><div id="colorSelector-box-head"></div></li>
     </ul>
   </div>
  </div>

  <div class="top-bar">
      <ul id="nav">
        <li id="user-panel">
          <img src="/cssadmin/img/nav/usr-avatar.jpg" id="usr-avatar" alt="" />
          <div id="usr-info">
            <p id="usr-name">欢迎回来管理员</p>
            <p id="usr-notif"><?php echo (session('adminuser')); ?></p>
            <p><a href="/admin.php/Home/Index/adminlist">管理员管理</a><a href="/admin.php/Home/Login/logout">退出</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
         <li class="nav-item">
           <a href="/admin.php/Home/Index"><img src="/cssadmin/img/nav/home.png" alt="" /><p>首页</p></a>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/dash.png" alt="" /><p>会员管理</p></a>
            <ul class="sub-nav">
            <li><a href="/admin.php/Home/Index/userlist">所有会员</a></li>
            <li><a href="/admin.php/Home/Index/jbzs">金币赠送</a></li>
            <li><a href="/admin.php/Home/Index/team">会员关系网</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/anlt.png" alt="" /><p>奖金管理</p></a>
                       <ul class="sub-nav">
            <li><a href="/admin.php/Home/Index/jjset">奖金设定</a></li>
            <li><a href="/admin.php/Home/Index/txset">提现设置</a></li>
            <li><a href="/admin.php/Home/Index/lixi">利息配置</a></li>
			<li><a href="/admin.php/Home/Config/qiangdan">抢单时间设置</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/tb.png" alt="" /><p>留言管理</p></a>
                      <ul class="sub-nav">
            <li><a href="/admin.php/Home/Shop/ly_list/type/0/">已处理留言</a></li>
            <li><a href="/admin.php/Home/Shop/ly_list/type/1/">未处理留言</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/cal.png" alt="" /><p>文章管理</p></a>
             <ul class="sub-nav">
            <li><a href="/admin.php/Home/Shop/zsbyg_list">新闻公告</a></li>
            <li><a href="/admin.php/Home/Shop/zsbyg_list_xg">添加新闻</a></li>
            <li><a href="/admin.php/Home/Index/yuanzhugg">援助公告</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/widgets.png" alt="" /><p>任务审核</p></a>
                      <ul class="sub-nav">
            <li><a href="/admin.php/Home/Shop/task_list/type/1/">已处理任务</a></li>
            <li><a href="/admin.php/Home/Shop/task_list/type/0/">未处理任务</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/grid.png" alt="" /><p>激活码管理</p></a>
           <ul class="sub-nav">
            <li><a href="/admin.php/Home/Index/pin_add">生成激活码</a></li>
            <li><a href="/admin.php/Home/Index/pin_list">管理激活码</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/flm.png" alt="" />
           <p>匹配系统</p></a>
           <ul class="sub-nav">
           <li><a href="/admin.php/Home/Index/tgbz_list">提供帮助</a></li>
           <li><a href="/admin.php/Home/Index/jsbz_list">接受帮助</a></li>
           <li><a href="/admin.php/Home/Index/ppdd_list">交易中的订单</a></li>
           <li><a href="/admin.php/Home/Index/ppdd_list/cz/1/">成功交易订单</a></li>
           <li><a href="/admin.php/Home/Index/ts1_list">到期未打款</a></li>
           <li><a href="/admin.php/Home/Index/ts3_list">未收到款</a></li>
           <li><a href="/admin.php/Home/Index/tgbz_list_cf">提供拆分</a></li>
           <li><a href="/admin.php/Home/Index/jsbz_list_cf">接受拆分</a></li>
           <li><a href="/admin.php/Home/Index/clearalldo">清理数据库</a></li>
           <li><a href="/admin.php/Home/Baksql/backall">备份数据库</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/gal.png" alt="" />
           <p>商品管理</p></a>
           <ul class="sub-nav">
           <li><a href="/admin.php/Home/Good/goodList">商品列表</a></li>
           <li><a href="/admin.php/Home/Good/goodorder">订单列表</a></li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/icn.png" alt="" />
           <p>广告管理</p></a>
           <ul class="sub-nav">
            <li><a href="/admin.php/Home/Adv/advList">广告列表</a></li>
            </ul>
         </li>
         <li class="nav-item">
           <a href="#"><img src="/cssadmin/img/nav/err.png" alt="" />
           <p>抽奖设置</p></a>
           <ul class="sub-nav">
            <li><a href="/admin.php/Home/Award/awardList">抽奖设置</a></li>
            <li><a href="/admin.php/Home/Award/awardUser">抽奖记录</a></li>
			<li><a href="/admin.php/Home/Award/awardSet">抽奖次数设置</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a href="/admin.php/Home/Login/logout" target="_parent"><img src="/cssadmin/img/nav/typ.png" alt="" /><p>退出</p></a>
         </li>
       </ul>
      </li>
     </ul>
  </div>
<div class="content container_12">
<div class="box grid_12">
        <div class="box-content no-pad">
        <div class="box-head">
          <h2>广告列表</h2></div>
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/sncss/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/sncss/js/jquery.js"></script>
<script>
$(document).ready(function() {
	$(".delbut").click(function() {
		if (confirm("是否删除该广告?")) {
			$.post("/admin.php/Home/Adv/delAdv/aId/"+ this.id, function(data) {
				if (data > 0) {
					alert("删除成功！");
					window.location.reload();
				}
			});
		}
	});
	$("#addBut").click(function() {
		window.location.href = "/admin.php/Home/Adv/addAdv";
	});
	
});
</script>
</head>
<body>
	<div class="place">
		<span>位置：</span>
		<ul class="placeul">
			<li><a href="javascript:void(0);">广告管理</a></li>
			<li><a href="javascript:void(0);">广告列表</a></li>
		</ul>
	</div>
	<div class="tools">
		<ul class="toolbar">
			<input name="" type="submit" class="btn" id="addBut" value="添加广告"/>	
				 
		</ul>
	</div>
	<table  class="tablelist">
		<thead>
			<tr>
			
				<th>广告id</th>
				<th>广告图片</th>
				<th>广告位置</th>
				<th>链接地址</th>
				<th>添加时间</th>
				<th>操作</th>
			</tr>
		</thead>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><tr>
		    <td><?php echo ($news["aid"]); ?></td>
			<td>
			<?php if($news["advimg"] != ''): ?><img src="<?php echo ($news["advimg"]); ?>" style="width:50px;height:50px;" />
			<?php else: ?>
			暂无<?php endif; ?>
			</td>
			<td>
				<?php if($news["atype"] == 1): ?>顶部广告<?php endif; ?>
				<?php if($news["atype"] == 2): ?>左边广告<?php endif; ?>
				<?php if($news["atype"] == 3): ?>右边广告<?php endif; ?>
			</td>
			<td><?php echo ($news["link"]); ?></td>
			<td><?php echo ($news["addtime"]); ?></td>
			<td>
				<a href="/admin.php/Home/Adv/addAdv/aId/<?php echo ($news["aid"]); ?>">编辑</a> | 
				<a href="javascript:void(0);" class="delbut" id="<?php echo ($news["aid"]); ?>">删除</a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<div class="digg" style='width: 930px; height: 30px; font-size: 12px; text-align: right; margin-top: 10px; margin-bottom: 15px;'><?php echo ($pages); ?></div>
</body>
</html>
</div>
  </div>
 
</div>
<div class="footer">
  <p>Powered by 后台系统</p>
</div>
<script> /* SCRIPTS */
  $(function () {
      var sin = [], cos = [];
      for (var i = 0; i < 14; i += 0.5) {
          sin.push([i, Math.sin(i)]);
          cos.push([i, Math.cos(i)]);
      }
      var plot = $.plot($("#flot-demo"),
             [ { data: sin, label: "Green", color: "#71a100"}, { data: cos, label: "Blue", color: "#308eef" } ], {
                 series: {
                     lines: { show: true },
                     points: { show: true }
                 },
                 grid: { hoverable: true },
                 yaxis: { min: -1.2, max: 1.2 }
               });
      var previousPoint = null;
      $("#flot-demo").bind("plothover", function (event, pos, item) {
          if ($("#enablePosition:checked").length > 0) {
              var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
              $("#hoverdata").text(str);
          }
      });
  });/* for the flot chart demo */

  $('#example').dataTable( {
      "bJQueryUI": true
  }); /* For the data tables */
</script>


</body>
</html>