<?php

$env = parse_ini_file(__DIR__ . '/../.env');

function adminer_object()
{
    global $env;

    class AdminerAutoLogin extends Adminer
    {
        function credentials()
        {
            global $env;

            return [
                $env['DB_HOST'],
                $env['DB_USER'],
                $env['DB_PASS']
            ];
        }

        function database()
        {
            global $env;
            return $env['DB_NAME'];
        }

        function login($login, $password)
        {
            return true;
        }
    }

    return new AdminerAutoLogin;
}

include __DIR__ . '/adminer.php';