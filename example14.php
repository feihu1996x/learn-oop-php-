<?php
/*
* @file: example14.php
* @brief: PHP面向对象——抽象基类
* @author: feihu1996.cn
* @date: 下午16:25 18-8-4
* @version: 1.0
*/

abstract class A{
    /*
    定义为抽象的类不能被实例化
    */

    public function eat(){
        echo "eating ...";
        echo "\r\n";
    }

    public function sleep(){}
}

class B extends A{
    public function sleep(){
        echo "sleeping ...";
        echo "\r\n";
    }
}

$ins = new B();
$ins->eat();
$ins->sleep();
