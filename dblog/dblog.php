<?php

try
{
		$c = mysqli_connect("localhost", "root", "", "majorminer");
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage(failed));
}
?>