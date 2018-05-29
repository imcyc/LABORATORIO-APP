<?php
//if we got something through $_POST
if (isset($_POST['search'])) {
    // here you would normally include some database connection
    include('can/db.php');
    $db = new db();
    // never trust what user wrote! We must ALWAYS sanitize user input
    $word = mysql_real_escape_string($_POST['search']);
    $word = htmlentities($word);
    // build your search query to the database
    $sql = "SELECT * FROM alumnos_certificados WHERE certificacion LIKE '%" . $word . "%' ORDER BY certificacion";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        ?>
        <div class='col-sm-12 col-lg-12 col-md-12'>
            <h2 class="resultados">RESULTADOS DE SU BÚSQUEDA POR CERTIFICACIÓN</h2>
        </div>

        <?php
        foreach($row as $r) {
            $id                = $r['id'];
            $foto              = $r['foto'];
            $nombre            = $r['nombre'];
            $apellidos         = $r['apellidos'];
            $email             = $r['email'];
            $telefono          = $r['telefono'];
            $status            = $r['status'];
            $id_alumno         = $r['id_alumno'];
            $fecha_certificada = $r['fecha_certificada'];
            $certificacion     = $r['certificacion'];
            
            ?>
               
                <div class='col-sm-4 col-lg-4 col-md-4'>
                    <div class='thumbnail'>
                        <p class="resultados"><?php echo $certificacion; ?></p>
                        <?php  
                            if ( $status === "PASS"){
                               echo "<img src='images/profile.jpg' />";
                            }
                            elseif ( $status === "IN PROCESS"){
                               echo "<img src='images/profile_pro.jpg' />";
                            }
                            else {
                               echo "<img src='images/profile_not.jpg' />";
                            }
                        ?>
                        <div class='caption resultados'>
                            <h4><a href='#'><?php echo $nombre; ?><br><span class="apelli"><?php echo $apellidos; ?></span></a></h4>
                            <hr>
                            <p>STATUS:</p>
                            <?php
                            if ( $status === "PASS"){
                               echo "<p style='text-align:center;font-weight:bold;color:#2EB396;'>$status</p>";
                            }
                            elseif ( $status === "IN PROCESS"){
                               echo "<p style='text-align:center;font-weight:bold;color:#FDC017;'>$status</p>";
                            }
                            else {
                               echo "<p style='text-align:center;font-weight:bold;color:#E52420;'>$status</p>";
                            }
                            ?>
                            <p>ID DE ALUMNO:</p>
                            <p style='text-align:center;font-weight:bold;'><?php echo $id_alumno; ?></p>
                            <p>FECHA DE VALIDEZ:</p>
                            <?php
                                 $fecha = $fecha_certificada;
                                 $time = strtotime($fecha);
                                 $myFormatForView = date("d · m · y", $time);
                            ?>
                            <p style='text-align:center;font-weight:bold;'><?php echo $myFormatForView; ?></p>
                            <p>UBICACI&Oacute;N:</p>
                            <p></p>
                            <p>CORREO ELECTRÓNICO:</p>
                            <p></p>
                        </div>
                    </div>
                </div>


            <?php        
        }
        echo $end_result;
    } else {
        echo '<h4 style="text-align:center; padding:5px; color:#a61717;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> NO SE ENCONTRARON RESULTADOS!</h4>';
    }
}
?>