<?php
//Anonymouse functions
$message = "Hello!";
$age = 25;
$hi = function($name)use($message,$age){
    return array($message,$name,$age);
};

// $msg = $hi("mark");
// print($msg[0].$smg[1].$smg[2]);
[$message,$name,$age] = $hi("mark");
print($message . "Name: $name" . "Age : $age");
?>