<?php include "inc/header.php"; ?>
        <div class="resultado">
            <p class="sup"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> PUNTUACIÓN: <span class="rex"><input type="text" name="sum" class="sum" /></span></p>
            <hr style="margin: 0;">
            <div id="progressBar"><div></div></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="titular">Listas de Verificación para concreto fresco</h4>
                <hr>
            </div>
        </div>
        <form action="resultado.php" method="POST">
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
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b">
                    <h2>EQUIPO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b">
                    <h2>CONO</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>1</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Material rígido no absorbente</p>
                    <p class="des">Nota: El cono debe estar elaborado de un material rígido, no absorbente y no suceptible de ser atacado.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="uno" value="1" name="uno">
                        <label for="uno"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="unom" value="0" name="uno" checked>
                        <label for="unom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>2</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Dimensiones (± 0,3 cm)
                        <ul>
                            <li>Diámetro menor 10 cm</li>
                            <li>Diámetro mayor 20 cm</li>
                            <li>Altura 30 cm</li>
                        </ul>
                    </p>
                    <p class="des">Nota: Las dimensiones del cono deben ser: Diámetro menor 10 cm, Diámetro mayor 20 cm, Altura 30 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="dos" value="1" name="dos">
                        <label for="dos"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="dosm" value="0" name="dos" checked>
                        <label for="dosm"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>3</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">
                        Acabado
                        <ul>
                             <li>No debe tener uniones, remaches o tornillos en la parte interior</li>
                             <li>No debe encontrarse golpeado o con abolladuras</li>
                        </ul>
                    </p>
                    <p class="des">Nota: El cono debe ser totalmente liso en la parte interior y no debe encontrarse golpeado o con abolladuras.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="tres" value="1" name="tres">
                        <label for="tres"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="tresm" value="0" name="tres" checked>
                        <label for="tresm"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>4</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Estribos y asas</p>
                    <input type="hidden" name="evaluacion estribos cono" value="Material rígido no absorbente">
                    <input type="hidden" name="calificacion estribos cono" value="1">
                    <p class="des">Nota: El cono debe contar con dos estribos y dos asas para levantarlo.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="cuatro" value="1" name="cuatro">
                        <label for="cuatro"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="cuatrom" value="0" name="cuatro" checked>
                        <label for="cuatrom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b">
                    <h2>EQUIPO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #2b6909;">
                    <h2>PLACA</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>5</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Material no absorbente</p>
                    <input type="hidden" name="placa material no absorbente" value="placa material rígido no absorbente">
                    <input type="hidden" name="calificacion placa material" value="1">
                    <p class="des">Nota: La placa debe ser elaborada de un material no absorbente.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="cinco" value="1" name="cinco">
                        <label for="cinco"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="cincom" value="0" name="cinco" checked>
                        <label for="cincom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b">
                    <h2>EQUIPO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #810f0f;">
                    <h2>VARILLA</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>6</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Material</p>
                    <input type="hidden" name="material varilla" value="placa material rígido no absorbente">
                    <input type="hidden" name="material varilla" value="1">
                    <p class="des">Nota: El material del que debe estar hecha de la varilla de compactación es acero.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="seis" value="1" name="seis">
                        <label for="seis"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="seism" value="0" name="seis" checked>
                        <label for="seism"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>7</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">
                        Acabado
                        <ul>
                            <li>Sección circular</li>
                            <li>Lisa</li>
                            <li>Extremo de forma semiesférica</li>
                        </ul>
                    </p>
                    <input type="hidden" name="acabado varilla" value="acabado varilla">
                    <input type="hidden" name="acabado varilla" value="1">
                    <p class="des">Nota: La varilla debe ser  lisa, de sección circular y con al menos un extremo de forma semiesférica.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="siete" value="1" name="siete">
                        <label for="siete"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="sietem" value="0" name="siete" checked>
                        <label for="sietem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>8</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">
                        Dimensiones aproximadas
                        <ul>
                            <li>600 mm de longitud</li>
                            <li>16 mm de diámetro</li>
                        </ul>
                    </p>
                    <input type="hidden" name="dimensiones varilla" value="dimensiones varilla">
                    <input type="hidden" name="dimensiones varilla valor" value="1">
                    <p class="des">Nota: La varilla debe medir 600 mm de longitud y 16 mm de diámetro.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="ocho" value="1" name="ocho">
                        <label for="ocho"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="ochom" value="0" name="ocho" checked>
                        <label for="ochom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b">
                    <h2>EQUIPO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #4f677b;">
                    <h2>FLEXÓMETRO</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>9</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Flexómetro</p>
                    <input type="hidden" name="flexometro" value="flexometro">
                    <input type="hidden" name="flexometro" value="2">
                    <p class="des">Nota: Se recomienda un flexómetro adecuado que cuente al menos con verificación.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="nueve" value="2" name="nueve">
                        <label for="nueve"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="nuevem" value="0" name="nueve" checked>
                        <label for="nuevem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b" style="background: #570f27;">
                    <h2>PROCEDIMIENTO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #3a6945;">
                    <h2>INICIO DE LA PRUEBA</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>10</h2>
                    <p class="vale">0.5 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Antes de efectuar la prueba se remezcla el concreto.</p>
                    <p class="des">Nota: Antes de efectuar la prueba se debe remezclar el concreto para garantizar la uniformidad en la mezcla.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="diez" value="0.5" name="diez">
                        <label for="diez"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="diezm" value="0" name="diez" checked>
                        <label for="diezm"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>11</h2>
                    <p class="vale">0.5 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Se humedece el cono antes de realizar el ensayo.</p>
                    <p class="des">Nota: Es importante humedecer el cono para mantener el contenido de agua original de la mezcla.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="once" value="0.5" name="once">
                        <label for="once"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="oncem" value="0" name="once" checked>
                        <label for="oncem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>12</h2>
                    <p class="vale">0.5 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Se coloca el cono en una superficie horizontal, plana y húmeda.</p>
                    <p class="des">Nota: Se debe colocar el cono en una superficie horizontal, plana y húmeda para no afectar el desempeño de la prueba.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="doce" value="0.5" name="doce">
                        <label for="doce"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="docem" value="0" name="doce" checked>
                        <label for="docem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b" style="background: #570f27;">
                    <h2>PROCEDIMIENTO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #ffae00;">
                    <h2>LLENADO DEL MOLDE</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>13</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Se llena la primera capa de aproximadamente de 7 cm</p>
                    <p class="des">Nota: La cantidad de concreto adecuada para llenar la primer capa debe ser tal que llegue a una altura de ±7 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="trece" value="2" name="trece">
                        <label for="trece"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="trecem" value="0" name="trece" checked>
                        <label for="trecem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>14</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                    <input type="hidden" name="" value="">
                    <input type="hidden" name="calificacion" value="2">
                    <p class="des">Nota: Se deben realizar ±12 o 13 penetraciones cerca del perímetro del cono inclinando la varilla ligeramente, después se avanza hacia el centro en forma de espiral con la varilla vertical.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="catorce" value="2" name="catorce">
                        <label for="catorce"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="catorcem" value="0" name="catorce" checked>
                        <label for="catorcem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>15</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Se llena la segunda capa hasta llegar a 15 cm aproximadamente.</p>
                    <p class="des">Nota: La cantidad de concreto adecuada para llenar la segunda capa debe ser tal que llegue a una altura de ±15 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="quince" value="2" name="quince">
                        <label for="quince"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="quincem" value="0" name="quince" checked>
                        <label for="quincem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>16</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                    <p class="des">Nota: Se compacta la segunda capa a través de todo su espesor, de manera que la varilla penetre en la capa anterior ±2 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="dieciseis" value="2" name="dieciseis">
                        <label for="dieciseis"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="dieciseism" value="0" name="dieciseis" checked>
                        <label for="dieciseism"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>17</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Llenar la tercera capa al borde superior del molde.</p>
                    <p class="des">Nota: La cantidad de concreto adecuada para llenar la tercer capa debe ser tal que rebase el borde del cono en ±3 mm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="diecisiete" value="2" name="diecisiete">
                        <label for="diecisiete"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="diecisietem" value="0" name="diecisiete" checked>
                        <label for="diecisietem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>18</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                    <p class="des">Nota: Se compacta la última capa a través de todo su espesor, de manera que la varilla penetre en la capa anterior ±2 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="dieciocho" value="2" name="dieciocho">
                        <label for="dieciocho"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="dieciochom" value="0" name="dieciocho" checked>
                        <label for="dieciochom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>19</h2>
                    <p class="vale">0.5 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Si se asienta el concreto al compactar la última capa, se agrega un poco más para mantener un excedente.</p>
                    <p class="des">Nota: El concreto adicional debe ser agregado a la décima o vigésima penetración.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="diecinueve" value="0.5" name="diecinueve">
                        <label for="diecinueve"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="diecinuevem" value="0" name="diecinueve" checked>
                        <label for="diecinuevem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b" style="background: #570f27;">
                    <h2>PROCEDIMIENTO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #ffae00;">
                    <h2>ETAPA FINAL</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>20</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Enrasar mediante rodamiento  con la varilla.</p>
                    <p class="des">Nota: La forma en la que se debe enrasar es mediante rodamiento con la varilla.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="veinte" value="1" name="veinte">
                        <label for="veinte"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="veintem" value="0" name="veinte" checked>
                        <label for="veintem"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>21</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Limpiar la superficie exterior de la base de asiento del cono.</p>
                    <p class="des">Nota: Es importante limpiar el concreto que quedó fuera del molde para evitar que éste afecte el resultado del ensayo.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="veintiuno" value="1" name="veintiuno">
                        <label for="veintiuno"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="veintiunom" value="0" name="veintiuno" checked>
                        <label for="veintiunom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>22</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Levantar el cono en dirección vertical en un tiempo de 5 ± 2 s.</p>
                    <p class="des">Nota: Levantar el cono en dirección vertical en sus treinta centímetros de altura en un tiempo de 5 ± 2 s.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="veintidos" value="1" name="veintidos">
                        <label for="veintidos"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="veintidosm" value="0" name="veintidos" checked>
                        <label for="veintidosm"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row etapa">
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ETAPA</h2>
                </div>
                <div class="col-md-3 b" style="background: #570f27;">
                    <h2>PROCEDIMIENTO
                </div>
                <div class="col-md-3 a">
                    <h2><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> VERIFICACIÓN</h2>
                </div>
                <div class="col-md-3 b" style="background: #ffae00;">
                    <h2 style="font-size: 17px;padding-top: 13px;">LECTURA DE RESULTADO</h2>
                </div>
            </div>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>23</h2>
                    <p class="vale">2 puntos</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">Medir el revenimiento a partir del nivel original de la base superior del molde.</p>
                    <p class="des">Nota: El revenimiento se debe medir como la diferencia de alturas en el centro desplazado de la superficie superior del concreto. El técnico debe colocar su vista a la altura de donde se está tomando la lectura.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="veintitres" value="2" name="veintitres">
                        <label for="veintitres"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="veintitresm" value="0" name="veintitres" checked>
                        <label for="veintitresm"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row cuestionario">
                <div class="col-md-1 num">
                    <h2>24</h2>
                    <p class="vale">1 punto</p>
                </div>
                <div class="col-md-9">
                    <p class="tit">El revenimiento es medido y reportado con una aproximación de 1,0 cm.</p>
                    <p class="des">Nota: El resultado del revenimiento debe reportarse con aproximación de 1,0 cm.</p>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="veinticuatro" value="1" name="veinticuatro">
                        <label for="veinticuatro"> Sí </label>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="radio radio-inline">
                        <input type="radio" id="veinticuatrom" value="0" name="veinticuatro" checked>
                        <label for="veinticuatrom"> No </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" name="submit" class="btn btn-success enviar">ENVIAR CUESTIONARIO</button>
                </div>
            </div>
        </form>
<?php include "inc/footer.php"; ?>
