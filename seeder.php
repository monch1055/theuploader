<?php
require_once 'config/config.php';
$udata = [
    '', // Name
    '', // Email used as login/username
    md5('') // password
];
$contents->addUser($udata);
echo 'Seed successful!';
