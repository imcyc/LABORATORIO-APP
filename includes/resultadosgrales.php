<?php
include "../pdc/cnt.php";
$sqlsacar = "SELECT * FROM resultados ORDER BY ID DESC";
$result = $conn->query($sqlsacar);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <p>LABORATORIO</p>
                    <h2><i class="fa fa-chevron-right" aria-hidden="true"></i> <span class="eln"><?php echo $row["empresa"]; ?></span></h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p>CERTIFICACIÓN:</p>
                            <h3><span class="eln"><?php echo $row["certificacion"]; ?></span></h3>
                            <h4>NO. DE CERTIFICACIÓN: <span class="eln"><?php echo $row["random"]; ?></span></h4>
                            <h4>FECHA: <span class="eln"><?php echo $row["fecha"]; ?></span></h4>
                        </div>
                        <div class="col-md-4">
                            <h3>PORCENTAJE:</h3>
                            <?php 
                                $elppe = $row["porcentaje"];
                                $elpepef = (float)$elppe;
                                if($elpepef > 60){
                                    echo "<h4 class='verder'>".$elpepef." %</h4>";
                                } else {
                                    echo "<h4 class='rojor'>".$elpepef." %</h4>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p>Instituto Mexicano del Cemento y del Concreto A.C.</p>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
    



