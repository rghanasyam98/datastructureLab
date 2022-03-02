<html>



<body>

<h2>search</h2>



<?php

$con=mysqli_connect("localhost","root","" , "book");

if(isset($_POST["search"]))
 {

 $title=$_POST["t1"];

$sql="SELECT * FROM book1 WHERE title LIKE '%{$title}%'";
 $result=mysqli_query($con, $sql);

echo"<table border=1>";

echo"<tr><th>bookno</th><th>name</th><th>author</th><th>price</th><th>edition</th><th>publisher</th></tr>"; 
while ($row=mysqli_fetch_array($result))

{ echo"<tr><td>$row[0]</td>

<td>$row[1]</td>

<td>$row[2]</td>

<td>$row[3]</td>

<td>$row[4]</td>

<td>$row[5]</td>

</tr>";

}

}

echo"</table>";
?>

<form method="post" action="#">

Enter book name:<input type="text" name="t1"><br>

 <input type="submit" name="search" value="search">

</form>
</body>
</html>
