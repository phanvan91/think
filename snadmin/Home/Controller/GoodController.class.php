<?php
namespace Home\Controller;
use Think\Controller;
class GoodController extends CommonController {
  
    //商品列表
    public function goodList() {
	    
        
        if (I('post.goodname') <> '') {
            $map['goodname'] = I('post.goodname');
        }
        $count = M('good')->where($map)->count(); // 查詢滿足要求的總記錄數
        //$page = new \Think\Page ( $count, 3 ); // 實例化分頁類 傳入總記錄數和每頁顯示的記錄數(25)

        $p = getpage($count, 20);

        $list = M('good')->where($map)->order('goodid desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
		$this->display('index/goodList');
	}
	
	//商品添加
	public function goodAdd() {
	    if(IS_POST){
			$data = I('post.');
			$data['addtime'] = date("Y-m-d H:i:s");
			if($data['id'] == ""){
				M('good')->add($data);
				$this->success('添加商品成功!');

			}else{
				$map['goodid'] = $data['id'];
				M('good')->where($map)->save($data);
				$this->success('修改商品成功!');
			}
		}else{
			$id = I("id");
			$map['goodid'] = $id;
		    $info = M('good')->where($map)->find();
			$this->assign('info',$info);
		    $this->display('index/goodAdd');
		}
	}
	
	//商品删除
	
	public function goodDel(){
		$id = I("id");
		$map['goodid'] = $id;
		M('good')->where($map)->delete();
		$this->success('删除商品成功!');
	}
	
	//订单列表
	
	public function goodorder(){
		$where = " where 1=1 ";
		if (I('post.ordername') <> '') {
            $orderNo = I('post.ordername');
			$where .= "  and orderNo = '{$orderNo}'";
        }
		$sql="SELECT * FROM ot_goodorder {$where}";
		$res = M('good')->query($sql);
        $count = count($res); // 查詢滿足要求的總記錄數
        //$page = new \Think\Page ( $count, 3 ); // 實例化分頁類 傳入總記錄數和每頁顯示的記錄數(25)

        $p = getpage($count, 20);
        
		$sql="SELECT *,r.address as adres FROM ot_goodorder r join ot_user u on r.userid = u.UE_ID  {$where} order by orderid desc limit {$p->firstRow},{$p->listRows}";
        $list = M('good')->query($sql);
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
		$this->assign('ordername',I('post.ordername'));
		$this->display('index/goodorder');
	}
	
	//订单详情
	
	public function goodorderDetail(){
		$orderid = I('orderid');
		$sql = "SELECT * FROM  ot_gdetail g JOIN ot_good d on d.goodid = g.goodids where g.orderId = {$orderid}";
		$info = M('good')->query($sql);
		$this->assign("info",$info);
		$this->display('index/goodorderDetail');
	}
	
	
	/**
	 * 修改订单状态
	 * @author 
	 */
	public function orderstatus(){
		$id = I('orderid');
		$where['orderid'] = $id;
		$data["status"] = 4;
		$orderall = M("goodorder")->where($where)->find();
		$query = M("goodorder")->where($where)->save($data);
		if($query){
		   $map["UE_ID"] = $orderall["userid"];
           M("user")->where($map)->setInc("UE_money",$orderall['pricetotal']);
		   $this->success("更改成功");
	   }else{
		   $this->error("更改失败");
	   }
	}
	
	
	//删除订单
	
	public function orderDel(){
		$orderid = I('orderid');
		$map['orderid'] = $orderid;
		M('ot_goodorder')->where($map)->delete();
		$where['orderId'] = $orderid;
		M('ot_gdetail')->where($where)->delete();
		$this->success('删除订单成功!');
		
	}
	
	
	
	
}