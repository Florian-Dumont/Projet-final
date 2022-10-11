<?php

// include "../src/managers/UserManager.php";

// $model = new Usermanager();
//                 $token = $model->displayFormAddCustomers();

              
              
  // etant donnée la présence des deux formulaire dans la meme page, cela crée un conflit qui m'nepeche d'utiliser mon usermanager pour faire appel a une methode pour generer mon token (class deja appelé etqui est réappelé une seconde fois)
  // Je sort legerement du MVC en generant mon token et mon $_SESSION ici meme
  $token = substr(str_shuffle(str_repeat($code='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', ceil(20/strlen($code)) )),1,20);
  $_SESSION['key'] = $token; 
                
?>

<!-- FORMULAIRE D'INSCRIPTION  -->

<form class="log-form" action="" method="post">
            <label class="form_name" for="text" id="text" name="form_name" >Inscription</label>
          <div>
            <label for="name">Nom&nbsp;:</label>
            <input type="text" id="name" name="name" />
          <div>
          <div>
            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" id="mail" name="email" required/>
        <div>
            <label for="password">Mot de passe&nbsp;:</label>
            <input type="password" id="password_1" name="password" required/><i id="eyes" class="fa-solid fa-eye-slash"></i>
            <input type="hidden" name="token" value="<?=$token?>">
        </div>
          </div>
          
          <button type="submit" onclick="sendData({test:'ok'})">Inscription !</button>
</form>
        
        <!-- FORMULAIRE DE CONNEXION -->
        
<form class="login-form" action="index.php" method="post">
            <label class="form_name" for="text" id="text" name="form_name" >Connexion</label>
          <div>
            <label for="email">E-mail&nbsp;:</label>
            <input type="email" id="email" name="emailconnexion" required/>
        <div>
            <label for="password">Mot de passe&nbsp;:</label>
            <input type="password" id="password_2" name="passwordconnexion" required/><i id="eyes_2" class="fa-solid fa-eye-slash"></i>
            <input type="hidden" name="token" value="<?=$token?>">
        </div>
          </div>
          
          <button type="submit" onclick="sendData({test:'ok'})">let's go!</button>
</form>