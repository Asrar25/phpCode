<?php
session_start();
 $name= $_SESSION['name']; ?>
<?php 

$host="localhost";
$un="root";
$password="";
$db="student_info";
$port =3001;
$db_role="";

$con =mysqli_connect($host,$un,$password,$db,$port);

  $sql ="SELECT * FROM login WHERE name='$name'";
                
  $result =mysqli_query($con,$sql);

      $id=1;
      $max=0;
      $outoff=0;
  while($each_row = mysqli_fetch_array($result)){
          $db_role=$each_row["role"];
  }
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
      background-color: #f1f1f1;
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
iframe{
  overflow:hidden;  
 width: 100%;
 height: 550px; /* only for demonstration, should be removed */
 background-color: #f1f1f1;
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: black;
}

    </style>
  <body>
   <?php if($db_role=="student"):
    ?>
    <!-- Student  Access -->
    <h3 style=" display:inline-block;float: right;">STUDENT : <?php echo $name;?></h3>
    <div>
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
      </table>
    </div>
    <?php ;elseif($db_role=="staff"): $staff_givennam="";?>




      
      <h3 style=" display:inline-block;float: right;">STAFF : <?php echo $name;?></h3>
      <div">
        <a  href="viewmarks.php" target="down">View Marks</a>   <a href="editmarks.php" target="down">Update Marks</a>
        </div>
        <iframe name="down" frameBorder="0" ></iframe>






    <?php ;elseif($db_role=="admin"):?>
      <!-- Admin Access -->
      <h3 style=" display:inline-block;float: right;">ADMIN : <?php echo $name;?></h3>
      <div>
       <div class="container">
      
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
      </table>
    </div>
       <?php ;endif;?>
  </body>
</html>