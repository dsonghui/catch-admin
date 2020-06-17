<?php

namespace app\controller\api;

use app\BaseController;
use app\common\traits\ResponderTrait;
use app\transformers\BaseTransformer;
use catchAdmin\xiaoqu\model\DianTi;
use catchAdmin\xiaoqu\model\XiaoQu;

class ApiXiaoQu extends BaseController
{
    use ResponderTrait;

    public function index() {
        $dianti = XiaoQu::where('id', '>', 0)->with('diantis')->select();
        return $this->responseCollection($dianti, new BaseTransformer());
    }

    public function info($id) {
        $dianti = XiaoQu::where('id', '=', $id)->with('diantis')->find();
        return $this->responseItem($dianti, new BaseTransformer());
    }
}
