
<?php 

    if ($_POST['name'] === 'oof') { ?>
       
    <img src="/images/roblox.jpg"/></div>
<?php
    } elseif (is_numeric($_POST['name'])) {
        $chiffre = -1;
        while ($chiffre < $_POST['name']) {
            $chiffre = $chiffre + 1;
            echo $chiffre;
            echo ' | ';

         if($chiffre == $_POST['name']) {
            break;
        }
        }
    } elseif ($_POST['name'] === 'phpinfo') {
        echo phpinfo();
    } else {
            echo 'Bonjour' . ', ' . htmlspecialchars($_POST['name']);
        }   
    
?>