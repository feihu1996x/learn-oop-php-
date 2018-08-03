<?php
/*
* @file: example01.php
* @brief: PHP面向对象——类和对象
* @author: feihu1996.cn
* @date: 下午5:14 18-8-3
* @version: 1.0
*/
ini_set('display_errors', true);
error_reporting(E_ALL);
/* 脚本异常处理 */
set_error_handler("errorHandler");
register_shutdown_function("superErrorHandler");
function errorHandler($type, $message, $file, $line)
{
    $msg = (string)$type . " : " . (string)$message . " in " . (string)$file . " on " . (string)$line . " line.";
    throw new Exception($msg);
}

function superErrorHandler()
{
    if ($error = error_get_last()) {
        $type = $error['type'];
        $message = $error['message'];
        $file = $error['file'];
        $line = $error['line'];
        $msg = (string)$type . " : " . (string)$message . " in " . (string)$file . " on " . (string)$line . " line.";
        throw new Exception($msg);
    }
}

class Computer{
    /*
    访问控制关键字：
    public: 公有 
    private: 私有
    protected: 受保护
    */

    // 定义类的变量
    public $cpu = 'amd 5000';  
    public $mainboard = '华硕9000x';
    private $hd = 1024;

    // 定义类的函数
    public function play($gameName=""){
        echo $this->getHdSize();  // 在类的内部访问私有函数
        echo "<br>";
    }
    public function work($work="coding"){
        $this->play();
    }
    private function getHdSize(){
        return $this->hd;  // 在类的内部访问私有变量
    }
}
$computer = new Computer();  // 类的一个实例

// 访问对象属性
var_dump($computer);
echo "<br>";
var_dump($computer->cpu);
echo "<br>";
var_dump($computer->mainboard);
echo "<br>";
// var_dump($computer->hd);  // 实例对象不能访问私有属性
// echo "<br>";

// 访问对象方法
$computer->work();
