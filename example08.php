<?php
/*
* @file: example08.php
* @brief: PHP面向对象——后期静态绑定
* @author: feihu1996.cn
* @date: 上午12:47 18-8-4
* @version: 1.0
*/

class A {
    public static function who() {
        echo "A类的who方法";
        echo "\r\n";
    }

    public static function testA(){
        self::who();  // self始终会指向A类
    }

    public static function testB(){
        static::who();  // 后期静态绑定：static会根据上下文决定其指向哪个类
    }    
}

class B extends A {
    public static function who(){
        echo "B类的who方法";
        echo "\r\n";
    }
}

B::testA();
B::testB();
