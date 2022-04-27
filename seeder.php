<?php
require_once 'config/config.php';
$udata = [
    'Monch', // Name
    'monchdacumos@gmail.com', // Email used as login/username
    md5('2031055') // password
];
$contents->addUser($udata);
echo 'Seed successful!';