 <!DOCTYPE HTML>
 <html>

 <head>
     <title>ESP Web Server</title>
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta content="text/html; charset=utf-8" http-equiv="content-type">
     <meta name="viewport" content="width=device-width, intial-scale=1">
     <style>
         html {
             font-family: Arial;
             display: inline-block;
             text-align: center;
         }

         body {
             max-width: 900px;
             margin: 0px auto;
             padding-bottom: 25px;
         }

         .topnav {
             overflow: hidden;
             background-color: #0A1128;
             width: 400px;

         }


         .content {
             padding: 5%;
         }

         h1 {
             font-size: 1.8rem;
             color: white;
         }

         .card-grid {
             max-width: 400px;
             height: 300px;
             margin: 0 auto;
             display: grid;

             grid-gap: 2rem;
             grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
         }

         .card {
             background-color: white;
             border-radius: 10px;
             box-shadow: 2px 2px 12px 1px rgba(140, 140, 140, .5);
         }

         .maindiv {
             background-color: white;
             margin-top: 20px;
             border-radius: 40px;
             width: 550px;
             box-shadow: 2px 2px 12px 1px rgba(140, 140, 140, .5);
         }

         .card-title {
             font-size: 1.2rem;
             font-weight: bold;
             color: #034078
         }
     </style>
     <center>
         <div class="maindiv">

 </head>
 <div class="topnav">
     <h1>ADD PANEL </h1>
 </div>


 <body>
     <p> <a href="index.php">Return Back</a>.</p>

     <div class="content">
         <div class="card-grid">
             <div class="card">

                 <form method="post" action="" name="add"><br><br>

                     <div class="input-group">
                         <label>Enter Panel Name</label><br><br>
                         <input type="text" name="username"><br>
                     </div>
                     <br><br>
                     <div class="input-group">
                         <button type="submit" class="btn" name="login_user">Submit</button><br>
                         <!-- <a href="register.php">Signup</a> -->
                     </div>

                 </form>
                 <?php
                    include('config.php');
                    if (isset($_POST['username'])) {
                        // receive all input values from the form
                        $formname = mysqli_real_escape_string($connection, $_POST['username']);


                        // form validation: ensure that the form is correctly filled ...
                        // by adding (array_push()) corresponding error unto $errors array


                        $query = "INSERT INTO panel (panelname)
    VALUES('$formname')";
                        mysqli_query($connection, $query);

                        echo "<script>alert('Sucessfully Added');</script>";
                    }

                    ?>

             </div>
         </div>