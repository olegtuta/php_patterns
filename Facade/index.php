<?php

// For example, use require_once __DIR__ . '/vendor/autoload.php';

use User\Auth;
use User\Email;
use User\User;
use Facades\UserFacade;

$facade = new UserFacade(
    new Auth(),
    new User(),
    new Email()
);

// call methods of facade
$facade->login(
    'username',
    'password'
);

$facade->createUser([
    'name'     => 'John',
    'email'    => 'john@example.com',
    'password' => 'example123',
]);

$facade->sendEmail(
    'oleg@example.com',
    'Hello',
    'Hello, Oleg!'
);
