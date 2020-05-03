<?php

$authTableData = [
    'table' => 'users',
    'idfield' => 'login',
    'cfield' => 'mdp',
    'uidfield' => 'userid',
    'rfield' => 'role',
];

$pathFor = [
    "login"  => "/login.php",
    "logout" => "/logout.php",
    "adduser" => "/adduser.php",
    "root"   => "/home.php",
    "adduserform" =>"adduser_form.php",
];

const SKEY = '_Redirect';