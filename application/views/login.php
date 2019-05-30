<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <?php include "includes/includecss.php"; ?>



</head>

<body style="background-color: #272c33;">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo base_url();?>assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <?php /* echo form_open('login/acceso/');*/
                    echo form_open(base_url()."index.php/login/acceso")


                    ?>
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo Electronico">
                        </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Recordarme

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">ENTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "includes/includejs.php"; ?>


</body>

</html>
