<html> 
<body> 
<h1>Electricity Bill</h1> 
<form method="post" action="#"> 
Consumer ID:<input type="number" name="id"><br> 
Name: <input type="text" name="name"><br>  
Units consumed: <input type="number" name="units"><br><br> 
<input type="submit"> 
</form>
 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
$id= $_POST['id']; 
$name = $_POST['name']; 
$units = $_POST['units'];  

if($units<=100) 
{ 
$amt=$units*3; 
} 
else if($units>100 && $units<=200) 
{ 
$amt=$units*4; 
}
else if($units>200 && $units<=300) 
{ 
$amt=$units*5; 
} 
else 
{ 
$amt=$units*5; 
} 

echo "<table border='1px'><tr><th>Consumer ID </th><th>$id</th> 
<tr><th> Consumer name </th><th> $name</th> </tr>
<tr><th>Units Consumed </th><th>$units</th></tr>
<tr><th>Amount To be Paid</th><th>$amt</th></tr></table>";
 
 } 
?>  
</body> 
</html>
