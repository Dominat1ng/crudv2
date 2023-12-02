<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection,"dbcrud");

    if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];


            $sql = "insert into student(name,address,mobile)values('$name', '$address', '$mobile')";

            if(mysqli_query($connection,$sql))
            {
                echo '<script>location.replace("index.php")</script>';
            }
            echo "Something error" . $connection->error;

        }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
</head>
<body>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
               <h1 class="text-center"> Student Crud Application </h1>
            </div>
            <div class="card-body">
             
                <form action="add.php" method="post">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        
                    </div>

                    <div class="mb-3">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile">
                        
                    </div>
                    
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                    </div>
                </form>



            </div>
            </div>
            </div>
        </div>

      </div>
</body>
</html>