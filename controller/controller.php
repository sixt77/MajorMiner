<?php
//direction de base
$page ="home";

//script de connection et l'inscription
if(isset($_GET["ac"])){
    if($_GET["ac"]=="signin"){
        if(user_signin($_POST[ "email"], $_POST["password"], $c, $encryption_key)){
            $page = "connection_success";
        }
        else{
            $page = "connection_failed";
        }
    }
    //incription et connection automatique
    if($_GET["ac"]=="signup"){
        if(user_signup($_POST["prenom"], $_POST["nom"], $_POST["email"], $_POST["password"], $c, $encryption_key)){
            user_signin($_POST["email"], $_POST["password"], $c, $encryption_key);

        }
        else {
            $page = "sub_failed";
        }
    }
}


// Vérification si l'user est enregisté

if(isset($_SESSION['stats']) and $page != "connection_failed" and $page != "sub_failed"){
    if(isset($_GET["user_log"])){
        $page = "main";
    }
}
else {
    $_SESSION['stats'] = "new_user";
}

//formulaire d'incription
if(isset($_GET["subform"])){
    $page="user_sub";
}

// Page A propos

if(isset($_GET["propos"])){
    $page = "propos";
}

//page choix offre
if(isset($_GET["offer-selection"])){
    $type_list = get_all_type_offer($c);
    $offer_list = get_all_offers($c);
    $page = "offer-selection";
}

//verification de la connection pour l'achat
if(isset($_GET["account-verification"])){
    $page = "account-verification";
}

//recuperation adresse
if(isset($_GET["payement"])){
    $page = "payement";
}
//recuperation adresse
if(isset($_GET["subscribe"])){
    if(susbscribe_offer_by_id($_POST['idclient'], $_POST['idoffer'], $_POST['adress'], $c)){
        $page = "subscribe_sucess";
    }
    else {
        $page = "subscribe_failed";
    }
}

//formulaire de modification d'information
if(isset($_GET["infoform"])){
    $page="update_info_form";
}




//déconnection
if(isset($_GET["logout"])){
    user_logout();
    header('location: index.php');
}



