<?php

$array = ['a' => 'a1' , 'b' => 'b1' , 'c' => 'c1'];

$array1 = array_keys($array);

$str = implode(' ',$array1);

echo $str;