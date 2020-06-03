<?php
// +----------------------------------------------------------------------
// | CatchAdmin [Just Like ～ ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017~2020 http://catchadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://github.com/yanwenwu/catch-admin/blob/master/LICENSE.txt )
// +----------------------------------------------------------------------
// | Author: JaguarJack [ njphper@gmail.com ]
// +----------------------------------------------------------------------

$router->resource('xiaoqu', '\catchAdmin\xiaoqu\controller\XiaoQu');
$router->resource('dianti', '\catchAdmin\xiaoqu\controller\DianTi');
$router->get('istest', '\catchAdmin\xiaoqu\controller\IsTest@index');
