<?php
 $user_name=filter_input(INPUT_POST, 'user_name');
 $id=filter_input(INPUT_POST,'id');
 $PhoneNumber=filter_input(INPUT_POST,'PhoneNumber');
 $Email=filter_input(INPUT_POST,'Email');
 $Address=filter_input(INPUT_POST,'Address');
 if(!empty($user_name)){
	 if(!empty($id)){
		 if(!empty($PhoneNumber)){
			 if(!empty($Email)){
				 if(!empty($Address)){
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
						 $sql="INSERT INTO user(user_name,id,PhoneNumber,Email,Address)
					 values('$user_name','$id','$PhoneNumber','$Email','$Address')";
					 if($conn->query($sql)){
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
					 echo "Address should not be empty";
					 die();
				 }
			 }
			 else{
					 echo "Email should not be empty";
					 die();
		 }
		 }
		 else{
					 echo "PhoneNumber should not be empty";
					 die();
		 }
	 }else{
					 echo "id should not be empty";
	                 die();
	 }
 }
 else{
					 echo "username should not be empty";
					 die();
 }
 





?>