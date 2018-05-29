<?php
    include "../pdc/cnt.php";
    include "inc/header.php";

    $random = rand(100000, 300000);
    $certificacion = $_POST['certificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $idx = $_POST['idx'];
    $empresa = $_POST['empresa'];
    $planta = $_POST['planta'];
    $ubicacion = $_POST['ubicacion'];
    $ubicacion_lat = 8.5;
    $ubicacion_long = 8.5;
    $responsable = $_POST['responsable'];
    $uno1 = $_POST['uno1'];
    $uno2 = $_POST['uno2'];
    $uno3 = $_POST['uno3'];
    $uno4 = $_POST['uno4'];
    $uno5 = $_POST['uno5'];
    $uno6 = $_POST['uno6'];
    $uno7 = $_POST['uno7'];
    $uno8 = $_POST['uno8'];
    $uno9 = $_POST['uno9'];
    $uno10 = $_POST['uno10'];
    $uno11 = $_POST['uno11'];
    $uno12 = $_POST['uno12'];
    $uno13 = $_POST['uno13'];
    $uno14 = $_POST['uno14'];
    $uno15 = $_POST['uno15'];
    $uno16 = $_POST['uno16'];
    $uno17 = $_POST['uno17'];
    $uno18 = $_POST['uno18'];
    $uno19 = $_POST['uno19'];
    $uno20 = $_POST['uno20'];
    $uno21 = $_POST['uno21'];
    $uno22 = $_POST['uno22'];
    $uno23 = $_POST['uno23'];
    $uno24 = $_POST['uno24'];
    $uno25 = $_POST['uno25'];
    $uno26 = $_POST['uno26'];
    $uno27 = $_POST['uno27'];
    $uno28 = $_POST['uno28'];
    $uno29 = $_POST['uno29'];
    $uno30 = $_POST['uno30'];
    $uno31 = $_POST['uno31'];
    $uno32 = $_POST['uno32'];
    $uno33 = $_POST['uno33'];
    $uno34 = $_POST['uno34'];
    $uno35 = $_POST['uno35'];
    $uno36 = $_POST['uno36'];
    $uno37 = $_POST['uno37'];
    $uno38 = $_POST['uno38'];
    $uno39 = $_POST['uno39'];
    $uno40 = $_POST['uno40'];
    $uno41 = $_POST['uno41'];
    $uno42 = $_POST['uno42'];
    $uno43 = $_POST['uno43'];

    $total = $uno1 + $uno2 + $uno3 + $uno4 + $uno5 + $uno6 + $uno7 + $uno8 + $uno9 + $uno10 + $uno11 + $uno12 + $uno13 + $uno14 + $uno15 + $uno16 + $uno17 + $uno18 + $uno19 + $uno20 + $uno21 + $uno22 + $uno23 + $uno24 + $uno25 + $uno26 + $uno27 + $uno28 + $uno29 + $uno30 + $uno31 + $uno32 + $uno33 + $uno34 + $uno35 + $uno36 + $uno37 + $uno38 + $uno39 + $uno40 + $uno41 + $uno42 + $uno43;

    if($certificacion === "NMX-C-156 REVENIMIENTO"){
        $eltipete = "revenimiento";
        $arrlength = 24;
        $totalesposibles = 32;
    } else if($certificacion === "NMX-C-157 CONTENIDO DE AIRE (METODO B)") {
        $eltipete = "contenidoaire";
        $arrlength = 30;
        $totalesposibles = 30;
    } else if($certificacion === "NMX-C-159 ELABORACION DE CILINDROS"){
        $eltipete = "cilindros";
        $arrlength = 24;
        $totalesposibles = 31;
    } else if($certificacion === "NMX-C-159 ELABORACION DE CUBOS"){
        $eltipete = "cubos";
        $arrlength = 20;
        $totalesposibles = 30;
    } else if($certificacion === "NMX-C-159 ELABORACION DE VIGAS"){
        $eltipete = "vigas";
        $arrlength = 22;
        $totalesposibles = 30;
    } else if($certificacion === "NMX-C-162 MASA UNITARIA"){
        $eltipete = "masaunitaria";
        $arrlength = 43;
        $totalesposibles = 43;
    } else if($certificacion === "NMX-C-435 TEMPERATURA"){
        $eltipete = "temperatura";
        $arrlength = 12;
        $totalesposibles = 30;
    }
    
    
    $elpromex = ($total * 100) / $totalesposibles;
    $elpromexred = round($elpromex, 3);
    
    $sqlinsertar = "INSERT INTO resultados (random, certificacion, nombre, apellido, idx, empresa, planta, ubicacion, ubicacion_lat, ubicacion_long, responsable, uno1, uno2, uno3, uno4, uno5, uno6, uno7, uno8, uno9, uno10, uno11, uno12, uno13, uno14, uno15, uno16, uno17, uno18, uno19, uno20, uno21, uno22, uno23, uno24, uno25, uno26, uno27, uno28, uno29, uno30, uno31, uno32, uno33, uno34, uno35, uno36, uno37, uno38, uno39, uno40, uno41, uno42, uno43, total, porcentaje) VALUES ('$random', '$certificacion', '$nombre', '$apellido', '$idx', '$empresa', '$planta', '$ubicacion', '$ubicacion_lat', '$ubicacion_long', '$responsable', '$uno1', '$uno2', '$uno3', '$uno4', '$uno5', '$uno6', '$uno7', '$uno8', '$uno9', '$uno10', '$uno11', '$uno12', '$uno13', '$uno14', '$uno15', '$uno16', '$uno17', '$uno18', '$uno19', '$uno20', '$uno21', '$uno22', '$uno23', '$uno24', '$uno25', '$uno26', '$uno27', '$uno28', '$uno29', '$uno30', '$uno31', '$uno32', '$uno33', '$uno34', '$uno35', '$uno36', '$uno37', '$uno38', '$uno39', '$uno40', '$uno41', '$uno42', '$uno43', '$total', '$elpromexred')";
    
    if ($conn->query($sqlinsertar) === TRUE) {
        echo "<p style='text-align:right;padding-right:20px;'>CERTIFICADO AGREGADO</p>";
    } else {
        echo "Error: " . $sqlinsertar . "<br>" . $conn->error;
    }
    
    ?>

    <div class="container resx">
        <hr style="margin: 0; margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-7">
                <img src="../images/logoimcyc.svg" width="200" alt="Instituto Mexicano del Cemento y del Concreto A.C." title="Instituto Mexicano del Cemento y del Concreto A.C.">
            </div>
            <div class="col-md-5 to-bottom">
                <p style="text-align:right;color:#0F74A3;"><b>Instituto Mexicano del Cemento y del Concreto A.C.</b><br>Av. Insurgentes Sur # 1846 Col. Florida, C.P. 01030, México, CDMX.</p>
            </div>
        </div>
        <hr style="margin: 0; margin-bottom: 10px;">
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <p class="to-bottom" style="text-align:right;"><b>Ciudad de México a <?php echo date("d/m/y"); ?></b></p>
                <p class="to-bottom" style="text-align:right;"><b>Informe No. L-000<?php echo $random; ?></b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align:right;"><b>Asunto:</b> Informe de Visita Técnica</h3>
                <hr>
                <div align="center" style="margin-top:20px;">
                    <img src="../images/sello.svg" alt="" title="" style="width:200px;"
                </div>
                <h1 style="text-align:center;">CERTIFICACIÓN DE LABORATORIO <span style="color:#0F74A3;font-weight:bold;">CFyE</b></h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2><b>Estimado (a) <?php echo $empresa; ?>:</b></h2>
                <p>Se anexa al presente el informe de la visita técnica para otorgar el Sello de Calidad IMCYC al Laboratorio <?php echo $empresa; ?>.<br><br>Sin más por el momento, y esperando que esta información le sea de utilidad, quedo a sus órdenes.</p>
                <h3>1. OBJETIVO DE LA VISITA</h3>
                <p>Testificar la competencia técnica del <b>laboratorio <?php echo $empresa; ?></b> con la finalidad de otorgar el <b>Sello de Calidad IMCYC</b>.</p>
                <h3>2. FECHA Y LUGAR DE LA VISITA</h3>
                <p>La visita se realizó el día <b><?php echo date("d/m/y"); ?></b>, en las instalaciones del laboratorio ubicadas en <?php echo $ubicacion; ?></p>
                <h3>3. ALCANCE</h3>
                <p>El personal del laboratorio mostró conocimiento en las normas mexicanas vigentes que emplean para la realización de los ensayos de concreto:</p>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Norma<br>NMX-C-ONNCCE</th>
                            <th>Prueba</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>083-2014</td>
                            <td>Determinación de la resistencia a la compresión de especímenes de concreto</td>
                        </tr>
                        <tr>
                            <td>109-2013</td>
                            <td>Cabeceo de especímenes de concreto</td>
                        </tr>
                        <tr>
                            <td>128-2013</td>
                            <td>Determinación del módulo de elasticidad del concreto endurecido</td>
                        </tr>
                        <tr>
                            <td>156-2010</td>
                            <td>Determinación del revenimiento en el concreto fresco</td>
                        </tr>
                        <tr>
                            <td>157-2006</td>
                            <td>Determinación del contenido de aire en el concreto fresco (Medidor tipo B)</td>
                        </tr>
                        <tr>
                            <td>159- 2016</td>
                            <td>Elaboración y curado de especímenes de concreto (cilindros)</td>
                        </tr>
                        <tr>
                            <td>159- 2016</td>
                            <td>Elaboración y curado de especímenes de concreto (cubos)</td>
                        </tr>
                        <tr>
                            <td>159- 2016</td>
                            <td>Elaboración y curado de especímenes de concreto (vigas)</td>
                        </tr>
                        <tr>
                            <td>161-2013</td>
                            <td>Muestreo de concreto fresco</td>
                        </tr>
                        <tr>
                            <td>162-2014</td>
                            <td>Determinación de la masa unitaria, cálculo del rendimiento y contenido de aire en el concreto fresco por el método gravimétrico</td>
                        </tr>
                        <tr>
                            <td>191-2015</td>
                            <td>Determinación de  la resistencia a la flexión del concreto mediante una viga simple.</td>
                        </tr>
                        <tr>
                            <td>435-2010</td>
                            <td>Temperatura.</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p>El personal del IMCYC testificó el desempeño de cada una de los ensayos // revisó la acreditación con la que cuentan los técnicos del laboratorio.<br><br>Derivado de la visita, se obtienen los comentarios descritos en la siguiente sección.</p>
                <hr>
                <h3>4. COMENTARIOS PARA LA MEJORA</h3>
                <h4>4.1 <?php echo $certificacion; ?></h4>
                <h4>4.1.2. Equipo</h4>
                <table class="table table-striped resultados">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Requisito</th>
                        <th colspan="2">Conclusión</th>
                        <th>Resultado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $resultax = array("$uno1", "$uno2", "$uno3", "$uno4", "$uno5", "$uno6", "$uno7", "$uno8", "$uno9", "$uno10", "$uno11", "$uno12", "$uno13", "$uno14", "$uno15", "$uno16", "$uno17", "$uno18", "$uno19", "$uno20", "$uno21", "$uno22", "$uno23", "$uno24", "$uno25", "$uno26", "$uno27", "$uno28", "$uno29", "$uno30", "$uno31", "$uno32", "$uno33", "$uno34", "$uno35", "$uno36", "$uno37", "$uno38", "$uno39", "$uno40", "$uno41", "$uno42", "$uno43");
                        
                        $sqlsacar = "SELECT * FROM $eltipete ORDER BY ID";
                        $result = $conn->query($sqlsacar);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $consecutivo = $resultax[$row["id"] - 1];
                      ?>
                            <tr class="total <?php if($consecutivo != 0) { echo "buena"; } else { echo "mala"; } ?>">
                                <td><?php echo $row["verificacion"]; ?></td>
                                <td><?php echo $row["evaluacion"]; ?></td>
                                <td colspan="2">
                                    <?php echo $row["negativa"]; ?>
                                </td>
                                <td class="elcca"><?php echo $consecutivo; ?></td>
                            </tr>
                      <?php
                            }
                        } else {
                            echo "<h1>NO HAY RESULTADOS</h1>";
                        }
                        
                      ?>
                    </tbody>
                </table>
                <hr>
                
            </div>
            <div class="col-md-6 resultoki">
                <h2>TOTAL DE ACIERTOS OBTENIDOS<br><span class="elnumo"><?php echo $total; ?></span></h2>
            </div>
            <div class="col-md-6 resultoki dos">
                <h2>PROMEDIO EN BASE A RESULTADOS<br>
                    <span class="elnumo">
                        <?php 
                            echo $elpromexred." %";
                        ?>
                    </span>
                </h2>
            </div>
            <div class="col-md-12">
                <script>
    var chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "theme": "light",
        "legend": {
            "equalWidths": false,
            "useGraphSettings": true,
            "valueAlign": "left",
            "valueWidth": 120
        },
        "dataProvider": [{
            "date": "2012-01-01",
            "distance": 227,
            "townName": "Revenimiento",
            "townName2": "Revenimiento",
            "townSize": 25,
            "latitude": 40.71,
            "duration": 408
        }, {
            "date": "2012-01-02",
            "distance": 371,
            "townName": "Washington",
            "townSize": 14,
            "latitude": 38.89,
            "duration": 482
        }, {
            "date": "2012-01-03",
            "distance": 433,
            "townName": "Wilmington",
            "townSize": 6,
            "latitude": 34.22,
            "duration": 562
        }, {
            "date": "2012-01-04",
            "distance": 345,
            "townName": "Jacksonville",
            "townSize": 7,
            "latitude": 30.35,
            "duration": 379
        }, {
            "date": "2012-01-05",
            "distance": 480,
            "townName": "Cilindros",
            "townName2": "Cilindros",
            "townSize": 10,
            "latitude": 25.83,
            "duration": 501
        }, {
            "date": "2012-01-06",
            "distance": 386,
            "townName": "Tallahassee",
            "townSize": 7,
            "latitude": 30.46,
            "duration": 443
        }, {
            "date": "2012-01-07",
            "distance": 348,
            "townName": "New Orleans",
            "townSize": 10,
            "latitude": 29.94,
            "duration": 405
        }, {
            "date": "2012-01-08",
            "distance": 238,
            "townName": "Compresion",
            "townName2": "Compresion",
            "townSize": 16,
            "latitude": 29.76,
            "duration": 309
        }, {
            "date": "2012-01-09",
            "distance": 218,
            "townName": "Dalas",
            "townSize": 17,
            "latitude": 32.8,
            "duration": 287
        }, {
            "date": "2012-01-10",
            "distance": 349,
            "townName": "Oklahoma City",
            "townSize": 11,
            "latitude": 35.49,
            "duration": 485
        }, {
            "date": "2012-01-11",
            "distance": 603,
            "townName": "Kansas City",
            "townSize": 10,
            "latitude": 39.1,
            "duration": 890
        }, {
            "date": "2012-01-12",
            "distance": 534,
            "townName": "Contenido Aire",
            "townName2": "Contenido Aire",
            "townSize": 18,
            "latitude": 39.74,
            "duration": 810
        }, {
            "date": "2012-01-13",
            "townName": "Salt Lake City",
            "townSize": 12,
            "distance": 425,
            "duration": 670,
            "latitude": 40.75,
            "dashLength": 8,
            "alpha": 0.4
        }, {
            "date": "2012-01-14",
            "latitude": 36.1,
            "duration": 470,
            "townName": "Masa Unitaria",
            "townName2": "Masa Unitaria"
        }, {
            "date": "2012-01-15"
        }, {
            "date": "2012-01-16"
        }, {
            "date": "2012-01-17"
        }, {
            "date": "2012-01-18"
        }, {
            "date": "2012-01-19"
        }],
        "valueAxes": [{
            "id": "distanceAxis",
            "axisAlpha": 0,
            "gridAlpha": 0,
            "position": "left",
            "title": "resultados"
        }, {
            "id": "latitudeAxis",
            "axisAlpha": 0,
            "gridAlpha": 0,
            "labelsEnabled": false,
            "position": "right"
        }, {
            "id": "durationAxis",
            "duration": "mm",
            "durationUnits": {
                "hh": "h ",
                "mm": "min"
            },
            "axisAlpha": 0,
            "gridAlpha": 0,
            "inside": true,
            "position": "right",
            "title": "duration"
        }],
        "graphs": [{
            "alphaField": "alpha",
            "balloonText": "[[value]] base",
            "dashLengthField": "dashLength",
            "fillAlphas": 0.7,
            "legendPeriodValueText": "total: [[value.sum]] mi",
            "legendValueText": "[[value]] mi",
            "title": "distance",
            "type": "column",
            "valueField": "distance",
            "valueAxis": "distanceAxis"
        }, {
            "balloonText": "latitude:[[value]]",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "useLineColorForBulletBorder": true,
            "bulletColor": "#FFFFFF",
            "bulletSizeField": "townSize",
            "dashLengthField": "dashLength",
            "descriptionField": "townName",
            "labelPosition": "right",
            "labelText": "[[townName2]]",
            "legendValueText": "[[value]]/[[description]]",
            "title": "latitude/city",
            "fillAlphas": 0,
            "valueField": "latitude",
            "valueAxis": "latitudeAxis"
        }, {
            "bullet": "square",
            "bulletBorderAlpha": 1,
            "bulletBorderThickness": 1,
            "dashLengthField": "dashLength",
            "legendValueText": "[[value]]",
            "title": "duration",
            "fillAlphas": 0,
            "valueField": "duration",
            "valueAxis": "durationAxis"
        }],
        "chartCursor": {
            "categoryBalloonDateFormat": "DD",
            "cursorAlpha": 0.1,
            "cursorColor":"#000000",
             "fullWidth":true,
            "valueBalloonsEnabled": false,
            "zoomable": false
        },
        "dataDateFormat": "YYYY-MM-DD",
        "categoryField": "date",
        "categoryAxis": {
            "dateFormats": [{
                "period": "DD",
                "format": "DD"
            }, {
                "period": "WW",
                "format": "MMM DD"
            }, {
                "period": "MM",
                "format": "MMM"
            }, {
                "period": "YYYY",
                "format": "YYYY"
            }],
            "parseDates": true,
            "autoGridCount": false,
            "axisColor": "#555555",
            "gridAlpha": 0.1,
            "gridColor": "#FFFFFF",
            "gridCount": 50
        },
        "export": {
            "enabled": true
         }
    });
    </script>
                <h4>Relación de resultados</h4>
                <hr>
                <div id="chartdiv" style="width: 100%;height:450px;"></div>

            </div>
            <div class="col-md-12" style="text-align: center;">
                <p style="margin-top: 130px;">--------------------------------------------------</p>
                <h3>Ing. Diana Zamora Godínez</h3>
                <h4>Instituto Mexicano del Cemento y del Concreto, A. C.</h4>
                <hr>
            </div>
            <div class="col-md-12">
                <div align="center">
                    <form action="pdf.php" method="POST">
                        <input type="hidden" value="<?php echo $random; ?>" name="randomr">
                        <input type="hidden" value="<?php echo $empresa; ?>" name="empresar">
                        <input type="hidden" value="<?php echo $certificacion; ?>" name="certificacionr">
                        <input type="hidden" value="<?php echo $planta; ?>" name="plantar">
                        <input type="hidden" value="<?php echo $ubicacion; ?>" name="ubicacionr">
                        <button type="submit" class="btn btn-success enviar imprimir">GENERAR REPORTE</button>
                    </form>
                   <a href="../logout.php" class="btn btn-danger" style="position: relative; float: right; margin-right: 5px;">SALIR</a>
                </div>
            </div>
        </div>
    </div>

<?php include "inc/footer.php"; ?>