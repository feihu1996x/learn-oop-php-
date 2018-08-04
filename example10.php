<?php
/*
* @file: example10.php
* @brief: PHP面向对象——对象拷贝
* @author: feihu1996.cn
* @date: 下午14:05 18-8-4
* @version: 1.0
*/

class A {
    public $age = 0;
    public $height = 0;

    public $obj = null;

    public $obj1 = null;

    public function __clone(){
        $this->obj1 = clone $this->obj1;
    }
}

class B{
    public $sex = 0;
}

$a = new A();
$a->obj = new B();
$a->obj1 = new B();

$b = $a;  // 浅拷贝
$c = clone $a;  // 深拷贝，同时会自动调用__clone
$c->obj->sex = 1;  // $c->obj仍然是浅拷贝
$c->obj1->sex = 1;  // $c->obj是深拷贝

$b->age = 10;
$c->height = 180;

echo $a->age; // 10
echo "\r\n";

echo $a->height;  // 0
echo "\r\n";

echo $a->obj->sex;  // 1
echo "\r\n";

echo $a->obj1->sex;  // 0
echo "\r\n";
