<?php
/**
 *
 */
class CCA extends CI_controller
{

	function __construct()
	{
		parent:: __construct();
		$this->load->model('CCA_model', 'CCAM', TRUE);
	}

	public function index(){
		switch ($this->session->userdata('Rol')) {
			case '2':

			$dato['order'] = $this->CCAM->listOrder();
			$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
			$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
			$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
			$this->load->view('administracion/revisar_pedido',$dato);
			break;
			
			default:
			
			$dato['productos'] = $this->CCAM->GetProductPrincipal();
			$dato['productosC'] = $this->CCAM->GetProductWithCream();
			$dato['productosCER'] = $this->CCAM->GetPrincipalCerdo();
			$dato['productosH'] = $this->CCAM->GetPrincipalHamburguesa();
			$dato['productosT'] = $this->CCAM->GetPrincipalTortas();
			$dato['productosTc'] = $this->CCAM->GetPrincipalTacos();
			$dato['productosPz'] = $this->CCAM->GetPrincipalPizza();
			$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
			$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
			$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
			$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);
			$dato['Principales'] = $this->Principales();
			$dato['CarneRes'] = $this->CarneRes();
			$this->load->view('Principal',$dato);
			break;
		}	
		
	}
	public function CarneRes(){
			$dato['productosR'] = $this->CCAM->GetPrincipalRes();
			$viewRes = $this->load->view('carouselPrincipal/CarneRes',$dato,FALSE,TRUE);

		}

	public function Principales(){
		$dato['piernaAsada'] = $this->CCAM->PiernaAsada();
			$dato['encebollado'] = $this->CCAM->PolloEncebollado();

			$viewPrincipal = $this->load->view('carouselPrincipal/Principales',$dato);
			
	}	
		

	public function Pollo(){
		$dato['Pollos'] = $this->CCAM->getPollos();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['carrito'] = $this->load->view('utilidades/carrito', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);
		$this->load->view('categorias/Pollo',$dato);

	}
	public function Res(){
		$dato['Res'] = $this->CCAM->getRes();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);
		$this->load->view('categorias/Res',$dato);

	}
	public function Cerdo(){
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);
		$dato['Cerdo'] = $this->CCAM->getCerdo();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);

		$this->load->view('categorias/Cerdo',$dato);

	}
	public function Pastas(){
		$dato['pastaySopas'] = $this->CCAM->getPastasySopas();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Pastas',$dato);

	}
	public function Rellenos(){
		$dato['Rellenos'] = $this->CCAM->GetRellenos();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Rellenos',$dato);

	}

	public function Tortas(){
		$dato['Tortas'] = $this->CCAM->getTortas();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Tortas',$dato);
	}
	public function Hamburguesas(){
		$dato['Hamburguesas'] = $this->CCAM->getHamburguer();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Hamburguesas',$dato);
	}
	public function Pizza(){
		$dato['Pizza'] = $this->CCAM->getPizza();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Pizza',$dato);
	}
	public function Mexicana(){
		$dato['Mx'] = $this->CCAM->getMexicana();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Mexicana',$dato);
	}

	public function Antojitos(){
		$dato['Antojitos'] = $this->CCAM->getAntojitos();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Antojitos',$dato);
	}

	public function Helados(){
		$dato['Helados'] = $this->CCAM->getHelados();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Helados',$dato);
	}

	public function Pupusas(){
		$dato['Pupusas'] = $this->CCAM->getPupusas();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['Footer'] = $this->load->view('utilidades/Footer', FALSE, TRUE);

		$this->load->view('categorias/Pupusas',$dato);
	}

	public function Platillos(){

		
		$dato['principal'] = $this->CCAM->Pprincipal($_REQUEST['id']);
		$dato['ensalada'] = $this->CCAM->listEnsaladas();
		$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
		$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
		$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
		$dato['carrito'] = $this->load->view('utilidades/carrito', FALSE, TRUE);
		$this->load->view('Platillo',$dato);
	}

	public function pedidoEnviado(){
			$dato['Send'] = $this->CCAM->listSendOrder();
			$dato['Navbar'] = $this->load->view('utilidades/Navbar',FALSE,TRUE);
			$dato['JS'] = $this->load->view('utilidades/scripts', FALSE, TRUE);
			$dato['CSS'] = $this->load->view('utilidades/css', FALSE, TRUE);
			$this->load->view('administracion/Pedidos_enviados',$dato);
	}

	public function enviarPedido(){

		$Status = '0';
		$id = $this->input->post('idPedido');
		$data = array('Status' => $Status);

		$stats = $this->CCAM->statusUpdate($data,$id);

		redirect('CCA/pedidoEnviado');
	}

 
}
?>