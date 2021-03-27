<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Validating Forms</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php
$name = "";
$isNameValid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $isNameValid = preg_match("/^\D{2,}$/", $name);
    $email = $_POST["email"];
    $isEmailValid = preg_match("/^\D{2,}$/", $name);

}
?>
<h1>Registration Form</h1>

<p>
    This form validates user input and then displays "Thank You" page.
</p>

<hr/>

<h2>Please, fill below fields correctly</h2>
<form action="index.php" method="post">
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="name" class="<?= $isNameValid ? "" : "invalid" ?>" value="<?= $name ?>" required>
        </dd>

        <dt>Email</dt>
        <dd>
            <input type="text" name="email" class="<?= $isEmailValid ? "" : "invalid" ?>" value="<?= $email ?>" required>
        </dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="submit"></dd>
    </dl>

</form>
</body>
</html>