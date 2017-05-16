<?php
    $input_lines=trim(fgets(STDIN));
    $a=explode(" ",$input_lines);
    for($i=0; $i<9; $i++){
        echo $a[0]+$a[1]*$i." ";
    }
    if($i=9){
        echo $a[0]+$a[1]*$i;
    }
 ?>
