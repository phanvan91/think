<?php 
namespace Home\Controller;
use Think\Controller;

/**
 * 抢单中心
 * @author 
 */
class OrderController extends CommonController{
	
	/**
	 * 抢单列表
	 * @author 
	 */
	public function orderList(){
		$time_unix = strtotime(date('Ymd'));
		$map['id'] = 2;
		$info = M("config")->where($map)->find();
		$times = explode(",",$info['values']);
		$starttime = explode("-",$times[0]);
		$endtime = explode("-",$times[1]);
		$start_unix = 0;
		$start_time = explode(':', $starttime[0]);
		$start_time = $start_time[0]*3600 +$start_time[1]*60 + $time_unix;	
        $start_end = explode(':', $starttime[1]);
		$start_end = $start_end[0]*3600 +$start_end[1]*60 + $time_unix;;									
		
		if(time()>$start_time && time()<$start_end){
			$timer = $start_end - time();
		}elseif(time() < $start_time){
			$flag = 1;
		}elseif(time()>$start_end){
			$flag = 2;
		}
		$this->assign('timer', $timer);
		$this->assign('flag', $flag);
		$where = " where 1=1 ";
		$where .= "  and u.UE_account = '{$_SESSION ['uname']}'";
        
		
		$sql1 = "SELECT * FROM ot_tgbz WHERE DATE_FORMAT( date, '%Y%m' ) = DATE_FORMAT( CURDATE() , '%Y%m' )  and qiangdan = 1";
		
		$tgbzall = M('tgbz')->query($sql1);
		$this->assign('tgbzall', count($tgbzall));
		$sql="SELECT * FROM `ot_ppdd` where date < NOW() - 3600*48 and p_user !='{$_SESSION ['uname']}'  and zt=0";
		$res = M('ppdd')->query($sql);
        $count = count($res); // 查詢滿足要求的總記錄數
        //$page = new \Think\Page ( $count, 3 ); // 實例化分頁類 傳入總記錄數和每頁顯示的記錄數(25)

        $p = getpage($count, 20);
        
		$sql="SELECT * FROM `ot_ppdd` where date < NOW() - 3600*48 and p_user !='{$_SESSION ['uname']}'  and zt=0 order by id desc limit {$p->firstRow},{$p->listRows}";
		
        $list = M('ppdd')->query($sql);
		
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
		$this->display();
	}
	
	
	/**
	 * 我要抢单
	 * @author 
	 */
	public function getOrder(){
		$time_unix = strtotime(date('Ymd'));
		$map1['id'] = 2;
		$info = M("config")->where($map1)->find();
		$times = explode(",",$info['values']);
		$starttime = explode("-",$times[0]);
		$endtime = explode("-",$times[1]);
		$start_unix = 0;
		$start_time = explode(':', $starttime[0]);
		$start_time = $start_time[0]*3600 +$start_time[1]*60 + $time_unix;	
        $start_end = explode(':', $starttime[1]);
		$start_end = $start_end[0]*3600 +$start_end[1]*60 + $time_unix;;									
		
		if(time()>$start_time && time()<$start_end){
			$timer = $start_end - time();
		}elseif(time() < $start_time){
			$flag = 1;
			die("<script>alert('抢单时间未开始！');window.location.href='/';</script>");
		}elseif(time()>$start_end){
			$flag = 2;
			die("<script>alert('抢单时间已结束！');window.location.href='/';</script>");
		}
		$id = I('id');
		$sql="SELECT * FROM `ot_ppdd` where date < NOW() - 3600*48 and p_user !='{$_SESSION ['uname']}'  and zt=0 and id = {$id}";
		$res = M('ppdd')->query($sql);
		
		if(!empty($res)){
			$usermm = M ( 'user' )->where ( array (UE_account => $_SESSION ['uname']) )->find ();
			if($usermm['paidan'] <= 0){
				    $this->error('很遗憾的告诉你，请先购买排单币，你暂时无法提供帮助!');
			}
			$map['id'] = $res[0]['p_id'];
			$data['user'] = $_SESSION ['uname'];
			$data['zt'] = 0;
			$data['user_nc'] =  $_SESSION ['uname'];
			$data['qiangdan'] =  1;
			$query = M('tgbz')->where($map)->save($data);
			$where['id']=$id;
			$query1 = M('ppdd')->where($where)->delete();
			if($query){
				M('user')->where(array(UE_account => $_SESSION ['uname']))->setDec('paidan',1);
				die("<script>alert('抢单成功！');window.location.href='/';</script>");
			}
		}
		
	}
	
	
	
    
	
}