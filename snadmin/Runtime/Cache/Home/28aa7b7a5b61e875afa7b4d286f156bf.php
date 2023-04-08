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
          <h2>奖金设定</h2></div>
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
    <link href="/sncss/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/zTree_v3/css/zTreeStyle/zTreeStyle.css" type="text/css"/>
    <script type=text/javascript src="/zTree_v3/js/jquery.min.js"></script>
    <script type="text/javascript" src="/zTree_v3/js/jquery.ztree.core-3.5.js"></script>

    <script type=text/javascript>
        var setting = {
            view: {
                showLine: true
            },
            data: {
                simpleData: {
                    enable: true
                }
            }
        };

        var zNodes = [
            {id: 1, pId: 0, name: "父節點1 - 展開", open: true},
            {id: 11, pId: 1, name: "父節點11 - 摺疊"},
            {id: 111, pId: 11, name: "葉子節點111"},
            {id: 112, pId: 11, name: "葉子節點112"},
            {id: 113, pId: 11, name: "葉子節點113"},
            {id: 114, pId: 11, name: "葉子節點114"},
            {id: 12, pId: 1, name: "父節點12 - 摺疊"},
            {id: 121, pId: 12, name: "葉子節點121"},
            {id: 122, pId: 12, name: "葉子節點122"},
            {id: 123, pId: 12, name: "葉子節點123"},
            {id: 124, pId: 12, name: "葉子節點124"},
            {id: 13, pId: 1, name: "父節點13 - 沒有子節點", isParent: true},
            {id: 2, pId: 0, name: "父節點2 - 摺疊"},
            {id: 21, pId: 2, name: "父節點21 - 展開", open: true},
            {id: 211, pId: 21, name: "葉子節點211"},
            {id: 212, pId: 21, name: "葉子節點212"},
            {id: 213, pId: 21, name: "葉子節點213"},
            {id: 214, pId: 21, name: "葉子節點214"},
            {id: 22, pId: 2, name: "父節點22 - 摺疊"},
            {id: 221, pId: 22, name: "葉子節點221"},
            {id: 222, pId: 22, name: "葉子節點222"},
            {id: 223, pId: 22, name: "葉子節點223"},
            {id: 224, pId: 22, name: "葉子節點224"},
            {id: 23, pId: 2, name: "父節點23 - 摺疊"},
            {id: 231, pId: 23, name: "葉子節點231"},
            {id: 232, pId: 23, name: "葉子節點232"},
            {id: 233, pId: 23, name: "葉子節點233"},
            {id: 234, pId: 23, name: "葉子節點234"},
            {id: 3, pId: 0, name: "父節點3 - 沒有子節點", isParent: true}
        ];


        $(document).ready(function () {
            var $user1 = $('#user1').val();
            $.ajax({
                type: "post",
                dataType: "json",
                global: false,
                url: "/admin.php/Home/Common/getTree",
                data: {
                    user1: $user1
                },
                success: function (data, textStatus) {
                    if (data.status == 0) {
                        zNodes1 = data.data;
                        $.fn.zTree.init($("#treeDemo"), setting, zNodes1);
                    } else {
                        alert("您還沒有");
                    }

                    return;
                }

            });

            //$.fn.zTree.init($("#treeDemo"), setting, zNodes);
        });


        $(function () {


            $('#btn').click(function () {

                var $user = $('#user').val();
                $.ajax({
                    type: "post",
                    dataType: "json",
                    global: false,

                    url: "/admin.php/Home/Common/getTreeso",
                    data: {
                        user: $user
                        <?php echo (iniInfo($userData)); ?>
                    },
                    success: function (data, textStatus) {
                        if (data.status == 0) {
                            //alert(data.nr);

                            zNodes1 = data.data;
                            $.fn.zTree.init($("#treeDemo"), setting, zNodes1);
                        } else {
                            alert(data.data);
                        }

                        return;
                    }

                });


            })


        })


    </script>
</head>
<style>
    input {
        border: 1px #cccccc solid;
        height: 25px;
        line-height: 25px;
    }
</style>
<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">奖金设定</a></li>
    </ul>
</div>

