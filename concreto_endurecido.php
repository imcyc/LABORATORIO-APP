<?php include "inc/header.php"; ?>
        <div class="resultado">
            <p class="sup"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> PUNTUACIÓN: <span class="rex"><input type="text" name="sum" class="sum" /></span></p>
            <hr style="margin: 0;">
            <div id="progressBar"><div></div></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="titular">CONCRETO ENDURECIDO</h4>
                
                <hr>
            </div>
        </div>
        <form action="resultado_concreto_endurecido.php" method="POST">
            
            
            
            
            <hr>
            <div class="row laboratorio" style="margin: 10px 0;">
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
            
            <div class="row tabs">
                <div class="col-md-12">
                    <div align="center" style="width: 100%;">
                        <ul id="tabs">
                            <li class="active">NMX-C-083 Compresión</li>
                            <li>Cabeceo</li>
                            <li>NMX-C-128 Módulo Elástico</li>
                            <li>NMX-C-191 Flexión</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="tab">
                        <!-- ----------NMX-C-083 Compresión-------- -->
                        <div class="tta active">
                            <h1>NMX-C-083 Compresión</h1>
                            <?php include "includes/compresion.php"; ?>
                        </div>
                        
                        <!-- ----------Cabeceo-------- -->
                        <div class="tta">
                            <h1>Cabeceo</h1>
                        </div>
                        
                        <!-- ----------NMX-C-128 Módulo Elástico-------- -->
                        <div class="tta">
                            <h1>NMX-C-128 Módulo Elástico</h1>
                        </div>
                        
                        <!-- ----------NMX-C-191 Flexión-------- -->
                        <div class="tta">
                            <h1>NMX-C-191 Flexión</h1>
                            <?php include "includes/flexion.php"; ?>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
            
            
            
            
        </form>
<?php include "inc/footer.php"; ?>