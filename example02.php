<?php
/*
* @file: example02.php
* @brief: PHP面向对象——构造函数和析构函数
* @author: feihu1996.cn
* @date: 下午6:32 18-8-3
* @version: 1.0
*/

class Computer{
    public function __construct($high=0){  // 构造函数
        if($high){
            echo "高配cpu就绪...";
            echo "<br />";
            echo "高配主板就绪...";
            echo "<br />";
            echo "高配内存就绪...";
            echo "<br />";
        } else{
            echo "cpu就绪...";
            echo "<br />";
            echo "主板就绪...";
            echo "<br />";
            echo "内存就绪...";
            echo "<br />";
        }
    }

    public function play(){
        echo "---玩游戏---";
        echo "<br />";
    }

    public function __destruct(){  // 析构函数
        echo "关闭电源...";
        echo "<br />";
    }
}

$computer = new Computer($high=1);  // 实例化对象时为构造函数传参
$computer->play();
// unset($computer); // 手动销毁对象
