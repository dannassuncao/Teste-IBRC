<?php
include("conexão.php");
$erro=Array();
$idade= $_POST['idade'];
$operadora= $_POST['operadora2'];
$import1= $_POST['import1'];
$import2= $_POST['import2'];
$import3= $_POST['import3'];
$import4= $_POST['import4'];
$import5= $_POST['import5'];
$condicoes= $_POST['condicoes'];
$razao= $_POST['razao'];
$correntista= $_POST['correntista'];
$ofertas= $_POST['ofertas'];

if(isset($_POST['outroProd']))
$outroProd= $_POST['outroProd'];

if(isset($_POST['ofertasEsp']))
$ofertasEsp= $_POST['ofertasEsp'];


if(isset($_POST['ofertasEsp2']))
$ofertasEsp2= $_POST['ofertasEsp2'];


$indicacao= $_POST['indicacao'];

$anosTrb = $_POST['anosTrb'];
$mesesTrb = $_POST['mesesTrb'];



       

$sql_cadastra = mysqli_query($con,"INSERT INTO formulario ( idade, operadora, import1 , import2, import3, import4, import5, condicoes, razao, correntista, ofertas, outroProd, ofertasEsp, ofertasEsp2, indicacao, anosTrb, mesesTrb) VALUES ('$idade', '$operadora','$import1' , '$import2', '$import3', '$import4', '$import5', '$condicoes', '$razao', '$correntista', '$ofertas', '$outroProd', '$ofertasEsp', '$ofertasEsp2', '$indicacao', '$anosTrb', '$mesesTrb')");
if($sql_cadastra){

    echo  "<script>alert('Formulario adicionado com sucesso!'); window.location = 'index.php'; </script>";
}else{
    echo "<script>alert('Não foi possivel enviar o formulario'); window.location = 'index.php';</script>";
}


?> 