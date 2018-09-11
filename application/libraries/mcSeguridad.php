<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mcSeguridad extends CI_Controller
{

    public function __construct()
    {
        //echo "se ha instanciado esta clase";

    }

    public function password_segura($pass1, $pass2)
    {

        if ($pass1 == $pass2 && strlen($pass1) > 10) {
            return true;
        } else {
            return false;
        }

    }

    public function seguridad1($pass1, $pass2)
    {
        echo $pass1 . " " . $pass2;
    }

    public function salt($pass)
    {

        $cifrada = sha1("mangel.com" . $pass);
        return $cifrada;

    }

}
