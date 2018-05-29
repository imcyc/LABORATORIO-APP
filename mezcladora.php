<?php
session_start();
if(!isset($_SESSION['user_session'])){
    header("Location: index.php");
}
include "inc/header.php"; 
?>
        <div class="resultado">
            <p class="sup"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> PUNTUACIÓN: <span class="rex"><input type="text" name="sum" class="sum" /></span></p>
            <hr style="margin: 0;">
            <div id="progressBar"><div></div></div>
        </div>
        <div class="row">
            <div class="col-md-12 titulo">
                <h4 class="titular">Listas de Verificación para revolvedora de concreto</h4>
                <h5>Checklist Final liberación de Unidades de Reacondicionamiento<br>MTM-CA-FOR-038-02</h5>
                <hr>
            </div>
        </div>
        <form action="resultado_mezcladora.php" method="POST">
            <hr style="margin-bottom: 10px;">
            <div class="row laboratorio">
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Modelo: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Modelo del camión" name="modelo" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Auditor: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nombre del auditor" name="auditor" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">No. económico del camión: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Número de circulación del camión" name="noeconomico" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">No. de serie del camión: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Tipo y número de serie del camión" name="noserie" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-12 inst">
                    <hr>
                    <p><b>INSTRUCCIONES:</b><br><br>En la SECCIÓN I ELEMENTOS INSTALADOS selecciona en el espacio de cambio, si el elemento fue cambiado, marcándolo con una paloma, en caso de que no, dejar el espacio libre sin marcar. Anotar la información solicitada por cada columna por los responsables enunciado.<br><br>En la SECCIÓN II PRUEBAS FINALES Y VERIFICACIÓN DE SISTEMAS se verificará la operación y funcionalidad de cada componente/sistema y características. En las características marcadas con (V) se deberá anotar un número (variable) y en las características marcadas con (A) se deberá marcar una paloma cuando cumpla con la característica y una X cuando no. Solo se liberan unidades que cumplan con todo los requerimientos de este formato.</p>
                    <hr style="margin-bottom: 10px;">
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Orden de compra: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Introducir el No. de orden de compra" name="ocompra" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">No. de pedido: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Introducir el No. de pedido" name="npedido" required>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Cliente: </label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Introducir el Nombre de cliente" name="cliente" required>
                      </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mezclatit">
                <div class="col-md-12">
                    <h2>SECCIÓN I. ELEMENTOS INSTALADOS</h2>
                </div>
            </div>
            <div class="row mezclatitdos">
                <div class="col-md-2">
                    <h2>MÓDULO/ELEMENTO</h2>
                </div>
                <div class="col-md-1">
                    <h2>CÓDIGO</h2>
                </div>
                <div class="col-md-2">
                    <h2>VERIFICAR (ATRIBUTOS)</h2>
                </div>
                <div class="col-md-1">
                    <h2>CAMBIO</h2>
                </div>
                <div class="col-md-1">
                    <h2>PRODUC.</h2>
                </div>
                <div class="col-md-1">
                    <h2>CALIDAD</h2>
                </div>
                <div class="col-md-1">
                    <h2>VERIFICAR</h2>
                </div>
                <div class="col-md-1">
                    <h2>REGISTRO</h2>
                </div>
                <div class="col-md-2">
                    <h2>OBSERVACIONES</h2>
                </div>
                
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>TANQUE DE AGUA SENCILLO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700701</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conex. Y flopper Sin fugas</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>MANGUERA DE AGUA</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700702</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conex. Sin fugas</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>PASILLO IZQUIERDO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700703</h2>
                </div>
                <div class="col-md-2">
                    <h2>Instalación alineada</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>PASILLO DERECHO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700704</h2>
                </div>
                <div class="col-md-2">
                    <h2>Instalación alineada</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CANAL 1</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700706</h2>
                </div>
                <div class="col-md-2">
                    <h2>Gira libremente</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CANAL 2</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700708</h2>
                </div>
                <div class="col-md-2">
                    <h2>Ensambla correctamente con C1</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CANAL 3</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700310</h2>
                </div>
                <div class="col-md-2">
                    <h2>Instalado de acuerdo a pedido</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>TAPA ABATIBLE C/NEOPRENO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700310</h2>
                </div>
                <div class="col-md-2">
                    <h2>Sella herméticamente</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>SEGURO DE MANOS</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700709</h2>
                </div>
                <div class="col-md-2">
                    <h2>Colocado en canal 1</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CONTROL TRASERO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700711</h2>
                </div>
                <div class="col-md-2">
                    <h2>Palanca gira sin aplicar mucha fuerza</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CONTROL CABINA</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700712</h2>
                </div>
                <div class="col-md-2">
                    <h2>Palanca gira sin aplicar mucha fuerza</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>DYNACHUTE</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700713</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conex. motor a tierra correcta</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>TAMBOR No.</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700714</h2>
                </div>
                <div class="col-md-2">
                    <h2>Gira libremente sobre rodillos</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>PEDESTAL F. No.</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700715</h2>
                </div>
                <div class="col-md-2">
                    <h2>Con sello a.s. en tuercas de ángulos</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>REDUCTOR ZF. No.</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700716</h2>
                </div>
                <div class="col-md-2">
                    <h2>Con sello a.s. en tuercas de ángulos</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>SISTEMA DE ENFRIAMIENTO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700717</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conexiones sin fugas. Enciende foco</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CABLES DE CONTROL</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700718</h2>
                </div>
                <div class="col-md-2">
                    <h2></h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>MOTOR HIDRÁULICO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700719</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conexiones mangueras sin fugas C/sello</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>BOMBA HIDRÁULICO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700720</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conexiones mangueras sin fugas C/sello</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>TANQUE HIDRÁULICO</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700721</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conexiones sin fuga. Con sello a.s.</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>SISTEMA DE FILTRACIÓN</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700722</h2>
                </div>
                <div class="col-md-2">
                    <h2>Conexiones sin fuga. Con sello a.s.</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>PEDESTAL POSTERIOR</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700723</h2>
                </div>
                <div class="col-md-2">
                    <h2>Con sello a.s. en tuercas de ángulos</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>TOLVA DE CARGA</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700724</h2>
                </div>
                <div class="col-md-2">
                    <h2>Instalación centrada</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>CANAL COLECTOR</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700725</h2>
                </div>
                <div class="col-md-2">
                    <h2>Instalación centrada</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            <div class="row mezclatext">
                <div class="col-md-2">
                    <h2>RODILLOS</h2>
                </div>
                <div class="col-md-1">
                    <h2>MTM700726</h2>
                </div>
                <div class="col-md-2">
                    <h2>Con tope instalado</h2>
                </div>
                <div class="col-md-1">
                    <div class="checkbox">
                        <label style="font-size: 2em">
                            <input type="checkbox" value="">
                            <span class="cr amarillo"><i class="cr-icon fa fa-check"></i></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-1">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control ccsa" id="usr">
                </div>
            </div>
            <hr>
            
            
            
            
        </form>
<?php include "inc/footer.php"; ?>
