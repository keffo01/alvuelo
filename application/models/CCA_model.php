<?php
/**
20/05/2020
by: Kevin Martinez (Keffo01)
Aguilares, San Salvador, SV
 */
class CCA_model extends CI_model
{

	public function GetProductWithCream(){

		$this->db->like('Nombre_producto','en crema');
		$producto = $this->db->get('producto');
		return $producto->result();
	}

	public function PolloEncebollado(){
		 $this->db->like('Nombre_producto','Pollo encebollado');
		 $Polloencebollado = $this->db->get('producto');
		 return $Polloencebollado->result();
	}
	public function PiernaAsada(){
		 $this->db->where('Nombre_producto','Pierna asada a la plancha');
		 $Piernaasada = $this->db->get('producto');
		 return $Piernaasada->result();
	}

	public function GetProductPrincipal(){
		$principales = "CALL sp_principales_pollo()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
public function GetPrincipalRes(){
		$principales = "CALL sp_principales_res()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
	public function GetPrincipalCerdo(){
		$principales = "CALL sp_principales_Cerdo()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
		public function GetPrincipalHamburguesa(){
		$principales = "CALL sp_principal_Hamburguesa()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
	public function GetPrincipalTortas(){
		$principales = "CALL sp_principales_Tortas()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
	public function GetPrincipalTacos(){
		$principales = "CALL sp_principales_Tacos()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}
	public function GetPrincipalPizza(){
		$principales = "CALL sp_principales_pizza()";
		$datos = $this->db->query($principales);
		$data = $datos->result();
		$datos->free_result();
		$datos->next_result();

		return $data;
	}

	public function getPollos(){

		$pollos = "CALL sp_pollo()";
		$resultado = $this->db->query($pollos);
		$data = $resultado->result();
		$resultado->free_result();
		$resultado->next_result();

		return $data;

	}
	public function getRes(){

		$res = "CALL sp_res()";
		$resultado = $this->db->query($res);
		$data = $resultado->result();
		$resultado->free_result();
		$resultado->next_result();

		return $data;

	}
	public function getCerdo(){

		$res = "CALL sp_cerdo()";
		$resultado = $this->db->query($res);
		$data = $resultado->result();
		$resultado->free_result();
		$resultado->next_result();

		return $data;

	}

	public function getPastasySopas(){

		$pys = "CALL sp_Sopa_Pasta()";

		$resultado = $this->db->query($pys);
		$data = $resultado->result();
		$resultado->free_result();
		$resultado->next_result();
		return $data;

	}
	public function GetRellenos(){

		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Rellenos');
		$torta=$this->db->get();
		return $torta->result();

	}

	public function getTortas(){

		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Torta');
		$torta=$this->db->get();
		return $torta->result();

	}
	public function getHamburguer(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Hamburguer');
		$Hamburguesa = $this->db->get();
		return $Hamburguesa->result();
	}
	public function getMexicana(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Mexicana');
		$Mexicana = $this->db->get();
		return $Mexicana->result();
	}
	public function getPizza(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Pizza');
		$Pizza = $this->db->get();
		return $Pizza->result();
	}
	public function getHelados(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Helados');
		$Helados = $this->db->get();
		return $Helados->result();
	}
	public function getAntojitos(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Antojitos');
		$Antojitos = $this->db->get();
		return $Antojitos->result();
	}
	public function getPupusas(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->like('tipo_producto','Pupusas');
		$Pupusas = $this->db->get();
		return $Pupusas->result();
	}

	public function Pprincipal($Id_producto){

		$this->db->where('Id_producto=', $Id_producto);
		$Principal = $this->db->get('producto');

		return $Principal->row();

	}
	public function PprincipalPrice($Id_producto){

		$this->db->where('Id_producto=', $Id_producto);
		$Principal = $this->db->get('producto');

		return $Principal->result();

	}
	public function listEnsaladas(){
		$this->db->select('*');
		$this->db->from('ensalada');
		$ensaladas=$this->db->get();
		return $ensaladas->result();
	}

	public function insertOrder($data){
		 // Add created and modified date if not included
		if(!array_key_exists("Creado", $data)){
			$data['Creado'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists("Modificado", $data)){
			$data['Modificado'] = date("Y-m-d H:i:s");
		}

        // Insert order data
		$insert = $this->db->insert('orden', $data);

        // Return the status
		return $insert?$this->db->insert_id():false;
	}

	public function insertOrderItems($data = array()){
		 // Insert order items
		$insert = $this->db->insert_batch('orden_items', $data);

        // Return the status
		return $insert?true:false;
	}

	public function statusUpdate($data,$id){
		
		$this->db->where('Id', $id);
		$this->db->update('orden', $data);
	}

	//buscarmos los datos de la orden en la BD
	//el parametro id retorna un recorrido de un Id específico
	public function getOrder($id){
		$this->db->select('o.*,c.Nombre,c.Direccion,c.Telefono','c.Id_cliente');
		$this->db->from('orden as o');
		$this->db->join('cliente as c', 'c.Id_cliente = o.Id_cliente', 'left');
		$this->db->where('o.Id', $id);
		$query = $this->db->get();
		$result = $query->row_array();

		//get order items 
		$this->db->select('i.*, p.img, p.Nombre_producto,p.precio,e.ensalada');
		$this->db->from('orden_items as i');
		$this->db->join('producto as p', 'p.Id_producto = i.Id_producto', 'left');
		$this->db->join('ensalada as e', 'e.Id_ensalada = i.Id_ensalada', 'left');
		$this->db->where('i.Id_orden', $id);
		$query2 = $this->db->get();
		$result['items'] = ($query2->num_rows() > 0)?$query2->result_array():array();

		//retornamos los datos encontrados
		return !empty($result)?$result:false;

	}
	public function listOrder(){
		$this->db->select('o.*,c.Nombre,c.Direccion,c.Telefono');
		$this->db->from('orden as o');
		$this->db->join('cliente as c', 'c.Id_cliente = o.Id_cliente', 'left');
		$this->db->where('o.Status', '1');
		$query = $this->db->get();
		$result = $query->result_array();

		//retornamos los datos encontrados
		return $result;

	}
	public function listSendOrder(){
		$this->db->select('o.*,c.Nombre,c.Direccion,c.Telefono');
		$this->db->from('orden as o');
		$this->db->join('cliente as c', 'c.Id_cliente = o.Id_cliente', 'left');
		$this->db->where('o.Status', '0');
		$query = $this->db->get();
		$result = $query->result_array();

		//retornamos los datos encontrados
		return $result;

	}

	public function getOrderCust($id){
		$this->db->select('o.*,c.Nombre,c.Direccion,c.Municipio,c.Telefono');
		$this->db->from('cliente as c');
		$this->db->join('orden o','o.Id_cliente = c.Id_cliente','left');
		$this->db->where('o.Id', $id);
		
		$query1 = $this->db->get();
		$result = $query1->result();
		return $result;
	}

	public function orderItems($id){
		
		$this->db->select('p.Nombre_producto,p.precio,e.ensalada,i.Sub_total,i.Id_orden,i.Cantidad,o.Consumo_total,o.Cambio');
		$this->db->from('orden as o');
		$this->db->join('orden_items as i', 'i.Id_orden = o.Id', 'left');
		$this->db->join('producto p', 'p.Id_producto = i.Id_producto', 'left');
		$this->db->join('ensalada e', 'e.Id_ensalada = i.Id_ensalada', 'left');
		$this->db->where('i.Id_orden', $id);
		$query2 = $this->db->get();
		$result = $query2->result_array();

		//retornamos los datos encontrados
		return $result;
	}
}
?>