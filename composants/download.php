<?php
require_once '../vendor/autoload.php';
require_once  '../vendor/dompdf/dompdf/src/Autoloader.php ' ;
// référence l'espace de noms 
 use  Dompdf\Dompdf ;
use Psr\Http\Message\RequestInterface;

ob_start();
 require("../index.php");
 $mybody=ob_get_contents();
 ob_end_clean();

// instancie et utilise la classe 
 $dompdf = new  Dompdf ();
$dompdf -> loadHtml($mybody);

// (Facultatif) Configurez le format et l'orientation du papier 
$dompdf -> setPaper ( 'A4' , 'landscape' );

// Rendu HTML au format PDF 
$dompdf -> render ();

// Exporte le PDF généré vers le navigateur 
$dompdf -> stream ();
// go back to index
header("location:../index.php");
?>