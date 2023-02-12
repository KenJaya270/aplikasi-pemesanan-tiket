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
        //pengaturan level, jika $level != level yang diset di controller, maka return back()
        //soon....
    }
}
