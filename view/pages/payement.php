<?php
echo'<form action="index.php?subscribe" method="post">';
echo'<input type="hidden" value="'.$_SESSION['id'].'" name="idclient">';
echo'<input type="hidden" value="'.$_GET['payement'].'" name="idoffer">';
echo'<input class="" type="text" placeholder="adresse" name="adress" required/>';
echo"<div><input class='' type='submit' class='button' value='valider' name='subscribe'></div>";
echo'</form>';