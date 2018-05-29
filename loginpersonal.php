<?php include "inc/header_home.php"; ?>
<style>
html {}
body {background: url(images/bkg_personal.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;font-family: 'Raleway', sans-serif;}
.logofront { margin-top: 200px; }
.full h1 { text-align: center; font-size: 20px; color: #ffffff; }
.full p { text-align: center; color: #dedede; padding: 15px 0; }
.footer { display: none;}
</style>
    <div class="container full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div align="center" class="logofront">
                        <img src="images/logo_blanco.svg" alt="" title="" width="200">
                    </div>
                    <h1>Instituto Mexicano del Cemento y del Concreto A.C.</h1>
                    <hr>
                    <p>PERSONAL CERTIFICADO</p>
                </div>
            </div>
            <form class="formloginpersonal" method="post" id="login-formpersonal">
                <div class="row accesos">
                    <div class="col-md-12">
                            <h2 style="color:#ffffff;margin:0;padding:0;padding-bottom: 10px;">Ingresar a su cuenta</h2>
                            <hr>
                            <div id="error"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail" style="color:#ffffff">Usuario</label>
                            <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" />
                                <!--<span id="check-e"></span>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword" style="color:#ffffff">Contrase&ntilde;a</label>
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-loginpersonal" id="btn-loginpersonal" style="position:relative;float:right;">
                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; INGRESAR A SU CUENTA
                            </button> 
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include "inc/footer.php"; ?>
