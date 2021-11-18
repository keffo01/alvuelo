<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Pupusas</title>
</head>
<body>
	<?=$Navbar?>
	<div class="separador"></div>
	<?php if (date('H:i:s') > '21:00:00' || date('H:i:s') < '17:00:00') { ?>
		
		<div class="text-center">
			<p><h1>¡OOOOOOH!</h1></p>
			<p><h3>Pupusas no está disponible por el momento</h3></p>
			<p><h4>Vuelve más tarde</h4></p>
			<img src="<?=base_url()?>/assets/img/torogoz.png" alt="oops" class="img-fluid">
			<p><h4>Horario: 5:00 PM a 9:00 PM</h4></p>
		</div>
	<?php }else{ ?>
		<div class="headerCard">Pupusas</div>
		<div class="row">
			<?php foreach ($Pupusas as $p ) { ?>
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
	<?php } ?>
	<div class="separador"></div>
	<?=$Footer;?>
</body>
<?=$JS?>
</html>