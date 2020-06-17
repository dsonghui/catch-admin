<?php
/**
 * Author: david.deng<david.deng@jcinfotech.com>
 * Date: 2017/2/21
 */

namespace app\common\traits;

use app\common\serializer\CustomSerializer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;
use think\Collection as TPCollection;
use think\Paginator;
use think\Response;


trait ResponderTrait
{
    protected function responseCollection(TPCollection $data, TransformerAbstract $transformer, $code = 200, $type = 'json') {
        $resource = new Collection($data, $transformer);
        $manager = new Manager();
        $manager->setSerializer(new CustomSerializer());
        return Response::create($manager->createData($resource)->toArray(), $type, $code);
    }


    public function responseItem($item, TransformerAbstract $transformer, $code = 200, $type = 'json') {
        $resource = new Item($item, $transformer);
        $manager = new Manager();
        $manager->setSerializer(new CustomSerializer());
        return Response::create($manager->createData($resource)->toArray(), $type, $code);
    }

    public function responsePaginate(Paginator $paginator, TransformerAbstract $transformer) {
        // TODO
//        $resource = new Paginator($paginator, $transformer);
//        $manager = new Manager();
//        $manager->setSerializer(new CustomSerializer());
//        return $manager->createData($resource)->toJson();
    }

    public function responseData($data, $message = '操作成功', $code = 200, $type = 'json') {
        return Response::create([
            'message'     => $message,
            'status_code' => $code,
            'data'        => $data
        ], $type, 200);
    }

    public function responseSuccess($message = '操作成功', $code = 200, $type = 'json') {
        return Response::create([
            'message'     => $message,
            'status_code' => $code,
        ], $type, 200);

    }

    public function responseFailed($message = '操作失败', $errors = array(), $code = 200, $type = 'json') {
        return Response::create([
            'message'     => $message,
            'errors'      => $errors,
            'status_code' => $code,
        ], $type, 400);
    }

    public function responseError($message = '未知错误', $code = 200, $type = 'json') {
        return Response::create([
            'message'     => $message,
            'status_code' => $code,
        ], $type, 500);
    }
}
