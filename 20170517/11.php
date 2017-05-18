<?php
    $input_lines=trim(fgets(STDIN));
    $a="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
for ($i=0; $i < 26; $i++) {
    if($a[$i] == $input_lines){
    echo $i+1;
    }
}
 ?>
