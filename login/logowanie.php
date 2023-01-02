<?php
$email = $_POST["mali"];
$password = $_POST["haselko"];
$con = mysqli_connect("localhost", "root", "", "real_chat");  
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$query = "SELECT * FROM login WHERE email = '".$email."'";
if(mysqli_connect_errno()) {  
    die("Could not connect: ". mysqli_connect_error());  
}  
$result = mysqli_query($con, $query); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);   
if($count == 1 && password_verify($password, $row['haslo'])){  
    session_start();
    $_SESSION['isLogged'] = true;
    $_SESSION['id'] = $row['id'];
    echo "<h1><center> Zalogowano pomyślnie! </center></h1>";  
    header("Location: ../index.php");
    exit();
}  
else{  
    echo "<h1> Błędny login lub hasło.</h1>";  
}     


mysqli_close($con);
?>