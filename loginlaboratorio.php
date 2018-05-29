<?php include "inc/header_home.php"; ?>
<style>
body {background: url(images/bkg_laboratorio.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;font-family: 'Raleway', sans-serif;background: #1e5799; background: -moz-linear-gradient(-45deg,  #1e5799 0%, #0d1519 100%); background: -webkit-linear-gradient(-45deg,  #1e5799 0%,#0d1519 100%); background: linear-gradient(135deg,  #1e5799 0%,#0d1519 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#0d1519',GradientType=1 ); height: 100vh;
}
.logofront { margin-top: 100px; }
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
                    <p>CERTIFICACIONES DE LABORATORIO</p>
                </div>
            </div>
            <form class="formloginlaboratorio" method="post" id="login-formlaboratorio">
                <div class="row accesos">
                    <div class="col-md-12">
                            <h2 style="color:#ffffff;margin:0;padding:0;padding-bottom: 10px;padding-left: 40px;"><i class="fa fa-arrow-alt-circle-right" style="position: absolute;float: left;left: 15px;top: 0px;"></i> INGRESAR A SU CUENTA</h2>
                            <hr>
                            <div id="error"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail" style="color:#ffffff">USUARIO:</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" style="padding: 23px;border-radius: 50px;" />
                                <!--<span id="check-e"></span>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword" style="color:#ffffff">CONTRASE&Ntilde;A:</label>
                            <input type="password" class="form-control" name="password" id="password" style="padding: 23px;border-radius: 50px;" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-loginlaboratorio" id="btn-loginlaboratorio" style="position:relative;float:right;">
                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; INGRESAR A SU CUENTA
                            </button> 
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include "inc/footer.php"; ?>
