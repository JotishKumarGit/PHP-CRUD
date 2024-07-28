<?php
include("Database.php");
$id = $_GET['id'];
$delete = "DELETE FROM student WHERE id='$id' ";
$data = mysqli_query($con,$delete);

if($data){
?>
<script type="text/javascript">
    alert("Data is deleted successfully");
    window.open("http://localhost/phpMachineCR/CRUD/Display.php", "_self");
</script>
<?php
}else{
 ?>
<script type="text/javascript">
    alert("Please try again");
</script>

 <?php   
}
?>