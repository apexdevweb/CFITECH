## LOG ##
nom: smartphoneweb
mdp: Jerem13

## ↓↓↓test↓↓↓ ##

deploiement du site sur alwaysdata en PHP-HTML-CSS-JAVASCRIPT-BOOTSRAP-MYSQL

D'abord s'inscrire sur alwaysdata.com
Prendre la version gratuite donc 100 MO
Choisir nom du site et mot de passe
Ensuite tapez sur google filezilla download. Telecharger et installer filezilla client.
Vous retournez sur alwaysdata et vous cliquez sur Accès distant puis sur FTP.
La vous copiez le nom de l'hote FTP : ftp-NOMDEVOTRESITE.alwaysdata.net
Vous allez coller dans filezilla dans hote. Puis vous allez taper votre nom d'utilisateur ainsi que le mot de passe que vous avez créé.
Et dans port vous mettrez 21 (qui est le port ftp) puis vous cliquerez sur connexion rapide.
Vous allez ensuite transferer votre site web dans le dossier www dans filezilla
Ensuite vous tapez dans votre navigateur https://NOMDEVOTRESITE.alwaysdata.net/NOMDEVOTREDOSSIER/
Et vous remarquez qu'il y a un probleme au niveau de la base de données, parcequ'on a pas importer la BD sur alwaysdata.
Retourner sur alwaysdata et cliquer sur base de données ensuite MySQL.
Cliquez sur ajouter une base de données et la donnez lui un nom (exemple nomUser_db, attention AD vous impose un prefixe avec votre nom suivi d'underscore) 
Puis cliquez sur phpmyadmin et connectez vous avec votre nom d'utilisateur sur AD que vous avez utilisé sur filezila.
Cliquez sur la base de données dans phpmyadmin et importer votre base de données local.
Si vous retournez sur votre site, vous verrez qu'il ne fonctionne toujours pas parcequ'il faut aller modifier le nom et la config de votre base de données de votre projet. 
On avait configurer la BD dans le header.
Pour le dbname c'est le nom de votre base de données dans phpmyadmin sur AD, ensuite a la place de root c'est votre nom d'utilisateur et a coté le MDP.
Pour le host il faut aller dans AD dans base de données puis MYSQL et vous récuperer le nom de l'hote 
$pdo = new PDO('mysql:dbname=nomdevotreDB;host=mysql-nomdusite.alwaysdata.net', "nomdutilisateur", "motdepasse");
Vous sauvegardez et n'oubliez surtout pas de retourner sur filezilla et vous cliquez pour chacune des modifications faites.
Normalement votre site est maintenant fonctionnel. 
Il faut par contre allez modifier dans /header.php, footer.php certaines voir toutes les href et rajouter l'extension .php. Si ce n'est pas déjà fait.

