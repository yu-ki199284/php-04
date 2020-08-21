<?php

echo "\n------PHP/Laravel 04 課題------\n";


echo "\n------課題１------\n";
function sum($max){
    $result = $max * 2;
    return $result; 
}
echo sum(10) . "\n";

echo "\n------課題２------\n";
function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(100,100) ."\n";

echo "\n------課題３------\n";
$arr=array(1,3,5,7,9);
function multiply ($arr){
    $result = 1;
    foreach ($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo multiply ($arr) ."\n";

echo "\n------課題４------\n";
$arr=array(1,25,50,200,1000);
function max_array($arr){
    $result=$arr[0];
    foreach ($arr as $a){
    if ($result < $a){
        $result = $a;
    } 
    }
    return $result;
}
    echo max_array($arr) ."\n";

echo "\n------課題５------\n";


echo "\n---課題5-1(strip_tags)---\n";
$str = "<h1>strip_tags関数</h1>"
. "<p> タグを取り除く。";
echo strip_tags($str) ."\n";


echo "\n---課題5-2(array_push)---\n";
$stack = array("apple","banana");
array_push ($stack,"orange","lemon");
print_r ($stack) . "\n";


echo "\n---課題5-3(array_merge)---\n";
$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];
$array = array_merge ($array1,$array2,$array3);

print_r($array) ."\n";


echo "\n---課題5-4(time, mktime)---\n";
$nextweek = time() + (7 * 24 * 60 * 60);
echo 'Now:      ' . date('Y-m-d') . "\n";
echo 'Nextweek ' . date('Y-m-d' , $nextweek) ."\n";
echo "\n";

$time = mktime(21);
var_dump(date('Y年m月d日H時i分s秒' , $time));

echo "\n---課題5-5(date)---\n";
$date = '2020-08-21';
echo date('Y/m/d' , strtotime($date)) ."\n";