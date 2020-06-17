<?php

namespace app\controller\api;

use app\BaseController;
use app\common\traits\ResponderTrait;
use app\transformers\BaseTransformer;
use catchAdmin\xiaoqu\model\DianTi;

class ApiDianTi extends BaseController
{
    use ResponderTrait;

    public function index($id) {
        $dianti = DianTi::where('id', '=', $id)->with('xiaoqu')->find();
        return $this->responseItem($dianti, new BaseTransformer());
    }

    public function info($id) {
        $dianti = DianTi::where('id', '=', $id)
            ->with('xiaoqu')
            ->find();
        return $this->responseItem($dianti, new BaseTransformer());
    }
}
