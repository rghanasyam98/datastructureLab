<html >

<head>
    
    <title>Form Validation</title>
</head>

<body>
    <h2>FORM VALIDATION</h2>
    <form name="form" action="#" method="POST">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="fname"> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"> </td>
            </tr>
            <tr>
                <th>Mob NO </th>
                <td><input type="tel" name="mob"> </td>
            </tr>
            <tr>
                <th>Username </th>
                <td><input type="text" name="user"> </td>
            </tr>
            <tr>
                <th>Password </th>
                <td><input type="password" name="password"> </td>
            </tr>
            <tr class="center">
                <th colspan="2"><input type="submit" value="submit" name="submit"></th>
            </tr>
        </table>
    </form>
<?php
    

    if(isset($_POST['submit'])){
        $name = $_POST['fname'];  
        $email = $_POST['email'];  
        $mobile = $_POST['mob'];  
        $user = $_POST['user'];  
        $password = $_POST['password'];

        if(empty($name)){
            echo "<script>alert('Enter First Name ')</script>";
        }
        else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<script>alert('Enter   Name only!!')</script>";
        }
        else if(empty($email)){
            echo "<script>alert('Enter Email !!')</script>";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
        echo "<script>alert('Enter valid Email !!')</script>";
        }
        else if(empty($mobile))
        {
        echo "<script>alert('Enter mobile number !!')</script>";
        }
        else if(!preg_match("/^[0-9]*$/",$mobile)){
            echo "<script>alert('Enter Valid Mobile Number !!')</script>";
        }
         else if (strlen($mobile) !=10) {
                echo "<script>alert('Enter valid Number...')</script>";
        }
        
        else if(empty($user)){
            echo "<script>alert('Enter User Name !!')</script>";
        }
        else if(empty($password)){
            echo "<script>alert('Enter Password !!')</script>";
        }
        else if (strlen($password) < 8) {
                echo "<script>alert('Your Password Must Contain At Least 8 Characters!')</script>";
        }
        
        else{
        echo "<script>alert('REGISTRATION SUCCESSFUL...')</script>";
               
            }
    
    }
?>
   
</body>
</html>
