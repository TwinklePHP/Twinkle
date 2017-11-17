<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/16
 * Time: 22:42
 */

namespace twinkle\service\http;


class HttpApi
{
    private $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function parseRequest($method,$params = [])
    {
        $class = new \ReflectionClass($this->class);
        $instance = $class->newInstanceArgs($params);
        $method = $class->getMethod($method);
        $args = [];
        foreach ($method->getParameters() as $param) {
            $name = $param->getName();
            if (isset($params[$name])) {
                $args[$name] = $params[$name];
            } else {
                try {
                    $args[$name] = $param->getDefaultValue();
                } catch (\Exception $e) {

                }
            }
        }

        return [$instance,$method,$args];
    }
}