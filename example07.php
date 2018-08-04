<?php
/*
* @file: example07.php
* @brief: PHP面向对象——static关键字
* @author: feihu1996.cn
* @date: 上午8:21 18-8-4
* @version: 1.0
*/

class Person{
    public static $hand = "手";  // 类的静态变量
    public static $foot = "脚";

    public static function work(){  // 类的静态函数
        echo self::$hand;  // 在类的内部访问类的静态变量
        echo "working ...";
        echo "\r\n";
    }
}

class Kid extends Person{
    public function __construct(){
        parent::work();  // 在子类的内部访问父类的静态函数
    }
}

echo Person::$hand;  // 访问类的静态变量
echo "\r\n";
echo Person::$foot;
echo "\r\n";

Person::work();  // 访问类的静态函数

// Person()->work();  // 实例不能访问类的静态属性和方法

$xiaoming = new Kid();
