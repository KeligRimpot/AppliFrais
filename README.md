# ApplisFRais

Application web de gestion des frais du laboratoire GSB.

## Déploiement local

Lancer xampp avec apache et mysql.

Se connecter à mysql.

Executer les scripts `sql`:
`source gsbfrais_bduser.sql` 
`source gsbfrais_structure.sql` 
`source gsbfrais_data.sql` 

Servir le dossier `www` par un serveur web (apache).

Se rendre à l'url du site sous localhost.

## Mise en production

On veillera à changer le mot de passe de l'utilisateur `sql` dans `ScriptsSQL/gsbfrais_bduser.sql` et dans le fichier `config.php`.

Seul le dossier `www` doit être servi par le serveur web.