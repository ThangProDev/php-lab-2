<?php
    $rong= $_POST['chieurong'];
    $dai= $_POST['chieudai'];
    $chuvi= ($rong+$dai) *2;
    $dientich= $rong*$dai;
    echo "Chu Vi: ".$chuvi." - Dien tich: ".$dientich;
?>