<?php
  include("vues/v_sommaire.php");
  include("vues/v_debutContenu.php");

  // vérification du droit d'accès au cas d'utilisation
if ( ! estConnecte() ) {
    ajouterErreur("L'accès à cette page requiert une authentification !", $tabErreurs);
    include("vues/v_erreurs.php");
}

else  { // accès autorisé 
    $action = lireDonneeUrl('action', 'afficherSynthese');
    $idVisiteur = $_SESSION['idVisiteur'];
    $dataSynthese = $pdo -> getDataFicheSynthese('a17');
    include("vues/v_synthese.php");
}