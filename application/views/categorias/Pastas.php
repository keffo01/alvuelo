<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Pollo</title>
</head>
<body>
	<?=$Navbar?>
	<div class="separador"></div>
	<div class="headerCard">Pastas</div>
	<?php if (date('H:i:s') > '14:00:00' && date('H:i:s') < '09:00:00') { ?>	
		<div class="text-center">
			<p><h1>¡OOOOOOH!</h1></p>
			<p><h3>las pastas no están disponibles por el momento</h3></p>
			<p><h4>Vuelve más tarde</h4></p>
			<img src="<?=base_url()?>/assets/img/torogoz.png" alt="oops" class="img-fluid">
			<p><h4>Horario: 10:00 AM a 2:00 PM</h4></p>
		</div>
	<?php }else{ ?>
		<div class="container-fluid">
			<div class="row">
				<?php foreach ($pastaySopas as $p ) { ?>
					<div class="col-md-4 col-sm-4">
						<div class="card">
							<div class="card-content">
								<div class="viñeta">
									<label id="first-title" class="text-light" ><?=$p->precio?></label>
								</div> 
								<div class="box-titlename card-title text-light">
									<?=$p->Nombre_producto?>
								</div>
								<img id="imgProducto" class="card-img-top w-100" src="../<?=$p->Img;?>" alt="Card image cap">
							</div>
							<div class="card-footer">
								<a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
							</div>
						</div>	
					</div>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
	<div class="separador"></div>
	<?=$Footer;?>
</body>
<?=$JS?>
</html>