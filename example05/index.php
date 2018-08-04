<?php
/*
* @file: index.php
* @brief: PHP面向对象——命名空间
* @author: feihu1996.cn
* @date: 上午8:21 18-8-4
* @version: 1.0
*/

include 'test01.php';
include 'test02.php';

/*
    类（包括抽象类、traits）、接口、函数和常量会受到命名空间的影响;
    使用define方法定义的常量是超全局常量，不受命名空间的影响
*/

$coding = new venter\session\Coding();  // 实例化指定命名空间下的Coding类
$coding = new venter\Coding();

venter\play();  // 调用指定命名空间下的函数
venter\session\play();

echo venter\FOOD;  // 访问指定命名空间下的常量
echo "\r\n";

echo venter\session\FOOD;
echo "\r\n";

use venter\session\Coding;  // 声明接下来要使用的Coding类来自venter\session命名空间
$coding = new Coding();

use venter\Coding as Coding2;  // 声明接下来要使用的Coding2类来自venter命名空间, 并且是Coding类的别名
$coding = new Coding2();

use function venter\session\play;  //  声明接下来要使用的play函数来自venter\session命名空间
play();

use const venter\FOOD;  // 声明接下来要使用的FOOD常量来自venter命名空间
echo FOOD;
echo "\r\n";
