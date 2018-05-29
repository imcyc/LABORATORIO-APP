<?php 
session_start();
if(!isset($_SESSION['user_session'])){
    header("Location: index.php");
}
include "inc/header.php"; 
?>
        <div class="resultadoaditivos">
            <p class="sup"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> PUNTUACIÓN: <span class="rex"><input type="text" name="sum" class="sum" /></span></p>
            <hr style="margin: 0;">
            <div id="progressBar"><div></div></div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h4 class="titular">Clasificación de aditivos con base en la NMX-255</h4>
                <hr>
            </div>
        </div>
        <form action="aditivos_resultado.php" method="POST">
            <hr>
            <div class="row laboratorio">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Empresa: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nombre de la empresa" name="empresa" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Planta: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nombre de la planta" name="planta" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Ubicación: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Ubicación de la planta" name="ubicacion" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Responsable: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nombre de responsable" name="responsable" required>
                      </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mezclatitdos aditivos">
                <div class="col-md-4" style="padding: 0 2px;">
                    <h2 style="height:65px;padding-top: 25px;">PROPIEDAD</h2>
                </div>
                <div class="col-md-2">
                    <h2 style="height:65px;padding-top: 25px;">UNIDAD</h2>
                </div>
                <div class="col-md-2">
                    <h2 style="height:65px;padding-top: 17px;">TIPO A<br>REDUCTOR DE AGUA</h2>
                </div>
                <div class="col-md-2">
                    <h2 style="height:65px;">TIPO F<br>REDUCTOR DE AGUA<br>DE ALTO RANGO</h2>
                </div>
                <div class="col-md-2">
                    <h2 style="height:65px;padding-top: 25px;">EJEMPLO TIPO A</h2>
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>Reducción de agua mínimo con respecto a testigo sin aditivo</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_amtsa" type="text" class="form-control ccsa" id="usr" placeholder="%">
                </div>
                <div class="col-md-2">
                    <input name="taa_amtsa" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="tfa_amtsa" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="eta_amtsa" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="titular">Tiempo de fraguado</h4>
                    <hr>
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>Inicial, al menos</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_iam" id="timepicker" type="text" class="form-control ccsa">
                </div>
                <div class="col-md-2">
                    <input name="taa_iam" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="tfa_iam" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="eta_iam" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>Inicial, no más de</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_inmd" id="timepickerb" type="text" class="form-control ccsa">
                </div>
                <div class="col-md-2">
                    <input name="taa_inmd" type="text" class="form-control ccsa" id="usr" placeholder="1:00 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="tfa_inmd" type="text" class="form-control ccsa" id="usr" placeholder="1:00 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="eta_inmd" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <div class="row mezclatext">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <input name="u_inmdb" id="timepickerc" type="text" class="form-control ccsa" style="margin-top: 3px;">
                </div>
                <div class="col-md-2">
                    <input name="taa_inmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr" placeholder="1:30 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="tfa_inmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr" placeholder="1:30 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="eta_inmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr">
                </div>
            </div>
            <hr style="margin-top: 10px;">
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>Final, al menos</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_fam" id="timepickerd" type="text" class="form-control ccsa">
                </div>
                <div class="col-md-2">
                    <input name="taa_fam" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="tfa_fam" type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input name="eta_fam" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>IFinal, no más de</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_fnmd" id="timepickere" type="text" class="form-control ccsa">
                </div>
                <div class="col-md-2">
                    <input name="taa_fnmd" type="text" class="form-control ccsa" id="usr" placeholder="1:00 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="tfa_fnmd" type="text" class="form-control ccsa" id="usr" placeholder="1:00 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="eta_fnmd" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <div class="row mezclatext">
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <input name="u_fnmdb" id="timepickerf" type="text" class="form-control ccsa">
                </div>
                <div class="col-md-2">
                    <input name="taa_fnmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr" placeholder="1:30 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="tfa_fnmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr" placeholder="1:30 más temprano">
                </div>
                <div class="col-md-2">
                    <input name="eta_fnmdb" type="text" class="form-control ccsa" style="margin-top: 3px;" id="usr">
                </div>
            </div>
            <hr style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="titular">Resistencia a compresión mínima con respecto a testigo (100%)</h4>
                    <hr>
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>1 día</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_rcmcrt1" type="text" class="form-control ccsa" id="usr" placeholder="%">
                </div>
                <div class="col-md-2">
                    <input name="taa_rcmcrt1" type="text" class="form-control ccsa" id="usr" placeholder="110">
                </div>
                <div class="col-md-2">
                    <input name="tfa_rcmcrt1" type="text" class="form-control ccsa" id="usr" placeholder="140">
                </div>
                <div class="col-md-2">
                    <input name="eta_rcmcrt1" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>3 días</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_rcmcrt3" type="text" class="form-control ccsa" id="usr" placeholder="%">
                </div>
                <div class="col-md-2">
                    <input name="taa_rcmcrt3" type="text" class="form-control ccsa" id="usr" placeholder="110">
                </div>
                <div class="col-md-2">
                    <input name="tfa_rcmcrt3" type="text" class="form-control ccsa" id="usr" placeholder="125">
                </div>
                <div class="col-md-2">
                    <input name="eta_rcmcrt3" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>7 días</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_rcmcrt7" type="text" class="form-control ccsa" id="usr" placeholder="%">
                </div>
                <div class="col-md-2">
                    <input name="taa_rcmcrt7" type="text" class="form-control ccsa" id="usr" placeholder="110">
                </div>
                <div class="col-md-2">
                    <input name="tfa_rcmcrt7" type="text" class="form-control ccsa" id="usr" placeholder="115">
                </div>
                <div class="col-md-2">
                    <input name="eta_rcmcrt7" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-4">
                    <h2>28 días</h2>
                </div>
                <div class="col-md-2">
                    <input name="u_rcmcrt28" type="text" class="form-control ccsa" id="usr" placeholder="%">
                </div>
                <div class="col-md-2">
                    <input name="taa_rcmcrt28" type="text" class="form-control ccsa" id="usr" placeholder="110">
                </div>
                <div class="col-md-2">
                    <input name="tfa_rcmcrt28" type="text" class="form-control ccsa" id="usr" placeholder="110">
                </div>
                <div class="col-md-2">
                    <input name="eta_rcmcrt28" type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" name="submit" class="btn btn-success enviar" style="margin-top: 20px;">ENVIAR CUESTIONARIO</button>
                </div>
            </div>
        </form>
<?php include "inc/footer_aditivos.php"; ?>
