<html>
<?php 
class val{
public $id='1';
public $name='Asrar';
public $marks='342';
  function changeval($id){
    $this->id=$id;
 }
}

?>

<form action="duplicate.php" method="post">
<table border="2" style="width:600px;height:600px;text-align:center;">

<tr>
    <th>si</th>
    <th>name</th>
    <th>marks</th>
</tr>
<?php $obj =new val();?>
<tr><td><input type="text" value="<?php echo $obj->id?>" name="id"></td><td><input type="text" value="<?php echo $obj->name?>" name="name"></td><td><input type="text" value="<?php echo $obj->marks?>"  name="marks"></td></tr>
</table>
<br>
<input type="submit" value="Save">
</form>
<?php 
                                                                                                                                                                    
?>
</html>
