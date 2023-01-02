<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bieda messenger</title>
    <script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="style.css">
	<script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="index.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
</head>
<body>
    <?php
      session_start();
      if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
        header("Location: ./login/login.php");
        die();
    }
    ?>
    <div class="title text-2xl w-full h-10 justify-center">Bieda messenger by Dominik Łosiewski</div>
    
    

    
</body>
</html>