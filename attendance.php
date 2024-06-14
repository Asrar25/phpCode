<?php
session_start();
 $name= $_SESSION['name']; ?>
<?php 

$host="localhost";
$un="root";
$password="";
$db="student_info";
$port =3001;

?>

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
  background-color: white;
  padding: 25px;
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





    </style>
  <body>
    <div class="container">
      <h2><?php echo $name.' '.'Attendance';?></h2>
      <?php 
            $host="localhost";
            $un="root";
            $password="";
            $db="student_info";
            $port =3001;
            $db_role="";
            
           
     ?>
     <table border="0">
      <thead>
      <tr>
        <th>SI</th>
        <th>From</th>
        <th>To</th>
        <th>Present</th>
        <th>Absent</th>
        <th>Total School Day</th>
</tr>  
    </thead>
    <tbody><?php
     $con =mysqli_connect($host,$un,$password,$db,$port);
            
     $sql ="SELECT * FROM student_attendance WHERE student_name='$name'";
         
$result =mysqli_query($con,$sql);

$id=1;
  while($each_row = mysqli_fetch_array($result)){
         $from=$each_row['start'];
         $to=$each_row['end'];
         $present=$each_row['present'];
         $absent=$each_row['absent']; 
         $total=$present+$absent;
         ?> 
         <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $from;?></td>
        <td><?php echo $to;?></td>
        <td><?php echo $present;?></td>
        <td><?php echo $absent;?></td>
        <td><?php echo $total;?></td>
  </tr>  
    </tbody>
    <?php
         $id++;  
  }
      ?>
      
    
      </table>
    </div>
  </body>
</html>