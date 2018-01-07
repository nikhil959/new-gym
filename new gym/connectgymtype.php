<?php
$gym_id=filter_input(INPUT_POST, 'gym_id');
 $gym_type=filter_input(INPUT_POST,'gym_type');
 if(!empty($gym_id)){
	 if(!empty($gym_type)){
		 $host="localhost";
					 $dbusername="root";
					 $dbpassword="";
					 $dbname="gym_management";
					 //create connection
					 	 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
					 if(mysqli_connect_error()){
						 die('connect error('.mysqli_connect_errno().')'
						 .mysqli_connect_error());
					 }
					 else{
						 $sql="INSERT INTO gymtype1(gym_id,gym_type)
					 values('$gym_id','$gym_type')";
					 if($conn->query($sql))
					 {
						echo "successfull";
						
					 }
					 else{echo "error:"."<dbr>".$conn->error;
					 }
					 $conn->close();
					 }
	 }
	 	 else{
					 echo "gym_type should not be empty";
					 die();
				 }
			 }
			 else{
					 echo "gym_id should not be empty";
					 die();
		 }









?>