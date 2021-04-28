<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDADTE </title>
    <style>
        .container{
           width: 50%;
            margin: 5px auto;
            background-color: grey;
        }
        .innerc{
            padding: auto;
            align-items: center;
            
        }
        button{
            cursor: pointer;
        }
    </style>
</head>
<body>  
    <div>
        <div class="container">
            <h1>update the datas</h1>
            <div class="innerc">
                <?php  
                
                 include 'db.php';

                 $id = $_GET['id'];

                 $sql = "SELECT * FROM trip WHERE ID =".$id;

                 $result = mysqli_query($conn, $sql);

                 if($result){
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['name'];
                    $lname = $row['lname'];
                    $roll = $row['roll'];

                 }




                ?>

                <form action="editAction.php" method="POST">
                    <label for="name">NAME</label>
                    <input type="text" name="name" value ="<?php global $name; echo $name?>">
                    <br>
                    <label for="Lname">LAST NAME</label>
                    <input type="text" name="lname" id=""  value ="<?php global $lname; echo $lname?> ">
                   <br>
                    <label for="roll">ROLL</label>
                    <input type="number" name="roll" value ="<?php global $roll; echo $roll?>">
                    <input type="hidden" name="id" value ="<?php global $id; echo $id?>" required> 

                    <button type="submit" value="update">update</button>
                   
                </form>
            </div>
            

            

        </div> 
    </div>
</body>
</html>