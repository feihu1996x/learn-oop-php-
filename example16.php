<?php
/*
* @file: example17.php
* @brief: PHP面向对象——工厂模式
* @author: feihu1996.cn
* @date: 下午16:56 18-8-4
* @version: 1.0
*/

class Redis {
    public function get($k){
        echo "get $k";
        echo "\r\n";
    }

    public function set($k, $v){
        echo "set $k $v";
        echo "\r\n";
    }

    public function delete($k){
        echo "delete $k";
        echo "\r\n";
    }
}

class Cache {
    public static function factory() {
        return new Redis();
    }
}

$cache = Cache::factory();
$cache->get("hello");
$cache->set("hello", "world");
$cache->delete("hello");
