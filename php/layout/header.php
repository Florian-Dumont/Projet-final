<?php
session_start();
?>
<header>
    <div class="logs">
        <a class="log-in" href="index.php?route=connexion">
            <?php
            
            
            
            var_dump($_SESSION);
            if(isset($_SESSION['user']))
            {
                return $_SESSION['user']['pseudo'];
            }else{
                echo "t'es pas co";
            }
            
            
            ?>
        </a>
        <a class="log-out" href="#"><i class="fa-solid fa-arrow-right-from-bracket">
            
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