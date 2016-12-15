<!DOCTYPE html>
<html>
    <head>
        <title>Ma SandBox</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SandBoxC.css">
        <script>
            function op()
            {
             var fe='http://www.aliz-air.fr';
             window.open(fe);
                
            }
            //op()
        </script>
    </head>
    <body>
        <!--<h2 id="test">Affichage de texte avec PHP</h2>
         <?//php include("Paragraphe.php") ?>

        Moi je suis du simple HTML mais je suis quand même là hein !
        
        <p id="php">
            <?/* php
    function volumeCube($cote)
{   
 return $cote*$cote*$cote;   
}
    
    
    
    $array[0]= "test";
    $array[1]="pommes";
    $array[]="pêches";
    $array[]="poires";
    echo "<br />Tu aimes les $array[1] et aussi les $array[2] et $array[3]";
    $volume=volumeCube(2);
    echo ". Le volume est de $volume cm3";
        
    $Gautier= array ("Prenom"=>"Gautier","Nom"=>"Plancq","Age"=>"17");
    echo(". Tu t n'appelles ".$Gautier["Prenom"]." ".$Gautier["Nom"]." , ". $Gautier["Age"]." ans. <br /><br/>");
        
        if (array_key_exists('Prenom',$Gautier))
        {
         echo 'Cela existe';   
        }
            */?></p> -->
        
        
        <h2>Où habitez-vous?</h2><br />
        <a id="link" href="Paragraphe.php?pays=France">France</a>
        <a id="link" href="Paragraphe.php?pays=Chine">Chine</a>
        <a id="link" href="Paragraphe.php?pays=Suède">Suède</a>
        <br/> <br/>
        
        <fieldset>
            <legend>Connexion</legend>
            
            <form method="post" action="Paragraphe.php">
                <fieldset>
                    <legend>Identifiants</legend>
            <label for='Pseudo'>Votre pseudo</label> : <input type="text" name="Pseudo" placeholder="Pseudo" id="Pseudo" maxLength='20' autofocus/><br/><br/>
            <Label for='Password'>Mot de passe</Label> : <input type="password" name="Password" id='Password' placeholder='Password' required/>
                </fieldset>
                <fieldset>
                    <legend>Pays</legend>
                    <input type="radio" name="Country" value="France" id="France"/><label for="France">France</label>
                    <input type="radio" name="Country" value="Suède" id="Suède"/><label for="Suède">Suède</label>
                    <input type="radio" name="Country" value="Chine" id="Chine"/><label for="Chine">Chine</label>
                    <input type="radio" name="Country" value="Autres" id="Autres" checked="checked"/><label for="Autres">Autres</label>
                </fieldset><br/>
                <input type="submit" value="Envoyer"/>
        </form>
        </fieldset>
        <br/> 
        
        
    <pre>Cette balise est plutôt cool.
    Je ne la connaissais pas avant mais maintenant je la trouve géniale !</pre>
        
        
    </body>
</html>