<?php

class Auth extends CI_controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('Auth_model','ATH', TRUE);
	}

	public function createUser()
	{

		if ($this->input->post()) {

			$err_email = array('is_unique' => 'El %s ya esta registrado',
								'required' => 'El %s es obligatorio' );
			$err_usr = array('required' => 'El %s es obligatorio', );
			$err_dir = array('required' => 'La %s es obligatoria', );
			

		$this->form_validation->set_rules('Nombre','Nombre','required|max_length[30]',$err_usr);
		$this->form_validation->set_rules('Direccion','Direccion','required',$err_dir);
		$this->form_validation->set_rules('Email','Email','required|valid_email|is_unique[cliente.Email]|min_length[5]',$err_email);
		$this->form_validation->set_rules('Password','password','required|max_length[30]',$err_usr);
		$this->form_validation->set_rules('Telefono','telefono','required|max_length[9]',$err_usr);

			if ($this->form_validation->run() == false) {
				echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
			}else{
				 if ($this->ATH->newClient($_POST)) {
				 	echo json_encode(array('error'=>false, 'mensaje' => 'usuario registrado'));
				 }else{
				 	echo json_encode(array('error'=>true, 'mensaje' => 'usuario no registrado'));
				 }
			}
		}
	}
	public function verificarUsuario(){

		$usuario = $this->input->post("Lusuario");
		$Password = $this->input->post("Lpassword");

		$access = $this->ATH->logIn($usuario,$Password);

	if ($access) {
			$userdata = array(
				'Logueado' => TRUE,
				'Nombre' => $access->Nombre,
				'Password' => $access->Password,
				'Id_cliente'=> $access->Id_cliente,
				'Direccion' => $access->Direccion,
				'Municipio' => $access->Municipio,
				'Telefono' => $access->Telefono,
				'Rol' => $access->Rol
				 );
			$validacion = $this->session->set_userdata($userdata);


		}else{
			$this->session->set_flashdata('Error','Datos incorrectos');
			echo  "error";
		}


	}

	public function ValidarRegistro(){

		$em= $this->input->post('email');
		echo json_encode($this->ATH->newClientValid($em));

	}

	public function logOut(){

		$this->session->sess_destroy();
		redirect('CCA');
	}
}
?>