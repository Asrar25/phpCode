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
    body{
        background-color: white;
  padding: 25px;
}
.editbox{
  width:70px;

  color:black;
  border:none;
}

.container{
  width: 720px;
  height: 440px;
  margin: 0 auto;
  padding-left: 32px;
  padding-right: 32px;
  padding-top: 40px;
  border-radius: 12px;

  font-family: Lato;
}

.container h2{
  text-align: center;
}

table{
  margin: 0 auto;
}

td, th {
  padding: 12px;
  border: 2px dotted;
}
.boxs{
    height:20px;
    width:40px;
    border:none;
}

    </style>
    </head>
 
    <body>
        <form method="get" >
       Enter Name : <input type="text" name="student_name" style="border: none;border-bottom: 2px solid red;">Enter Exam : <input type="text" name="examname" style="border: none;border-bottom: 2px solid red;">
       
        <input type="submit" name="view" value="view">
    </form>
  <?php 
  
$host="localhost";
$un="root";
$password="";
$db="student_info";
$port =3001;
$db_role="";

$con =mysqli_connect($host,$un,$password,$db,$port);
  
?>
    <div class="container">
    <?php  
            if(isset($_GET['view'])){
                $name =$_GET['student_name'];
               $exam=$_GET['examname'];
                $sql ="SELECT * FROM students_marks WHERE student_name='$name' AND exam_name='$exam'";
                $result =mysqli_query($con,$sql);
                    $id=1;
                    $max=0;
               if(mysqli_num_rows($result) > 0){
                while($each_row = mysqli_fetch_array($result)){
                      $tname=$each_row["student_name"];
                      $tclass=$each_row["class"];
                      $texam=$each_row["exam_name"];
                      $m1=$each_row["tamil"];
                        $m2=$each_row["english"];
                        $m3=$each_row["maths"];
                        $m4=$each_row["science"];
                        $m5=$each_row["social"];
                        $t=$m1+$m2+$m3+$m4+$m5;
                    ?>
      <table>
        <form action="#" method="post">
        <thead>
          <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Class</th>
            <th>Exams</th>
            <th>Tamil</th>
            <th>English</th>
            <th>Maths</th>
            <th>Science</th>
            <th>Social</th>
            <th>Total</th>
          <tr>  
        </thead>
        <tbody>
            
                    <tr>
                        <td><input type="number" value="<?php echo $id;?>" class ="boxs"></td>
                        <td><input class ="boxs"type="text" name="name" value="<?php echo $tname;?>"></td>
                        <td><input class ="boxs"type="number" name="class"value="<?php echo $tclass;?>"></td>
                        <td><input class ="boxs"type="text" name="exam"value="<?php echo $texam;?>"></td>
                        
                        <td><input class ="boxs"type="number" name="tamil"value="<?php echo $m1;?>"></td>
                        <td><input class ="boxs"type="number" name="english"value="<?php echo $m2;?>"></td>
                        <td><input class ="boxs"type="number" name="maths"value="<?php echo $m3;?>"></td>
                        <td><input class ="boxs"type="number" name="science"value="<?php echo $m4;?>"></td>
                        <td><input class ="boxs"type="number" name="social"value="<?php echo $m5;?>"></td>
                        <td><input class ="boxs"type="number" value="<?php echo $t;?>"></td>
                    </tr>
                    
                    <?php $id++; }    ?>
        </tbody>
         
        <tfoot>
          <tr>
            <td colspan=10 style="text-align:center;"><input type="submit" value="save changes"></td>
          </tr>
        </tfoot> 
        <?php }else {
    echo "<tr><td colspan='10'>Record Not Found</td></tr>";
}
                ?>
        </form>
        </table>
        <?php
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $uname=$_POST['name'];
            $uclass=$_POST['class'];;
            $uexam=$_POST['exam'];;
            $utamil=$_POST['tamil'];
            $uenglish=$_POST['english'];
            $umaths=$_POST['maths'];
            $uscience=$_POST['science'];
            $usocial=$_POST['social'];

            $sql2 ="UPDATE students_marks SET student_name='$uname',class='$uclass',exam_name='$uexam',tamil='$utamil',english='$uenglish',maths='$umaths',science='$uscience',social='$usocial' WHERE student_name='$uname' AND exam_name='$uexam'";

  if ($con->query($sql2) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
        }
    }
        ?>
        
      
    </div>
  </body>
</html>