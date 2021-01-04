<?php

/*
 * Modelo del login_controller
 *
 * Modelo que contenga una consulta para validar datos recibidos desde el controlador
 * 
 * @since       1.0
 * @version     1.0
 * @link        NA ??
 * @package     application.views
 * @subpackage  libs
 * @author      CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses        ./application/models/login_model.php
 */

class login_model extends CI_Model {

    public function consultar_usuario($username, $password) {

        /*$this->db->select('idusu');
        $this->db->where('correousu', $username);
        $this->db->where("passwordusu LIKE BINARY '".$password."'");*/
        $cmd = "SELECT idusuario, nomusuario, correousu, idsolicitud FROM usuario WHERE correousu LIKE '$username' AND passwordusu LIKE '$password' AND estatus = 1";
        $query = $this->db->query($cmd);

        return ($query->num_rows() === 1) ? $query->row() : NULL;
    }

 
    public function cargar_rol($id){

      $sql = "SELECT r.idrol rol FROM usuario u
INNER JOIN rolusuario rxu ON (u.idusuario=rxu.idusuario)
INNER JOIN rol r ON (rxu.idrol=r.idrol)
WHERE u.idusuario=$id
GROUP BY r.idrol";

      $query = $this->db->query($sql);

      return $query->row();

    }
    
    public function cargar_modulos2($idrol){
        $cmd="select idmodulo from permisosmodulo where idrol = '$idrol' GROUP BY idmodulo";
        $query=$this->db->query($cmd);
        return ($query->num_rows() > 0) ? $query->result() : NULL;
    }

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */
