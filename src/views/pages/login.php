<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login - PDV</title>
    <link rel="stylesheet" href="<?=$base?>/assets/css/login.css" />
    <link rel = "stylesheet" href = "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  </head>
  <body>
    
    <img class="wave" src="<?=$base?>/assets/img/wave.png">

    <div class="container">
        <div class="img">
            <img src="<?=$base?>/assets/img/bg.svg">
        </div>

        <div class="login-container">
            <form id="form-login">
                <div class="pf-area">
                    <img class="pf" src="<?=$base?>/assets/img/pf.svg">
                </div>

                <h2>Bem Vindo!</h2>

                <div class="input-div one">
                    <div class="i">
                        <i class="las la-user-tie"></i>
                    </div>

                    <div>
                        <h5>Número</h5>
                        <input autocomplete="off" class="input" type="text" name="user_number">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="las la-lock"></i>
                    </div>

                    <div>
                        <h5>Senha</h5>
                        <input autocomplete="off" class="input" type="password" name="pass">
                    </div>
                </div>

                <button class="btn btn-login" type="submit"><span class="back login"></span>Entrar</button>
            </form>
        </div>
    </div>

    <?=$render('scripts')?>
  </body>
</html>