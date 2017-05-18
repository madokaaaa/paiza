<?php
    $word=trim(fgets(STDIN));
    $num=trim(fgets(STDIN));

    for($i=0;$i<$num;$i++){
        print "$word[$i]";
    }

 ?>
