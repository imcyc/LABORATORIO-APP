<?php

include "cnt.php";

$sql = "SELECT * FROM certificados";  
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows, JSON_UNESCAPED_UNICODE);
