<?php
/*
* @file: main.php
* @brief: PHP面向对象——全局命名空间
* @author: feihu1996.cn
* @date: 上午9:01 18-8-4
* @version: 1.0
*/

namespace main;

include "global.php";

// $global1 = new Global1();  // 对于类，PHP解释器只会在当前main命名空间下寻找Global1类，而当前main命名空间下不存在Global1类，所以会报错
$global1 = new \Global1();  // 加上反斜杠，PHP解释器首先会在当前main命名空间下寻找Global1类，没有找到，再去全局命名空间中寻找

echo GLOBAL3;  // 对于函数和常量，PHP解释器首先会在当前main命名空间下寻找，没有找到，再去全局命名空间中寻找
echo "\r\n";

function global4(){
    echo "global4 in main ...";
    echo "\r\n";    
}

global4();
