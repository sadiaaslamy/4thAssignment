<?php

function rectangle($width,$length){
for ($i = 1; $i <= $length; $i++) {
    for ($j = 1; $j <= $width; $j++) {
        if ($i == 1 || $i == $length || $j == 1 || $j == $width)
            echo "* ";
        else
            echo "&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}
}
?>