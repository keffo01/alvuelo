<?php
/**
 *
 */
class Auth_model extends CI_model
{

	public function newClient(array $client)
	{
		return $this->db->insert('cliente',$client);
		
	}

	public function logIn($user,$pass){

		$this->db->where('Nombre',$user);
		$this->db->where('Password',$pass);
		$this->db->select('*');
		$sigIn = $this->db->get('cliente');

		if ($sigIn->num_rows()>0) {
		return $sigIn->row();
		}else{
			return false;
		}

	}

	public function newClientValid($email){

		$this->db->where('Email',$email);
		$uv = $this->db->get('cliente');

		if ($uv->num_rows()>0) {
		return true;
		}else{
			return false;
		}

	}
}
?>