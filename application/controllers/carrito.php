<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
class carrito extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_Item(){

		$pedido = array('id' => $this->input->post('id_producto'),
						'name' =>$this->input->post('nombre_producto'),
						'ensalada' => $this->input->post('ensaladas'),
						'qty' =>$this->input->post('cantidad'),
						'price'=>$this->input->post('preciopp'),
						'image' => $this->input->post('imgplato')
						 );

		$insertar = $this->cart->insert($pedido);
		
		if ($insertar) {
			echo json_encode(array('error' => false, 'alerta'=>'exito'));
		}else{
			echo json_encode(array('error'=>true, 'alerta'=>'error'));
		}
	}

	public function load_carrito(){

		$contenido['CSS'] =$this->load->view('utilidades/css');
		$contenido['JS'] = $this->load->view('utilidades/scripts');
		$this->load->view('utilidades/carrito',$contenido);
	}

	public function update_carrito(){
		$update = 0;

	$rowid = $this->input->get('rowid');
	$qty = $this->input->get('qty');

	if (!empty($rowid) && !empty($qty)) {
		$data = array('rowid' => $rowid,
						'qty' => $qty );
	}

	$update = $this->cart->update($data);

	echo $update?'ok':'err';
	}

	public function vaciar_carrito(){
	$this->cart->destroy();

	redirect(base_url());
	}

	public function RemoveItem($Rowid){

	$remove = $this->cart->remove($Rowid);
	redirect(base_url());
}


}
 ?>