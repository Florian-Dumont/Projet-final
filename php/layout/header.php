<?php
// session_start();
?>
<header>
    <div class="logs">
        <a class="log-in" href="index.php?route=connexion">
            <?php
            
            
            
            
            if(isset($_SESSION['user']))
            {
                echo $_SESSION['user']['pseudo'];
                
            }else{
                echo "Connexion";
            }
            
            
            ?>
        </a>
        <a class="log-out" href="index.php"><i class="fa-solid fa-arrow-right-from-bracket">
            
            <?php
 
// Déconnexion de l'utilisateur
$_SESSION = array();
session_unset();
session_destroy();

 
?>
            
        </i></a>
    </div>
    <div class="logo">
        <a href="index.php">
            <img src="../../ressources/Logo1.png" alt="" class="header_logo">
        </a>
    </div>
    <div class="under_logo">
        <div class="blanck"></div>
    <h1>Teyvat.fr</h1>
        <div class="sociaux">
            <a href="https://www.instagram.com/teyvat.fr/" target="_blanck"><i class="fa-brands fa-instagram">Teyvat.fr</i></a> <!--link + icone insta-->
            <a href="https://www.twitch.tv/saelwin" target="_blanck"><i class="fa-brands fa-twitch">Saelwin</i></a> <!--link + icone twitch-->
        </div>
    </div>
</header>