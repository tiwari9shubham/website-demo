<!DOCTYPE html>
<html>
<body>

<?php
//echo strlen("Hello shubham world!");
//echo str_word_count("Hello shubham world!");
//echo strrev("Hello shubham world!");
//echo strpos("Hello world!", "world");
/*$x = 0;
 
while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}*/
/*$x = 0;
 
while($x <= 10) {
  echo  "The number is: $x <br>";
  $x+=10;
}*/
//  echo "Hello world!";
//}

//writeMsg(); // call the function
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);

?> 
 
</body>
</html>
