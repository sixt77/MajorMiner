<?php

//affichage des boutons de seleciton du type
foreach ($type_list as $type) {
    echo "<button onclick=\"display_by_type(type_list,'" . $type . "')\">" . $type . "</button>";
}
?>
<form action="index.php?account-verification" method="post">
    <?php
    //affichage des offres
    $i = 1;
    foreach ($offer_list as $offer) {
        echo "<div class=" . $offer['type'] . " style='display :none;'>";
        echo $offer['id'];
        echo $offer['nom'];
        echo $offer['prix'];
        echo $offer['type'];
        echo $offer['description'];
        echo $offer['image'];
        if ($i == 1) {
            echo '<input class="of-main-block-salle-radio" type="radio" name="offer-choice" required value="' . $offer['id'] . '">';
            $i = 0;
        } else {
            echo '<input class="of-main-block-salle-radio" type="radio" name="offer-choice" value="' . $offer['id'] . '">';
        }
        echo "</div>";
    }
    ?>
    <div><input class="of-main-button-item" type='submit' class='button' value='valider' name='subscribe'></div>
</form>
