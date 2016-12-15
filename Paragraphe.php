<!DOCTYPE html>

<html>
<h1>Votre pays !</h1>
<p>
    <?php 
    
    if ($_POST['Country'] != 'Autres')  
        {
            echo 'Vous habitez en ' . $_POST['Country'].'. ';
        }
        
    if ($_POST['Country']=='France')
        {
            echo 'La France est un merveilleux pays.';
        }
    
            else 
        {
            echo '<br/>Je pense que vous devriez partir en France';
        }
        
    
    ?>
</p>
    <?php 
    if (isset($_POST['Pseudo']) and $_POST['Pseudo'] != '')
    {
        
    echo 'Bonjour ' . strip_tags($_POST['Pseudo']);
    
    }
    else
    {
        echo 'Qui es-tu ?';
    }

    echo '<br/> Votre mot de passe: ' . htmlspecialchars($_POST['Password']);
    
    ?>
    
   </html>