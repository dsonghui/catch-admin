<?php

namespace catchAdmin\xiaoqu\controller;

use catcher\CatchAuth;
use catcher\Utils;
use think\Request;
use catcher\CatchResponse;
use catcher\base\CatchController;
use catchAdmin\xiaoqu\model\XiaoQu as XiaoQuModel;

class XiaoQu extends CatchController
{
    protected $model;

    public function __construct(XiaoQuModel $model)
    {
        $this->model = $model;
    }

    /**
     * 列表
     *
     * @time 2020/05/17 19:55
     *
     * @return \think\Response
     */
    public function index()
    {
        return CatchResponse::paginate($this->model->getList());
    }

    /**
     * 保存
     *
     * @time 2020/05/17 19:55
     * @param Request Request
     * @return \think\Response
     */
    public function save(Request $request, CatchAuth $auth)
    {
        $user = $auth->user();
        $post = $request->post();
        $post['shou_zi_mu'] = $post['shou_zi_mu'] ?? '';
        $post['creator_id'] = $user->id;
        return CatchResponse::success($this->model->storeBy($post));
    }

    /**
     * 读取
     *
     * @time 2020/05/17 19:55
     * @param $id
     * @return \think\Response
     */
    public function read($id)
    {
        return CatchResponse::success($this->model->findBy($id));
    }

    /**
     * 更新
     *
     * @time 2020/05/17 19:55
     * @param Request $request
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        return CatchResponse::success($this->model->updateBy($id, $request->post()));
    }

    /**
     * 删除
     *
     * @time 2020/05/17 19:55
     * @param $id
     * @return \think\Response
     */
    public function delete($id)
    {

        $ids = Utils::stringToArrayBy($id);

        foreach ($ids as $_id) {
            $this->model->deleteBy($_id);
        }
        return CatchResponse::success();
    }

    public function getAll()
    {
        return CatchResponse::success($this->model->field(['id', 'name'])->select());
    }

}
