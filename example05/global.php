<?php
/*
* @file: global.php
* @brief: PHP面向对象——命名空间
* @author: feihu1996.cn
* @date: 上午8:56 18-8-4
* @version: 1.0
*/

/*
    此脚本中没有使用namespace关键字，
    那么此脚本中所有的类（包括抽象类、traits）、接口、函数和常量都属于全局命名空间
*/

class Global1{
    public function __construct(){
        echo "Global1 ...";
        echo "\r\n";
    }
}

class Global2{
    public function __construct(){
        echo "Global2 ...";
        echo "\r\n";
    }
}

const GLOBAL3 = "Global3";

function global4(){
    echo "global4 ...";
    echo "\r\n";    
}