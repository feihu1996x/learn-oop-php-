<?php
/*
* @file: example09.php
* @brief: PHP面向对象——魔术方法
* @author: feihu1996.cn
* @date: 上午13:07 18-8-4
* @version: 1.0
*/

class Test{
    private $abc = '';

    public function __set($var, $val){
        $this->$var = $val;
    }

    public function __get($var){
        return $this->$var;
    }

    public function __isset($var){
        return false;
    }

    public function __unset($var){
        echo "__unset:".$var;
        echo "\r\n";
        unset($this->$var);
    }

    public function __call($func_name, $arguments){
        echo $func_name;
        echo "\r\n";
        print_r($arguments);
    }

    public static function __callStatic($func_name, $arguments){
        echo $func_name;
        echo "\r\n";
        print_r($arguments);
    }

    public function __invoke($args){
        print_r($args);
        echo "\r\n";
    }

    public function __toString(){
        return "Test ...";
    }
}

$test = new Test();

$test->abc = 'abc';  // 会自动调用__set
echo $test->abc;  // 会自动调用__get
echo "\r\n";

var_dump(isset($test->abc));  // 会自动调用__isset

unset($test->abc);  // 会自动调用__unset

$test->not_exist(1, 'ok');  //  test对象并没有not_exist()方法，会自动调用__call

Test::not_exist(1, 'ok');  // Test类并没有定义名为not_exist的静态函数，会自动调用__callStatic

$test(1, 2, 3, 4, 5, 6);  // test是一个对象，并不是一个函数，会自动调用__invoke

echo $test;  // __toString会返回对象的字符串表示
echo "\r\n";
