<?php
function get_all_offers($c) {
    $sql = ("SELECT * FROM `offre` ORDER BY type");
    $result = mysqli_query($c,$sql);
    $offer_list= array ();
    $loop = 0;
    while ($donnees = mysqli_fetch_assoc($result))
    {
        $offer_list[$loop]['id']= $donnees['id'];
        $offer_list[$loop]['nom']= $donnees['nom'];
        $offer_list[$loop]['prix']= $donnees['prix'];
        $offer_list[$loop]['type']= $donnees['type'];
        $offer_list[$loop]['description']= $donnees['description'];
        $offer_list[$loop]['image']= $donnees['image'];
        $loop++;
    }
    return $offer_list;
}


function get_all_type_offer($c) {
    $sql = ("SELECT type FROM offre GROUP BY type");

    $result = mysqli_query($c,$sql);
    $type_list= array ();
    $loop = 0;
    echo"<script>var type_list = new Array();</script>";
    while ($donnees = mysqli_fetch_assoc($result))
    {
        //chargemtn des resultat en array php
        $type_list[$loop]= $donnees['type'];
        //chargement des resultat en array js
        echo  '<script>type_list['.$loop.'] =["'.$donnees['type'].'"];</script>';
        $loop++;
    }
    return $type_list;
}
function susbscribe_offer_by_id($iduser, $idoffer, $adress, $c){
    $date = date('Y-m-d H:i:s');
    $sql = ("INSERT INTO contrat(adresse, date, idclient, idoffre) VALUES('$adress','$date','$iduser' ,'$idoffer')");
    if(mysqli_query($c,$sql)){
        return true;
    }
    else{
        return false;
    }
}