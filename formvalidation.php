<html>
    <head>
    <title>
      Register Form
    </title>
    <style>
    .btn{
        position:relative;
        left:270px;
        top:20px;
    }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Registration Form</h1>
    <form action="form.php" method="post">
        Enter Name:<input type="text" name="name">
        Enter lastname:<input type="text" name="lname">
        Enter phoneno:<input type="text" name="phoneno">
        Enter mailid:<input type="text" name="mailId">
        Enter Role:<select><option>CSE</option>
        <option>IT</option>
        <option>ECE</option>
      </select>
        <br><input type="submit" class="btn" >
</form>
<h3>
<?php 
$num=$_POST['phoneno'];
$email=$_POST['mailId'];
if(sizeof($num)==10){
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Register Successfully';
}else{
    echo 'Invalid Email';
}
}else{
    echo 'Give valid correct Phone Number';
}
if(isset($_GET['name'])){
    echo ($_GET['name'].' - '.$_GET['mailId']);
}
?></h3>
</body>
</html>

