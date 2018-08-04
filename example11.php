<?php
/*
* @file: example11.php
* @brief: PHP面向对象——类型约束
* @author: feihu1996.cn
* @date: 下午14:35 18-8-4
* @version: 1.0
*/

class A {
    public function go(){
        echo "go in A";
        echo "\r\n";
    }
}

function test(A $a) {  // 将参数$a限定为类A的实例
    $a->go();
}

test(new A());
