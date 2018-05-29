<?php 
include "inc/header.php";

$empresa = $_POST['empresa'];
$planta = $_POST['planta'];
$ubicacion = $_POST['ubicacion'];
$responsable = $_POST['responsable'];
$u_amtsa = $_POST['u_amtsa'];
$taa_amtsa = $_POST['taa_amtsa'];
$tfa_amtsa = $_POST['tfa_amtsa'];
$eta_amtsa = $_POST['eta_amtsa'];
$u_iam = $_POST['u_iam'];
$taa_iam = $_POST['taa_iam'];
$tfa_iam = $_POST['tfa_iam'];
$eta_iam = $_POST['eta_iam'];
$u_inmd = $_POST['u_inmd'];
$taa_inmd = $_POST['taa_inmd'];
$tfa_inmd = $_POST['tfa_inmd'];
$eta_inmd = $_POST['eta_inmd'];
$u_inmdb = $_POST['u_inmdb'];
$taa_inmdb = $_POST['taa_inmdb'];
$tfa_inmdb = $_POST['tfa_inmdb'];
$eta_inmdb = $_POST['eta_inmdb'];
$u_fam = $_POST['u_fam'];
$taa_fam = $_POST['taa_fam'];
$tfa_fam = $_POST['tfa_fam'];
$eta_fam = $_POST['eta_fam'];
$u_fnmd = $_POST['u_fnmd'];
$taa_fnmd = $_POST['taa_fnmd'];
$tfa_fnmd = $_POST['tfa_fnmd'];
$eta_fnmd = $_POST['eta_fnmd'];
$u_fnmdb = $_POST['u_fnmdb'];
$taa_fnmdb = $_POST['taa_fnmdb'];
$tfa_fnmdb = $_POST['tfa_fnmdb'];
$eta_fnmdb = $_POST['eta_fnmdb'];
$u_rcmcrt1 = $_POST['u_rcmcrt1'];
$taa_rcmcrt1 = $_POST['taa_rcmcrt1'];
$tfa_rcmcrt1 = $_POST['tfa_rcmcrt1'];
$eta_rcmcrt1 = $_POST['eta_rcmcrt1'];
$u_rcmcrt3 = $_POST['u_rcmcrt3'];
$taa_rcmcrt3 = $_POST['taa_rcmcrt3'];
$tfa_rcmcrt3 = $_POST['tfa_rcmcrt3'];
$eta_rcmcrt3 = $_POST['eta_rcmcrt3'];
$u_rcmcrt7 = $_POST['u_rcmcrt7'];
$taa_rcmcrt7 = $_POST['taa_rcmcrt7'];
$tfa_rcmcrt7 = $_POST['tfa_rcmcrt7'];
$eta_rcmcrt7 = $_POST['eta_rcmcrt7'];
$u_rcmcrt28 = $_POST['u_rcmcrt28'];
$taa_rcmcrt28 = $_POST['taa_rcmcrt28'];
$tfa_rcmcrt28 = $_POST['tfa_rcmcrt28'];
$eta_rcmcrt28 = $_POST['eta_rcmcrt28'];
?>

<div class="container resx">
        <div class="row">
            <div class="col-md-12">
                <h4 class="titular">Clasificación de aditivos con base en la NMX-255</h4>
                <hr>
            </div>
        </div>
        <hr style="margin: 0;">
        <div class="row">
            <div class="col-md-12" style="">
                <h2 style="text-align: center; margin: 10px; color: #ffffff;background:#0073A5; padding: 7px 0;">RESULTADOS</h2>
            </div>
        </div>
        <hr style="margin: 0; margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">Empresa: <?php echo $empresa; ?></div>
            </div>
            <div class="col-md-6">
                <div class="well well-sm">Planta: <?php echo $planta; ?></div>
            </div>
            <div class="col-md-6">
                <div class="well well-sm">Ubicación: <?php echo $ubicacion; ?></div>
            </div>
            <div class="col-md-6">
                <div class="well well-sm">Responsable: <?php echo $responsable; ?></div>
            </div>
        </div>
        <hr style="margin: 0; ">
        <div class="row mezclatitdos aditivos">
            <div class="col-md-4" style="padding: 0 2px;">
                <h2 style="height:65px;padding-top: 25px;background:#044866;">PROPIEDAD</h2>
            </div>
            <div class="col-md-2">
                <h2 style="height:65px;padding-top: 25px;background:#044866;">UNIDAD</h2>
            </div>
            <div class="col-md-2">
                <h2 style="height:65px;padding-top: 17px;background:#044866;">TIPO A<br>REDUCTOR DE AGUA</h2>
            </div>
            <div class="col-md-2">
                <h2 style="height:65px;background:#044866;">TIPO F<br>REDUCTOR DE AGUA<br>DE ALTO RANGO</h2>
            </div>
            <div class="col-md-2">
                <h2 style="height:65px;padding-top: 25px;background:#044866;">EJEMPLO TIPO A</h2>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>Reducción de agua mínimo con respecto a testigo sin aditivo</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_amtsa; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_amtsa; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_amtsa; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_amtsa; ?></p>
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
                <p class="resux"><?php echo $u_iam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_iam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_iam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_iam; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>Inicial, no más de</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_inmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_inmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_inmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_inmd; ?></p>
            </div>
        </div>
        <div class="row mezclatext">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_inmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_inmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_inmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_inmdb; ?></p>
            </div>
        </div>
        <hr style="margin-top: 10px;">
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>Final, al menos</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_fam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_fam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_fam; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_fam; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>Final, no más de</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_fnmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_fnmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_fnmd; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_fnmd; ?></p>
            </div>
        </div>
        <div class="row mezclatext">
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_fnmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_fnmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_fnmdb; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_fnmdb; ?></p>
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
                <p class="resux"><?php echo $u_rcmcrt1; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_rcmcrt1; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_rcmcrt1; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_rcmcrt1; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>3 días</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_rcmcrt3; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_rcmcrt3; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_rcmcrt3; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_rcmcrt3; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>7 días</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_rcmcrt7; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_rcmcrt7; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_rcmcrt7; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_rcmcrt7; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-4">
                <h2>7 días</h2>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $u_rcmcrt28; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $taa_rcmcrt28; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $tfa_rcmcrt28; ?></p>
            </div>
            <div class="col-md-2">
                <p class="resux"><?php echo $eta_rcmcrt28; ?></p>
            </div>
        </div>
        <hr>
        <div class="row mezclatext">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        
                        
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary resux" data-toggle="modal" data-target="#enviarcorreo">
                          ENVIAR POR CORREO
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="enviarcorreo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">ENVIAR RESULTADOS POR EMAIL</h5>
                              </div>
                              <div class="modal-body">
                                ...
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">CERRAR</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                    </div>
                    <div class="col-md-6">


                        
                        
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary resux" data-toggle="modal" data-target="#imprimirresultado">
                          IMPRIMIR COMO PDF
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="imprimirresultado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">IMPRIMIR RESULTADOS EN PDF</h5>
                              </div>
                              <div class="modal-body">
                                ...
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">CERRAR</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include "inc/footer_aditivos.php"; 
