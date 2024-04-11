<?php
$bdd = new PDO(
    'mysql:host=localhost;dbname=gsbfrais',
    'userGsb',
    'secret'
);

$requete = 'SELECT id, mdp from visiteur;';
$reponse = $bdd -> query($requete);
$mdps = $reponse -> fetchall(PDO::FETCH_ASSOC);

foreach ($mdps as $ligne){
    echo $ligne['mdp'] . PHP_EOL;
    $id = $ligne['id'];
    $hash = password_hash($ligne['mdp'], PASSWORD_ARGON2ID);
    echo $hash . PHP_EOL;

    $requete2 = 'UPDATE visiteur SET mdp = ? WHERE id = ?;';
    $reponse2 = $bdd -> prepare($requete2);
    $reponse2 -> execute([$hash, $id]);

}

?>