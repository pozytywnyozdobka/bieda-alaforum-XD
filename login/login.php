<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="login.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="form-div" class="form-group">
    <form action="logowanie.php?act=form" class="w-25 h-50 border rounded" method="POST">
        <div class="form-group">
            <label for="mali">Adres e-mail</label>
            <input type="email" class="form-control" id="email" name="mali" placeholder="Wpisz e-mail">
              <small id="emailHelp" class="form-text text-muted">Twój e-mail nie będzie nigdzie udostępniany.</small>
        </div>
        <div class="form-group">
          <label for="haselko">Hasło</label>
          <div class="password-container">
          <input type="password" class="form-control" name="haselko" id="haslo" placeholder="Podaj hasło">
            <i class="fa-solid fa-eye" id="phaslo"></i>
        </div>
        </div>
    <input type="submit" class="btn btn-primary black" value="Zaloguj">
    </form>

    </div>
</body>
</html>