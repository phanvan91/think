<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 广告管理
 * @author 
 */
class AdvController extends CommonController{
	
    /**
     * 用户年龄段列表信息
     * @author 
     * @date: 2016年4月20日
     */
    public function advList(){
        $count = M("adv")->count(); // 查詢滿足要求的總記錄數
        $p = getpage($count, 20);
        $list = M("adv")->order('aId desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('list', $list); // 賦值數據集
        $this->assign('page', $p->show()); // 賦值分頁輸出
        $this->display();
    }
    
    /**
     * 添加编辑广告
     * @author 
     * @date: 2016年4月20日
     */
    public function addAdv(){
        if(IS_POST){
			 $aId = I('aId');
			 $data = I('post.');
			 if($aId){
				 $map['aId'] = $aId;
				 $query = M("adv")->where($map)->save($data);
			 }else{
				 $query = M("adv")->where($map)->add($data);
			 }
			if($query){
				$this->success("操作成功",U('Adv/advList'));
				
			}else{
				$this->error("操作失败");
				
			}
		}else{
			 $aId = I('get.aId');
			 $map['aId'] = $aId;
			 $info = M("adv")->where($map)->find();
			 
	         $this->assign('aId',$aId);
			 $this->assign('info',$info);
			 $this->display();
		}
    }
    
    /**
     * 删除广告
     * @author 
     * @date: 2016年4月20日 
     * @param unknown 
     */
    public function delAdv($aId){
        $map['aId'] = $aId;
		$query = M("adv")->where($map)->delete();
        if($query){
            echo 1;
        }else{
            echo 0;
        }
    }
    
}