<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];

    $delta = pow($b,2) - 4*$a*$c;
    $ketqua = "";
    if ($a == 0) {
        if ($b == 0) {
            $ketqua = "vo so nghiem";
        } else {
            $x1 = -$c/$b;
            $ketqua = "PT co 1 nghiem duy nhat ".$x1;
        }
        
    } else {
        if ($delta == 0) {
            $x1 = -$b/(2*$a);
            $ketqua = "PT co nghiem kep ".$x1; 
        }if ($delta < 0) {
            $ketqua = "Phương trình vô nghiệm trong tập số thực";
        } else {
            $x1 = ((-$b+sqrt($delta))/(2*$a));
            $x2 = ((-$b-sqrt($delta))/(2*$a));

            $ketqua = "PT co 2 nghiem phan biet ".$x1."  và  ".$x2;
        }
    }
    echo "Ket Qua: ".$ketqua
?>