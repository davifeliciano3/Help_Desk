<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="POST">
                <div class="form-group">
                  <input type="email"  name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') { //Verifica se o GET login esta setado e se é igual a erro para assim informar ao usuário que a senha é invalida

                
                    ?>
                    <div class="text-danger">
                      Usuário ou senha inválidos
                    </div>
                <?php 
                    }
                ?>
                  <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2') { //Verifica se o GET login esta setado e se é igual a erro2 para assim informar ao usuário precisa fazer o login antes de acessar

                
                    ?>
                    <div class="text-danger">
                      Faça o login
                    </div>
                <?php 
                    }
                ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>