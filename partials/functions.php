
<?php
if (isset($_GET['pass'])){
    $lunghezza_password = $_GET['pass'];
    $passwordGenerata = generaPasswordCasuale($lunghezza_password);
}

function generaPasswordCasuale($lunghezza_password) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|';
    $lunghezzaCaratteri = strlen($caratteri);
    $password = '';

    for ($i = 0; $i < $lunghezza_password; $i++) {
        $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);
        $password .= $caratteri[$indiceCasuale];
    }

    return $password;

    
}



    $_SESSION['passwordgenerata'] = $passwordGenerata;

    if (isset($_SESSION['passwordgenerata'])) {
        header('Location: ./partials/password_mostrata.php');
        exit();
    }

    ?>