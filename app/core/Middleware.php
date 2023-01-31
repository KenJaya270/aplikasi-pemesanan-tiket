<?php

class Middleware
{
    public static function auth()
    {
        if (!isset($_SESSION['kereta-and-pesawat'])) {
            Redirect::to('');
        }
    }

    public static function level($level)
    {
        Middleware::auth();
        if (isset($_SESSION['kereta-and-pesawat']) && $level == '') {
            return Functions::back();
            exit;
        }

        if (!isset($_SESSION['kereta-and-pesawat']) || $level != $level) {
            return Functions::back();
            exit;
        }
    }
}
