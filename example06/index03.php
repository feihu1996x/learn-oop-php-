<?php
/*
* @file: index03.php
* @brief: PHP面向对象——类的自动加载（结合命名空间）
* @author: feihu1996.cn
* @date: 上午8:21 18-8-4
* @version: 1.0
*/

/*
    最佳实践：命名空间+类名=类文件的路径
*/

spl_autoload_register(function($class){
    include str_replace("\\", "/", $class.".php");
});

$coding = new modules\Coding();
