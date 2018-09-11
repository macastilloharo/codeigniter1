<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');

        // PARA TENER ACCESO A LA BASE DE DATOS
        $this->load->database();

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
        $this->db
            ->where('paymentmethod', 'dato 2')
            ->delete('cb_paymentmethod');

    }
}
