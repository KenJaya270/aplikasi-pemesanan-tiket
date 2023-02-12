<?php
class Redirect
{
    static function to($url)
    {
        header('Location: ' . BASEURL  . '/' . $url);
        exit;
    }
}
