<!DOCTYPE html>
<html>

<head>
    <title>Super Variable !</title>
    <meta charset="utf-8" />
    <link href="SuperVC.css" rel="stylesheet" />
</head>

<body>
    <?php 
    //Connection à la base de données avec gestion de l'erreur 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
    echo "<h1>Visiteurs !</h1>";
    
    //Test sur l'ouverture des fichiers 
    //Compteur à visiteurs
    $compteur = fopen('NbrVues.txt','r+');
    $vues = fgets($compteur)+1 ;
    echo "<pre id='test'>Vous êtes le <span id='test1'>$vues</span> ème visiteurs !</pre>";
    fseek($compteur,0);
    fputs($compteur,$vues);
    fclose($compteur);
    
    //TEST BDD
    $rep = $bdd->prepare('SELECT * FROM jeux_video WHERE possesseur = ? AND prix <= ? ORDER BY prix');
    $rep->execute(array($_GET['possesseur'], $_GET['prix_max']));
    while($aff=$rep->fetch()){
        echo "<br>" . $aff['nom'] . "( " . $aff['prix'] . "€ , " . $aff['possesseur'] . " )" ;
    }
    $rep->closeCursor();
    ?>
    
</body>

</html>