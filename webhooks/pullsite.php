<?php

define('PRIVATE_KEY', 'XXXXXXXXXXXXXXXXxxx');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo shell_exec("pwd && whoami");
    echo shell_exec("git pull 2>&1");
}


echo "DONE";
