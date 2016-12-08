<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SandBoxC.css">
    </head>
    <body>
        <h2 id="test">Affichage de texte avec PHP</h2>
        <?php include("Paragraphe.php") ?>
        Moi je suis du simple HTML mais je suis quand même là hein !
        
        <?php
    function volumeCube($cote)
{   
 return $cote*$cote*$cote;   
}
    
    
    
    $array[0]= "test";
    $array[1]="pommes";
    $array[]="pêches";
    $array[]="poires";
    echo "Tu aimes les $array[1] et aussi les $array[2] et $array[3]";
    $volume=volumeCube(2);
    echo ". Le volume est de $volume cm3";
        
    $Gautier= array ("Prenom"=>"Gautier","Nom"=>"Plancq","Age"=>"17");
    echo(". Tu t n'appelles ".$Gautier["Prenom"]." ".$Gautier["Nom"]." , ". $Gautier["Age"]." ans.");
        ?>
    </body>
</html>