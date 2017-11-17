<?php

/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 10:30
 */

require '../vendor/autoload.php';

class TestHttpController
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

$body = file_get_contents('php://input');
$_POST = json_decode($body,true);
$method = $_POST['method'];
unset($_POST['method']);
exit(json_encode(call_user_func_array([new TestHttpController(),$method],$_POST)));
