<?php 

class val{
  public $id;
  function val($id){
    $this->id=$id;
    return $id;
  }
}
$obj =new val();


?>
<form action="dup.php" method="post">
<input type="text" name="text" value="<?php echo $obj->id; ?>">

<input type="submit" value="save" name='submit'>
</form>

<?php

if(isset($_POST['submit'])){
    $value=$_POST['text'];
    $id =$obj->val($value);
    echo $id;
}
?>
