<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title>Registration Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f3f3f3;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
 
            .main {
                background-color: #fff;
                border-radius: 15px;
                box-shadow: 0 0 20px
                    rgba(0, 0, 0, 0.2);
                padding: 20px;
                width: 300px;
            }
 
            .main h2 {
                color: #4caf50;
                margin-bottom: 20px;
            }
 
            label {
                display: block;
                margin-bottom: 5px;
                color: #555;
                font-weight: bold;
            }
 
            input[type="text"],
            input[type="number"] {
                width: 100%;
                margin-bottom: 15px;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
 
            button[type="submit"] {
                padding: 15px;
                border-radius: 10px;
                border: none;
                background-color: #4caf50;
                color: white;
                cursor: pointer;
                width: 100%;
                font-size: 16px;
            }
        </style>
    </head>
 
    <body>
<?php
$host="localhost";
$un="root";
$password="";
$db="student_info";
$port =3001;
$db_role="";
$con =mysqli_connect($host,$un,$password,$db,$port);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }else{
  echo "Connected successfully";}
?>
        <div class="main">
            <h2>Student Marks Editing</h2>
            <form action="#" method="post"></form>
                <label for="first">Student Name :</label>
                <input
                    type="text"
                    id="first"
                    name="name"
                    required
                />
 
                <label for="last">Exam Name :</label>
                <input
                    type="text"
                    id="last"
                    name="exam"
                    required
                />

                <label>Tamil :</label>
                <input
                    type="number"
                    id="email"
                    name="tamil"
                    required
                />
 
                <label>English :</label>
                <input
                    type="number"
                    id="email"
                    name="english"
                    required
                />

                
                <label>Maths :</label>
                <input
                    type="number"
                    id="email"
                    name="maths"
                    required
                />

                
                <label>Science :</label>
                <input
                    type="number"
                    id="email"
                    name="science"
                    required
                />

                
                <label>Social :</label>
                <input
                    type="number"
                    id="email"
                    name="social"
                    required
                />

                <button type="submit" name="addsave">
                    Save
                </button>
            </form>
            <?php 
if(isset($_POST['addsave'])){
$studentname=$_POST['name'];
$examname=$_POST['exam'];
$tam=$_post['tamil'];
$eng=$_POST['english'];
$mat= $_POST['mat'];
$sci=$_POST['sci'];
$soc=$_POST['soc'];

$sql ="UPDATE student_marks SET student_name=$studentname,class=$class,exam_name=$examname,tamil=$tam,english=$eng,maths=$mat,science=$sci,social=$soc,outoff=500 where student_name=$studentname AND exam_name=$examname";
                
  if($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
}
?>
        </div>
       
    </body>
</html>