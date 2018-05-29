<?php include "inc/header_home.php"; ?>
<style>
html {}
body {background: url(images/bkg_laboratorio.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;font-family: 'Raleway', sans-serif;background: #1e5799; background: -moz-linear-gradient(-45deg,  #1e5799 0%, #0d1519 100%); background: -webkit-linear-gradient(-45deg,  #1e5799 0%,#0d1519 100%); background: linear-gradient(135deg,  #1e5799 0%,#0d1519 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#0d1519',GradientType=1 ); height: 100vh;
}
.full h1 { text-align: center; font-size: 20px; color: #ffffff; }
.full p { text-align: center; color: #dedede; padding: 15px 0; }
</style>
    <div class="container full">
        <div class="container" style="position:absolute;top: 50px;">
            <div class="row">
                <div class="col-md-12">
                    <div align="center" class="logofront">
                        <img src="images/logo_blanco.svg" alt="" title="" width="200">
                    </div>
                    <h1>Instituto Mexicano del Cemento y del Concreto A.C.</h1>
                    <hr>
                    <p>CERTIFICACIONES ESPECIALIZADAS</p>
                </div>
            </div>

            <div class="row accesos">
                <div class="col-md-6">
                    <!--<a href="personal/index.php" class="btn btn-acceso">PERSONAL</a>-->
                    <a href="loginpersonal.php" class="btn btn-acceso"><i class="fa fa-arrow-alt-circle-right"></i> PERSONAL</a>
                </div>
                <div class="col-md-6">
                    <!--<a href="concreto.php" class="btn btn-acceso">LABORATORIO</a>-->
                    <a href="loginlaboratorio.php" class="btn btn-acceso"><i class="fa fa-arrow-alt-circle-right"></i> LABORATORIO</a>
                </div>
            </div>

            <div class="row accesos">
                <div class="col-md-6">
                    <!--<a href="aditivos.php" class="btn btn-acceso">PRODUCTOS</a>-->
                    <a href="loginaditivos.php" class="btn btn-acceso"><i class="fa fa-arrow-alt-circle-right"></i> PRODUCTOS</a>
                </div>
                <div class="col-md-6">
                    <!--<a href="mezcladora.php" class="btn btn-acceso">MAQUINARIA</a>-->
                    <a href="login.php" class="btn btn-acceso"><i class="fa fa-arrow-alt-circle-right"></i> MAQUINARIA</a>
                </div>
            </div>
        </div>
        
        
        <!--<div class="row accesos">
            <div class="col-md-6">
                <a href="concreto.php" class="btn btn-acceso">Verificación para concreto</a>
            </div>
            <div class="col-md-6">
                <a href="concreto_endurecido.php" class="btn btn-acceso">Concreto endurecido</a>
            </div>
        </div>
        <div class="row accesos">
            <div class="col-md-6">
                <a href="concreto_fresco.php" class="btn btn-acceso">Concreto fresco</a>
            </div>
            <div class="col-md-6">
                
            </div>
        </div>-->
        
    </div>


<?php //include "inc/footer.php"; ?>
