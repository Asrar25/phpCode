<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>

<h2>Login Form</h2>


<form action="login.php" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >
        
    <button type="submit" value="login">Login</button>
    <br>
    <a href="register.php">Create Account</a>
  </div>
</form>
<?php 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 $username=$_POST['uname'];
 $upassword=$_POST['psw'];

 $host="localhost";
 $un="root";
 $password="";
 $port=3001;
 $db="student_info";
 $con =mysqli_connect($host,$un,$password,$db,$port);
 
 if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }else{
  echo "Connected successfully";}

  $sql ="SELECT * FROM login WHERE username='$username'";
 $result =mysqli_query($con,$sql);
 $db_password='';$db_nam='';
 while($each_row = mysqli_fetch_array($result)){
    $db_password=$each_row["password"];
    $db_nam=$each_row["name"];
}
if($upassword==$db_password){
    session_start();

    $_SESSION['name']=htmlentities($db_nam);
    header('Location: student.php');
}else{
    echo 'not equal';
}
 }

                    
                    ?>
</body>
</html>
