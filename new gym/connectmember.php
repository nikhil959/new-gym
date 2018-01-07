<?php
$member_id=filter_input(INPUT_POST, 'member_id');
 $member_name=filter_input(INPUT_POST,'member_name');
 $member_phonenumber=filter_input(INPUT_POST,'member_phonenumber');
 $member_email=filter_input(INPUT_POST,'member_email');
 if(!empty($member_id)){
	 if(!empty($member_name)){
		 if(!empty($member_phonenumber)){
			 if(!empty($member_email)){
				 $host="localhost";
					 $dbusername="root";
					 $dbpassword="";
					 $dbname="gym_management";
					 //create connection
					 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
					 if(mysqli_connect_error())
					 {
						 die('connect error('.mysqli_connect_errno().')'
						 .mysqli_connect_error());
					 }
					 else{
					     $queryt="create trigger mtrig before insert  on member1 for each row set new.member_name = upper(new.member_name)";
		                 $queryr_run = mysqli_query($conn,$queryt);
						 $sql="INSERT INTO member1(member_id,member_name,member_phonenumber,member_email)
					 values('$member_id','$member_name','$member_phonenumber','$member_email')";
					 if($conn->query($sql))
					 {
						 echo "New record is inserted succeessfully";
					 }
					 else{
												 echo "error:".$sql ."<br>".$conn->error;

					 }
					 $conn->close();
					 }
					 
				 }
				 		 else{
					 echo "member_id should not be empty";
					 die();
		 }
		 }
		 else{
					 echo "member_name should not be empty";
					 die();
		 }
	 }
	 else{
					 echo "member_phonenumber should not be empty";
	                 die();
	 }
 }
 else{
					 echo "member_email should not be empty";
					 die();
 }
 











?>