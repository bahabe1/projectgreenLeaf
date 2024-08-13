
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    $msg="";
    $id="";
    
    include("conn.php");
   // if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['btn'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $sel="SELECT * FROM login WHERE username='$user' AND password='$pass'";
        $query=mysqli_query($connect,$sel);
        $res=mysqli_fetch_array($query);
        $res['managerid']=$id;
        if(mysqli_num_rows($query)<1){
            $_SESSION['msg']="login failed,user not found!";
            
        }else{
            $res=mysqli_fetch_array($query);
            $_SESSION['id']=$res['managerid'];
            header("location:index.php");
            $_SESSION['id']=$id;
            }
            
        

            
          /*  if(($user==$row['username'])and($pass==$row['password'])){
            header("location:home.php");    
            }else{
                $msg="username and password is incorrect";
            }*/
    }

    ?>
<head>
    <link rel="stylesheet" href="assets/css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>green leaf </title>
</head>
<body>
    <form action="" method="POST">
        <h1>Green Leaf LOGIN FORM</h1>
        <label for="">username</label>
        <input type="text" name="user" placeholder="enter yout username">
        <label for="">password</label>
        <input type="password" name="pass" placeholder="enter your password">
        <div>
            <h5>
          <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
           unset($_SESSION['msg']);

        }
          ?>
        </div>
        <button name="btn">LOGIN</button>
        <button name="new"><a href="signup.php">SIGNUP</a></button>
    </form>
    
</body>
</html>