<?php 	
	session_start();	
		include 'dbh.php';
		$sql = "SELECT * FROM posts ";
		$result = $conn->query($sql);
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
				echo " " . $row["name"]." "." :: ".$row["msg"]." --" .$row["date"]." <br>";
				echo "<br>";
			}
		} else{
			echo "0 results";
		}
		$conn->close();
?>