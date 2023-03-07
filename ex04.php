<?php

//Khai báo
$age = 30;
var_dump($age);

//Ép kiểu
$age = (int)$age;
var_dump($age);

//Kiểm tra kiểu số nguyên có 2 cách: is_int và is_integer
// $check = is_int($age);
$check = is_integer($age);
var_dump($check);