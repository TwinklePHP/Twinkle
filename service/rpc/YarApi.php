<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 0:10
 */

namespace twinkle\service\rpc;

class YarApi
{

    public function __construct($obj)
    {
        $service = new \Yar_Server($obj);
        $service->handle();
    }

}