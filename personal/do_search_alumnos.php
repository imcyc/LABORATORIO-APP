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
    $sql = "SELECT * FROM alumnos_certificados WHERE apellidos LIKE '%" . $word . "%' ORDER BY apellidos";
    // get results
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        ?>
        <div class='col-sm-12 col-lg-12 col-md-12'>
                <h2 style='text-align:center;border-top:8px solid #39B396;padding:10px;background:#f2f2f2;margin:0;margin-bottom:10px;'>RESULTADOS DE BÚSQUEDA POR NOMBRE</h2>
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
                        <div style="height: 167px; overflow: hidden;">
                                            <img src="
                                            <?php
                                                    $status2 = $r['status'];
                                                    $foto2 = $r['foto'];
                                                    if ( $foto2 != ""){
                                                        echo $foto2;
                                                    }
                                                    elseif ( $status2 === "PASS" && $foto2===""){
                                                        echo 'images/profile.jpg';
                                                    }
                                                    elseif ( $status2 === "IN PROCESS" && $foto2===""){
                                                        echo 'images/profile_pro.jpg';
                                                    }
                                                    else {
                                                        echo 'images/profile_not.jpg';
                                                    }
                                            ?>      
                                                 " alt="<?php echo $row["nombre"] ?>, <?php echo $row["apellidos"] ?>" title="<?php echo $row["nombre"] ?>, <?php echo $row["apellidos"] ?>">
                                            </div>   
                        <div class='caption'>
                            <h4><a href='#' style="font-size:25px;text-align:center;"><?php echo $nombre; ?><br><span style='color:#333333;'><?php echo $apellidos; ?></span></a></h4>
                            <p>CERTIFICACIÓN:</p>
                            <p style='text-align:center;font-weight:bold;'><?php echo $certificacion; ?></p>
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