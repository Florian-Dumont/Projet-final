<form class="login-form" action="" method="post">
            <label class="form_name" for="text" id="text" name="form_name" >Connexion</label>
          <div>
            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" id="email" name="emailconnexion" required/>
        <div>
            <label for="password">Mot de passe&nbsp;:</label>
            <input type="password" name="passwordconnexion" required/>
        </div>
          </div>
          
          <button type="submit" onclick="sendData({test:'ok'})">let's go!</button>
        </form>