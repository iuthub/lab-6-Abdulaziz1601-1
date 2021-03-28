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
$email = "";
$isEmailValid = "";
$username = "";
$isUsernameValid = "";
$password = "";
$isPasswordValid = "";
$confirmPassword = "";
$isConfirmPasswordValid = "";
$dateOfB = "";
$isDOBValid = "";
$gender = "";
$isGenderValid = "";
$maritalSts = "";
$isMaritalStsValid = "";
$address = "";
$isAddressValid = "";
$city = "";
$isCityValid = "";
$postCode = "";
$isPostCodeValid = "";
$homeTel = "";
$isHomeTelValid = "";
$mobileTel = "";
$isMobileTelValid = "";
$creditNum = "";
$isCreditNumValid = "";
$creditCardExpiry = "";
$isCreditCardExpiryValid = "";
$salary ="";
$isSalaryValid = "";
$webURL = "";
$isWebURLValid = "";
$GPA = "";
$isGPAValid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $isNameValid = preg_match("/^\D{2,}$/", $name);
    $email = $_POST["email"];
    $isEmailValid = preg_match("/^[\w+\.]+@([\w-]+\.)+[\w-]{2,4}$/", $email);
    $username = $_POST["username"];
    $isUsernameValid = preg_match("/\w{5,}/", $username);
    $password = $_POST["password"];
    $isPasswordValid= preg_match("/\w{8,}/", $password);
    $confirmPassword = $_POST["confirmPassword"];
    $isConfirmPasswordValid = $confirmPassword == $password;
    $dateOfB = $_POST["dateOfB"];
    $isDOBValid = preg_match("/^(\d{2}\.\d{2}\.\d{4})$/", $dateOfB);
    $gender = $_POST["gender"];
    $isGenderValid = preg_match("/^(Female|Male)$/", $gender);
    $maritalSts = $_POST["maritalSts"];
    $isMaritalStsValid = preg_match("/^(Single|Married|Divorced|Widowed)$/", $maritalSts);
    $address = $_POST["address"];
    $isAddressValid = preg_match("/./", $address);
    $city = $_POST["city"];
    $isCityValid = preg_match("/./", $city);
    $postCode = $_POST["postCode"];
    $isPostCodeValid = preg_match("/^\d{6}$/", $postCode);
    $homeTel = $_POST["homeTel"];
    $isHomeTelValid = preg_match("/^\d{2} \d{7}$/", $homeTel);
    $mobileTel = $_POST["mobileTel"];
    $isMobileTelValid = preg_match("/^\d{2} \d{7}$/", $mobileTel);
    $creditNum = $_POST["creditNum"];
    $isCreditNumValid = preg_match("/^\d{4} \d{4} \d{4} \d{4}$/", $creditNum);
    $creditCardExpiry = $_POST["creditCardExpiry"];
    $isCreditCardExpiryValid = preg_match("/^(\d{2}\.\d{2}\.\d{4})$/", $creditCardExpiry);
    $salary = $_POST["salary"];
    $isSalaryValid = preg_match("/^UZS \w.*$/", $salary); //^UZS \d{1,},\d{1,}\,\d{1,}\,\d{2}$
    $webURL = $_POST["webURL"];
    $isWebURLValid = preg_match("/^https?:\/\/\w+\.\w+$/", $webURL);
    $GPA = $_POST["GPA"];
    $isGPAValid = preg_match("/^([0-3]\.[0-9])|([4]\.[0-5])$/", $GPA);


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
            <input type="text" name="name" class="<?= $isNameValid ? "" : "invalid" ?>"
                   value="<?= $name ?>" required>
        </dd>

        <dt>Email</dt>
        <dd>
            <input type="text" name="email" class="<?= $isEmailValid ? "" : "invalid" ?>"
                   value="<?= $email ?>" required>
        </dd>

        <dt>Username</dt>
        <dd>
            <input type="text" name="username" class="<?= $isUsernameValid ? "" : "invalid" ?>"
                   value="<?= $username ?>" required>
        </dd>

        <dt>Username</dt>
        <dd>
            <input type="text" name="username" class="<?= $isUsernameValid ? "" : "invalid" ?>"
                   value="<?= $username ?>" required>
        </dd>

        <dt>Password</dt>
        <dd>
            <input type="text" name="password" class="<?= $isPasswordValid ? "" : "invalid" ?>"
                   value="<?= $password ?>" required>
        </dd>

        <dt>Confirm Password</dt>
        <dd>
            <input type="text" name="confirmPassword" class="<?= $isConfirmPasswordValid ? "" : "invalid" ?>"
                   value="<?= $confirmPassword ?>" required>
        </dd>

        <dt>Date of Birth (dd.MM.yyyy)</dt>
        <dd>
            <input type="text" name="dateOfB" class="<?= $isDOBValid ? "" : "invalid" ?>"
                   value="<?= $dateOfB ?>" >
        </dd>

        <dt>Gender (Male or Female)</dt>
        <dd>
            <input type="text" name="gender" class="<?= $isGenderValid ? "" : "invalid" ?>"
                   value="<?= $gender ?>" >
        </dd>

        <dt>Marital Status (Single, Married, Divorced or Widowed)</dt>
        <dd>
            <input type="text" name="maritalSts" class="<?= $isMaritalStsValid ? "" : "invalid" ?>"
                   value="<?= $maritalSts ?>" >
        </dd>

        <dt>Address</dt>
        <dd>
            <input type="text" name="address" class="<?= $isAddressValid ? "" : "invalid" ?>"
                   value="<?= $address ?>" required >
        </dd>

        <dt>City</dt>
        <dd>
            <input type="text" name="city" class="<?= $isCityValid ? "" : "invalid" ?>"
                   value="<?= $city ?>" required >
        </dd>

        <dt>Postal Code</dt>
        <dd>
            <input type="text" name="postCode" class="<?= $isPostCodeValid ? "" : "invalid" ?>"
                   value="<?= $postCode ?>" required >
        </dd>

        <dt>Home Phone</dt>
        <dd>
            <input type="text" name="homeTel" class="<?= $isHomeTelValid ? "" : "invalid" ?>"
                   value="<?= $homeTel ?>" required >
        </dd>

        <dt>Mobile Phone</dt>
        <dd>
            <input type="text" name="mobileTel" class="<?= $isMobileTelValid ? "" : "invalid" ?>"
                   value="<?= $mobileTel ?>" required >
        </dd>

        <dt>Credit Card Number</dt>
        <dd>
            <input type="text" name="creditNum" class="<?= $isCreditNumValid ? "" : "invalid" ?>"
                   value="<?= $creditNum ?>" required >
        </dd>

        <dt>Credit Card Expiry Date (dd.MM.yyyy)</dt>
        <dd>
            <input type="text" name="creditCardExpiry" class="<?= $isCreditCardExpiryValid ? "" : "invalid" ?>"
                   value="<?= $creditCardExpiry ?>" requried >
        </dd>

        <dt>Monthly Salary Format:(UZS 200,000.00)</dt>
        <dd>
            <input type="text" name="salary" class="<?= $isSalaryValid ? "" : "invalid" ?>"
                   value="<?= $salary ?>" requried >
        </dd>

        <dt>Web Site URL</dt>
        <dd>
            <input type="text" name="webURL" class="<?= $isWebURLValid ? "" : "invalid" ?>"
                   value="<?= $webURL ?>" requried >
        </dd>

        <dt>Overall GPA</dt>
        <dd>
            <input type="text" name="GPA" class="<?= $isGPAValid ? "" : "invalid" ?>"
                   value="<?= $GPA ?>" requried >
        </dd>


        <dt>&nbsp;</dt>
        <dd><input type="submit" value="submit"></dd>
    </dl>

</form>
</body>
</html>