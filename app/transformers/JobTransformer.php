<?php

namespace app\transformers;

use app\model\Jobs;

/**
 * Class UserTransformer
 * @package namespace Someline\Transformers;
 */
class JobTransformer extends BaseTransformer
{

    /**
     * Transform the User entity
     *
     * @return array
     */
    public function transform(Jobs $job)
    {
        $jobItem = $job->toArray();
        return $jobItem;
    }
}
