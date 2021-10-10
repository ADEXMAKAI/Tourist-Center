<?php

	//include auth.php file on all secure pages
	//include("auth.php");

	//Add Database Connection	
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$conn = $db_handle->connectDB();
	
	
	// Test Database Connection
	if (!$conn)
  	{
  		die('Could not connect to Tourist Database');
  	}
	else
	{
		if (isset($_POST['tourname']))
		{
			//Get Form Data
			$tourcode = $_POST['tourcode'];
			$tourname = $_POST['tourname'];		
			$category = $_POST['category'];
			$description = $_POST['description'];
			$location = $_POST['location'];
			$price = $_POST['price'];
			//$image = $_FILES['image'];
		
			if (($_FILES['myFile']['name']!=""))
			{
				// Where the file is going to be stored
				$target_dir = "images/tours/";
				$target_sub_dir = "tours/";
				
				$file = $_FILES['myFile']['name'];
				$path = pathinfo($file);
				$filename = $path['filename'];
				$ext = $path['extension'];
				$temp_name = $_FILES['myFile']['tmp_name'];
				$path_filename_ext = $target_dir.$filename.".".$ext;
				$path_filename_ext2 = $target_sub_dir.$filename.".".$ext;

				// Check if file already exists
				if (file_exists($path_filename_ext)) 
				{
					$msg = "Sorry, file already exists,"." Click here to try again. <a href='index.php'> Home </a>";
					header ("Location: error.php?message=".$msg);
				}
				else
				{
					move_uploaded_file($temp_name,$path_filename_ext);

                    $dateregister = date("Y-m-d H:i:s");
                    $user = "adebax";
					
					//Prepare SQL query
					$strInsert = "insert into tours(tourname,tourcode,location,image,description,price,category,user,date_tourregister) values('$tourname', '$tourcode','$location','$path_filename_ext2', '$description','$price','$category','$user','$dateregister')";

					if (!mysqli_query($conn,$strInsert)) 
					{
						die('Could not connect: Check your connection ' . mysqli_error($conn));
					}

					//$msg = "Tour package registration is successful";
					$msg = "Congratulation, your tour package registration to ".$tourname ." is successful. "."Click here to return to <a href='index.php'> Home </a>";
					
					header ("Location: confirm.php?message=".$msg);
				}
			}
		}
	}

	mysqli_close($conn);
?>