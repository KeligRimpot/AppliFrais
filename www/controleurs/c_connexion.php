<?php

$action = lireDonneeUrl('action', 'demandeConnexion');

switch($action){
	case 'demandeConnexion':{
		include("vues/v_debutContenu.php");
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = lireDonneePost('login');
		$mdp = lireDonneePost('mdp');
		// on calcule le hash du mdp avec ARGON2ID
		$hash = password_hash($mdp, PASSWORD_ARGON2ID);
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);

		// maintenant, avec la requete sql de getInfosVisiteur(), on recupère le hash au lieu du mdp


		// Donc, on utilise la fonction password_verify() pour vérifier que le hash dans la base de données correspond au mdp entré dans le champ et récupéré par POST

		if(!password_verify($mdp, $visiteur['mdp'])){ // !is_array($visiteur)
			ajouterErreur("Login ou mot de passe incorrect", $tabErreurs);
		    include("vues/v_debutContenu.php");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			//récupère getinfosvisiteurs et se connecte 
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			connecter($id,$nom,$prenom);
            include("vues/v_sommaire.php");
		    include("vues/v_debutContenu.php");
			include("vues/v_accueil.php");
		}
		break;
	}
	default :{
        deconnecter();
		include("vues/v_debutContenu.php");
		include("vues/v_connexion.php");
		break;
	}
}
?>