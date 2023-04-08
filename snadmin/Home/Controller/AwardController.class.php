<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 抽奖管理
 * @author 
 */
class AwardController extends CommonController{
	
    /**
     * 抽奖设置列表
     * @author 
     * @date: 2016年4月20日
     */
    public function awardList(){
        $count = M("award")->count(); // 查詢滿足要求的總記錄數
        $p = getpage($count, 20);
        $list = M("award")->order('aId desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
        $this->display();
    }
    
    /**
     * 编辑抽奖设置
     * @author 
     * @date: 2016年4月20日
     */
    public function addAward(){
        if(IS_POST){
			 $aId = I('aId');
			 $data = I('post.');
			 if($aId){
				 $map['aId'] = $aId;
				 $query = M("award")->where($map)->save($data);
			 }else{
				 $query = M("award")->where($map)->add($data);
			 }
			if($query){
				$this->success("操作成功",U('Award/awardList'));
			}else{
				$this->error("操作失败");
			}
		}else{
			 $aId = I('get.aId');
			 $map['aId'] = $aId;
			 $info = M("award")->where($map)->find();
	         $this->assign('aId',$aId);
			 $this->assign('info',$info);
			 $this->display();
		}
    }
	
	 /**
     * 每日抽奖设置
     * @author 
     * @date: 2016年4月20日
     */
	public function awardSet(){
		 if(IS_POST){
			     $data['values'] = I("values");
				 $map['id'] = 1;
				 $query = M("config")->where($map)->save($data);
			
			if($query){
				$this->success("操作成功");
			}else{
				$this->error("操作失败");
			}
		}else{
			
			 $map['id'] = 1;
			 $info = M("config")->where($map)->find();
	         $this->assign('aId',$aId);
			 $this->assign('info',$info);
			 $this->display();
		}
	}
	
	 /**
     * 抽奖记录
     * @author 
     * @date: 2016年4月20日
     */
	 
	 public function awardUser(){
		 
		$count = M("awarduser")->count(); // 查詢滿足要求的總記錄數
        $p = getpage($count, 20);
        $list = M("awarduser")->join("ot_award o on o.aId = ot_awarduser.awardId")->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
		$this->display(); 
	 }
    
}