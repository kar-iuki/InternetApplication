<?php

require_once 'class.php';


$user = new fnc();

print  $user->user_age("name", "1974 ");

$arr = ["black", "white", "green", "red"];

foreach ($arr as $color) {
    // print $color . "<br>";
    print $_SERVER["PHP_SELF"];
}

print dirname(_FILE_);
if(file_exists("index.php")){
    print "yes";
}
else{
    print "no";
}