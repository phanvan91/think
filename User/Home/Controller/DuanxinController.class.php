<?php 
namespace Home\Controller;

use Think\Controller;

class DuanxinController extends Controller {

   function getcode(){
		
	$statusStr = array(
"0" => "短信发送成功",
"-1" => "参数不全",
"-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
"30" => "密码错误",
"40" => "账号不存在",
"41" => "余额不足",
"42" => "帐户已过期",
"43" => "IP地址限制",
"50" => "内容含有敏感词"
);
//短信注册地址http://www.smsbao.com/reg?r=10480
$smsapi = "http://api.smsbao.com/";
$user = "8sb22222"; //短信平台帐号
$pass = md5("9th201314"); //短信平台密码
		$mobile = I('phone'); //号码，以英文逗号隔开
		$mobileids = ''; //号码唯一编号
		$code=rand(1000,9000);
		$content = '【鸿基创富】您的验证码为:'.$code; //内容
	    $url=$smsapi."sms?u=".$user."&p=".$pass."&m=".$mobile."&c=".urlencode($content);
		$returnval=$this->Getmobile($url);
		$data['phone']=$mobile;
		$data['code']=$code;
		$data['addtime']=date("Y-m-d H:i:s");
		M('yanzheng')->add($data);
		echo json_encode(1);
	}
	
	function yanzhengcode(){
			$old_code = I('old_code'); 
			$phone=I('phone');
			$map['phone']=$phone;
			$code=M('yanzheng')->where($map)->order("id desc")->getField('code');
		    if($old_code == $code && $code!=''){
				  echo json_encode(0);
			}else{
				 echo json_encode(1);
			}
	}
	
	public function getpwd(){
		    $map['UE_account'] = I('username'); 
			$map['UE_phone'] = I('phone');
			$userinfo = M("user")->where($map)->find();
		    if(!empty($userinfo)){
				$data['UE_password'] = md5("111111");
				$data['UE_secpwd'] = md5("111111");
				M("user")->where($map)->save($data);
				$this->success("新的密码为:111111,二级密码为111111",U('Login/index'),10);
			}else{
				$this->error("改用户不存在");
			}
	}
	
	
    //短信短接接口curl
	
	
	   public function Getmobile($url)
	   {
			if(function_exists('file_get_contents'))
			{
			$file_contents = file_get_contents($url);
			}
			else
			{
			$ch = curl_init();
			$timeout = 5;
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
			}
			return $file_contents;
	  }
}
?>