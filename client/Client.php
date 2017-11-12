<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 11:41
 */

namespace twinkle\client;


use twinkle\client\drivers\HttpClient;
use twinkle\client\drivers\YarClient;

class Client
{
    /**
     * @var YarClient | HttpClient
     */
    private $_driver = null;

    public function __construct($driver = 'Yar', $serviceUrl = '')
    {
        $driverClass = '\\twinkle\\client\\drivers\\' . $driver . 'Client';
        $this->_driver = new $driverClass($serviceUrl);
    }

    public function __call($name, $args = [])
    {
        return call_user_func_array([$this->_driver,$name],$args);
    }
}