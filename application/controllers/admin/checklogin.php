<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checklogin extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		// 		carga de helper para url y modelo de usuario
		$this->load->helper('url');
		$this->load->model('usuario_model','',TRUE);

	}


	public function index()
	{
		/* carga de libreria para validar formulario
           setear reglas de validacion
           comprobar la validacion del formulario
           disparar el callback para checkear si existe el usuario (devuelve los datos del tipo o falso)
           comprobar si vas validaciones son correctas

        */

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'trim|required');

		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');


		if($this->form_validation->run() == FALSE)
		{

			//si falla la validacion te manda al login nuevamente
			$this->load->view('backend/login_view');
			echo('falla autenticacion');
		}

		else
		{
			//Accede al area privada
			redirect('/admin/home/','refresh');

		}

	}



	function check_database($password)
    {
        //traigo el valor del form por post
        $username = $this->input->post('username');

        //consulta la base de datos
        $result = $this->usuario_model->login($username, $password);

    if($result)
    {
        $sess_array = array();

        $ci = & get_instance();

        foreach($result as $row)
        {
        $sess_array = array(
            'id_usuario' => $row->id_user,
            'nombre' => $row->nombre,
            'apellido' => $row->apellido,
            'nick' => $row->nick_name
        );
        }

        $this->session->unset_userdata('logged_in');
        $this->session->set_userdata('logged_in', $sess_array);

        return TRUE;
    }
    else
    {
        $this->form_validation->set_message('check_database', 'Datos de acceso Invalidos');
        return false;
    }
    }





}
