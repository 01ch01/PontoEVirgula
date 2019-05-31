<?php

$myPdf = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

//enviando headers ao severs
function inputHeader($fileName, $filePath) {
  header("Content-disposition: attachment; filename={$fileName}");
  header("Content-type: application/pdf");
  readfile($filePath);
}

//controlador de fluxo, caso haja mais de um auquivo
switch ($myPdf) {
  case "1":
    $fileName = "Apostila de HTML.pdf";
    $filePath = "../_docs/Apostila de HTML.pdf";
    inputHeader($fileName, $filePath);
    break;
  case "2":
    $fileName = "MinicursoPython.pdf";
    $filePath = "../_docs/MinicursoPython.pdf";
    inputHeader($fileName, $filePath);
    break;
  case "3":
    $fileName = "guia-css-w3cbr.pdf";
    $filePath = "../_docs/guia-css-w3cbr.pdf";
    inputHeader($fileName, $filePath);
    break;
  case "4":
    $fileName = "python_para_desenvolvedores_2ed.pdf";
    $filePath = "../_docs/python_para_desenvolvedores_2ed.pdf";
    inputHeader($fileName, $filePath);
    break;
  case "5":
    $fileName = "ruby_complete(Ingles).pdf";
    $filePath = "../_docs/ruby_complete(Ingles).pdf";
    inputHeader($fileName, $filePath);
    break;
  default :
    echo "Não vai dar não";
    break;
}
