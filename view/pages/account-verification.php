<?php

if($_SESSION['stats'] == 'login-done'){
    header('Location: index.php?payement='.$_POST['offer-choice'].'');
}
else{
    echo'veuillez vous connecter pour souscrire une offre';
}