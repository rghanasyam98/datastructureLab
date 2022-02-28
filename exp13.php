<html>
<body bgcolor="linen"><br>
<?php
$name=["SACHIN","ROHITH SHARMA","VIRAT KOHLI","SANJU SAMSON","KLRAHUL","DHONI","ASWIN","BUMRAH","SHAMI","SIRAJ","JADEJA"];
echo "<h1><u>TEAM INDIA</u></h1>
<table border='1px'>
<tr>
<th>Sl No</th>
<th>Players</th>
</tr>";

for($i=0;$i<11;$i++)
{
$sl=$i+1;

echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";

}
echo "</table>";
?>
</body>
</html>


