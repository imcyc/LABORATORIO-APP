<?php 
session_start();
if(!isset($_SESSION['user_session'])){
    header("Location: index.php");
}
$usuario = $_SESSION['user_session'];
$idx = $_SESSION['idx'];
$certificacion = $_SESSION['certificacion'];
$lastname = $_SESSION['lastname'];
$firstname = $_SESSION['firstname'];
$status = $_SESSION['status'];
$thru = $_SESSION['thru'];
include "../inc/header.php";
?>
<script>
$(document).ready(function(){
    var elidx = <?php echo $idx; ?>;
    if (elidx !== "") {
        console.log(elidx);
        $('.row.cuestionario.Procedimiento').css('display','none');
        $('.row.laboratorio.elidx').fadeIn();
    } else {
        $('.row.laboratorio.elidx').css('display','none');
    }
});
</script>
        <div class="regresar">
            <button class="btn btn-default azul regresar" data-seq="NMX-C-159 ELABORACIÓN DE CILINDROS" data-ref="cilindros.php"><i class="fa fa-arrow-alt-circle-left"></i> REGRESAR</button>
        </div>
        <div class="resultado">
            <div class="row">
                <div class="col-md-12">
                    <p class="sup" data-porcentaje="30">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span style="font-size:10px;">PUNTUACIÓN:</span> 
                        <span class="rex"><input type="text" name="sum" class="sum" /></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="titular">NMX-C-435 TEMPERATURA</h4>
                <hr>
            </div>
        </div>
        <div class="row resultados">
    
</div>
<form id="Rrevenimiento">
            <hr>
            <div class="row laboratorio">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Laboratorio: </label>
                        <div class="col-10">
                            <input type="hidden" name="certificacion" value="NMX-C-435 TEMPERATURA">
                            <input type="hidden" name="nombre" value="<?php echo $firstname; ?>">
                            <input type="hidden" name="apellido" value="<?php echo $lastname; ?>">
                            <input type="hidden" name="idx" value="<?php echo $idx; ?>">
                            <input class="form-control" type="text" placeholder="Nombre del laboratorio" name="empresa" required>
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
            
            <?php
            include "../pdc/cnt.php";
            $sql = "SELECT * FROM temperatura";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="row cuestionario">
                            <div class="col-md-1 num">
                                <h2><?php echo $row["id"]; ?></h2>
                                <p class="vale"><?php echo $row["calificacion"]; ?> punto</p>
                            </div>
                            <div class="col-md-9">
                                
                                <p class="tit"><?php echo $row["evaluacion"]; ?></p>
                                <p class="des">Nota: <?php echo $row["negativa"]; ?></p>
                                <hr style="padding-bottom:10px;">
                                <p class="<?php echo $row["etapa"]; ?>"><i class="fas fa-chevron-circle-right"></i> <?php echo $row["etapa"]; ?></p>
                                <p class="<?php echo $row["etapa"]; ?>"><i class="fas fa-chevron-circle-right"></i> <?php echo $row["verificacion"]; ?></p>
                            </div>
                            <div class="col-md-1">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="<?php echo $row["selector"]; ?>" value="<?php echo $row["calificacion"]; ?>" name="uno<?php echo $row["id"]; ?>">
                                    <label for="<?php echo $row["selector"]; ?>"> Sí </label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="radio radio-inline">
                                    <input type="radio" id="<?php echo $row["selector"]; ?>m" value="0" name="uno<?php echo $row["id"]; ?>" checked>
                                    <label for="<?php echo $row["selector"]; ?>m"> No </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php
                }
            } else {
                echo "<h1>NO HAY RESULTADOS</h1>";
            }
            $conn->close();
            ?>
            
            
            <hr>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" name="submit" class="btn btn-success enviar">ENVIAR CUESTIONARIO</button>
                    <a href="../logout.php" class="btn btn-danger" style="position: relative; float: right; margin-right: 5px;">SALIR</a>
                </div>
            </div>
        </form>
<?php include "../inc/footer.php"; ?>
