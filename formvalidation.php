<?php
$nam=$lnam=$num=$Id="";?>

<html>
    <head>
    <title>
      Register Form
    </title>
    <style>
    .btn{
        text-align:center;
    }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Registration Form</h1>
    <table border="2px" style="margin:auto;">
    <form action="formvalidation.php" method="post">
       <tr><td><label>Enter Name:</label></td><td><input type="text" name="name">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"){ $checkname=false; $vn=$_POST['name']; if(strlen($vn)<4){?><br><?php echo 'give upto 5 char name';$checkname=true;}} ?></td></tr>
        <tr><td><label>Enter lastname:</label></td><td><input type="text" name="lname">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"){ $checklastname=false; $vl=$_POST['lname']; if(strlen($vl)>2){?><br><?php echo 'give below 2 char name';$checklastname=true;}}?></td></tr>
        <tr><td> <label>Enter phoneno:</label></td><td><input type="text" name="phoneno">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"){ $checkphone=false; $phoneno=$_POST['phoneno']; if(strlen($phoneno)!=10){?><br><?php echo 'give 10 digit number';$checkphone=true;}}?></td></tr>
        <tr><td> <label>Enter mailid:</label></td><td><input type="text" name="mailId">
        <?php if($_SERVER["REQUEST_METHOD"] == "POST"){$checkmail=false; $email=$_POST['mailId']; if(!filter_var($email, FILTER_VALIDATE_EMAIL)){?><br><?php echo 'invalid email';$checkmail=true;}}?></td></tr>
        <tr><td> <label> Enter Role:</label></td><td><select><option>CSE</option>
        <option>IT</option>
        <option>ECE</option>
      </select></td></tr>
        <tr><td colspan="2" class="btn"><br><input type="submit" class="btn" ></td></tr>
</table>
</form>
</table>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
      
        $nam = test_input($_POST["name"]);
     
        $lnam = test_input($_POST["lname"]);
    
        $num= test_input($_POST["phoneno"]);

        $Id= test_input($_POST["mailId"]);

        

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }?>

<h1><?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!$checkname && !$checklastname && !$checkphone && !$checkmail){
        echo 'Registration Successfully';
    }else{
        echo 'Registration Failed';
    }
}
?></h1>
</body>
</html>

