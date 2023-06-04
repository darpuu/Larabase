<?php
namespace App\Helpers;

class Alert
{
    public static function setsuccessMessage(string $message)
    {
        session()->flash("message:success", $message);
    }
    public static function seterrorMessage(string $message)
    {
        session()->flash("message:error", $message);
    }
    public static function setinfoMessage(string $message)
    {
        session()->flash("message:info", $message);
    }
}