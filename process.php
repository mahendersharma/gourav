<?php
include_once 'database.php';
	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 $phone = $_POST['phone'];
	 $sql = "INSERT INTO user_entry (name,email,subject,message,phone)
	 VALUES ('$name','$email','$subject','$message','$phone')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

?>