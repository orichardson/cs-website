<?php

define('PRIVATE_KEY', 'XXXXXXXXXXXXXXXXxxx');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo shell_exec("pwd && whoami");
    echo shell_exec("cd ..  && git pull && chmod -R 777 . 2>&1");
}


echo "DONE";
