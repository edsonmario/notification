<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendEmail("Teste de e-mail", "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "edson.com@gmail.com", "Edson Web", "edson_mario@hotmail.com",
    "Edson Mario");

var_dump($novoEmail);

