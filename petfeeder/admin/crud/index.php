<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Registration Form</title>
</head>
<body class="bg-dark">
    <center>
       

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Add the Coin</h3>
                            
                        </div>
                        <div class="card-body">
     <button onclick="location.href='view.php'">Cancel</button>
     <?php echo '<br><br>' ?>
                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Coin Name " name="name">
                                <input type="text" class="form-control mb-2" placeholder=" Coin Id " name="coinid">
                             
                                <button class="btn btn-primary" name="submit">Add coin</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</center>
</body>
</html>
