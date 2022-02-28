<?php
$arr=["tom","abin","shyam","sreehari","midun"];
$t=$arr;
echo "STUDENT PROGRAM";
echo "<br><br>";
echo "Display using print_r<br>";
print_r($t);
echo "<br><br>";
echo "Sorting using asort()<br>";
asort($t);
print_r($t);
echo "<br><br>";
echo "Sorting using arsort()<br>";
arsort($t);
print_r($t);
?>
