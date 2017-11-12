<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 12:04
 */

namespace twinkle\client\drivers;


abstract class BaseClient
{

    protected $_client = null;

    public function __construct($serviceUrl = '')
    {
        $this->init($serviceUrl);
    }

    abstract function init($serviceUrl);

}