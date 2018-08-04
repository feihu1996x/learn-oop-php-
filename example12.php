<?php
/*
* @file: example12.php
* @brief: PHP面向对象——Trait关键字
* @author: feihu1996.cn
* @date: 上午14:42 18-8-4
* @version: 1.0
*/

/*
    PHP是单继承语言，
    而使用Trait，可以实现代码复用
*/

trait Power{
    public $isTurnOn = 0;

    public function startPower(){
        $this->isTurnOn = 1;
        echo "start power ...";
        echo "\r\n";
    }
}

trait Source{
    public function useSource(){
        echo "use source ...";
        echo "\r\n";
    }
}

trait Log{
    use Power, Source;

    public function startLog() {
        echo "start log ...";
        echo "\r\n";
    }   
    public function endLog() {
        echo "end log ...";
        echo "\r\n";
    }   
}

class Publish {
    use Log;
    public function __construct(){
        echo $this->isTurnOn;
        echo "\r\n";
    }
    public function __destruct(){
        echo $this->isTurnOn;
        echo "\r\n";
    }    
}
$publish = new Publish();
$publish->startPower();
$publish->useSource();
$publish->startLog();
$publish->endLog();
