<form method="post">
			<select name="to_user" class="form-control">
			<option value="pick">Select meterId</option>
			<?php
			//	$con = mysqli_connect("localhost","root","","graphs");
		require "config.php";
			$sql = mysqli_query($connection, "SELECT DISTINCT meterId From datalogs");
			$row = mysqli_num_rows($sql);
			while ($row = mysqli_fetch_array($sql)){
			echo "<option value='". $row['meterId'] ."'>" .$row['meterId'] ."</option>" ;
			}
			?>
			</select>
			<input type="submit" />

		</form>
		<?php
		if (isset($_POST['to_user'])) {
		    	$select = $_POST['to_user'];
		    //	echo "Device name :$select<br>";
				echo"<br><br><br>";
				?>
		    	<script>
		   var a= '<?php echo $select ;?>'
		    	localStorage.setItem("meterid", a);
		  	
		    	</script>
			<?php
		
}
	?>
<script>
var aunique=localStorage.getItem("meterid");
//  var test=document.getElementByID("aunique").value();
//alert(a);
		    	
</script>

			
				
				
				<form method="post">
			<select name="to_user1" class="form-control">
			<option value="pick">Select username</option>
			<?php
			//	$con = mysqli_connect("localhost","root","","graphs");
		require "config.php";
		$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
			$sql = mysqli_query($connection, "SELECT DISTINCT username From users");
			$row = mysqli_num_rows($sql);
			while ($row = mysqli_fetch_array($sql)){
			echo "<option value='". $row['username'] ."'>" .$row['username'] ."</option>" ;
			}
			?>
			</select>
			<input type="submit" />

		</form>
		<?php
		require "apidbconfig.php";
		$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
		
		
			if (isset($_POST['to_user1'])) {
				$selectt = $_POST['to_user1'];
				
		
				echo "Selected User :$selectt<br>";
			$abc= "<script>document.write(aunique)</script>";
			echo"MeterId f : $abc";
			$abb=(String)$abc;
			echo $abb;
		$Sql_Query = "	UPDATE datalogs set ownername='$selectt' WHERE meterId='$abc'";

 if(mysqli_query($con,$Sql_Query)){
 
 echo '<br>Data Inserted Successfully';
 
 }
 else{

 echo 'Ooops! Data not inserted ';
 
 }
			}
 mysqli_close($con);
			
		
			
		
				?>
				