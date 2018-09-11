<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //Cargamos la librería de validación (todos las librerias, helpers, etc pueden ser cargados en los controladores o auto cargarlos indicándolo en los ficheros de configuración)
        $this->load->library('form_validation');
        $this->load->helper("url"); //Cargamos el helper de url imprescindible para usar la función base_url
    }

    public function index()
    {

        if ($this->input->post("email") == null) {

            $this->load->view('login/login');

        } else {

            $this->comprobar_usuario();

        }
    }

    public function validar()
    {

        if ($this->input->post("submit")) {

            //Validaciones
            //name del campo, titulo, restricciones
            $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email|trim');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]');

            //Mensajes
            // %s es el nombre del campo que ha fallado
            $this->form_validation->set_message('required', 'El campo %s es obligatorio');
            $this->form_validation->set_message('alpha', 'El campo %s debe estar compuesto solo por letras');
            $this->form_validation->set_message('min_length[3]', 'El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email', 'El campo %s debe ser un email correcto');

            if ($this->form_validation->run() != false) { //Si la validación es correcta
                //$datos["mensaje"] = "Validación correcta";
                $this->comprobar_usuario();
            } else {
                $datos["mensaje"] = "Validación incorrecta";
            }

            //$this->load->view("login/login", $datos);

        }
    }

    public function comprobar_usuario()
    {

        $usuario = $this->input->post("email");
        $contraseña = $this->input->post("password");

        if ($usuario == null) {

            $this->load->view('login/login');

        } else {

            $this->load->model("Usuarios", "user");
            $resultado = $this->user->login($usuario, $contraseña);

            if ($resultado == false) {
                $this->error();
            } else {
                $this->load->helper("url");
                redirect('ListadoClientes');
            }

        }

    }

    private function error()
    {
        echo ("usuario o contraseña no correcto");
        $this->load->view('login/login');

    }

}
