<?php

echo "Multiplacation table for numbers from 2 to 10";
echo "<br>";
for($num1=2; $num1<=10; $num1++){
  
    for($num2=1; $num2<=10; $num2++){

       $result = ($num1*$num2);
       echo "$num1 x $num2 = $result";
       echo "<br>";
       ;
   }
   echo"<br>------------------------<br>";
}





?>