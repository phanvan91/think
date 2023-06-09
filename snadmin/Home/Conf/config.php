<?php

return array(
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'hzone', // 数据库名
    'DB_USER' => 'hzone', // 用户名
    'DB_PWD' => 'hzone', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'ot_', // 数据库表前缀
    'DB_CHARSET' => 'utf8', // 字符集
    'DEFAULT_THEME' => 'default', // 设置默认的模板主题
    'SHOW_PAGE_TRACE' => false,
    'SHOW_ERROR_MSG' => false,
    'TOKEN_ON' => true,
    'DEFAULT_FILTER' => 'strip_tags,htmlspecialchars',
//'URL_MODEL'          => '2',
    'LANG_SWITCH_ON' => false,
//'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效
    'DEFAULT_LANG' => 'zh-tw',
//'LANG_LIST'        => 'zh-tw', // 允许切换的语言列表 用逗号分隔
    'VAR_LANGUAGE' => 'l', // 默认语言切换变量
//'LAYOUT_ON'=>true,
    'DB_BACKUP' => './data', //----------------------->by QQ742224183
);
