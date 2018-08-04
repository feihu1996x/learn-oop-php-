<?php
/*
* @file: test01.php
* @brief: PHP面向对象——命名空间
* @author: feihu1996.cn
* @date: 上午8:13 18-8-4
* @version: 1.0
*/
namespace venter;  // 定义命名空间

class Coding {
    public function __construct(){
        echo "venter";
        echo "\r\n";
    }
}

function play(){
    echo "play in venter ...";
    echo "\r\n";
}

const FOOD = "venter's food";
