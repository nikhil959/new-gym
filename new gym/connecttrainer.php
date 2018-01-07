<?php
$trainer_name=filter_input(INPUT_POST, 'trainer_name');
$trainer_email=filter_input(INPUT_POST,'trainer_email');
$trainer_phonenumber=filter_input(INPUT_POST,'trainer_phonenumber');
$trainer_id=filter_input(INPUT_POST,'trainer_id');
$trainer_address=filter_input(INPUT_POST,'trainer_address');
if(!empty($trainer_name)){
	 if(!empty($trainer_email)){
		 if(!empty($trainer_phonenumber)){
			 if(!empty($trainer_id)){
				 if(!empty($trainer_address)){
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
					 else
					 {
						 $sql="INSERT INTO trainer1(trainer_name,trainer_email,trainer_phonenumber,trainer_id,trainer_address)
					 values('$trainer_name','$trainer_email','$trainer_phonenumber','$trainer_id','$trainer_address')";
					 if($conn->query($sql))
					 {
						 echo "New record is inserted succeessfully";
					 }
					 else
					 {
						 echo "error:".$sql ."<br>".$conn->error;
					 }
					 $conn->close();
					 }
				 }
				  else{
					 echo "trainer_address should not be empty";
					 die();
				 }
			 }
			 else{
					 echo "trainer_id should not be empty";
					 die();
		 }
		 }
		 else{
					 echo "trainer_phonenumber should not be empty";
					 die();
		 }
	 }else{
					 echo "trainer_email should not be empty";
	                 die();
	 }
 }
 else{
					 echo "trainer_name should not be empty";
					 die();
 }
 











?>