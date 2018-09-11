<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pruebas extends CI_Controller
{

    public function index()
    {
        // $this->calendario();
        // $this->tablas();
        //$this->comprobarSeguridad();
        //$this->cifrar();
        $this->ejemploHelper1();

    }

    public function calendario()
    {
        $this->load->library("calendar");
        $calendar = $this->calendar;
        echo $calendar->generate(1990, 3);

        $eventos = array(
            2 => "https://www.google.com/?evento1",
            4 => "https://www.google.com/?evento4",
            6 => "https://www.google.com/?evento6",
            8 => "https://www.google.com/?evento8",
        );
        echo $this->calendar->generate(2017, 6, $eventos);

    }

    public function tablas()
    {
        $this->load->library("table");

        $usuario = array(
            array("ID", "email", "password"),
            array(5, "usuario5@gmail.com", "123abc"),
            array(6, "usuario5@gmail.com", "123abc"),
            array(7, "usuario5@gmail.com", "123abc"),
        );

        echo $this->table->generate($usuario);

    }

    public function comprobarSeguridad()
    {
        $this->load->library("mcseguridad");

        $es_seguro = $this->mcseguridad->password_segura("luis", "antonio");

        var_dump($es_seguro);

    }

    public function cifrar()
    {
        $this->load->library("mcseguridad");

        //$es_seguro = $this->mcseguridad->password_segura("luis", "antonio");
        $texto = "En un lugar de la Mancha de cuyo nombre no puedo acordarme...";
        $pass = sha1($texto);

        echo "<br><br><br><br>";

        echo $texto . "......." . $pass;

        echo "<br><br><br><br>";

        $texto = "123456789";

        echo $texto . "........." . $this->mcseguridad->salt($texto);

        //var_dump($es_seguro);

    }

    public function ejemploHelper1()
    {

        $this->load->helper("string");

        echo random_string("alpha", 3);
        echo "<br><br><br><br>";
        echo random_string("nozero", 50);
        echo "<br><br><br><br>";
        echo random_string("numeric", 10);

        echo "<br><br><br><br>";
        echo increment_string("factura_56") . ".pdf";

        echo "<br><br><br><br>";
        echo alternator("luis", "antonio", "pedro", "ramon");

    }

}
