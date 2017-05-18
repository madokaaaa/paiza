<?php
    $input_lines=trim(fgets(STDIN));
    $a=explode(" ",$input_lines);
     echo substr($a[0],$a[1]-1,1);
}
 ?>
