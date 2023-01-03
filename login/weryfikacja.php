<?php
$password = password_hash($_POST["haselko"], PASSWORD_DEFAULT);

$img = $_POST["imgprof"];
$con = mysqli_connect("localhost", "root", "", "real_chat");  
$target_dir = "upload/";
	$file = $_FILES['my_file']['name'];
	$path = pathinfo($file);
	$filename = $path['filename'];
	$ext = $path['extension'];
	$temp_name = $_FILES['my_file']['tmp_name'];
	$path_filename_ext = $target_dir.$filename.".".$ext;
$query = "INSERT INTO 'login' (email, haslo) VALUES('".."')";
if(mysqli_connect_errno()) {  
    die("Could not connect: ". mysqli_connect_error());  
}  
$result = mysqli_query($con, $query); 
$count = mysqli_num_rows($result);   




?>
