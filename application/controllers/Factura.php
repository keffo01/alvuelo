<?php 
defined('BASEPATH') or exit('no direct script access allowed');
//Se agrega la clase desde thirdparty para usar FPDF
require_once APPPATH.'third_party/fpdf/fpdf.php';

class Factura extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->model('CCA_model','CCAM',true);
	}


	public function factura(){

		$data['items'] = $this->CCAM->orderItems($_REQUEST['Id']);
		$data['cust'] = $this->CCAM->getOrderCust($_REQUEST['Id']);
		
		


			$pdf = new FPDF();
			$pdf->AddPage('P','A4',0);
			$pdf->SetFont('Arial','B',9);
			$pdf->Cell(0,0,'COMPROBANTE DE COMPRA',0,1,'C');
			$pdf->Ln('15');

		foreach ($data['cust'] as $cust) {
			$pdf->Cell(0,0,'Cliente: '.$cust->Nombre,0,1,'L');
			$pdf->Ln('5');
			$pdf->Cell(0,0,'Direccion: '.$cust->Direccion,0,1,'L');
			$pdf->Ln('5');
			$pdf->Cell(0,0,'Municipio: '.$cust->Municipio,0,1,'L');
			$pdf->Ln('5');
			$pdf->Cell(0,0,'Telefono: '.$cust->Telefono,0,1,'L');
			$pdf->Ln('5');
		}
			
			
			

     // Títulos de las columnas
			$header = array('cantidad', 'descripcion', 'precio unit','Total');
      // Anchuras de las columnas
			$w = array(15, 105, 20, 15);
    // Cabeceras
			for($i=0;$i<count($header);$i++)
				$pdf->Cell($w[$i],7,$header[$i],1,0,'C');
			$pdf->Ln();
    // Datos
foreach($data['items'] as $row)
		{
			$pdf->Cell($w[0],6,$row['Cantidad'],'LR');
			$pdf->Cell($w[1],6,$row['Nombre_producto'].' '.$row['ensalada'],'LR');
			$pdf->Cell($w[2],6,$row['precio'],'LR');
			$pdf->Cell($w[3],6,$row['Sub_total'],'LR');
			$pdf->ln();
}
			$pdf->Cell(120,6,'','LRT');	
			$pdf->Cell(20,6,'Total ',1,0,'C');
			$pdf->Cell(15,6,$row['Consumo_total'],1,1,'LR');
			$pdf->Cell(120,6,'','LR');
			$pdf->Cell(20,6,'Cambio ',1,0,'C');
			$pdf->Cell(15,6,$row['Cambio'],1,1,'LR');

    // Línea de cierre
			$pdf->Cell(array_sum($w),0,'','T');
			$pdf->Output();
		
	}
}

?>