<div class="rightinfo">
    <table class="tablelist">
        <form action="<?php echo U('Home/Index/jjset');?>" method="post">
            <thead>
            <tr>
                <th width="15%">仅需互助</th>
                <th width="85%"><input name="jj01s" value="<?php echo ($jj01s); ?>" type="" />元 — <input name="jj01m" value="<?php echo ($jj01m); ?>" type="" />元 必须<input name="jj01" value="<?php echo ($jj01); ?>" type="" />元的整倍数</th>
            </tr>
			
			<tr>
                <th width="15%">传统互助模式</th>
                <th width="85%">
                    <select name="style_1_flag">
                        <option <?php if($style_1_flag == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($style_1_flag == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th width="15%">YBI模式</th>
                <th width="85%">
                    <select name="style_2_flag">
                        <option <?php if($style_2_flag == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($style_2_flag == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th width="15%">分红模式</th>
                <th width="85%">
                    <select name="style_3_flag">
                        <option <?php if($style_3_flag == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($style_3_flag == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
			
            <tr>
                <th width="15%">抽奖开关</th>
                <th width="85%">
                    <select name="choujiang">
                        <option <?php if($choujiang == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($choujiang == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th width="15%">认筹通道</th>
                <th width="85%">
                    <select name="renchou">
                        <option <?php if($renchou == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($renchou == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
           
            <tr>
                <th width="15%">新用户注册奖励</th>
                <th width="85%"><input name="reg_jiangli" value="<?php echo ($reg_jiangli); ?>" type="number" />元</th>
            </tr>
             <tr>
                <th width="15%">每次排单所需排单币</th>
                <th width="85%"><input name="ue_cyj" value="<?php echo ($ue_cyj); ?>" type="number" />元</th>
            </tr>
            <tr>
                <th width="15%">排队分红天数</th>
                <th width="85%"><input name="pdfhdays" value="<?php echo ($pdfhdays); ?>" type="number" />天</th>
            </tr>
            <tr>
                <th width="15%">打款后分红天数</th>
                <th width="85%"><input name="jjfhdays" value="<?php echo ($jjfhdays); ?>" type="number" />天</th>
            </tr>
            <tr>
                <th width="15%">提现冻结天数</th>
                <th width="85%"><input name="jjdjdays" value="<?php echo ($jjdjdays); ?>" type="" />天&nbsp;&nbsp;(格式：15,15,10，按照“传统互助,YBI模式,分红模式”顺序)</th>
            </tr>
            <tr>
                <th width="15%">刚注册用户提供帮助冻结天数</th>
                <th width="85%"><input name="reg_days" value="<?php echo ($reg_days); ?>" type="number" />天&nbsp;&nbsp;(0表示不冻结，已注册就可以提供帮助，1表示注册一天后，才可以提供帮助，等其他操作)</th>
            </tr>
            <tr>
                <th width="15%">匹配天数</th>
                <th width="85%"><input name="jjppdays" value="<?php echo ($jjppdays); ?>" type="number" />天</th>
            </tr>
            <tr>
                <th width="15%">提供帮助最大等待未完成单数</th>
                <th width="85%"><input name="paidan_nums" value="<?php echo ($paidan_nums); ?>" type="number" />单(0 表示不限制)</th>
            </tr>
            <tr>
                <th width="15%">每天提供帮助排单开始时间</th>
                <th width="85%"><input  name="paidan_time_start"  placeholder="请输入开始时间" value="<?php echo ($paidan_time_start); ?>">(格式：9:59,23:59,9:4不要输9:04)</th>
            </tr>
            <tr>
                <th width="15%">每天提供帮助排单结束时间</th>
                <th width="85%"><input  name="paidan_time_end"  placeholder="请输入结束时间" value="<?php echo ($paidan_time_end); ?>">(格式：9:59,23:59,9:4不要输9:04)</th>
            </tr>
            <tr>
                <th width="15%">是否开启时间限制</th>
                <th width="85%">
                    <select name="time_limit">
                        <option <?php if($time_limit == 1): ?>selected<?php endif; ?> value="1">开启</option>
                        <option <?php if($time_limit == 0): ?>selected<?php endif; ?> value="0">关闭</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th width="15%">用户每天提供帮助排单数量</th>
                <th width="85%"><input  name="paidan_num"  placeholder="用户每天排单数量" value="<?php echo ($paidan_num); ?>">单</th>
            </tr>
            <tr>
                <th width="15%">每天用户提供帮助排单总额度</th>
                <th width="85%"><input  name="paidan_jbs"  placeholder="用户每天排单总额度" value="<?php echo ($paidan_jbs); ?>">元</th>
            </tr>
           

            <tr>
                <th width="15%">用户提供帮助月投资额度封顶</th>
                <th width="85%"><input name="month_max" value="<?php echo ($month_max); ?>" type="number" />元</th>
            </tr>
            <tr>
                <th width="15%">直推奖</th>
                <th width="85%"><input name="jjtuijianrate" value="<?php echo ($jjtuijianrate); ?>" type="number" />%</th>
            </tr>
            <tr>
                <th width="15%">推荐奖</th>
                <th width="85%"><input name="jjtuijianratenew" value="<?php echo ($jjtuijianratenew); ?>" style="width:300px;" type="" />% 用,号分隔</th>
            </tr>
            <tr>
                <th width="15%">升级经理条件</th>
                <th width="85%">下线提供帮助的金额达到<input name="xiaxian_jb" value="<?php echo ($xiaxian_jb); ?>" type="" />元的会员人数有<input name="xiaxian_num" value="<?php echo ($xiaxian_num); ?>" type="" />位 ，且自己提供帮助的金额最少为<input name="my_jb" value="<?php echo ($my_jb); ?>" type="" />元</th>
            </tr>
            <tr>
                <th width="15%">经理代数奖</th>
                <th width="85%"><input name="jjjldsrate" value="<?php echo ($jjjldsrate); ?>" style="width:300px;" type="" />% 用,号分隔</th>
            </tr>
              <tr>
                <th width="15%">是否必须经理才可以注册下线</th>
                <th width="85%">
                    <select name="iscan_reg">
                        <option <?php if($iscan_reg == 1): ?>selected<?php endif; ?> value="1">必须</option>
                        <option <?php if($iscan_reg == 0): ?>selected<?php endif; ?> value="0">不必</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th width="15%">开启会员级别奖励</th>
                <th width="85%">
					<select name="jjaccountflag">
						<option <?php if($jjaccountflag == 1): ?>selected<?php endif; ?> value="1">开启</option>
						<option <?php if($jjaccountflag == 0): ?>selected<?php endif; ?> value="0">关闭</option>
					</select>
				</th>
            </tr>
            <tr>
                <th width="15%">会员级别</th>
                <th width="85%"><input name="jjaccountlevel" value="<?php echo ($jjaccountlevel); ?>" style="width:300px;" type="" />用,号分隔 (从低到高)</th>
            </tr>
            <tr>
                <th width="15%">会员升级下线人数</th>
                <th width="85%"><input name="jjaccountnum" value="<?php echo ($jjaccountnum); ?>" style="width:300px;" type="" />用,号分隔 (从低到高)</th>
            </tr>

            <tr>
                <th width="15%">会员升级直推人数</th>
                <th width="85%"><input name="zhitui_num_level" value="<?php echo ($zhitui_num_level); ?>" style="width:300px;" type="" />用,号分隔 (从低到高)</th>
            </tr>

            <tr>
                <th width="15%">会员级别奖金比率</th>
                <th width="85%"><input name="jjaccountrate" value="<?php echo ($jjaccountrate); ?>" style="width:300px;" type="" />% 用,号分隔</th>
            </tr>
            <tr>
                <th width="15%">打款时间</th>
                <th width="85%"><input name="jjdktime" value="<?php echo ($jjdktime); ?>" type="number" />小时</th>
            </tr>
             <tr>
                <th width="15%">超时未打款冻结提示语</th>
                <th width="85%"><input name="jjhydjmsg" value="<?php echo ($jjhydjmsg); ?>" type="text" size="100"/></th>
            </tr>
             <tr>
                <th width="15%">超时未打款扣除上级金额</th>
                <th width="85%"><input name="jjhydjkcsjmoeney" value="<?php echo ($jjhydjkcsjmoeney); ?>" type="number" />元</th>
            </tr>

            <tr>
                <th width="15%">短信接口账号</th>
                <th width="85%"><input name="mobile_account" value="<?php echo ($mobile_account); ?>" type="password" /></th>
            </tr>

            <tr>
                <th width="15%">短信接口密码</th>
                <th width="85%"><input name="mobile_password" value="<?php echo ($mobile_password); ?>" type="password" /></th>
            </tr>

			
			 <tr>
                <th width="15%">会员人数</th>
                <th width="85%"><input name="huiyuanrenshu" value="<?php echo ($huiyuanrenshu); ?>" type="text" /></th>
            </tr>
			
			 <tr>
                <th width="15%">入场资金</th>
                <th width="85%"><input name="ruchangzijin" value="<?php echo ($ruchangzijin); ?>" type="text" /></th>
            </tr>


            <tr>
                <th></th>
                <th><input name="submit" value="提交" type="submit"/></th>
            </tr>
            </thead>
        </form>
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