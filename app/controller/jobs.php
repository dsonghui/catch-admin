<?php

namespace app\controller;

use app\BaseController;
use app\model\Jobs as JobsModel;
use app\transformers\JobTransformer;
use catchAdmin\permissions\model\Job as JobModel;
use catcher\base\CatchRequest;
use catcher\CatchResponse;

class Jobs extends BaseController
{

    protected $job;

    public function __construct(JobModel $job)
    {
        $this->job = $job;
    }

    /**
     * 列表
     *
     * @time 2020年01月09日
     * @param CatchRequest $request
     * @return \think\response\Json
     * @throws \think\db\exception\DbException
     */
    public function index(): \think\response\Json
    {
        return CatchResponse::paginate($this->job->getList());
    }
}
