<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $Name = $_POST['Name'];
	 $DOB = $_POST['DOB'];
	 $Age = $_POST['Age'];
	 $Degree = $_POST['degree'];
	 $Course = $_POST['course'];
	 $Cgpa = $_POST['Cgpa'];
	 $sql = "INSERT INTO applicantinfo (Name,dob,age,degree,course,cgpa)
	 VALUES ('$Name','$DOB','$Age','$Degree','$Course','$Cgpa')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>