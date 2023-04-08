<?php 
namespace Home\Controller;
use Think\Controller;

/**
 * 在线客服
 * @author 
 */
class KefuController extends CommonController{
	
	/**
	 * 在线客服
	 * @author 
	 */
	public function index(){
		
		$this->display();
	}
	
	public function gonggao(){
		$id = I('id');
		$gonggao = M("info")->where("IF_ID='{$id}'")->find();
		$this->assign ( 'gonggao', $gonggao ); // 赋值分页输出
		$this->display();
	}
	
	public function shengming(){
		
		$this->display();
	}
	
	
	public function all(){
		
		$this->display();
	}
	
	public function kaidian(){
		
		$this->display();
	}
	
	public function fromer(){
		
		$this->display();
	}
	
	public function go(){
		$id = I("id");
		$this->assign ( 'flag', $id ); // 赋值分页输出
		$this->display();
	}

}