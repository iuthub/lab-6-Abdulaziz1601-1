<?php
$parenthesis = "";
$textWithinParenthesis = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parenthesis = $_POST["parenthesis"];
    $textWithinParenthesis = $_POST["textWithinParenthesis"];

    $textWithinParenthesis = preg_replace("/\w+[^\[\w+\]]/", '', $parenthesis);
    $textWithinParenthesis = preg_replace("/[^\w+]/", '', $textWithinParenthesis);

}
?>