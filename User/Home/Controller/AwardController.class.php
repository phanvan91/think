<?php 
namespace Home\Controller;
use Think\Controller;

/**
 * 抽奖管理
 * @author 
 */
class AwardController extends CommonController{
	
	/**
	 * 抽奖页面
	 * @author 
	 */
	public function index(){
	   $awardList = M("award")->select();
	   $this->assign('awardList',$awardList);
	   
	   $awarduser = M("awarduser")->join("join ot_award on ot_award.aId = ot_awarduser.awardId")->select();
	   $this->assign('awarduser',$awarduser);
	   
	   $sql = "select count(*) as total from ot_awarduser where to_days(createTime)=to_days(now()) and uname='{$_SESSION['uname']}'";
	   $num = M("config")->where("id=1")->getField("values");
	   $total = M("awarduser")->query($sql);
	   $totalnum = $num - $total[0]['total'];
	   $this->assign('total',$totalnum);
	   $this->assign('style_1_flag',C("choujiang"));
	   
	   $this->display();
	}
    
	/**
	 * 抽奖功能
	 * @author 
	 */
    public function getAward(){
		$prize_arr = array( 
			'0' => array('id' => 1, 'min' => 1, 'max' => 29, 'prize' => '一等奖', 'v' => 1), 
			'1' => array('id' => 2, 'min' => 302, 'max' => 328, 'prize' => '二等奖', 'v' => 2), 
			'2' => array('id' => 3, 'min' => 242, 'max' => 268, 'prize' => '三等奖', 'v' => 5), 
			'3' => array('id' => 4, 'min' => 182, 'max' => 208, 'prize' => '四等奖', 'v' => 7), 
			'4' => array('id' => 5, 'min' => 122, 'max' => 148, 'prize' => '五等奖', 'v' => 10), 
			'5' => array('id' => 6, 'min' => 62, 'max' => 88, 'prize' => '六等奖', 'v' => 25), 
			'6' => array('id' => 7, 'min' => array(32, 92, 152, 212, 272, 332), 
			'max' => array(58, 118, 178, 238, 298, 358), 'prize' => '七等奖', 'v' => 50) 
			//min数组表示每个个奖项对应的最小角度 max表示最大角度 
			//prize表示奖项内容，v表示中奖几率(若数组中七个奖项的v的总和为100，如果v的值为1，则代表中奖几率为1%，依此类推) 
		 );
        
		
		
	    //函数getRand()会根据数组中设置的几率计算出符合条件的id，我们可以接着调用getRand()。
		foreach($prize_arr as $v){ 
			$arr[$v['id']] = $v['v']; 
		} 
		$prize_id = $this->getRand($arr); //根据概率获取奖项id   
		$res = $prize_arr[$prize_id - 1]; //中奖项  
		$min = $res['min']; 
		$max = $res['max']; 
		 if ($res['id'] == 7) { //七等奖  
			$i = mt_rand(0, 5); 
			$data['angle'] = mt_rand($min[$i], $max[$i]); 
		 } else { 
			$data['angle'] = mt_rand($min, $max); //随机生成一个角度  
		 } 
		$data['prize'] = $res['prize']; 
		$map['aName'] = $res['prize']; 
		$info = M('award')->where($map)->find();
		$arr['uname'] = $_SESSION['uname'];
		$where['uname'] = $_SESSION['uname'];
		$res = M("awarduser")->where($where)->find();
		
		$chengxin = M('user')->where("UE_account='{$_SESSION['uname']}'")->getField("chengxin");
		$sql = "select count(*) as total from ot_awarduser where to_days(createTime)=to_days(now()) and uname='{$_SESSION['uname']}'";
	    $num = M("config")->where("id=1")->getField("values");
	    $total = M("awarduser")->query($sql);
	    $totalnum = $num - $total[0]['total'];
		if($chengxin < 1){
			$data['isaward'] = 'no';
		}
		if($totalnum <= 0){
			$data['isaward'] = 1;
		}else{
			    $arr['awardId'] = $info['aid'];
		
			    M('user')->where(array(UE_account => $_SESSION ['uname']))->setDec('chengxin',1);
				M('user')->where(array(UE_account => $_SESSION ['uname']))->setInc('UE_money',$info ['num']);
				$data['message'] = "奖励余额".$info['num'];
			
			M('awarduser')->add($arr);
		}
		
	    echo json_encode($data);
	}
	
	//中奖概率方法我们之前在jQuery砸金蛋_PHP砸金蛋讲过，代码如下
    public function getRand($proArr){ 
		$data = ''; 
		$proSum = array_sum($proArr); //概率数组的总概率精度  
		foreach ($proArr as $k => $v) { //概率数组循环 
			$randNum = mt_rand(1, $proSum); 
			if ($randNum <= $v) { 
				$data = $k; 
				break; 
			} else { 
				$proSum -= $v; 
			} 
		} 
		unset($proArr); 
		return $data; 
   }
   
}