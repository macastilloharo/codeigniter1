<?php

class Usuarios extends CI_Model
{

//login
    public function login($email, $password)
    {

        $tmp = $this->db
            ->where('email', $email)
            ->where('password', $password)
            ->get('usuarios');

        if ($tmp->num_rows() == 0) {
            return false;
        } else {
            return $tmp->row_array();
        }

    }

// datos_usuario
    public function datos_usuario($id)
    {

        $tmp = $this->db
            ->where('ID', $id)
            ->get('usuarios');

        if ($tmp->num_rows() == 0) {
            return false;
        } else {
            return $tmp->row_array();
        }

        //var_dump($tmp);
        //$this->comprobar($tmp);

    }

    public function comprobar($tmp)
    {
        //var_dump($tmp);
        //echo count($tmp);
        if (count($tmp) == 0) {
            return false;
        } else {
            return $tmp;
        }
/*
if ($tmp->num_rows() == 0) {
return false;
} else {
return $tmp->row_array();
}

 */
    }

    // crea_usuario
    public function crea_usuario($email, $password)
    {
        $array = array(
            'email' => $email,
            'password' => $password,
        );
        $this->db
            ->insert('usuarios', $array);

    }

    //actualiza_password
    public function actualiza_password($id, $pass1, $pass2)
    {

        if (strlen($pass1) > 8 && $pass1 == $pass2) {
            $this->db
                ->set('password', $pass1)
                ->where('ID', $id)
                ->update('usuarios');
            return true;
        } else {
            return false;
        }

    }

    //elimina_usuario
    public function elimina_usuario($id)
    {

        $this->db
            ->where('ID', $id)
            ->delete('USUARIOS');

    }

    public function listar_todos()
    {

        /*
        $tmp = $this->db
        ->select('email', 'password')
        ->where('ID', 1)
        ->get('usuarios');
         */
        //$tmp->$this->db
        //  ->select('ID', 'email', 'password')
        //->get('USUARIOS');
        /*
        $tmp = $this->db
        ->get('usuarios')
        ->result_array();
        return $tmp;
         */

        $tmp = $this->db
            ->select('ID, email, password, last_IP')
            ->get('usuarios')
            ->result_array();

        $this->comprobar($tmp);
        return $tmp;
        // var_dump($tmp);
        //return $tmp->result_array();

        /*
    if ($tmp->num_rows() == 0) {
    return false;
    } else {
    return $tmp->row_array();
    }
     */

    }

/*
public function Ejemplo()
{

echo "hola mundo, comprobando la funcion";

}
 */

}
