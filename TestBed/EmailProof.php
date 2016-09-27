<html>
<head>
    <meta charset="UTF-8">
    <title>Email-Verification</title>
</head>
<body>
<?php
$mailAddress = $_POST["value"];

if (filter_var($mailAddress, FILTER_VALIDATE_EMAIL)) {
    echo "Many thanks for your address. <br/>";
} else {
    echo "Please enter a valid address!";
}
?>
</body>
</html>
