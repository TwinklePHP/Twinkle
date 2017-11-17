<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/11
 * Time: 23:58
 */

require '../vendor/autoload.php';

class TestYarController
{
    public function __construct($params = [])
    {
    }

    /**
     * 一个简单的测试
     *
     * @param string $argv
     * @return string
     */
    public function test($argv = 'default')
    {
        return ['argv'=>$argv];
    }
}

new \twinkle\service\Api([
    'type' => 'rpc',
    'driver' => 'Yar',
    'object' => new TestYarController()
]);