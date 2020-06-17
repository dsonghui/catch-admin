<?php
/**
 * Created for someline-starter.
 * User: Libern
 */

namespace app\transformers;

use League\Fractal\TransformerAbstract;

class BaseTransformer extends TransformerAbstract
{
    /**
     * @return array
     */
    public function transform($collect) {
        return $collect->toArray();
    }

}
