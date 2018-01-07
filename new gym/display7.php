<?php
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

$sql = "SELECT member_id, 
               member_name, 
			   member_email,
			   member_phonenumber,
			   payment_amount,
			   payment_date
			   FROM member1 JOIN payment1
			   ON payment1.payment_id=member1.member_id
			   AND payment_amount < 1500";
			   
			   
			    
$result=$conn->query($sql);

?>
<!doctype html>
<html>
<style>
body{
margin:0;
background:url('yellow.png');
background-size:cover;
font-family:Comic Sans MS;
}





</style>
<body>


<h1 align="center">MEMBER'S WITH PAYMENT DETAILS WHO PAID LESS THAN 1500/-</h1>

<table border="1" style="width:600px; margin:auto; color:black; padding:" align="center"  style="line-height:25px;">
<tr>
<th>MEMBER ID</th>
<th>MEMBER NAME</th>
<th>MEMBER EMAIL</th>
<th>MEMBER PHONE NUMBER</th>
<th>PAID AMOUNT</th>
<th>DATE OF PAYMENT</th>

</tr>



<?php
if($result->num_rows >0){
	while($row=$result->fetch_assoc()){
		?>
<tr>
<td><?php echo $row['member_id'];?></td>
<td><?php echo $row['member_name'];?></td>
<td><?php echo $row['member_email'];?></td>

<td><?php echo $row['member_phonenumber'];?></td>
<td><?php echo $row['payment_amount'];?></td>
<td><?php echo $row['payment_date'];?></td>

</tr>

<?php
	}
}
else
{
	?>
<tr>
<th column="2"> there's no data found!!!</th>
</tr>
<?php
}
?>

</table>

</body>
</html>
