<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        /*style.css*/
body {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: sans-serif;
    line-height: 1.5;
    min-height: 100vh;
    background: #f3f3f3;
    flex-direction: column;
    margin: 0;
}

.main {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    transition: transform 0.2s;
    width: 500px;
    text-align: center;
}

h1 {
    color: #4CAF50;
}

label {
    display: block;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 5px;
    text-align: left;
    color: #555;
    font-weight: bold;
}


input {
    display: block;
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 15px;
    border-radius: 10px;
    margin-top: 15px;
    margin-bottom: 15px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: #4CAF50;
    width: 100%;
    font-size: 16px;
}

.wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}

      </style>
</head>
<body>
<div class="main">
            <h1>Login Form</h1>
            <h3>Enter your login credentials</h3>
            <form action="login.php" method="post">
                  <label for="first">
                        Username:
                  </label>
                  <input type="text" 
                         id="first" 
                         name="uname"
                         placeholder="Enter your Username" required>

                  <label for="password">
                        Password:
                  </label>
                  <input type="password"
                         id="password" 
                         name="psw" 
                         placeholder="Enter your Password" required>

                  <div class="wrap">
                        <button type="submit"
                                onclick="solve()" value="login">
                              Submit
                        </button>
                  </div>
            </form>
            <p>Not registered?
            <a style="text-decoration: none;" href="register.php">
                        Create an account
                  </a>
            </p>
      </div>
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

  $sql ="SELECT * FROM login WHERE username='$username'";
 $result =mysqli_query($con,$sql);
 $db_password='';$db_nam='';
 while($each_row = mysqli_fetch_array($result)){
    $db_password=$each_row["password"];
    $db_nam=$each_row["name"];
}
if(mysqli_num_rows($result) > 0){
if($upassword==$db_password){
  echo '<script>alert("Login Successfull")</script>'; 
    session_start();
    $_SESSION['name']=htmlentities($db_nam);
    header('Location: student.php');
}else{
  echo '<script>alert("Incorrect Password")</script>'; 
    
}
 } else{
  echo '<script>alert("Invalid UserName")</script>'; 
    
}
}?>
</body>
</html>

