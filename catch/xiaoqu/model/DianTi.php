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

namespace catchAdmin\xiaoqu\model;

use catchAdmin\xiaoqu\model\search\DianTiSearch;
use catcher\base\CatchModel as Model;

class DianTi extends Model
{

    use DianTiSearch;

    protected $name = 'xq_dianti';

    protected $field = [
        'id', //
        'name', // 电梯名称
        'bian_hao', // 电梯编号
        'xiaoqu_id', // 电梯编号
        'creator_id', // 创建人ID
        'status', // 1 正常 2 停用
        'sort', // 排序字段
        'address', // 描述
        'created_at', // 创建时间
        'updated_at', // 更新时间
        'deleted_at', // 删除状态，null 未删除 timestamp 已删除
    ];

    /**
     * 列表
     *
     * @time 2020年01月09日
     * @param $params
     * @return \think\Paginator
     * @throws \think\db\exception\DbException
     */
    public function getList()
    {
        return $this->catchSearch()
            ->paginate();
    }
}
