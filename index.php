<!DOCTYPE html>
<html lang="en">
<head>index</head>
<body>
    <p>this is my first page</p>
    <?php
    //require_once "load.php";
    //print $Obj->user_age("Alex", 2004);
    require "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    ?>
</body>
</html>
