

<html>

<body>

<h2> Registrations</h2>

<?php

if(isset($_POST["submit"]))

{

$con=mysqli_connect("localhost","root","", "book");

$bno=$_POST["bno"];

$name=$_POST["name"];
 $author= $_POST["author"];

$price=$_POST["price"];
$edition=$_POST["edition"];
$publisher=$_POST["publisher"];

$sql="INSERT INTO book1(bno, title, author, price,edition,publisher) VALUES ($bno, '$name', '$author', $price,$edition,'$publisher')";

$result=mysqli_query($con, $sql);
if($result)

{

echo "<script>alert('Succesfully Registered....')</script>";
}
}

?>

<form method="post" action="#">

book number:<input type="text" name="bno"><br>

title:<input type="text" name="name"><br>

author:<input type="text" name="author"><br>

price:<input type="text" name="price"><br> 

edition:<input type="text" name="edition"><br> 

publisher:<input type="text" name="publisher"><br> 

<input type="submit" name="submit">

</form>

</body> 
</html>
