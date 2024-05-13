<?php
include_once __DIR__ . '/form.php';

$myForm = new Form('', 'POST');

$myForm->addLabel('Nome', 'name');
$myForm->addInput('text', 'name', '', 'name');

$myForm->addLabel('Cognome', 'surname');
$myForm->addInput('text', 'surname', '', 'surname');

$myForm->addLabel('Email', 'email');
$myForm->addInput('email', 'email', '', 'email');

$myForm->addLabel('Password', 'password');
$myForm->addInput('password', 'password', '', 'password');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <?php
    $myForm->render() ?>
</body>

</html>