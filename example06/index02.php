<?php
/*
* @file: index02.php
* @brief: PHP面向对象——类的自动加载(方案二, 推荐)
* @author: feihu1996.cn
* @date: 上午9:45 18-8-4
* @version: 1.0
*/

function autoload($class){
    require $class . ".php";
}

class Mono{
    function autoload($class){
        require $class . ".php";
    }
}

// spl_autoload_register('autoload');  // 注册自动加载函数
spl_autoload_register([new Mono, 'autoload']);  // 注册自动加载类

$test = new Test();
