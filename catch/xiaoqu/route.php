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
$router->get('xiaoqu/all', '\catchAdmin\xiaoqu\controller\XiaoQu@getAll');
$router->get('xiaoqu/all2', '\catchAdmin\xiaoqu\controller\XiaoQu@getAll2');
$router->resource('dianti', '\catchAdmin\xiaoqu\controller\DianTi');
$router->resource('dianti_detail', '\catchAdmin\xiaoqu\controller\DianTi@detail');
$router->get('istest', '\catchAdmin\xiaoqu\controller\IsTest@index');
