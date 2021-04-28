<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
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
            <div class="innerc">
                <form action="add.php" method="POST">
                    <label for="name">NAME</label>
                    <input type="text" name="name">
                    <br>
                    <label for="Lname">LAST NAME</label>
                    <input type="text" name="lname" id="">
                   <br>
                    <label for="roll">ROLL</label>
                    <input type="number" name="roll">
                    <button type="submit">send</button>
                </form>
            </div>
            <hr >
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>lastname</th>
                    <th>roll</th>
                    <th>actions</th>
                </tr>
                
                <?php
               include 'db.php';

               $sql = "SELECT * FROM trip;";
               $result = mysqli_query($conn,$sql);
                if($result){


                    while($row = mysqli_fetch_assoc($result)){

                        $id = $row['id'];
                        $name = $row['name'];
                        $lname = $row['lname'];
                        $roll = $row['roll'];
                        
                        ?>

                        <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $lname ?></td>
                        <td><?php echo $roll ?></td>
                        <td><a href="edit.php?id=<?php echo $id?>">update</a></td>
                        <td><a href="delete.php?id=<?php echo $id?>">delete</a></td>
                        </tr>

                       
                         <?php
                    }


                }
                ?>
            

                

            </table>

            

        </div>
    </div>
</body>
</html>