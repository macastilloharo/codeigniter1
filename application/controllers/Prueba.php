<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prueba extends CI_Controller
{

    public function index()
    {

        $this->load->model("Usuarios", "users");
        //$this->users->Ejemplo();
        //$resultado = $this->users->login("usuario1@gmail.com", "123");
        //$resultado = $this->users->datos_usuario(2);
        // $resultado = $this->users->crea_usuario('nuevosuario1@gmail.com', '123456');
        //$resultado = $this->users->actualiza_password(2, '8888888888', '8888888888');
        $resultado = $this->users->elimina_usuario(2);

        var_dump($resultado);

        $this->load->view('welcome_message');

        // PARA TENER ACCESO A LA BASE DE DATOS

        //$this->load->database();

        # SELECT
        /*
        $res = $this->db
        ->select('paymentmethod, description')
        ->where('paymentmethod', 'banco')
        ->get('cb_paymentmethod')
        ->result_array();
        print_r($res);
         */

        # INSERTAR
        /*
        $nuevo_pago = array(
        'paymentmethod' => 'dato 2',
        'description' => 'descripción 2',
        );
        $this->db
        ->insert('cb_paymentmethod', $nuevo_pago);
         */

        # ACTUALIZAR
        /*
        $this->db
        ->set('description', '11111111')
        ->where('paymentmethod', 'dato 2')
        ->update('cb_paymentmethod');
         */
        # BORRAR
        /*
    $this->db
    ->where('paymentmethod', 'dato 2')
    ->delete('cb_paymentmethod');
     */
    }
}
