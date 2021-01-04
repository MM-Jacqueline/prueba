<?php

/*
 * Controlador para el login 
 *
 * Clase que visualiza el login y funcion que envia los datos
 * 
 * @since 1.0
 * @version 1.0
 * @link   /
 * @global constant String BASEPATH Indica la ruta de la carpeta system de este proyecto ??
 * @package application.controllers
 * @subpackage NA 
 * @author CIDTAI - UTEQ Dev Team <cidtai@uteq.edu.mx>
 * @uses ./application/config/autoload.php ??
 * @see ./system/core/Controller.php
 */

class login_controller extends CI_Controller {

    
    
    public function index() {
        $data = array();
        $data['titulo'] = app_title() . " | Iniciar sesión";
        
        $data = $this->load->view('login', $data, FALSE);
    }
     
    


}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */
?>
