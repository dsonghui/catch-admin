<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

Route::get('istest', 'Index/hello'); // 定义GET请求路由规则

Route::group('api', function () {
    Route::rule('xiaoqu', 'api.ApiXiaoQu/index');
    Route::rule('xiaoqu/:id', 'api.ApiXiaoQu/info');
    Route::rule('dianti/:id', 'api.ApiDianTi/index');
});
