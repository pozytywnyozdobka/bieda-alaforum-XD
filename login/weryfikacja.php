<?php
$password = password_hash($_POST["haselko"], PASSWORD_DEFAULT);
$con = mysqli_connect("localhost", "root", "", "real_chat");  

$query = "INSERT INTO 'login' VALUES(email ";
if(mysqli_connect_errno()) {  
    die("Could not connect: ". mysqli_connect_error());  
}  
$result = mysqli_query($con, $query); 
$count = mysqli_num_rows($result);   
if($count == 1){  
    echo "<h1><center> Zalogowano pomyślnie! </center></h1>";  
    header("Location: index.php");
    exit();
}     



?>
