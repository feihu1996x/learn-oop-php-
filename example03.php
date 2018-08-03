<?php
/*
* @file: example03.php
* @brief: PHP面向对象——类常量
* @author: feihu1996.cn
* @date: 下午6:53 18-8-3
* @version: 1.0
*/
ini_set('display_errors', true);
error_reporting(E_ALL);

class Computer{
    const YES = true;
    const NO = false;
    const ONE = 1;

    const TWO = self::ONE + 1;  // self指向类本身
    const THREE = self::TWO + 1;
}

var_dump(Computer::YES);  // 在类的外部访问类常量

