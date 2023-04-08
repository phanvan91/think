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
      <div class="ad-notif-info grid_12"><p><span>位置：<a href="/admin.php/Home/Index/main">首页</a></span>
    </p></div>    
  <div class="box grid_12">
        <div class="box-head"><h2>会员统计
        </div>
        <div class="box-content ">
<input type="button" class="button purple" value="系统开关"><?php if($zt["zt"] == '0'): ?><input type="button" class="button yellow" value="开启">:<a href="/admin.php/Home/Index/gb"><input type="button" class="button black" value="关闭系统"></a>
      <?php else: ?><input type="button" class="button black" value="关闭">：<a href="/admin.php/Home/Index/kq"><input type="button" class="button yellow" value="开启系统"></a><?php endif; ?>
      <input type="button" class="button red " value="在线人数：<?php echo ($zzbf); ?>" />


 <input type="button" class="button  green" value="上次登入IP:<?php if($scip["ip"] == ''): ?>未登过<?php else: echo ($scip["ip"]); ?>(<?php echo ($scip["date"]); ?>)"><?php endif; ?> / <input type="button" class="button blue" value="本次登入IP:<?php echo ($bcip["ip"]); ?>(<?php echo ($bcip["date"]); ?>)">
        
    
        </div>

</div><div class="box grid_12">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span>
        <h2>注册统计</h2></div>
        <div class="box-content ad-stats">
          ﻿<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>html5饼形数据统计图形代码 - 网站源码</title>
    <!-- 来自百度CDN -->
      <script src="/js/1-6-10.esl.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="main" style="height:300px; width:100%;margin:0 auto;"></div>
    <script type="text/javascript">
    require.config({
        paths:{ 
            'echarts' : '/js/echarts'
        }
    });
    // 使用
    require(
        [
            'echarts',
			 'echarts/chart/pie' // 使用柱状图就加载pie模块，即使没有这个路径
        ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('main')); 
                var option = {
    title : {
        text: '统计详情',
        subtext: '',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:['总注册人数','未激活人数','今日注册人数','昨日注册人数','被封人数']
    },
    toolbox: {
        show : true,
        feature : {
            <!--mark : {show: true},
           <!-- dataView : {show: true, readOnly: false},
            restore : {show: true},
           <!-- saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:<?php echo ($zuser); ?>, name:'总注册人数'},
                {value:<?php echo ($zzwjh); ?>, name:'未激活人数'},
                {value:<?php echo ($jtzchy); ?>, name:'今日注册人数'},
                {value:<?php echo ($ztzchy); ?>, name:'昨日注册人数'},
				{value:<?php echo ($zzbf); ?>, name:'被封人数'},
            ]
        }
    ]
};
                    
                    
                myChart.setOption(option); 
            }
        );
    </script>      
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>

 
        </div>
  </div>
  <div class="box grid_6">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span>
        <h2>可提现金额</h2>
</div>
        <div class="box-content ad-stats">
            
<script type="text/javascript" src="/css/js/jsapi.js"></script>
<script type="text/javascript" src="/css/js/corechart.js"></script>		
<script type="text/javascript" src="/css/js/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="/css/js/jquery.ba-resize.min.js"></script>

<script type="text/javascript">
gvChartInit();
$(document).ready(function(){
	$('#myTable5').gvChart({
		chartType: 'PieChart',
		gvSettings: {
			vAxis: {title: 'No of players'},
			hAxis: {title: 'Month'},
			height: 350
		}
	});
});
</script>

</head>


<body>

<div style="margin:0 auto;">

	   <table id='myTable5'>
			<caption>系统总金币：<?php echo ($zjb); ?></caption>
			<thead>
				<tr>
					<th></th>
					<th>系统总经理奖:<?php echo ($zjlj); ?></th>
					<th>系统总推荐奖:<?php echo ($ztjj); ?></th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<td><?php echo ($zjlj); ?></td>
					<td><?php echo ($ztjj); ?></td>


				</tr>
			</tbody>
  </table>
</div>
</body>
</html>


        </div>
  </div>
   
  
  
  <div class="box grid_6">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span>
        <h2>充值交易金额</h2></div>
        <div class="box-content ad-stats">
          ﻿

<script type="text/javascript" src="/css/js/jsapi.js"></script>
<script type="text/javascript" src="/css/js/corechart.js"></script>		
<script type="text/javascript" src="/css/js/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="/css/js/jquery.ba-resize.min.js"></script>

<script type="text/javascript">
gvChartInit();
$(document).ready(function(){
		$('#myTable1').gvChart({
			chartType: 'PieChart',
			gvSettings: {
			vAxis: {title: 'No of players'},
			hAxis: {title: 'Month'},
			height: 338
		}
	});
});
</script>

</head>


<body>

<div style="margin:0 auto;">
  <table id='myTable1'>
    <caption>充值交易图谱</caption>
			<thead>
				<tr>
					<th></th>
					<th>充值总额：<?php echo ($z_jgbz); ?></th>
					<th>交易成功：<?php echo ($z_jgbz2); ?></th>
                    <th>交易中：<?php echo ($z_jgbz3); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th></th>
					<td><?php echo ($z_jgbz); ?></td>
					<td><?php echo ($z_jgbz2); ?></td>
                    <td><?php echo ($z_jgbz3); ?></td>
			  </tr>
			</tbody>
  </table>  
	
</div>
</body>
</html>

        </div>
  </div>
  
</div>

<div class="footer">
  <p>Powered by 后台系统</p>
</div>



</body>
</html>