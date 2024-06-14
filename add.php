<!DOCTYPE html>
<html>

<head>
  <title>Student Marks</title>
  <style>
    form {
      margin: auto;
      width: min(600px, 80%);
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-image:
        url('https://images.unsplash.com/photo-1619279302118-43033660826a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select,
    #dob {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
      opacity: 0.5;
    }

    textarea {
      height: 100px;
      resize: vertical;
    }

    .checkboxes {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 20px 0;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
    }

    .checkbox {
      display: flex;
      align-items: flex-start;
      margin-right: 20px;
    }

    .checkboxes label {
      margin-right: 20px;
    }

    table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }

    table th,
    table td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
      color: #fff;
      font-size: 18px;
    }

    .buttons {
      display: flex;
      justify-content: center;
    }

    .buttons button {
      background-color: #854d28;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      width: 150px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
    }

    .buttons button:hover {
      background-color: #6e4225;
    }
  </style>
</head>

<body>
  <form action="#" method="post">
    <h2>Student Registration Form</h2>

    <label for="first-name">Name:</label>
    <input type="text" id="first-name" name="name" required>

    <label for="first-name">UserName:</label>
    <input type="text" id="first-name" name="un" required>

    <label for="first-name">Password :</label>
    <input type="password" id="first-name" name="password" required>

    <label for="first-name">Comform-Password :</label>
    <input type="password" id="first-name" name="cpassword" required>

    <label for="exam">Class :</label>
    <input type="text" name="class" required>

    <div class="buttons">
      <button type="submit">ADD</button>
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

