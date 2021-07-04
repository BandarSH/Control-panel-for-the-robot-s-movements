		<?php
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword ="";
		$dbName= "directions";


		$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

		if(mysqli_connect_error()){
			die ('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

		} else{

			if(isset($_POST['forward'])){

				$test = "INSERT INTO directions (forward, backward, left1, right1, stop) values(?,?,?,?,?)";
	         //Prepare statement

	          $stmt = $conn->prepare($test);
	      if ($stmt != false){
	             $stmt->bind_param("sssss",'f','','','','');
							 $stmt->execute();
							 $stmt->close();
			         $conn->close();
						 } else{
	 	          print("Returns false");
						}

				} else if(isset($_POST['backward'])){

					$test = "INSERT INTO directions (forward, backward, left1, right1, stop) values(?,?,?,?,?)";
						 //Prepare statement

							$stmt = $conn->prepare($test);
					if ($stmt != false){
								 $stmt->bind_param("sssss",'f','','','','');
								 $stmt->execute();
								 $stmt->close();
								 $conn->close();
							 } else{
								print("Returns false");
							}


			} else if(isset($_POST['right'])){

				$test = "INSERT INTO directions (forward, backward, left1, right1, stop) values(?,?,?,?,?)";
					 //Prepare statement

						$stmt = $conn->prepare($test);
				if ($stmt != false){
							 $stmt->bind_param("sssss",'','','','r','');
							 $stmt->execute();
							 $stmt->close();
							 $conn->close();
						 } else{
							print("Returns false");
						}


		} else if(isset($_POST['left'])){

			$test = "INSERT INTO directions (forward, backward, left1, right1, stop) values(?,?,?,?,?)";
				 //Prepare statement

					$stmt = $conn->prepare($test);
			if ($stmt != false){
						 $stmt->bind_param("sssss",'','','l','','');
						 $stmt->execute();
						 $stmt->close();
						 $conn->close();
					 } else{
						print("Returns false");
					}


	} else if(isset($_POST['stop'])){

		$test = "INSERT INTO directions (forward, backward, left1, right1, stop) values(?,?,?,?,?)";
			 //Prepare statement

				$stmt = $conn->prepare($test);
		if ($stmt != false){
					 $stmt->bind_param("sssss",'','','','','s');
					 $stmt->execute();
					 $stmt->close();
					 $conn->close();
				 } else{
					print("Returns false");
				}


}

		}

		?>
