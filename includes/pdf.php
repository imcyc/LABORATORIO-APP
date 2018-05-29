<?php
include "../pdc/cnt.php";
require('../../fpdf.php');

$randomr = $_POST['randomr'];
$empresar = $_POST['empresar'];
$certificacionr = $_POST['certificacionr'];
$plantar = $_POST['plantar'];
$ubicacionr = $_POST['ubicacionr'];

//function hex2dec
//returns an associative array (keys: R,G,B) from a hex html code (e.g. #3FE5AA)
function hex2dec($couleur = "#000000"){
    $R = substr($couleur, 1, 2);
    $rouge = hexdec($R);
    $V = substr($couleur, 3, 2);
    $vert = hexdec($V);
    $B = substr($couleur, 5, 2);
    $bleu = hexdec($B);
    $tbl_couleur = array();
    $tbl_couleur['R']=$rouge;
    $tbl_couleur['G']=$vert;
    $tbl_couleur['B']=$bleu;
    return $tbl_couleur;
}

//conversion pixel -> millimeter in 72 dpi
function px2mm($px){
    return $px*25.4/72;
}

function txtentities($html){
    $trans = get_html_translation_table(HTML_ENTITIES);
    $trans = array_flip($trans);
    return strtr($html, $trans);
}
////////////////////////////////////

class PDF extends FPDF
{
//variables of html parser
protected $B;
protected $I;
protected $U;
protected $HREF;
protected $fontList;
protected $issetfont;
protected $issetcolor;

function __construct($orientation='P', $unit='mm', $format='A4')
{
    //Call parent constructor
    parent::__construct($orientation,$unit,$format);

    //Initialization
    $this->B=0;
    $this->I=0;
    $this->U=0;
    $this->HREF='';

    $this->tableborder=0;
    $this->tdbegin=false;
    $this->tdwidth=0;
    $this->tdheight=0;
    $this->tdalign="L";
    $this->tdbgcolor=false;

    $this->oldx=0;
    $this->oldy=0;

    $this->fontlist=array("arial","times","courier","helvetica","symbol");
    $this->issetfont=false;
    $this->issetcolor=false;
}

//////////////////////////////////////
//html parser

function WriteHTML($html)
{
    $html=strip_tags($html,"<b><u><i><a><img><p><br><strong><em><font><tr><blockquote><hr><td><tr><table><sup>"); //remove all unsupported tags
    $html=str_replace("\n",'',$html); //replace carriage returns with spaces
    $html=str_replace("\t",'',$html); //replace carriage returns with spaces
    $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE); //explode the string
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            //Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            elseif($this->tdbegin) {
                if(trim($e)!='' && $e!="&nbsp;") {
                    $this->Cell($this->tdwidth,$this->tdheight,$e,$this->tableborder,'',$this->tdalign,$this->tdbgcolor);
                }
                elseif($e=="&nbsp;") {
                    $this->Cell($this->tdwidth,$this->tdheight,'',$this->tableborder,'',$this->tdalign,$this->tdbgcolor);
                }
            }
            else
                $this->Write(5,stripslashes(txtentities($e)));
        }
        else
        {
            //Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                //Extract attributes
                $a2=explode(' ',$e);
                $tag=strtoupper(array_shift($a2));
                $attr=array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])]=$a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    //Opening tag
    switch($tag){

        case 'SUP':
            if( !empty($attr['SUP']) ) {    
                //Set current font to 6pt     
                $this->SetFont('','',6);
                //Start 125cm plus width of cell to the right of left margin         
                //Superscript "1" 
                $this->Cell(2,2,$attr['SUP'],0,0,'L');
            }
            break;

        case 'TABLE': // TABLE-BEGIN
            if( !empty($attr['BORDER']) ) $this->tableborder=$attr['BORDER'];
            else $this->tableborder=0;
            break;
        case 'TR': //TR-BEGIN
            break;
        case 'TD': // TD-BEGIN
            if( !empty($attr['WIDTH']) ) $this->tdwidth=($attr['WIDTH']/4);
            else $this->tdwidth=40; // Set to your own width if you need bigger fixed cells
            if( !empty($attr['HEIGHT']) ) $this->tdheight=($attr['HEIGHT']/6);
            else $this->tdheight=6; // Set to your own height if you need bigger fixed cells
            if( !empty($attr['ALIGN']) ) {
                $align=$attr['ALIGN'];        
                if($align=='LEFT') $this->tdalign='L';
                if($align=='CENTER') $this->tdalign='C';
                if($align=='RIGHT') $this->tdalign='R';
            }
            else $this->tdalign='L'; // Set to your own
            if( !empty($attr['BGCOLOR']) ) {
                $coul=hex2dec($attr['BGCOLOR']);
                    $this->SetFillColor($coul['R'],$coul['G'],$coul['B']);
                    $this->tdbgcolor=true;
                }
            $this->tdbegin=true;
            break;

        case 'HR':
            if( !empty($attr['WIDTH']) )
                $Width = $attr['WIDTH'];
            else
                $Width = $this->w - $this->lMargin-$this->rMargin;
            $x = $this->GetX();
            $y = $this->GetY();
            $this->SetLineWidth(0.2);
            $this->Line($x,$y,$x+$Width,$y);
            $this->SetLineWidth(0.2);
            $this->Ln(1);
            break;
        case 'STRONG':
            $this->SetStyle('B',true);
            break;
        case 'EM':
            $this->SetStyle('I',true);
            break;
        case 'B':
        case 'I':
        case 'U':
            $this->SetStyle($tag,true);
            break;
        case 'A':
            $this->HREF=$attr['HREF'];
            break;
        case 'IMG':
            if(isset($attr['SRC']) && (isset($attr['WIDTH']) || isset($attr['HEIGHT']))) {
                if(!isset($attr['WIDTH']))
                    $attr['WIDTH'] = 0;
                if(!isset($attr['HEIGHT']))
                    $attr['HEIGHT'] = 0;
                $this->Image($attr['SRC'], $this->GetX(), $this->GetY(), px2mm($attr['WIDTH']), px2mm($attr['HEIGHT']));
            }
            break;
        case 'BLOCKQUOTE':
        case 'BR':
            $this->Ln(5);
            break;
        case 'P':
            $this->Ln(10);
            break;
        case 'FONT':
            if (isset($attr['COLOR']) && $attr['COLOR']!='') {
                $coul=hex2dec($attr['COLOR']);
                $this->SetTextColor($coul['R'],$coul['G'],$coul['B']);
                $this->issetcolor=true;
            }
            if (isset($attr['FACE']) && in_array(strtolower($attr['FACE']), $this->fontlist)) {
                $this->SetFont(strtolower($attr['FACE']));
                $this->issetfont=true;
            }
            if (isset($attr['FACE']) && in_array(strtolower($attr['FACE']), $this->fontlist) && isset($attr['SIZE']) && $attr['SIZE']!='') {
                $this->SetFont(strtolower($attr['FACE']),'',$attr['SIZE']);
                $this->issetfont=true;
            }
            break;
    }
}

