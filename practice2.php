<?php
echo "\n------PHP/Laravel 03 課題------\n"; 


echo "\n------課題１------\n";
$name = "yuuki";

if($name == "yuuki"){
    echo "私はあなたの名前です。" . "\n";
} else {
    echo "あなたの名前ではありません。" . "\n";
}


echo "\n------課題２------\n";
$total = 0;
for ($i = 0; $i <= 10000; $i ++) {
    $total+=$i;
}
echo $total ."\n";


echo "\n------課題３------\n";
$fruits = array("apple","banana","grape","peach","lemon");
foreach ($fruits as $fruit){
    echo "I like " . $fruit;
    echo "\n";
}

echo "\n------課題４------\n";
/*for文の初めの値を定義する。*/
$start = 1;
/*for文の終わりの値を定義する。*/
$end = 100;

for($i = $start; $i <= $end; $i++){
    if($i % 5 ==0){
        echo $i ."\n";
    }
}