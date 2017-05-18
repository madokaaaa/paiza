<?php
    $input_lines=trim(fgets(STDIN));
    $a=explode(" ",$input_lines);
    echo round($a[0]/$a[1])." ";
    echo $a[0]%$a[1];


 ?>
