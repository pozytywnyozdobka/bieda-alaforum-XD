<?php
    $haslo = "gówno";
    echo password_hash($haslo, PASSWORD_DEFAULT);
    echo password_verify($haslo, '$2y$10$AmFM/WiAfgLW/wXw.9fG5OdbWR17C2l.zz/7wo/MwfIuCAI5z6CnC' )
  
?>