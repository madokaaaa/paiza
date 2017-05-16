<?php
    $input_lines=trim(fgets(STDIN));
    $a=explode(" ",$input_lines);

    switch ($a[1]) {
        case "cm":
        echo $a[0]*10;
            break;
        case "m":
        echo $a[0]*1000;
            break;
        case "km":
        echo $a[0]*100000;
            break;
    }

 ?>
