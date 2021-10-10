<?php

    session_start();
	if(!isset($_SESSION["setourname"]))
	{
		header("Location: index.php");
		exit(); 		
	}
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
			//Get Customer Data
			$fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email = $_POST['email'];
            $pnumber = $_POST['phonenumber'];
            $nop = $_POST['numberofpeople'];
            $tdate = $_POST['tourdate'];
            //Get Tour Data
            $tname = $_POST['tourname'];
            $tcategory = $_POST['tourcategory'];
            $loctn = $_POST['location'];
            $prce = $_POST['price'];
            $tprice = $_POST['totalprice'];
            $transactiondatetime = date("Y-m-d H:i:s");	
            
            //Prepare SQL query
					$strInsert = "insert into bookingtour(firstname,lastname,email,phonenumber,numberofpeople,tourdate,tourname,category,location,price,totalprice,bookingdatetime) values('$fname', '$lname','$email','$pnumber', '$nop','$tdate','$tname','$tcategory','$loctn','$prce','$tprice','$transactiondatetime')";

					if (!mysqli_query($conn,$strInsert)) 
					{
						die('Could not connect: Check your connection ' . mysqli_error($conn));
					}

					//$msg = "Tour package registration is successful";
					$msg = "Congratulation, your Tour Package Booking Registration to ".$tourname ." is successful. "."Click here to return to <a href='index.php'> Home </a>";
					
					header ("Location: confirm.php?message=".$msg);
        }

    }

    mysqli_close($conn);

?>