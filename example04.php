<?php
/*
* @file: example04.php
* @brief: PHP面向对象——继承
* @author: feihu1996.cn
* @date: 下午7:30 18-8-3
* @version: 1.0
*/
ini_set('display_errors', true);
error_reporting(E_ALL);

class Dad{
    /*
    如果使用final关键字修饰类或者类的函数，
    则该类或者函数则不能被继承或重载
    */
    public function __construct(){  // 子类没有定义构造函数时会自动调用父类的构造函数
        echo "dad init ...";
        echo "\n\r";
    }
    public function Kungfu(){
        echo "降龙十八掌";
        echo "\n\r";
    }
    private function walk(){ // 只有类本身可以访问
        echo "走路...";
        echo "\n\r";
    } 
    protected function race(){  // 只有类本身和子类内部可以访问
        echo "赛跑...";
        echo "\n\r";
    }
    public function eat(){
        echo "吃饭";
        echo "\n\r";
    }
}

class Boy extends Dad{
    public function __construct(){
        parent::__construct();  // 在子类中手动调用父类的构造函数
        echo "boy init ...";
        echo "\n\r";     
    }
    public function run(){
        $this->race();
    }
    public function eat(){  // 重载父类函数
        echo "喝酒...";
        echo "\n\r";
    }
}

$boy = new Boy();
$boy->Kungfu();  // 子类实例调用父类方法
$boy->run();
$boy->eat();