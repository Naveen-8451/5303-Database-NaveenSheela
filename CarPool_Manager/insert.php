<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
error_reporting(1);
$link = mysqli_connect("localhost", "nsheela", "nsheela2015", "nsheela");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user_id			= mysqli_real_escape_string($link, $_POST['user_id']);
$login_name			= mysqli_real_escape_string($link, $_POST['username']);
$password			= mysqli_real_escape_string($link, $_POST['password']);
$first_name 		= mysqli_real_escape_string($link, $_POST['firstname']);
$last_name			= mysqli_real_escape_string($link, $_POST['lastname']);
$status				= mysqli_real_escape_string($link, $_POST['status']);
$contact_phoneno	= mysqli_real_escape_string($link, $_POST['contact_phoneno']);
$contact_emailid	= mysqli_real_escape_string($link, $_POST['contact_emailid']);
$address_id			= mysqli_real_escape_string($link, $_POST['address_id']);
$dept_id			= mysqli_real_escape_string($link, $_POST['dept_id']);
$faculty_position	= mysqli_real_escape_string($link, $_POST['faculty_position']);
$student_major 		= mysqli_real_escape_string($link, $_POST['student_major']);
$student_status		= mysqli_real_escape_string($link, $_POST['student_status']);
$optional_info_id	= mysqli_real_escape_string($link, $_POST['optional_info_id']);
// attempt insert query execution
$sql = "INSERT INTO `user_information`(`user_id`, `login_name`, `password`, `first_name`, `last_name`, `status`, `contact_phoneno`, `contact_emailid`, `address_id`, `dept_id`, `faculty_position`, `student_major`, `student_status`, `optional_info_id`) VALUES
('$user_id', '$login_name', '$password', '$first_name', '$last_name', '$status', '$contact_phoneno', '$contact_emailid', '$address_id', '$dept_id', '$faculty_position', '$student_major', '$student_status', '$optional_info_id')";

if(mysqli_query($link, $sql)){
    //echo "Records added successfully.";
    echo '<script language="javascript">';
echo 'alert("Records added successfully.")';
echo '</script>';
        header("Location: ./data.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>