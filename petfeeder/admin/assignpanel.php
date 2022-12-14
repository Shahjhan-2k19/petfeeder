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
     <h1>Assign Panel to Form</h1>
 </div>


 <body>
     <p> <a href="index.php">Return Back</a>.</p>

     <div class="content">
         <div class="card-grid">
             <!-- <div class="card"> -->
             <form method="post">
                 <select name="to_user1" class="form-control">
                     <option value="pick">Select Form</option>

                     <?php

                        require "config.php";

                        $sql = mysqli_query($connection, "SELECT DISTINCT formname From forms");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)) {
                           
                                echo "<option value='" . $row['formname'] . "'>" . $row['formname'] . "</option>";
                            
                        }
                        ?>
                 </select>
                 <!-- <input type="submit" /> -->


                 <form method="post">
                     <select name="to_user2" class="form-control">
                         <option value="pick">Select Panel</option>

                         <?php

                            require "config.php";

                            $sql = mysqli_query($connection, "SELECT DISTINCT panelname From panel");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<option value='" . $row['panelname'] . "'>" . $row['panelname'] . "</option>";
                            }
                            ?>
                     </select>
                     <input type="submit" />

                 </form>
             </form>
             <?php

                if ((isset($_POST['to_user1'])) || (isset($_POST['to_user2']))) {
                    $selectt = $_POST['to_user1'];
                    $selecttt = $_POST['to_user2'];
                    echo "You Select user : $selectt";
                    echo "You Select foam : $selecttt";
                    $sql = mysqli_query($connection, "INSERT into assignedpanel (formname,panelname)
VALUES ('$selectt','$selecttt');");
                } ?>


         </div>
     </div>