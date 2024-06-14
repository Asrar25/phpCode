<?php 
session_start();
$name=$_SESSION['name'];
$host="localhost";
$un="root";
$password="";
$db="student_info";
$port =3001;
$db_role="";

$con =mysqli_connect($host,$un,$password,$db,$port);

  $sql ="SELECT * FROM login WHERE name='$name'";
                
  $result =mysqli_query($con,$sql);

  while($each_row = mysqli_fetch_array($result)){
          $db_role=$each_row["role"];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  /* only for demonstration, should be removed */
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article{
  float: left;
   width: 80%;
  background-color: #f1f1f1;
  height: 600px; /* only for demonstration, should be removed */
}



/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

iframe{
  overflow:hidden;
  width: 100%;
  height: 550px; /* only for demonstration, should be removed */
}

.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  float: right;
}
ul {
  list-style-type: none;
 
  width: 100%;
  
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>

<body>
<?php  if($db_role=="student"):?>
<header>
<div><form method="post">
        <input type="submit" name="button"
                class="button" value="Log Out"> 
    </form> 
  <h2>Welcome <?php echo $name; ?></h2>
  </div>
</header>
<section>
  <nav>
    <ul>
      <li><a href="marks.php?name=<?=$_SESSION['name']?>"<?=$_SESSION['name']?> target="place">Marks</a></li>
      <li><a href="attendance.php?name=<?=$_SESSION['name']?>"<?=$_SESSION['name']?> target="place">Attendance</a></li>
    </ul>
  </nav>
  
  <article>
   <iframe name="place" frameBorder="0"></iframe>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>
<?php if(array_key_exists('button', $_POST)) { 
            header("Location: login.php");
            exit;
        }?>
<?php ;elseif($db_role=='staff' || $db_role=='admin'):?>
  <header>
<div><form method="post">
        <input type="submit" name="button"
                class="button" value="Log Out"> 
    </form> 
  <h2>Welcome <?php echo $name; ?></h2>
  </div>
</header>
        <section>
  <nav>
    <ul>
      <li><a href="marks.php?name=<?=$_SESSION['name']?>"<?=$_SESSION['name']?> target="place">Marks</a></li>
      <li><a href="addstudent.php?name=<?=$_SESSION['name']?>"<?=$_SESSION['name']?> target="place">Add Student</a></li>
    </ul>
  </nav>
  
  <article>
   <iframe name="place" frameBorder="0"></iframe>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>
<?php if(array_key_exists('button', $_POST)) { 
            header("Location: login.php");
            exit;
        } ?>
       <?php ;endif;?>
</body>
</html>

