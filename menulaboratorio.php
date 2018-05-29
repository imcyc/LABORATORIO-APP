<?php 
session_start();
if(!isset($_SESSION['user_session'])){
    header("Location: index.php");
}
include "inc/header.php"; 
?>
<style>
    body {background: url(images/bkg_laboratorio.jpg) no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;font-family: 'Raleway', sans-serif;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,0d1519+100 */
background: #1e5799; /* Old browsers */
background: -moz-linear-gradient(-45deg,  #1e5799 0%, #0d1519 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg,  #1e5799 0%,#0d1519 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg,  #1e5799 0%,#0d1519 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#0d1519',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
height: 100vh;
display: flex;
  align-items: center;
  color:#ffffff;
}
body.vampire {
    display: block;
}
.jumbotron {
    background: none;
    border-radius: 0;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 20px;
    font-weight: 100;
}
.btn.btn-default.azul {
    width: 100%;
    background: rgba(35,63,86,0.8);
    box-shadow: 0 0 5px #000000;
    color: #fff;
    border:0;
}
.btn.btn-default.azul.verde {
    background: rgba(35,100,86,0.8);
    font-weight: bold;
}

.form-group {
    margin-bottom: 0;
}
.jumbotron.vertical-center.id, .jumbotron.vertical-center.resultadosgrales {
    display: none;
}
.footer {
    display: none;
}
.fa-arrow-alt-circle-right {
    margin-top: -3px;
}
h3.laevaluacion {
    padding: 20px 5px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 800;
    border-bottom: 1px solid #fff;
    margin-bottom: 20px;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 30px;
}
@media screen and (max-width: 990px) {
    .form-control, .btn.btn-default.azul {
        margin: 5px 0;
    }
}
</style>

<div class="jumbotron vertical-center seccion">
  <div class="container full">
      <div class="row">
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-156 revenimiento" data-ref="includes/revenimiento.php"><i class="fa fa-arrow-alt-circle-right"></i> REVENIMIENTO</button>
          </div>
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-157 contenido de aire (MÉTODO B)" data-ref="includes/contenidodeaire.php"><i class="fa fa-arrow-alt-circle-right"></i> CONTENIDO DE AIRE</button>
          </div>
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-159 ELABORACIÓN DE CILINDROS" data-ref="includes/cilindros.php"><i class="fa fa-arrow-alt-circle-right"></i> CILINDROS</button>
          </div>
         
      </div>
      <div class="row" style="margin-top:30px;">
           <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-159 ELABORACIÓN DE CUBOS" data-ref="includes/cubos.php"><i class="fa fa-arrow-alt-circle-right"></i> CUBOS</button>
          </div>
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-159 ELABORACIÓN DE VIGAS" data-ref="includes/vigas.php"><i class="fa fa-arrow-alt-circle-right"></i> VIGAS</button>
          </div>
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-162 MASA UNITARIA" data-ref="includes/masaunitaria.php"><i class="fa fa-arrow-alt-circle-right"></i> MASA UNITARIA</button>
          </div>
          
      </div>
      <div class="row" style="margin-top:30px;">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              <button class="btn btn-default azul entrada" data-seq="NMX-C-435 TEMPERATURA" data-ref="includes/temperatura.php"><i class="fa fa-arrow-alt-circle-right"></i> TEMPERATURA</button>
          </div>
          <div class="col-md-4"></div>
      </div>
      <div class="row" style="margin-top:30px;">
          <div class="col-md-2"></div>
          <div class="col-md-8" style="margin-top:30px;">
              <button class="btn btn-default azul verde resultadogral" data-seq="resultados" data-ref="resultados.php"><i class="fa fa-arrow-alt-circle-right"></i> RESULTADOS</button>
          </div>
          <div class="col-md-2"></div>
      </div>
  </div>
</div>
<div class="jumbotron vertical-center id">
  <div class="container full">
      <div class="row">
          <h3 class="laevaluacion"></h3>
      </div>
      <div class="row">
          <div class="col-md-6">
              <a href="" class="btn btn-default azul linker"><i class="fa fa-arrow-alt-circle-right"></i> EVALUAR <b>EQUIPO Y PROCEDIMIENTO</b></a>
          </div>
          <div class="col-md-6">
              <div class="row">
                  <form id="usuarioequipo" class="felid">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input name="elid" type="text" class="form-control" placeholder="INGRESAR ID" style="padding: 23px;border-radius: 50px;">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <button type="submit" class="btn btn-default azul tecnico"><i class="fa fa-arrow-alt-circle-right"></i> BUSCAR ID</button>
                      </div>
                  </form>
                  <div class="loader"></div>
                  <div id="error"></div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="jumbotron vertical-center resultadosgrales">
    <div class="container full">
        <div class="row">
            <hr>
                <h3 class="rgrales">RESULTADOS GENERALES</h3>
            <hr>
            <div class="regresar">
                <button class="btn btn-default azul regresar resultax"><i class="fa fa-arrow-alt-circle-left"></i> REGRESAR</button>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="resultmix"></div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>