<?php
class Redirect
{
    public static function to($url)
    {
        header('Location: ' . BASEURL  . '/' . $url);
        exit;
    }
}
