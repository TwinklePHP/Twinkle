<?php

/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 10:30
 */

require '../vendor/autoload.php';

class TestHttpController extends \yii\rest\Controller
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
        return $argv;
    }
}