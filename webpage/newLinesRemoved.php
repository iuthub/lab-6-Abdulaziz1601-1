<?php
$txtWithNL = "";
$newLineRemoved = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $txtWithNL = $_POST["txtWithNL"];
    $newLineRemoved = $_POST["newLineRemoved"];

    $newLineRemoved = preg_replace("/\r?\n|\r/", '', $txtWithNL);
}
?>