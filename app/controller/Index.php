<?php
namespace app\controller;

use app\BaseController;
use app\model\Jobs;

class Index extends BaseController
{
    public function index()
    {
    }

    public function hello($name = 'ThinkPHP6')
    {
        return $name;
    }
}
