<?php include "inc/header.php"; ?>
<?php
try{
    $pdo = new PDO("mysql:host=mysql.hostinger.mx;dbname=u873755028_labor", "u873755028_labor", "l1b4r1t4r34");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}

try{

    /*
    $sql = "INSERT INTO certificacion_verificacion_concreto (empresa, planta, ubicacion, responsable, uno, dos, tres, cuatro, cinco, seis, siete, ocho, nueve, diez, once, doce, trece, catorce, quince, dieciseis, diecisiete, dieciocho, diecinueve, veinte, veintiuno, veintidos, veintitres, veinticuatro, calificacion) VALUES (:empresa, :planta, :ubicacion, :responsable, :uno, :dos, :tres, :cuatro, :cinco, :seis, :siete, :ocho, :nueve, :diez, :once, :doce, :trece, :catorce, :quince, :dieciseis, :diecisiete, :dieciocho, :diecinueve, :veinte, :veintiuno, :veintidos, :veintitres, :veinticuatro, :calificacion)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':empresa', $_REQUEST['empresa']);
    $stmt->bindParam(':planta', $_REQUEST['planta']);
    $stmt->bindParam(':ubicacion', $_REQUEST['ubicacion']);
    $stmt->bindParam(':responsable', $_REQUEST['responsable']);
    $stmt->bindParam(':uno', $_REQUEST['uno']);
    $stmt->bindParam(':dos', $_REQUEST['dos']);
    $stmt->bindParam(':tres', $_REQUEST['tres']);
    $stmt->bindParam(':cuatro', $_REQUEST['cuatro']);
    $stmt->bindParam(':cinco', $_REQUEST['cinco']);
    $stmt->bindParam(':seis', $_REQUEST['seis']);
    $stmt->bindParam(':siete', $_REQUEST['siete']);
    $stmt->bindParam(':ocho', $_REQUEST['ocho']);
    $stmt->bindParam(':nueve', $_REQUEST['nueve']);
    $stmt->bindParam(':diez', $_REQUEST['diez']);
    $stmt->bindParam(':once', $_REQUEST['once']);
    $stmt->bindParam(':doce', $_REQUEST['doce']);
    $stmt->bindParam(':trece', $_REQUEST['trece']);
    $stmt->bindParam(':catorce', $_REQUEST['catorce']);
    $stmt->bindParam(':quince', $_REQUEST['quince']);
    $stmt->bindParam(':dieciseis', $_REQUEST['dieciseis']);
    $stmt->bindParam(':diecisiete', $_REQUEST['diecisiete']);
    $stmt->bindParam(':dieciocho', $_REQUEST['dieciocho']);
    $stmt->bindParam(':diecinueve', $_REQUEST['diecinueve']);
    $stmt->bindParam(':veinte', $_REQUEST['veinte']);
    $stmt->bindParam(':veintiuno', $_REQUEST['veintiuno']);
    $stmt->bindParam(':veintidos', $_REQUEST['veintidos']);
    $stmt->bindParam(':veintitres', $_REQUEST['veintitres']);
    $stmt->bindParam(':veinticuatro', $_REQUEST['veinticuatro']);
    $stmt->bindParam(':calificacion', $_REQUEST['calificacion']);
    $stmt->execute();
    */

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $idx = $_POST['idx'];
    $empresa = $_POST['empresa'];
    $planta = $_POST['planta'];
    $ubicacion = $_POST['ubicacion'];
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
    
    $calificacion = $uno1 + $uno2 + $uno3 + $uno4 + $uno5 + $uno6 + $uno7 + $uno8 + $uno9 + $uno10 + $uno11 + $uno12 + $uno13 + $uno14 + $uno15 + $uno16 + $uno17 +  $uno18 + $uno19 + $uno20 + $uno21 + $uno22 + $uno23 + $uno24;

    $percentage = 30;
    $totalWidth = $calificacion;
    $new_width = ($percentage / 100) * $totalWidth;
?>

    <div class="container resx">
        <hr style="margin: 0;">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center; margin: 10px;"><?php echo $empresa; ?></h2>
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
        <hr style="margin: 0; margin-bottom: 10px;">
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>1</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Material rígido no absorbente</p>
                <p class="des">Nota: El cono debe estar elaborado de un material rígido, no absorbente y no suceptible de ser atacado.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $uno; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>2</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Dimensiones (± 0,3 cm)
                    <ul>
                        <li>Diámetro menor 10 cm</li>
                        <li>Diámetro mayor 20 cm</li>
                        <li>Altura 30 cm</li>
                    </ul>
                </p>
                <p class="des">Nota: Las dimensiones del cono deben ser: Diámetro menor 10 cm, Diámetro mayor 20 cm, Altura 30 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $dos; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>3</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">
                    Acabado
                    <ul>
                         <li>No debe tener uniones, remaches o tornillos en la parte interior</li>
                         <li>No debe encontrarse golpeado o con abolladuras</li>
                    </ul>
                </p>
                <p class="des">Nota: El cono debe ser totalmente liso en la parte interior y no debe encontrarse golpeado o con abolladuras.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $tres; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>4</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Estribos y asas</p>
                <input type="hidden" name="evaluacion estribos cono" value="Material rígido no absorbente">
                <input type="hidden" name="calificacion estribos cono" value="1">
                <p class="des">Nota: El cono debe contar con dos estribos y dos asas para levantarlo.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $cuatro; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>5</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Material no absorbente</p>
                <input type="hidden" name="placa material no absorbente" value="placa material rígido no absorbente">
                <input type="hidden" name="calificacion placa material" value="1">
                <p class="des">Nota: La placa debe ser elaborada de un material no absorbente.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $cinco; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>6</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Material</p>
                <input type="hidden" name="material varilla" value="placa material rígido no absorbente">
                <input type="hidden" name="material varilla" value="1">
                <p class="des">Nota: El material del que debe estar hecha de la varilla de compactación es acero.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $seis; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>7</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
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
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $siete; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>8</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
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
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $ocho; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>9</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Flexómetro</p>
                <input type="hidden" name="flexometro" value="flexometro">
                <input type="hidden" name="flexometro" value="2">
                <p class="des">Nota: Se recomienda un flexómetro adecuado que cuente al menos con verificación.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $nueve; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>10</h2>
                <p class="vale">0.5 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Antes de efectuar la prueba se remezcla el concreto.</p>
                <p class="des">Nota: Antes de efectuar la prueba se debe remezclar el concreto para garantizar la uniformidad en la mezcla.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $diez; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>11</h2>
                <p class="vale">0.5 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Se humedece el cono antes de realizar el ensayo.</p>
                <p class="des">Nota: Es importante humedecer el cono para mantener el contenido de agua original de la mezcla.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $once; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>12</h2>
                <p class="vale">0.5 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Se coloca el cono en una superficie horizontal, plana y húmeda.</p>
                <p class="des">Nota: Se debe colocar el cono en una superficie horizontal, plana y húmeda para no afectar el desempeño de la prueba.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $doce; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>13</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Se llena la primera capa de aproximadamente de 7 cm</p>
                <p class="des">Nota: La cantidad de concreto adecuada para llenar la primer capa debe ser tal que llegue a una altura de ±7 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $trece; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>14</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                <input type="hidden" name="" value="">
                <input type="hidden" name="calificacion" value="2">
                <p class="des">Nota: Se deben realizar ±12 o 13 penetraciones cerca del perímetro del cono inclinando la varilla ligeramente, después se avanza hacia el centro en forma de espiral con la varilla vertical.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $catorce; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>15</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Se llena la segunda capa hasta llegar a 15 cm aproximadamente.</p>
                <p class="des">Nota: La cantidad de concreto adecuada para llenar la segunda capa debe ser tal que llegue a una altura de ±15 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $quince; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>16</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                <p class="des">Nota: Se compacta la segunda capa a través de todo su espesor, de manera que la varilla penetre en la capa anterior ±2 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $dieciseis; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>17</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Llenar la tercera capa al borde superior del molde.</p>
                <p class="des">Nota: La cantidad de concreto adecuada para llenar la tercer capa debe ser tal que rebase el borde del cono en ±3 mm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $diecisiete; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>18</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Compactar con 25 penetraciones distribuidas uniformemente.</p>
                <p class="des">Nota: Se compacta la última capa a través de todo su espesor, de manera que la varilla penetre en la capa anterior ±2 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $dieciocho; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>19</h2>
                <p class="vale">0.5 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Si se asienta el concreto al compactar la última capa, se agrega un poco más para mantener un excedente.</p>
                <p class="des">Nota: El concreto adicional debe ser agregado a la décima o vigésima penetración.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $diecinueve; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>20</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Enrasar mediante rodamiento  con la varilla.</p>
                <p class="des">Nota: La forma en la que se debe enrasar es mediante rodamiento con la varilla.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $veinte; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>21</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Limpiar la superficie exterior de la base de asiento del cono.</p>
                <p class="des">Nota: Es importante limpiar el concreto que quedó fuera del molde para evitar que éste afecte el resultado del ensayo.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $veintiuno; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>22</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Levantar el cono en dirección vertical en un tiempo de 5 ± 2 s.</p>
                <p class="des">Nota: Levantar el cono en dirección vertical en sus treinta centímetros de altura en un tiempo de 5 ± 2 s.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $veintidos; ?></h3>
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
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>23</h2>
                <p class="vale">2 puntos</p>
            </div>
            <div class="col-md-10">
                <p class="tit">Medir el revenimiento a partir del nivel original de la base superior del molde.</p>
                <p class="des">Nota: El revenimiento se debe medir como la diferencia de alturas en el centro desplazado de la superficie superior del concreto. El técnico debe colocar su vista a la altura de donde se está tomando la lectura.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $veintitres; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row cuestionario res">
            <div class="col-md-1 num">
                <h2>24</h2>
                <p class="vale">1 punto</p>
            </div>
            <div class="col-md-10">
                <p class="tit">El revenimiento es medido y reportado con una aproximación de 1,0 cm.</p>
                <p class="des">Nota: El resultado del revenimiento debe reportarse con aproximación de 1,0 cm.</p>
            </div>
            <div class="col-md-1 resultar">
                <h2 class="val">RESPUESTA</h2>
                <h3 class="resultarres"></h3>
                <h2 class="val">VALOR</h2>
                <h3 class="resultarnum"><?php echo $veinticuatro; ?></h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                

            </div>
            <div class="col-md-6 total">
                <h2>TOTAL: <?php echo $calificacion; ?></h2>
                <?php
                    if($new_width > 6){
                        echo '<h3 class="bien">'.$new_width.' %</h3>'; 
                    } else {
                        echo '<h3 class="mal">'.$new_width.' %</h3>'; 
                    }
                ?>
                <button class="btn btn-default pdf">GENERAR PDF</button>
            </div>
        </div>
    </div>

<?php
} catch(PDOException $error){
    die("ERROR: Could not able to execute $sql. " . $error->getMessage());
}
unset($pdo);
?>
<?php include "inc/footer.php"; ?>