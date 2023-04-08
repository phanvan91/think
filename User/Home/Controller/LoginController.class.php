<?php

namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{

    public function index()
    {
        $this->display('login');
    }





//     elseif($user['ue_check'] == 0){

//     	//$this->ajaxReturn('當前賬戶未激活，暫不能登陸!');

//     	//$this->ajaxReturn( array('nr'=>'當前賬戶未激活，暫不能登陸!','sf'=>0) );

//     	die("<script>alert('當前賬戶未激活，暫不能登陸！');history.back(-1);</script>");

//     }


    public function english()
    {
        $this->display('login_en');
    }


    public function logincl()
    {
        header("Content-Type:text/html; charset=utf-8");

        //echo I('post.ip');die;

        if (IS_POST) {

            //$this->error('系統暫未開放!');die;

            $username = trim(I('post.account'));

            $pwd = trim(I('post.password'));

            $verCode = trim(I('post.mycode'));//驗證碼

            //dump($pwd);die;

            //


            if (!$this->check_verify($verCode)) {


                //$this->ajaxReturn( array('nr'=>'验证码错误!','sf'=>0) );
                $this->error("验证码错误");

            } else {

                $user = M('user')->where(array('UE_account' => $username))->find();


                if (!$user || $user['ue_password'] != md5($pwd)) {

                    //$this->ajaxReturn('賬號或密碼錯誤,或被禁用!');

                    //$this->ajaxReturn( array('nr'=>'賬號或密碼錯誤!','sf'=>0) );

                    die("<script>alert('账号或密码错误！');history.back(-1);</script>");

                } elseif ($user['ue_status'] == '1') {

                    //$this->ajaxReturn('賬號或密碼錯誤,或被禁用!');

                    //$this->ajaxReturn( array('nr'=>'賬號被禁用!','sf'=>0) );

                    die("<script>alert('账号被禁用！');history.back(-1);</script>");


                } else {


                    //	$lifeTime = 60;

                    //session_set_cookie_params($lifeTime);

                    //	session_start();

                    //$_session["uid"]=$user[ue_id];


                    //	$_session["uname"]=$user[ue_account];

                    $this->cspaycl($user);

                    $this->logtime($user);
                    session('uid', $user[ue_id]);

                    session('uname', $user[ue_account]);

                    //cookie('uid2',$user[ue_id],array('expire'=>5,'prefix'=>'think_'));

                    $record1['date'] = date('Y-m-d H:i:s', time());

                    $record1['ip'] = I('post.ip');

                    $record1['user'] = $user[ue_account];

                    $record1['leixin'] = 0;

                    M('drrz')->add($record1);


                    $_SESSION['logintime'] = time();


                    //$this->ajaxReturn(array('nr'=>'登录成功!',sf=>1));

                    die("<script>alert('登录成功！');window.location.href='/';</script>");


                }
            }

        }


    }


    public function register()
    {
        header("Content-Type:text/html; charset=utf-8");

        if (IS_POST) {
            $user_data = array();
            $post_data = I('post.');
            // added by skyrim
            // purpose: duplicate user check
            $is_exist = is_array(M('User')->where(array('UE_account' => $post_data['email']))->find()) ? true : false;
            if ($is_exist) {
                $this->error('该用户已存在，请直接登陆，如果您已经忘了密码，请使用“找回密码”功能。');

                return;
            }

            $is_exist = is_array(M('User')->where(array('UE_account' => $post_data['email']))->find()) ? true : false;
            if ($is_exist) {
                $this->error('该手机号已存在，请直接登陆，如果您已经忘了密码，请使用“找回密码”功能。');

                return;
            }

            $is_exist_p = is_array(M('User')->where(array('UE_accName' => $post_data['pemail']))->find()) ? true : false;
            if ($is_exist_p == false) {
                $this->error('该推荐人不存在。');

                return;
            }

            // added ends
            foreach (array(
                         "UE_account" => $post_data['email'],
                         "UE_account1" => $post_data['email_repeat'],
                         "UE_accName" => $post_data['pemail'],
                         "UE_accName1" => $post_data['pemail_repeat'],
                         "UE_theme" => $post_data['username'],
                         "UE_password" => md5($post_data['password']),
                         "UE_repwd" => md5($post_data['password2']),
                         "pin" => $post_data['code'],
                         "pin2" => $post_data['code2'],
                         // deleted by skyrim
                         // purpose: set sec passwd at reg time
                         // version: v11.0
                         //"UE_secpwd"   => $post_data['secpwd'],
                         //"UE_resecpwd" => $post_data['resecpwd'],
                         // deleted ends
                         // added by skyrim
                         // purpose: set sec passwd at reg time
                         // version: v11.0
                         "UE_secpwd" => md5($post_data['secpasswd']),
                         "UE_resecpwd" => md5($post_data['secpasswd2']),
                         // added ends
                         "UE_status" => '0', // 用户状态
                         "UE_level" => '0', // 用户等级
                         "UE_check" => '0', // 是否通过验证
                         //"UE_sfz"      => $post_data['sfz'],
                         //"UE_truename" => $post_data['trueName'],
                         //"UE_qq"       => $post_data['qq'],
                         "UE_phone" => $post_data['phone'],
                         //"email"       => $post_data['email'],
                         "UE_regIP" => I('post.ip'),
                         "zcr" => $post_data['pemail'],
                         "UE_regTime" => date('Y-m-d H:i:s', time()),
                         "center" => $post_data ['center'],
                         "tuijianer" => $post_data ['tuijianer'],
                         "bianhao" => $post_data ['bianhao'],
                         "username" => $post_data ['username'],
                         "yijipassword" => $post_data ['yijipassword'],
                         "question" => $post_data ['question'],
                         "shenfen" => $post_data ['shenfen'],
                         "yinhang" => $post_data ['yinhang'],
                         "kahao" => $post_data ['kahao'],
                         "kaihuxingming" => $post_data ['kaihuxingming'],
                         "pro" => $post_data ['pro'],
                         "city" => $post_data ['city'],
                         "address" => $post_data ['address'],
                         "qq" => $post_data ['qq'],
                         "weixinhao" => $post_data ['weixinhao'],
                         "zhifubao" => $post_data ['zhifubao'],
                         "weixinmoney" => $post_data ['weixinmoney'],
                         "mobile" => $post_data ['mobile'],
                         "m_email" => $post_data ['m_email']
                         //"__hash__"    => $post_data['__hash__'],
                     ) as $k => $v) {
                $user_data[$k] = $v;
            }
            $data = M('User');
            if ($data->create($user_data)) {
                if (I('post.ty') <> 'ye') {
                    die("<script>alert('请先勾选「我已完全了解所有风险」！');history.back(-1);</script>");
                }
                if ($data->add()) {
                    //jlsja( $data_P['pemail'] );
                    M('user')->where(array(UE_account => $post_data['pemail']))->setInc('chengxin', 2); //诚信积分注册加2
                    $this->success(nl2br('您的账号注册成功！' . "\n" . '请等待邀请人确认，确认完毕后请记得进入 会员中心 -> 账号管理 -> 个人资料，绑定个人信息！'), '/Home/Login/', 120);
                } else {
                    die("<script>alert('注册会员失败,继续注册请刷新页面！');history.back(-1);</script>");
                }
            } else {
                die("<script>alert('注册会员失败,继续注册请刷新页面[2]！');history.back(-1);</script>");
            }
            //	var_dump( I('post.') );
            return;
        }


        $this->user = M('user')->where(array('UE_ID' => I('get.id')))->find();

        $this->display('register');
    }


    public function loginadmin()
    {

        header("Content-Type:text/html; charset=utf-8");

        if (IS_GET) {

            $username = trim(I('get.account'));

            $pwd = trim(I('get.password'));

            $pwd2 = trim(I('get.secpw'));

            //dump(I('get.'));die;

            //$verCode = trim(I('post.verCode'));//驗證碼

            //echo $username;

            //echo $pwd;die;

            //session_unset();

            //session_destroy();

            if (false) {

                $this->error('验证码错误,请刷新验证码!');

            } else {

                if (false) {

                    $this->error('账号或密码错误,或被禁用!');

                } else {

                    $user = M('user')->where(array('UE_account' => $username))->find();

                    //dump(md5($pwd));die;

                    if (!$user || $user['ue_password'] != $pwd) {

                        //$this->ajaxReturn('账号或密码错误,或被禁用!');

                        $this->error('账号或密码错误,或被禁用!');

                    } else {

                        session('uid', $user[ue_id]);

                        session('snadmin', $user[ue_id]);

                        session('uname', $user[ue_account]);


                        session('ztjj', 'wtj');

                        $_SESSION['logintime'] = time();

                        $this->redirect('/');

                    }
                }

            }

        }


    }


    public function logout()
    {

        //	cookie(null);

        session_unset();

        session_destroy();

        $this->redirect('Login/index');

    }

    //驗證碼模塊

    function check_verify($code)
    {

        $verify = new \Think\Verify();
        return $verify->check($code);

    }


    function verify()
    {

        $config = array(

            'fontSize' => 16,    // 驗證碼字體大小

            'length' => 5,     // 驗證碼位數

            'useCurve' => false, // 關閉驗證碼雜點

            'useCurve' => false,

        );


        $Verify = new \Think\Verify($config);

        $Verify->codeSet = '0123456789';

        $Verify->entry();

    }

    function mmzh()
    {

        $this->display('mmzh');

    }

    public function mmzh2()
    {

        header("Content-Type:text/html; charset=utf-8");
        inival();
        if (IS_POST) {

            //$this->error('系統暫未開放!');die;

            //

            $username = trim(I('post.user'));

            //$pwd=trim(I('post.password'));

            $verCode = trim(I('post.yzm'));//驗證碼

            //dump($pwd);die;

            //!$this->check_verify($verCode)

            if (!$this->check_verify(I('post.yzm'))) {

                $this->error('驗證碼錯誤,請刷新驗證碼！');

                //die("<script>alert('驗證碼錯誤,請刷新驗證碼！');history.back(-1);</script>");

                //$this->ajaxReturn( array('nr'=>'驗證碼錯誤,請刷新驗證碼!','sf'=>0) );

            } else {

                if (!preg_match('/^[a-zA-Z0-9]{0,11}$/', $username)) {

                    $this->error('賬號錯誤！');

                    //$this->ajaxReturn( array('nr'=>'賬號或密碼錯誤,或被禁用!','sf'=>0) );

                } else {

                    $user = M('user')->where(array('UE_account' => $username))->find();


                    if (!$user) {

                        //$this->ajaxReturn('賬號或密碼錯誤,或被禁用!');

                        //$this->ajaxReturn( array('nr'=>'賬號或密碼錯誤,或被禁用!','sf'=>0) );

                        $this->error('賬號錯誤！');

                    } elseif ($user['ue_question'] == '') {

                        $this->error('您從未設置過密保,不能找回密碼！');

                    } else {

                        $this->user = $user;

                        $this->display('mmzh2');


                    }
                }

            }

        }


    }


    public function mmzh3()
    {


        if (IS_POST) {

            $data_P = I('post.');

            //dump($data_P);die;

            //$this->ajaxReturn($data_P['ymm']);die;

            //$user = M ( 'user' )->where ( array (

            //		UE_account => $_SESSION ['uname']

            //) )->find ();

            $username = trim(I('post.user'));

            $user1 = M();

            //

            //


            if (!preg_match('/^[a-zA-Z0-9]{0,11}$/', $username)) {

                $this->error('賬號錯誤！');

                //$this->ajaxReturn( array('nr'=>'賬號或密碼錯誤,或被禁用!','sf'=>0) );

            } else {

                $addaccount = M('user')->where(array('UE_account' => $username))->find();

            }


            if (!$user1->autoCheckToken($_POST)) {

                $this->error('重複提交,請刷新頁面!');

            } elseif (!$addaccount) {

                $this->error('非法操作!');

            } elseif ($addaccount['ue_question'] == '') {

                $this->error('您從未綁定過密保,請先綁定保密!');

            } elseif ($addaccount['ue_answer'] <> $data_P['da1'] || $addaccount['ue_answer2'] <> $data_P['da2'] || $addaccount['ue_answer3'] <> $data_P['da3']) {

                $this->error('原密保答案不正確！');

            } elseif (!preg_match('/^[a-zA-Z0-9]{6,15}$/', $data_P ['yjmm'])) {

                $this->error('新一級密碼6-12個字元,大小寫英文+數字,請勿用特殊詞符！');

            } elseif (!preg_match('/^[a-zA-Z0-9]{6,15}$/', $data_P ['ejmm'])) {

                $this->error('新二級密碼6-12個字元,大小寫英文+數字,請勿用特殊詞符！');


            } else {


                //	echo '修改成功';


                $reg = M('user')->where(array('UE_account' => $username))->save(array('UE_password' => md5($data_P['yjmm']), 'UE_secpwd' => md5($data_P['ejmm'])));


                if ($reg) {

                    $this->error('修改成功!', '/');


                } else {

                    $this->error('修改失敗,請換一組新密碼在試!');


                }

                //}

            }

        }

    }


    public function reg2()
    {


        $this->user = M('user')->where(array('UE_ID' => I('get.id')))->find();


        $this->display('reg2');

    }


    public function regadd()
    {

        header("Content-Type:text/html; charset=utf-8");

        //  $dqzhxx=M('user')->where(array('UE_account'=>$_SESSION['uname']))->find();

        if (false) {

            die("<script>alert('您不是经理,不可注册会员!');history.back(-1);</script>");

        } else {

            $data_P = I('post.');


            //$this->ajaxReturn( $data_P ['account1']);

            $data_arr ["UE_account"] = $data_P ['email'];

            $data_arr ["UE_account1"] = $data_P ['email_repeat'];

            $data_arr ["UE_accName"] = $data_P ['pemail'];

            $data_arr ["UE_accName1"] = $data_P ['pemail_repeat'];

            $data_arr ["UE_theme"] = $data_P ['username'];

            $data_arr ["UE_password"] = $data_P ['password'];

            $data_arr ["UE_repwd"] = $data_P ['password2'];

            $data_arr ["pin"] = $data_P ['code'];

            $data_arr ["pin2"] = $data_P ['code2'];

            //$data_arr ["UE_secpwd"] = $data_P ['secpwd'];

            //$data_arr ["UE_resecpwd"] = $data_P ['resecpwd'];

            $data_arr ["UE_status"] = '0'; // 用户状态

            $data_arr ["UE_level"] = '0'; // 用户等级

            $data_arr ["UE_check"] = '0'; // 是否通过验证

            //$data_arr ["UE_sfz"] = $data_P ['sfz'];

            //$data_arr ["UE_truename"] = $data_P ['trueName'];

            //$data_arr ["UE_qq"] = $data_P ['qq'];

            $data_arr ["UE_phone"] = $data_P ['phone'];

            //$data_arr ["email"] = $data_P ['email'];

            $data_arr ["UE_regIP"] = I('post.ip');

            $data_arr ["zcr"] = $data_P ['pemail'];

            $data_arr ["UE_regTime"] = date('Y-m-d H:i:s', time());

            //$data_arr ["__hash__"] = $data_P ['__hash__'];

            //$this->ajaxReturn($data_arr ["UE_theme"]);die;

            $data = D(User);


            //dump($data_arr);die;


            if ($data->create($data_arr)) {


                if (I('post.ty') <> 'ye') {

                    die("<script>alert('请先勾选,我已完全了解所有风险!');history.back(-1);</script>");

                } else {


                    if ($data->add()) {

                        //M('pin')->where(array('pin'=>$data_P ['code']))->save(array('zt'=>'1','sy_user'=>$data_P ['email'],'sy_date'=>date ( 'Y-m-d H:i:s', time () )))

                        if (true) {


                            jlsja($data_P ['pemail']);


                            newuserjl($data_P ['email'], C("reg_jiangli"), '新用户注册奖励' . C("reg_jiangli") . '元');

                            $this->success("注册成功!<br>您的账号:" . $data_P ['email'] . "<br>密码:" . $data_P ['password'] . "<br>第一次登入,请登录会员中心账号管理-个人资料,绑定个人信息！!", '/Home/Login/', 60);

                        } else {

                            die("<script>alert('注册会员失败,继续注册请刷新页面!');history.back(-1);</script>");

                        }

                    } else {


                        die("<script>alert('注册会员失败,继续注册请刷新页面!');history.back(-1);</script>");


                    }

                }

            } else {

                //$this->success( );

                die("<script>alert('" . $data->getError() . "');history.back(-1);</script>");

                //$this->ajaxReturn( array('nr'=>,'sf'=>0) );

            }

        }


    }

    public function axm()
    {

        header("Content-Type:text/html; charset=utf-8");

        if (IS_AJAX) {

            $data_P = I('post.');

            //dump($data_P);

            //$this->ajaxReturn($data_P['ymm']);die;

            //$user = M ( 'user' )->where ( array (

            //		UE_account => $_SESSION ['uname']

            //) )->find ();


            $user1 = M();

            //! $this->check_verify ( I ( 'post.yzm' ) )

            //! $user1->autoCheckToken ( $_POST )

            if (false) {


                $this->ajaxReturn(array('nr' => '驗證碼錯誤!', 'sf' => 0));

            } else {

                $addaccount = M('user')->where(array(UE_account => $data_P ['dfzh']))->find();


                if (!$addaccount) {

                    $this->ajaxReturn(array('nr' => '账号可以用!', 'sf' => 0));

                } elseif ($addaccount['ue_theme'] == '') {

                    $this->ajaxReturn(array('nr' => '用户名重复!', 'sf' => 0));

                } else {


                    $this->ajaxReturn('用户名重复');

                }

            }

        }

    }


    public function xm()
    {

        header("Content-Type:text/html; charset=utf-8");

        if (IS_AJAX) {

            $data_P = I('post.');

            //dump($data_P);

            //$this->ajaxReturn($data_P['ymm']);die;

            //$user = M ( 'user' )->where ( array (

            //		UE_account => $_SESSION ['uname']

            //) )->find ();


            $user1 = M();

            //! $this->check_verify ( I ( 'post.yzm' ) )

            //! $user1->autoCheckToken ( $_POST )

            if (false) {


                $this->ajaxReturn(array('nr' => '驗證碼錯誤!', 'sf' => 0));

            } else {

                $addaccount = M('user')->where(array(UE_account => $data_P ['dfzh']))->find();


                if (!$addaccount) {

                    $this->ajaxReturn(array('nr' => '用戶名不存在!', 'sf' => 0));

                } elseif ($addaccount['ue_theme'] == '') {

                    $this->ajaxReturn(array('nr' => '對方未設置名稱!', 'sf' => 0));

                } else {


                    $this->ajaxReturn($addaccount['ue_theme']);

                }

            }

        }

    }

    public function cspaycl($data)
    {
        if (!is_array($data)) {
            $this->error('参数错误');
        }


        $uname = $data['ue_account'];
        $fname = $data['ue_accname'];
        $uid = $data['ue_id'];

        $ppdd = M('ppdd');
        $where = array();
        iniverify();
        $where['p_user'] = $uname;
        $where['zt'] = 0;
        $rs = $ppdd->where($where)->select();
        if ($data['ue_status'] == 2) {
            return;
        }
        if ($rs) {

            $jjdktime = C("jjdktime");
            $jjhydjmsg = C("jjhydjmsg");
            $jjhydjkcsjmoeney = C("jjhydjkcsjmoeney");
            $nowtime = time();
            $cszt = 0;
            foreach ($rs as $v) {

                $pdtime = strtotime($v['date']);
                $cstime = $pdtime + 3600 * $jjdktime;

                if ($cstime < $nowtime) {
                    $cszt = 1;
                    break;

                }
            }

            if ($cszt) {
                $user = M('user');
                $data2 = array();
                $data2['UE_ID'] = $uid;
                $data2['UE_status'] = 1;
                $user->save($data2);

                if ($jjhydjkcsjmoeney && $fname) {
                    $where = array();
                    $where['UE_account'] = $fname;
                    $user->where($where)->setDec('UE_money', $jjhydjkcsjmoeney);
                    $user->where($where)->setDec('chengxin', 110);  //领导人扣除30加上会员封号扣除80
                    $map['UE_account'] = $uname;
                    $user->where($map)->setDec('chengxin', 55); //未打款扣除55
                }
                die("<script>alert('.$jjhydjmsg.');history.back(-1);</script>");
            }

        }

        $where['g_user'] = $uname;
        $where['zt'] = 2;
        $res = $ppdd->where($where)->order("id desc")->find();
        if (!empty($res)) {
            if (strtotime($res['date_hk']) - strtotime($res['date']) > 18 * 3600) {
                $data2 = array();
                $data2['UE_ID'] = $uid;
                $data2['UE_status'] = 1;
                $user->save($data2);
            }
        }
//
    }

    public function logtime($data)
    {
        if (!is_array($data)) {
            $this->error('参数错误');
        }


        $uname = $data['ue_account'];
        $fname = $data['ue_accname'];
        $uid = $data['ue_id'];
        $sql = "select * from ot_userlogin where date_format(logintime,'%Y-%m')=date_format(now(),'%Y-%m') and uname='{$uname}'";
        $loginuser = M("userlogin")->query($loginclsql);
        if (!empty($loginuser)) {

            if ($loginuser[0]['status'] == 0) {
                $map['loginid'] = $loginuser[0]['loginid'];
                $datalogin['status'] = 1;
                M("userlogin")->where($map)->save($datalogin); //未打款扣除55
                if ($data['chengxin'] > 0) {
                    $dataarr['chengxin'] = 0;
                    $mapuser['UE_account'] = $uname;
                    M("user")->where($mapuser)->save($dataarr); //未打款扣除55
                }

            }


        } else {
            $data_login['uname'] = $uname;
            $data_login['logintime'] = date("Y-m-d H:i:s");
            $data_login['status'] = 0;
            M("userlogin")->add($data_login);
            if ($data['chengxin'] > 0) {
                $dataarr['chengxin'] = 0;
                $mapuser['UE_account'] = $uname;
                M("user")->where($mapuser)->save($dataarr); //未打款扣除55
            }
        }
    }


}