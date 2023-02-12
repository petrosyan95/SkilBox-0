<?php

$email = "hello@skillbox.ru";

$a = strpos($email,'@');

$a1 = substr($email,$a+1);

echo  $a1;