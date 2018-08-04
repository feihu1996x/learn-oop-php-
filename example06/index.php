<?php
/*
* @file: index.php
* @brief: PHP面向对象——类的自动加载(方案一， 不推荐)
* @author: feihu1996.cn
* @date: 上午9:30 18-8-4
* @version: 1.0
*/

function __autoload($class){
    /*
    当程序员使用一个类时，
    PHP解释器首先调用__autoload函数，
    并且将类名当作函数参数，
    然后执行函数中的逻辑。
    这里是引入类所在的模块，
    从而实现了类的自动加载。    
    */
    require $class . ".php";
}

$test = new Test();
