<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		if(IS_POST){
			dump($_POST);
		}
		$this->display();
	}
}