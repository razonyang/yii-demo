<?php

return [
    'i18n.locale' => 'en-US',
    'debug.enabled' => true,
    'debug.allowedIPs' => ['127.0.0.1'],
    'packages' => require 'packages.php',
    'request.cookieValidationKey' => 'kZcZPIa22dtb5k00JfBhtOm9svGfihig',
    'db.name' => 'database',
    'db.host' => '127.0.0.1',
    'db.port' => 3306,
    'db.user' => 'user',
    'db.password' => 'password',
    'mailer.host' => 'smtp.example.com',
    'mailer.port' => 25,
    'mailer.encryption' => null,
    'mailer.username' => 'admin@example.com',
    'mailer.password' => '',
    'supportEmail' => 'support@example.com',
];
