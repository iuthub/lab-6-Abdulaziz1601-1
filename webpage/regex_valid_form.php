<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Valid Form</title>
</head>
<body>

<?php
include("replaceTxt.php");
include("whitespace.php");
include("rmNonNumeric.php");
include("newLinesRemoved.php");
include("txtFromParenthesis.php");
?>

<form action="regex_valid_form.php" method="post">
    <dl>
        <dt>Pattern</dt>
        <dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

        <dt>Text</dt>
        <dd><input type="text" name="text" value="<?= $text ?>"></dd>

        <dt>Replace Text</dt>
        <dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

        <dt>Output Text</dt>
        <dd><?= $match ?></dd>

        <dt>Replaced Text</dt>
        <dd><code><?= $replacedText ?></code></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Check"></dd>
    </dl>


    <dl>
        <dt>With WhiteSpace</dt>
        <dd><input type="text" name="whitespaceIncluded" value="<?= $whitespaceIncluded ?>"></dd>

        <dt>WhiteSpace Removed</dt>
        <dd><input type="text" name="whitespaceExcluded" value="<?= $whitespaceExcluded ?>"></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Remove"></dd>
    </dl>


    <dl>
        <dt>Remove non-numeric characters except comma and dot</dt>
        <dd><input type="text" name="numberCommaDot" value="<?= $numberCommaDot ?>"></dd>

        <dt>Removed</dt>
        <dd><input type="text" name="onlyNumberCommaDot" value="<?= $onlyNumberCommaDot ?>"></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Remove"></dd>
    </dl>


    <dl>
        <dt>Remove new lines (characters)</dt>
        <dd><textarea cols="60" rows="20" name="txtWithNL"><?= $txtWithNL ?></textarea></dd>

        <dt>New Line Removed</dt>
        <dd><textarea cols="60" rows="20" name="newLineRemoved"><?= $newLineRemoved ?></textarea></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Remove"></dd>
    </dl>


    <dl>
        <dt>Enter text with []</dt>
        <dd><input type="text" name="parenthesis" value="<?= $parenthesis ?>"></dd>

        <dt>Text Within Parenthesis Removed</dt>
        <dd><input type="text" name="textWithinParenthesis" value="<?= $textWithinParenthesis ?>"></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Remove"></dd>
    </dl>

</form>
</body>
</html>
