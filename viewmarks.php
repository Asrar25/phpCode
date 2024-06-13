

<!DOCTYPE html>
<html>
  <head>
    <title>MARKS SHEET USING HTML TABLES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="html, css, html tables, table">
    <meta name="Description" content="html table">
    <!-- add icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

  </head>
  <style>
    body{
  background-color: #c5cae9;
  padding: 25px;
}
.editbox{
  width:70px;
  background-color:#90a4ae;
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
  background-color: #90a4ae;
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
    </style>
  <body>
    <form method="post">
        <input type="text" name="student_name">
        <input type="submit" value="view">
    </form>
  <?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
$name =$_POST['student_name'];
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
  $sql ="SELECT * FROM login WHERE name='$name'";
                
  $result =mysqli_query($con,$sql);

      $id=1;
      $max=0;
      $outoff=0;
  while($each_row = mysqli_fetch_array($result)){
          $db_role=$each_row["role"];
  }

?>
    <div class="container">
      <h2><?php echo $name.' '.'Overall Marks';?></h2>
      <table>
        <thead>
          <tr>
            <th>SI</th>
            <th>Exams</th>
            <th>English</th>
            <th>Maths</th>
            <th>Science</th>
            <th>Social</th>
            <th>Total</th>
          <tr>  
        </thead>
        <tbody>
            <?php  
                $sql ="SELECT * FROM students_marks WHERE student_name='$name'";
                
                $result =mysqli_query($con,$sql);
             
                    $id=1;
                    $max=0;
                    $outoff=0;
                while($each_row = mysqli_fetch_array($result)){
                    
                        $m1=$each_row["english"];
                        $m2=$each_row["maths"];
                        $m3=$each_row["science"];
                        $m4=$each_row["social"];
                        $t=$m1+$m2+$m3+$m4;

                    
                    ?>


                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $each_row["exam_name"];?></td>
                        <td><?php echo $m1;?></td>
                        <td><?php echo $m2;?></td>
                        <td><?php echo $m3;?></td>
                        <td><?php echo $m4;?></td>
                        <td><?php echo $t;
                             if($max<=$t){$max=$t;}?></td>
                    </tr>
                    
                    <?php $id++; }
                    ?>
        </tbody>
         
        <tfoot>
          <tr>
            <td colspan=4>Maximum Marks:<?php echo $max;?> </td>
            <td colspan=3>Total Exam: <?php echo $id-1;?> </td>
          </tr>
        </tfoot> 
        <?php }?>
      </table>
    </div>
  </body>
</html>