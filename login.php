<html class="bglogin">

    <?php
    include './partial/head.php';
    ?>
    <body>

<div class="container ">         
  <div class="row">
    <form class="col s6 panel-login center-align" action="index.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="mdi-action-account-circle prefix"></i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Usuário</label>
        </div>
        <div class="input-field col s12">
          <i class="mdi-communication-phone prefix"></i>
          <input id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Senha</label>
        </div>

        <div class="input-field col s12">

  <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="mdi-content-send right"></i>
  </button>
        </div>
      </div>
    </form>
  </div>
        
        </div>
      
    </body>
</html>