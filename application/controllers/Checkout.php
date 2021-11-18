<?php 
defined('BASEPATH') OR exit('no direct script access allowed');


class Checkout extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('CCA_model','CCAM','TRUE');
		$this->controller = 'checkout';

	}

	public function Pasarela(){

		$submit = $this->input->post('PlaceOrder');
		$idCliente = $this->session->userdata('Id_cliente');
		 $cambio = $this->input->post('Cambio');

		if (isset($submit)) {
			
			$ordsuccess =$this->PlaceOrder($idCliente, $cambio);

			if ($ordsuccess) {
				$this->session->set_userdata('success_msg','Orden insertada');
				redirect($this->controller.'/orderSuccess/'.$ordsuccess);
			}else{
				$contenido['err_msg'] ='a ocurrido un error';
			}
		}

		$contenido['CartItems'] = $this->cart->contents();
		$contenido['CSS'] =$this->load->view('utilidades/css',FALSE,TRUE);
		$contenido['JS'] = $this->load->view('utilidades/scripts',FALSE,TRUE);
		$contenido['userdata'] = $this->session->userdata();
		$contenido['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);

		$this->load->view($this->controller.'/Pasarela', $contenido);
	}

	public function PlaceOrder($custID, $cambio){

		$ordData = array('Id_cliente' => $custID,
			'Cambio' =>   $cambio,
			'Consumo_total' => $this->cart->total() );

		$cartItems = $this->cart->contents();

		$insertOrder = $this->CCAM->insertOrder($ordData);

		$ordItemData = array();
		$i = 0;

		foreach ($cartItems as $items) {
			$ordItemData[$i]['Id_orden'] = $insertOrder;
			$ordItemData[$i]['Id_producto'] = $items['id'];
			$ordItemData[$i]['Id_ensalada'] = $items['ensalada'];
			$ordItemData[$i]['Cantidad'] = $items['qty'];
			$ordItemData[$i]['Sub_total'] = $items['subtotal'];
			$i++;
		}

		if (!empty($ordItemData)) {
			$insertOrderItems = $this->CCAM->insertOrderItems($ordItemData);

			if ($insertOrderItems) {
				$this->cart->destroy();
				return $insertOrder;
			}


		}
		return FALSE;
	}

	function orderSuccess($ordID){
		//buscamos los datos de la orden en la BD
		$contenido['order'] = $this->CCAM->getOrder($ordID);
		$contenido['CSS'] =$this->load->view('utilidades/css',FALSE,TRUE);
		$contenido['JS'] = $this->load->view('utilidades/scripts',FALSE,TRUE);
		$contenido['userdata'] = $this->session->userdata();
		$contenido['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);

		$this->load->view($this->controller.'/Pago-realizado', $contenido);
	}
}

?>