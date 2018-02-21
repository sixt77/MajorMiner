<?php

//affichage des boutons de seleciton du type
foreach ($type_list as $type){
    echo"<button onclick=\"display_by_type(type_list,'".$type."')\">".$type."</button>";
}
//affichage des offres
foreach ($offer_list as $offer){
    echo"<div class=".$offer['type']." style='display :none;'>";
    echo $offer['id'];
    echo $offer['nom'];
    echo $offer['prix'];
    echo $offer['type'];
    echo $offer['description'];
    echo $offer['image'];
    echo"</div>";
}