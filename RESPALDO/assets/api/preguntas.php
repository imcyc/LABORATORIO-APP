<?php
class Preguntas{
    private $conn;
    private $table_name = "certificacion_lab_imcyc";

    public $id;
    public $id_empresa;
    public $etapa;
    public $verificacion;
    public $evaluacion;
    public $r_positiva;
    public $r_negativa;
    public $si;
    public $no;
    public $calificacion;

    public function __construct($db){
        $this->conn = $db;
    }
};
?>