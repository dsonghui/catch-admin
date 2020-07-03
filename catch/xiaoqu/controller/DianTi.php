<?php

namespace catchAdmin\xiaoqu\controller;

use catcher\Utils;
use think\Request;
use catcher\CatchResponse;
use catcher\base\CatchController;
use catchAdmin\xiaoqu\model\DianTi as DianTiModel;

class DianTi extends CatchController
{
    protected $model;

    public function __construct(DianTiModel $model) {
        $this->model = $model;
    }

    /**
     * 列表
     *
     * @time 2020/05/17 19:55
     *
     * @return \think\Response
     */
    public function index() {
        return CatchResponse::paginate($this->model->getList());
    }

    /**
     * 保存
     *
     * @time 2020/05/17 19:55
     * @param Request Request
     * @return \think\Response
     */
    public function save(Request $request) {
        return CatchResponse::success($this->model->storeBy($request->post()));
    }

    /**
     * 读取
     *
     * @time 2020/05/17 19:55
     * @param $id
     * @return \think\Response
     */
    public function read($id) {
        return CatchResponse::success($this->model->findBy($id));
    }

    /**
     * 更新
     *
     * @time 2020/05/17 19:55
     * @param Request $request
     * @return \think\Response
     */
    public function update(Request $request, $id) {
        return CatchResponse::success($this->model->updateBy($id, $request->post()));
    }

    /**
     * 删除
     *
     * @time 2020/05/17 19:55
     * @param $id
     * @return \think\Response
     */
    public function delete($id) {
        $ids = Utils::stringToArrayBy($id);

        foreach ($ids as $_id) {
            $this->model->deleteBy($_id);
        }
        return CatchResponse::success($this->model->deleteBy($id));
    }


    /**
     * 获取电梯信息
     */
    public function detail(Request $request) {
        $dianti_id = $request->input('dianti_id');
        $dianti = $this->model->where('id',$dianti_id)->find();

        //return CatchResponse::success($this->model->with('diantis')->select());
    }

}
