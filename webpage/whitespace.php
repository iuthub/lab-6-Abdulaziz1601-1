<?php
$whitespaceExcluded = "";
$whitespaceIncluded = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $whitespaceIncluded = $_POST["whitespaceIncluded"];
    $whitespaceExcluded = $_POST["whitespaceExcluded"];

    $whitespaceExcluded = preg_replace("/\s/", '', $whitespaceIncluded);
}
?>