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
        <div class="box-head"><h2>新闻公告</h2></div>
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/sncss/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">基本内容</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools"><a href="/admin.php/Home/Shop/zsbyg_list/type/news/">新闻公告</a> <a href="/admin.php/Home/Shop/zsbyg_list/type/bzzx/">帮助中心</a> </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>编号<i class="sort"><img src="/sncss/images/px.gif" /></i></th>
        <th>分类</th>
        <th>标题</th>
        <th>添加时间</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
		
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
		 <td><?php echo ($v["if_id"]); ?></td>
		 <td><?php echo ($v["if_type"]); ?></td>
		  <td><?php echo ($v["if_theme"]); ?></td>
		   <td><?php echo ($v["if_time"]); ?></td>
	      <td><a href="/admin.php/Home/Shop/zsbyg_list_xg2/id/<?php echo ($v["if_id"]); ?>/" class="tablelink">修改</a>　<a href="/admin.php/Home/Shop/zsbyg_list_del/id/<?php echo ($v["if_id"]); ?>/" class="tablelink">删除</a></td>
        </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <style>.pages a,.pages span {
    display:inline-block;
    padding:2px 5px;
    margin:0 1px;
    border:1px solid #f0f0f0;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border-radius:3px;
}
.pages a,.pages li {
    display:inline-block;
    list-style: none;
    text-decoration:none; color:#58A0D3;
}
.pages a.first,.pages a.prev,.pages a.next,.pages a.end{
    margin:0;
}
.pages a:hover{
    border-color:#50A8E6;
}
.pages span.current{
    background:#50A8E6;
    color:#FFF;
    font-weight:700;
    border-color:#50A8E6;
}</style>
   
   <div class="pages"><br />

                        <div align="right"><?php echo ($page); ?>
                        </div>
   </div>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
      </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

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