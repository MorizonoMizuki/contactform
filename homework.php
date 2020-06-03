<?php 

//問題１
for ($i =100; $i >= 1; $i --) {
    echo $i . '<br>';
}

echo'<br>';

//問題２
for ( $i = 1; $i <= 9; $i++) {
    echo $i * 3 . ' ';
}

echo'<br>';

//問題３
for ($i = 1; $i <= 100; $i++) {
    echo '<br>';
    if($i % 3 == 0 && $i % 5 == 0) {
        echo 'fizzbazz';
    }elseif($i % 3 == 0) {
        echo 'fizz';
    }elseif($i % 5 == 0) {
        echo 'bazz';
    }else {
        echo $i;
    }
}

echo '<br>';
echo'<br>';

//問題４
for ($i = 1; $i <= 100; $i++) {
    echo $i.' ';
    if ($i % 10 == 0) {
        echo '<br>';
    }
}

echo'<br>';

//問題５解説して欲しい
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

$i = 0 ;
foreach($alpha as $x) {
    if ($x == 'A') {
        $i++;
    }
}
echo $i;


echo'<br>';echo'<br>';


//問題６
$english = 10; //英語の点数
$math = 70; //数学の点数
$total = $english + $math; //数学と英語を合わせた点数

if ($english >= 60 && $math >= 60 && $total >= 140) {
    echo '合格';
}else{
    echo '不合格';
}

echo'<br>';echo'<br>';


//問題７
for ($i = 1; $i <= 9; $i++) {
    echo ' <br>';
    for ($x = 1; $x <= 9; $x++) {
        echo $i * $x . ' ';
    }
}

echo'<br>';echo'<br>';


//問題８ 素数が理解できない
$primeNumbers = [];
for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        if ($i % $j === 0 && $j < $i) {
            break;
        } 

        if ($i === $j) {
            $primeNumbers[] = $i;
        }
    }
}
print_r($primeNumbers);

// 練習１５

$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];
foreach ($fruits as $key => $value) {
  echo $key . ' = ' . $value . '<br>';
}

echo'<br>';

?>