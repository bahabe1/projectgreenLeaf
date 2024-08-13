<!DOCTYPE html>
<?php
$msg="";
?>
<?php
include("conn.php");
if(isset($_POST['btn'])){
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $ins="INSERT INTO login(username,password) values('$user','$pass')";
    $q=mysqli_query($connect,$ins);
    if($q==true){
       $msg=" create new account is successfull!!";
    }else{
        $msg="try again";
    }
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greenleaf signup</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Green Leaf SIGNUP  FORM</h1>
        <label for="">username</label>
        <input type="text" name="user" placeholder="enter yout username">
        <label for="">password</label>
        <input type="password" name="pass" placeholder="enter your password">
        <div>
            <h5>
          <?php
          echo $msg;
          ?>
           </h5>
        </div>
        <button name="btn">SIGNUP</button>
        <button name="new"><a href="login.php">LOGIN</a></button>
        
    </form>
    
</body>
</html>
