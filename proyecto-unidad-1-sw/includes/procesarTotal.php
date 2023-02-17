<?php
session_start();
$total = $_POST["total"];
$totalN = $_POST["nombres"];
$totalNombres = str_replace(",","<br>", $totalN);
header('Location: total.php?total='.urldecode($total).'&nombres='.urldecode($totalNombres));