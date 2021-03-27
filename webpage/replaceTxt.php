<?php
$pattern = "";
$text = "";
$replaceText = "";
$replacedText = "";

$match = "Not checked yet.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pattern = $_POST["pattern"];
    $text = $_POST["text"];
    $replaceText = $_POST["replaceText"];

    $replacedText = preg_replace($pattern, $replaceText, $text);

    if (preg_match($pattern, $text)) {
        $match = "Match!";
    } else {
        $match = "Does not match!";
    }
}
?>