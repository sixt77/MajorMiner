<?php
//script de connection pour les streamer
//prend un pseudo et un mot de pass
//renvoie les parametre dans la session
//return true si elle réussi et false sinon
function user_signin($email, $password, $c, $encryption_key) {
//récupération des compte streamer
	//cryptage du password
	$password = crypt($password,$encryption_key);
	$sql = ("SELECT * FROM client WHERE email='$email' AND password='$password'");
	$result = mysqli_query($c,$sql);

	//test des résultat
	if($row = mysqli_fetch_row($result)){
		if (isset($row[0])) {
			//attribution d'une session
			$_SESSION['stats'] = "login-done";
			$_SESSION['id'] = $row[0];
			$_SESSION['mail'] = $row[3];
			return true;
		}
		else {
			//attribution d'une session vide
			unset ($_SESSION['stats']);
			return false;
		}
	}
$result->close();
}

//script d'inscription pour les user 
//ajoute dans la bdd les valeurs
//renvoi true si la connection a fonctionné sinon false
function user_signup($fname, $lname, $email,$password, $c, $encryption_key) {
	//cryptage du password
	$password = crypt($password,$encryption_key);
	//insertion des valeurs dans la bdd
	$sql = ("INSERT INTO client(prenom, nom, email, password) VALUES('$fname', '$lname', '$email', '$password')");
	if(mysqli_query($c,$sql)){
		return true;
	}
	else{
		return false;
	}
}


function get_info_user_by_id($id, $c){
    $sql = ("SELECT * FROM client WHERE id ='$id'");
    $result = mysqli_query($c,$sql);
    $user_info= array ();
    if($row = mysqli_fetch_row($result)){
        $user_info= $row;
    }
    return $user_info;

}



function user_logout() {
	$_SESSION = array();
	unset ($_SESSION['stats']);
}