function CloseTag($tag)
{
    //Closing tag
    if($tag=='SUP') {
    }

    if($tag=='TD') { // TD-END
        $this->tdbegin=false;
        $this->tdwidth=0;
        $this->tdheight=0;
        $this->tdalign="L";
        $this->tdbgcolor=false;
    }
    if($tag=='TR') { // TR-END
        $this->Ln();
    }
    if($tag=='TABLE') { // TABLE-END
        $this->tableborder=0;
    }

    if($tag=='STRONG')
        $tag='B';
    if($tag=='EM')
        $tag='I';
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF='';
    if($tag=='FONT'){
        if ($this->issetcolor==true) {
            $this->SetTextColor(0);
        }
        if ($this->issetfont) {
            $this->SetFont('arial');
            $this->issetfont=false;
        }
    }
}

function SetStyle($tag, $enable)
{
    //Modify style and select corresponding font
    $this->$tag+=($enable ? 1 : -1);
    $style='';
    foreach(array('B','I','U') as $s) {
        if($this->$s>0)
            $style.=$s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    //Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}
}//end of class


$sqlsacar = "select * from revenimiento where etapa='Equipo' order by id";
$result = $conn->query($sqlsacar);

$number_of_products = $result->num_rows;

//Initialize the 3 columns and the total
$column_verificacion = "";
$column_evaluacion = "";
$column_positiva = "";
$total = 0;

//For each row, add the field to the corresponding column
while($row = $result->fetch_assoc())
{
    $verificacion = $row["verificacion"];
    $evaluacion = $row["evaluacion"];
    $positiva = $row["positiva"];
    $calificacion = $row["calificacion"];

    $column_verificacion = $column_verificacion.$verificacion."\n";
    $column_evaluacion = $column_evaluacion.$evaluacion."\n";
    $column_positiva = $column_positiva.$positiva."\n";
    $column_calificacion = $column_calificacion.$calificacion."\n";

}
mysql_close();


$fecha = date("d/m/Y");
$new_fecha = date('d/m/Y', strtotime('+2 years', strtotime($fecha)));
$html = utf8_decode('<br><br>Se anexa al presente el informe de la visita técnica para otorgar el <b>Sello de Calidad IMCYC</b> al Laboratorio <b>'.$empresar.'</b>.<br><br>Sin más por el momento, y esperando que esta información le sea de utilidad, quedo a sus órdenes.');
$htmldos = utf8_decode('<b>1. OBJETIVO DE LA VISITA</b><br>Testificar la competencia técnica del laboratorio <b>'.$empresar.'</b> con la finalidad de otorgar el <b>Sello de Calidad IMCYC</b>.<br><br><b>2. FECHA Y LUGAR DE LA VISITA</b><br>La visita se realizó el día <b>'.$fecha.'</b>, en las instalaciones del laboratorio ubicadas en <b>'.$ubicacionr.'</b>.<br><br><b>3. ALCANCE</b><br>El personal del laboratorio mostró conocimiento en las normas mexicanas vigentes que emplean para la realización de los ensayos de concreto:');
$htmltres = utf8_decode('<b>El personal del IMCYC</b> testificó el desempeño de cada una de los ensayos // revisó la acreditación con la que cuentan los técnicos del laboratorio.<br><br>Derivado de la visita, se obtienen los comentarios descritos en la siguiente sección.');
$htmlcuatro = utf8_decode('<b>4. RESULTADOS Y COMENTARIOS PARA LA MEJORA</b><br><b>4.1. '.$certificacionr.'</b><br><b>4.1.2. Equipo</b>');
$htmlcinco = utf8_decode('<b>4.1.3 Procedimiento de la prueba</b><br>El técnico <<nombre>> cuenta con certificación IMCYC vigente con número <<ID IMCYC>>, por lo que el procedimiento fue evaluado anteriormente.');
$tabla=utf8_decode('<table border="1">
<tr>
<td width="200" height="40"><b>Norma NMX-C-ONNCCE</b></td><td width="530" height="40"><b>Prueba</b></td>
</tr>
<tr>
<td width="200" height="40">083-2014</td><td width="530" height="40">Determinación de la resistencia a la compresión de especímenes de concreto</td>
</tr>
<tr>
<td width="200" height="40">109-2013</td><td width="530" height="40">Cabeceo de especímenes de concreto</td>
</tr>
<tr>
<td width="200" height="40">128-2013</td><td width="530" height="40">Determinación del módulo de elasticidad del concreto endurecido</td>
</tr>
<tr>
<td width="200" height="40">156-2010</td><td width="530" height="40">Determinación del revenimiento en el concreto fresco</td>
</tr>
<tr>
<td width="200" height="40">157-2006</td><td width="530" height="40">Determinación del contenido de aire en el concreto fresco (Medidor tipo B)</td>
</tr>
<tr>
<td width="200" height="40">159-2016</td><td width="530" height="40">Elaboración y curado de especímenes de concreto (cilindros)</td>
</tr>
<tr>
<td width="200" height="40">159-2016</td><td width="530" height="40">Elaboración y curado de especímenes de concreto (cubos)</td>
</tr>
<tr>
<td width="200" height="40">159-2016</td><td width="530" height="40">Elaboración y curado de especímenes de concreto (vigas)</td>
</tr>
<tr>
<td width="200" height="40">161-2013</td><td width="530" height="40">Muestreo de concreto fresco</td>
</tr>
<tr>
<td width="200" height="40">162-2014</td><td width="530" height="40">Determinación de la masa unitaria, cálculo del rendimiento</td>
</tr>
<tr>
<td width="200" height="40">191-2015</td><td width="530" height="40">Determinación de  la resistencia a la flexión del concreto mediante una viga simple</td>
</tr>
<tr>
<td width="200" height="40">435-2010</td><td width="530" height="40">Temperatura</td>
</tr>
</table>');


$pdf = new PDF('P','mm','Letter');
// First page
$pdf->SetMargins(10, 35, 10);
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Image('../images/bkgpdf.jpg', 0, 0, 217, $fpdf->h);
$pdf->Cell(190,8,utf8_decode('CDMX a '.$fecha. ''),0,1,'R');
$pdf->Cell(190,4,utf8_decode('Informe No. L-000'.$randomr.''),0,1,'R');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(15,10,'Laboratorio: '.$empresar.'',0,1,'L');
$pdf->Cell(15,5,'Planta: '.$plantar.'',0,1,'L');
$pdf->Cell(190,10,'Asunto: ',0,1,'R');
$pdf->Cell(190,0,utf8_decode("Informe de Visita Técnica"),0,3,'R');
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->WriteHTML($html);
$pdf->Ln(50);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,0,'ATENTAMENTE',0,1,'C');
$pdf->Ln(30);
$pdf->Cell(0,0,utf8_decode('Ing. Diana Zamora Godínez'),0,1,'C');
$pdf->Cell(0,10,utf8_decode('Instituto Mexicano del Cemento y del Concreto, A. C.'),0,1,'C');
$pdf->SetFont('');
// Second page
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Image('../images/bkgpdf.jpg', 0, 0, 217, $fpdf->h);
//$pdf->SetLeftMargin(45);
//$pdf->SetFontSize(14);
$pdf->WriteHTML($htmldos);
$pdf->Ln(15);
$pdf->SetFont('Arial','',10);
$pdf->WriteHTML($tabla);
$pdf->Ln(15);
$pdf->SetFont('Arial','',12);
$pdf->WriteHTML($htmltres);


// Third page
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Image('../images/bkgpdf.jpg', 0, 0, 217, $fpdf->h);
$pdf->WriteHTML($htmlcuatro);
$pdf->Ln(12);
//Fields Name position
$Y_Fields_Name_position = 60;
//Table position, under Fields Name
$Y_Table_Position = 80;
//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(12);
$pdf->Cell(20,13,utf8_decode(''),1,0,'L',1);
$pdf->SetX(32);
$pdf->Cell(150,13,utf8_decode('CONCLUSIÓN'),1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(30,13,utf8_decode('RESULTADO'),1,0,'C',1);
$pdf->Ln();
//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(12);
$pdf->MultiCell(20,13,utf8_decode($column_verificacion),1,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(32);
$pdf->MultiCell(168,13,utf8_decode($column_positiva),1,1,'L',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,13,utf8_decode($column_calificacion),1,'C');
$pdf->SetX(170);
$pdf->MultiCell(30,13,''.$total.' %',1,'C');
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(12);
    $pdf->MultiCell(188,13,'',1);
    $i = $i +1;
}


// Fourth page
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Image('../images/bkgpdf.jpg', 0, 0, 217, $fpdf->h);
$pdf->WriteHTML($htmlcinco);
$pdf->Ln(12);
//Fields Name position
$Y_Fields_Name_position = 60;
//Table position, under Fields Name
$Y_Table_Position = 80;
//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232,232,232);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',12);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(12);
$pdf->Cell(20,13,utf8_decode(''),1,0,'L',1);
$pdf->SetX(32);
$pdf->Cell(150,13,utf8_decode('CONCLUSIÓN'),1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(30,13,utf8_decode('RESULTADO'),1,0,'C',1);
$pdf->Ln();
//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(12);
$pdf->MultiCell(20,13,utf8_decode($column_verificacion),1,1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(32);
$pdf->MultiCell(168,13,utf8_decode($column_positiva),1,1,'L',1);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(30,13,utf8_decode($column_calificacion),1,'C');
$pdf->SetX(170);
$pdf->MultiCell(30,13,''.$total.' %',1,'C');
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(12);
    $pdf->MultiCell(188,13,'',1);
    $i = $i +1;
}


// Fourth page
$pdf->SetMargins(5, 5, 5);
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Image('../images/bkgpdfdiploma.jpg', 0, 0, 217, $fpdf->h);
$pdf->Cell(0,0,utf8_decode('FOLIO: L-000'.$randomr.''),0,1,'R');
$pdf->Ln(152);
$pdf->SetFont('Arial','B',50);
$pdf->SetTextColor(240,240,240);
$pdf->Cell(0,0,utf8_decode(''.$empresar.''),0,1,'C');
$pdf->Ln(60);
$pdf->SetFont('Arial','B',30);
$pdf->Cell(0,0,utf8_decode(''.$fecha.' al '.$new_fecha.''),0,1,'C');
$pdf->Output();
?>