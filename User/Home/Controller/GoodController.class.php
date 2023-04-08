<?php 
namespace Home\Controller;
use Think\Controller;

/**
 * 商城管理
 * @author 
 */
class GoodController extends CommonController{
	
	/**
	 * 商品列表
	 * @author 
	 */
	public function lists(){
	    
        $list = M('good')->where($map)->order('goodid desc')->select();
        $this->assign('list', $list); // 賦值數據集
	    $this->display();
	}
	
	public function orderList(){
		
		$where = " where 1=1 ";
		$where .= "  and u.UE_account = '{$_SESSION ['uname']}'";
        
		$sql="SELECT * FROM ot_goodorder where userid={$_SESSION['uid']}";
		$res = M('good')->query($sql);
        $count = count($res); // 查詢滿足要求的總記錄數
        //$page = new \Think\Page ( $count, 3 ); // 實例化分頁類 傳入總記錄數和每頁顯示的記錄數(25)

        $p = getpage($count, 20);
        
		$sql="SELECT r.* FROM ot_goodorder r join ot_user u on r.userid = u.UE_ID  {$where} order by orderid desc limit {$p->firstRow},{$p->listRows}";
		
        $list = M('good')->query($sql);
		foreach($list as $k=>$v){
			$map['orderId'] = $v['orderid'];
			$list[$k]['good'] = M('gdetail')->where($map)->select();
		}
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
		$this->display();
	}
	
	public function info($id){
		$where['goodid'] = $id;
		$info = M('good')->where($where)->find();
		
		$map["goodid"] = $id;
		$commentlist =M("goodcomment")->where($map)->select();
		$this->assign('commentlist', $commentlist);
		$this->assign('info', $info); // 
		$this->display();
	}
	
	
	/**
	 * 商品下订单
	 * @author 
	 */
	 
	public function order(){
	   $goodid = I('post.goodid');
	   $goodsnum = I('post.goodsnum');
	   $goodname = I('post.goodname');
	   $zhituinum = I('post.zhituinum');
	   $price = I("post.price");
	   $address = I('post.address');
	   $tel = I('post.tel');
	   if(empty($goodid)){
			    
				$this->error("请选择商品");
	   }
	   for($i=0;$i<count($goodid);$i++){
		   if($goodsnum[$i] == 0){
			   unset($goodid[$i]);
			   unset($goodsnum[$i]);
			   unset($price[$i]);
			   unset($goodname[$i]);
			   unset($zhituinum[$i]);
		   }else{
			   $arr['goodid'] = $goodid[$i];
			   $arr['goodsnum'] = $goodsnum[$i];
			   $arr['price'] = $price[$i];
			   $arr['goodname'] = $goodname[$i];
			   $arr['zhituinum'] = $zhituinum[$i];
		   }
		   if(!empty($arr)){
			    
				$res[] = $arr;
		   }
		  
	   }
	   
	   if(empty($res)){
			    
				$this->error("请选择商品");
	   }
	   
	   foreach($res as $k=>$v){
		   $total += $v['price']*$v['goodsnum'];
	   }
	   $userinfo = M('user')->where(array(UE_account => $_SESSION ['uname']))->find();
	   if($userinfo['ue_money'] < $total){
		   $this->erroe("余额不足");
	   }
	   $numpeople = M('user')->where(array(UE_accName => $_SESSION ['uname']))->count();
	  
	   foreach($res as $key=>$val){
		   
		    if($val['zhituinum'] > $numpeople){
				$flag = 1;
			}
			 
	   }
	   
	   if($flag == 1){
		   $this->error("直推人数不足，不能购买");
	   }
	   $data['orderNo'] =  date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
	   $data['userid'] = $_SESSION['uid'];
	   $data['priceTotal'] = $total;
	   $data['address'] = $address;
	   $data['tel'] = $tel;
	   $data['kuaidi'] = I('kuaidi');
	   $data['status'] = 0;
	   
	   if($data['kuaidi'] == ''){
		   $this->error("快递不能为空");
	   }
	   
	   $lastid = M("goodorder")->add($data);
	   foreach($res as $k=>$v){
		     $info['orderId'] = $lastid;
		     $info['goodids'] = $v['goodid'];
			 $info['num'] = $v['goodsnum'];
			 $info['goodName'] = $v['goodname'];
			 M("gdetail")->add($info);
	   }
	   if($lastid){
		   M('user')->where(array(UE_account => $_SESSION ['uname']))->setDec('UE_money',$total);
		   $this->success("购买成功");
	   }else{
		   $this->error("购买失败");
	   }
	}
	
	
	/**
	 * 修改订单状态
	 * @author 
	 */
	public function orderstatus(){
		$id = I('id');
		$where['userid'] = session('uid');
		$where['orderid'] = $id;
		$data["status"] = I('status');
		$query = M("goodorder")->where($where)->save($data);
		if($query){

		   $this->success("更改成功");
	   }else{
		   $this->error("更改失败");
	   }
	}
	
	public function goodcomment(){
		$data['goodid'] = I('goodids');
		$data['comment'] = I('comment');
		$data['uid'] = session('uname');
		$data['createtime'] = date("Y-m-d H:i:s");
		$query =M("goodcomment")->add($data);
		if($query){

		   $this->success("评论成功");
	   }else{
		   $this->error("评论失败");
	   }
	}
    
	
}