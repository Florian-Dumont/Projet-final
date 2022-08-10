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
            <input type="password" name="password" required/>
        </div>
          </div>
          
          <button type="submit" onclick="sendData({test:'ok'})">Inscription !</button>
        </form>