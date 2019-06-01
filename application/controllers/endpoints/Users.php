<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()  {
        parent::__construct();
        $this->load->model('db_users', 'usr', true);
    }

	public function index(){
        $this->output->set_content_type('application/json');
        $json = array();
        $json['title'] = "Obten información del usuario";

        $this->output->set_status_header(200);
        $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
    }
    
    public function login(){
        $this->output->set_content_type('application/json');
        $json = array();
        $json['title'] = "Iniciando sesión";

        $usernm = trim($this->input->post('usernm'));
        $passwd = trim($this->input->post('passwd'));
        
        $login = $this->usr->login($usernm);
        if(!$login){
            $json['status'] = 'No se pudo encontrar este usuario';
            $this->output->set_status_header(500);
            $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
            return;
        }

        if(!(strcmp($passwd, trim($login['contrasena'])) == 0)){
            $json['status'] = 'Contraseña incorrecta';
            $this->output->set_status_header(500);
            $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
            return;
        }

        $json['id'] = $login['idUsuario'];
        $json['status'] = 'Sesión iniciada correctamente';
        $this->output->set_status_header(200);
        $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
    }
    
    public function get(){
        $this->output->set_content_type('application/json');
        $json = array();
        $json['title'] = "Obtener información del usuario";

        $usernm = trim($this->input->post('usernm'));
        
        $user = $this->usr->login($usernm);
        if(!$user){
            $json['status'] = 'No se pudo encontrar este usuario';
            $this->output->set_status_header(500);
            $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
            return;
        }
        
        $json['user'] = $user;
        $json['status'] = 'Información del usuario obtenida correctamente';
        $this->output->set_status_header(200);
        $this->output->set_output(json_encode($json, JSON_PRETTY_PRINT));
	}
}
