<?php

include 'db.php';
 
$id = $_POST['id'];
$name= $_POST['name'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];

$sql = "UPDATE trip SET name ='$name' , lname ='$lname',roll ='$roll' WHERE ID = $id  ";

$result = mysqli_query ($conn, $sql);
if($result){
    header("location:index.php"); 


}

?>