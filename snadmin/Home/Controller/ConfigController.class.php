<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 设置管理
 * @author 
 */
class ConfigController extends CommonController{
	
    
    
    /**
     * 抢单时间设置
     * @author 
     * @date: 2016年4月20日
     */
    public function qiangdan(){
        if(IS_POST){
			 
			 $starttime = I('starttime');
			 $endtime = I('endtime');
		     $map['id'] = 2;
			 $data['values'] = implode('-',$starttime);
			 $query = M("config")->where($map)->save($data);
			
			if($query){
				$this->success("操作成功",U('Config/qiangdan'));
				
			}else{
				$this->error("操作失败");
				
			}
		}else{
			
			 $map['id'] = 2;
			 $info = M("config")->where($map)->find();
			 $times = explode(",",$info['values']);
			 $starttime = explode("-",$times[0]);
			 $this->assign('starttime',$starttime);
			 $this->assign('info',$info);
			 $this->display();
		}
    }
	
	
	
  
    
}