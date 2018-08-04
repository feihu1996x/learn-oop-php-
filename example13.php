<?php
/*
* @file: example13.php
* @brief: PHP面向对象——接口
* @author: feihu1996.cn
* @date: 上午15:38 18-8-4
* @version: 1.0
*/

Interface Person{
    const ATTR = "human";
    public function eat();  // 接口中只能定义空方法
    public function sleep();
}

Interface Ia {
    public function read();
}

Interface Ib{
    public function coding();
}

Interface Ic{
    public function run();
}

Interface AB extends Ia, Ib{  // 接口之间的继承

}  

class A implements Person{  // 实现Person接口的类
    public function eat() {
        echo "eating ...";
        echo "\r\n";
    }

    public function sleep(){
        echo "sleeping ...";
        echo "\r\n";
    }
}

class B {
    public static function factory(Person $person){  // 限定传入参数必须是实现了Person接口的类的实例
        return $person;
    }
}

class C implements AB, Ic {
    public function read(){
        echo "reading ...";
        echo "\r\n";
    }

    public function coding() {
        echo "coding ...";
        echo "\r\n";
    }

    public function run(){
        echo "running ...";
        echo "\r\n";
    }
}

$person = B::factory(new A());

$person->eat();
$person->sleep();

echo Person::ATTR;  // 访问接口常量
echo "\r\n";
