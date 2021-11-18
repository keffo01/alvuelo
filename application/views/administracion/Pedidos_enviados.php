<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $CSS; ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pedidos</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-skyblue">
		<ul class="navbar-nav">
			<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('CCA') ?>" class="nav-link">
		<i class="fas fa-list-ol"></i> Pedidos recibidos </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('Auth/logOut') ?>" class="nav-link">
		<i class="fas fa-sign-out-alt"></i> Cerrar Sesion </a>
		</li>
		</ul>
	</nav>
	<div class="separador"></div>
	<h1>Lista de pedidos enviados</h1>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Referencia</th>
					<th>Hora del pedido</th>
					<th>Cliente</th>
					<th>Consumo total</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th class="text-center">acciones</th>

				</tr>
			</thead>
				<tbody>
			<?php foreach ($Send as $item) { ?>
				<tr>
					<td><?=$item['Id']; ?></td>
					<td><?=$item['Creado']; ?></td>
					<td><?=$item['Nombre']; ?></td>
					<td><?=$item['Consumo_total']; ?></td>
					<td><?=$item['Direccion']; ?></td>
					<td><?=$item['Telefono']; ?></td>
					<td >
						<a href="<?php echo base_url('Factura/factura') ?>?Id=<?php echo $item['Id']?>" class="btn btn-primary" target="__blank"> ver factura</a>
					</td>
				</tr>
				
				
			<?php } ?>
		</tbody>
		</table>

	</body>
	</html>
	<?php echo $JS; ?>