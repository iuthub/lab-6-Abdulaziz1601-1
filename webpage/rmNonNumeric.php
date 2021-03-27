<?php
$numberCommaDot = "";
$onlyNumberCommaDot = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $onlyNumberCommaDot = $_POST["onlyNumberCommaDot"];
    $numberCommaDot = $_POST["numberCommaDot"];

    $onlyNumberCommaDot = preg_replace("/[^0-9\.\,]/", '', $numberCommaDot);
}
?>