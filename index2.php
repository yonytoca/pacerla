
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/stilo.css"> 
    <?php 
        require_once "configuracion.php";    
    ?>
</head>
    <body>
    <div class="container">
        <div class="card card-container">
           
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="formlogin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Nombre Usuario" required autofocus maxlength="30">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required maxlength="30">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button id="login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar</button>
                <span id="resultado"></span>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Recuperar Clave?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body> 
</html>

<script type="text/javascript">
  $(document).ready(function(){
          
            $('#login').click(function(){
              realizaProceso();
            //iniciarSesion();
        }); 
   
  });
</script>
