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
    public function __construct($params)
    {
        $class = '\\twinkle\\service\\' . $params['type'] . '\\' . $params['driver'] . 'Api';
        new $class($params['object']);
    }
}