<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="psw"><b>Name : </b></label>
    <input type="text" placeholder="Enter Username" name="name" id="psw" required>


    <label for="psw"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="un" id="psw" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" id="psw-repeat" required>
    <label for="psw"><b>Class :</b></label>
    <input type="text" placeholder="Enter Username" name="class" id="psw" required>


    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $host="localhost";
    $un="root";
    $password="";
    $db="student_info";
    $port =3001;
    $db_role="";
    $stdname=$_POST['name'];
    $class=$_POST['class'];
    $uname=$_POST['un'];
    $stdpassword=$_POST['password'];
    $cpassword=$_POST['cpassword'];
  

    $con =mysqli_connect($host,$un,$password,$db,$port);
    if($stdpassword ==$cpassword){
    $sql ="INSERT INTO students_marks (student_name, class) VALUES ('$stdname', $class)";

;   $sql2="INSERT INTO login(name,username,password,role)VALUES('$stdname','$uname','$stdpassword','Student')";
            if($con->query($sql2)==TRUE){       
    if ($con->query($sql) === TRUE) {
      echo "Added Successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
  }else{
    echo "Error: " . $sql2 . "<br>" . $con->error;
  }
  }else{
    echo 'Password doesnot match';
  }


  }
    ?>

</body>
</html>
