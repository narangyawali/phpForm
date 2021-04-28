<?php

$name = $_POST['name'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];

echo $name . $lname ."roll is " . $roll;
echo "<br>";
echo "name is $name $lname and roll is $roll";


include "db.php"; 

$sql = "INSERT INTO trip(name, lname, roll)VALUES('$name','$lname','$roll') ";
$result = mysqli_query($conn,$sql);


if($result){
     header('Location: index.php');

    }


?>