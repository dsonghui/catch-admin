<?php
namespace catchAdmin\xiaoqu\model\search;

trait XiaoQuSearch
{
    public function searchNameAttr($query, $value, $data)
    {
        return $query->whereLike('name', $value);
    }

    public function searchBianHaoAttr($query, $value, $data)
    {
        return $query->where('bian_hao', $value);
    }

    public function searchStatusAttr($query, $value, $data)
    {
        return $query->where('status', $value);
    }
}
