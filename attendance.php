<?php $name='Ajay' ?>
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
  background-color: #c5cae9;
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
    <div class="container">
      <h2><?php echo $name.' '.'Attendance';?></h2>
      <table>
        <thead>
          <tr>
            <th>SI</th>
            <th>Month</th>
            <th>Present</th>
            <th>Leave</th>
            <th>Leave Per/th>
            <th>Present per</th>
          <tr>  
        </thead>
        <tbody>
          <tr>
            <td>01</td>
            <td>Ali</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
           
          </tr>
          <tr>
            <td>02</td>
            <td>Salman</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
           
          </tr>
          <tr>
            <td>03</td>
            <td>Shan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
            
          </tr>
          <tr>
            <td>04</td>
            <td>Aliyan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
           
          </tr>
          <tr>
            <td>05</td>
            <td>Zeeshan</td>
            <td>86</td>
            <td>77</td>
            <td>87</td>
            <td>92</td>
           
          </tr>
        </tbody>
      
        <!-- <tfoot>
          <tr>
            <td colspan=3>Maximum Marks: </td>
            <td colspan=3>Marks Obtained: </td>
            <td colspan=2>Grade: </td>
          </tr> -->
    
      </table>
    </div>
  </body>
</html>