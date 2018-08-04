<?php
/*
* @file: example15.php
* @brief: PHP面向对象——单例模式
* @author: feihu1996.cn
* @date: 下午16:47 18-8-4
* @version: 1.0
*/

class Test{
    private static $_instance = null;
    private function __construct(){
        echo "init ...";
        echo "\r\n";
    }
    private function __clone(){}
    public static function getInstance(){
        if (!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}

// $test, $test1, $test2, $test3指向的是内存中同一个对象
$test = Test::getInstance();
$test1 = Test::getInstance();
$test2 = Test::getInstance();
$test3 = Test::getInstance();
