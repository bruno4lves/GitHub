<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>

  <body>

    <div class="login-page">
      <div class="form">
        <form class="register-form" method="post" action="cadastrando.php">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <input type="text" placeholder="email address"/>
          <button>create</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" name="loginform" method="post" action="userauthentication.php">
          <input type="text" name="email" placeholder="Usuário"/>
          <input type="password" name="senha" placeholder="Senha"/>
          <button>login</button>
          <p class="message">Ainda não possui conta? <a href="#">Crie uma agora</a></p>
        </form>
      </div>
    </div>

    <!--<form name="register-form" method="post" action="userauthentication.php">-->
      
      
    </form>

  </body>
</html>

