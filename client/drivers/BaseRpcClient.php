<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 12:07
 */

namespace twinkle\client\drivers;


abstract class BaseRpcClient extends BaseClient
{
    public function __call($name, $args = [])
    {
        return call_user_func_array([$this->_client,$name],$args);
    }
}