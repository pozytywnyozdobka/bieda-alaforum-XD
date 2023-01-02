<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <link rel="stylesheet" href="login.css">
    <title>Logowanie</title>
</head>
<body>
<div id="form-div" class="form-group">
<form action="weryfikacja.php?act=form" class="w-25 h-50 shadow-lg " method="POST">
  <div class="form-group">
  <label for="mali">Adres e-mail</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
    <input type="text" class="form-control" name="mali" id="email" placeholder="Podaj adres e-mail"> <br>
  </div>
</div>
  <div class="form-group">
    <label for="imie"> Imię i nazwisko </label>
    <input type="text"  class="form-control" name="imie" placeholder="Imię"> <br> <input type="text" class="form-control" name="nazwisko" placeholder="Nazwisko">
  </div>
  <div class="form-group">
    <label for="profilepic">Wybierz zdjęcie profilowe</label>
    <input type="file" class="form-control-file" name="imgprof" id="profilepic" accept="image/x-png,image/gif,image/jpeg">
    <div id="previewpic">
      <img id="podglad" src="" width="100" height="100"/>
    </div>
  </div>
  <div class="form-group">
    <label for="haselko">Hasło</label>
    <div class="password-container">
      <input type="password" class="form-control" name="haselko" id="haslo" placeholder="Podaj hasło">
      <i class="fa-solid fa-eye" id="phaslo"></i>
    </div>
    <div class="progress">
    <div id="passwordstrength" value="0" max="10" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="10" ></div>
      </div> <br>
    <div class="form-group">
    <div class="password-container">
      <input type="password" class="form-control" name="haselko" id="haslorepeat" placeholder="Powtórz hasło">
      <i class="fa-solid fa-eye" id="phaslo"></i>
    </div>
  </div>
    <input type="submit" id="submitbutton" class="btn btn-primary w-100" value="Rejestracja">
</form>

</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="login.js"></script>
</body>
</html>