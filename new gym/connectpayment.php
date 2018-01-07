<?php
$payment_id=filter_input(INPUT_POST, 'payment_id');
 $payment_date=filter_input(INPUT_POST,'payment_date');
 $payment_amount=filter_input(INPUT_POST,'payment_amount');
if(!empty($payment_id)){
	 if(!empty($payment_date)){
		 if(!empty($payment_amount)){
			 
				
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
						 $sql="INSERT INTO payment1(payment_id,payment_date,payment_amount)
					 values('$payment_id','$payment_date','$payment_amount')";
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
					 echo "payment_amount should not be empty";
					 die();
				 }
			 }
			 else{
					 echo "payment_date should not be empty";
					 die();
		 }
		 }
		 else{
					 echo "payment_id should not be empty";
					 die();
		 }
	
 
			 










?>