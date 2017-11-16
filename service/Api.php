<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/11
 * Time: 23:49
 */

namespace twinkle\service;


class Api
{
    private $_instance;

    public function __construct($params)
    {
        $class = '\\twinkle\\service\\' . $params['type'] . '\\' . $params['driver'] . 'Api';
        $this->_instance = new $class($params['object']);
    }

    public function __call($name, $args = [])
    {
        return call_user_func_array([$this->_instance, $name], $args);
    }
}