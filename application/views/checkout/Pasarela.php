<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Pollo</title>
</head>
<body>
	<?=$Navbar;  ?>
  <div class="separador"></div>
  <div class="headerCard">Pasarela de pago</div>
  <div class="separador"></div>
  <div class="checkout">
    <div class="row">
     <?php if(!empty($error_msg)){ ?>
      <div class="col-md-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
      </div>
    <?php } ?>

    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3 alert alert-warning">
        <span class="text-muted">Your Cart</span>
        <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
      </h4>

      <?php if($this->cart->total_items() > 0){ foreach($CartItems as $item){ ?>
        <li class=" d-flex list-group-item  justify-content-between lh-condensed">
          <div>
            <?php $imageURL = !empty($item["image"])?base_url($item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
            <img src="<?php echo $imageURL; ?>" width="75"/>
            <?php switch ($item['ensalada']) {
              case '1':
              $item['ensalada'] = 'ensalada fresca';
              break;
              case '2':
              $item['ensalada'] = 'ensalada blanca';
              break;
              case '3':
              $item['ensalada'] = 'ensalada de coditos';
              break;
              case '4':
              $item['ensalada'] = 'chimol';
              break;
              case '5':
              $item['ensalada'] = 'puré de papa';
              break;

            } ?>
            <h6 class="my-0"><?php echo $item["name"].' con '.$item["ensalada"]; ?></h6>
            <small class="text-muted"><?php echo '$'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
          </div>
          <span class="text-muted"><?php echo '$'.$item["subtotal"]; ?></span>
        </li>
      <?php } }else{ ?>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <p>No items in your cart...</p>
        </li>
      <?php } ?>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong><?php echo '$'.$this->cart->total(); ?></strong>

        <input type="number" hidden="" name="total" id="total" class="form-control" value="<?php echo $this->cart->total(); ?>">
      </li>
      <form method="post">
        <li class="list-group-item " id="nocambio">
          <div   class="d-flex justify-content-between">
            <span>Cambio:</span>
          <input type="number" required="" name="Cambio" id="Cambio" onchange="TotalCambio();"class="form-control" >
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between" >
           <div class="form-check">
            <input class="form-check-input" type="checkbox" checked id="CheckCambio">
            <label class="form-check-label" for="defaultCheck1">
              Pedir cambio
            </label>
          </div>
        </li>

        <a href="<?php echo base_url(); ?>" class="btn btn-block btn-info">Seguir Comprando</a>
      </div>
      <div class="col-md-8 order-md-1">

        <h4 class="mb-3 alert alert-warning">Detalles del contacto</h4>

        <?php
        if ($this->session->userdata('Id_cliente') > 0) { ?>

         <h3><input name="custname" class="alert alert-primary pointer" value="<?=$this->session->userdata('Nombre')?>" readonly=""></h3>
         <h3><input class="alert alert-primary pointer" value="<?=$this->session->userdata('Direccion')?>" readonly=""></h3>
         <h3><input class="alert alert-primary pointer" value="<?=$this->session->userdata('Municipio')?>" readonly=""></h3>
         <h3><input class="alert alert-primary pointer" value="<?=$this->session->userdata('Telefono')?>" readonly=""></h3>

       <?php  }else{?>
        <div class ='alert alert-danger' >No estas logueado
          <a href=''data-toggle="modal" data-target="#modalRegister">Registrate</a> ó <a href='' data-toggle="modal" data-target="#modalLogin" >inicia sesión</a> para hacer el pedido</div>
        <?php }  ?>

        <?php if ($this->cart->total_items() > 1 && $this->session->userdata('Id_cliente') > 0) { ?>
         <input type="submit" name="PlaceOrder" class="btn btn-block btn-success btn-lg" value="Pagar">
       <?php }else{  ?>
        <button type="submit" name="PlaceOrder" class="btn btn-block btn-secondary btn-lg" disabled="true">Pagar</button>
      <?php } ?>
    </form>
  </div>

</div>
</div>

</body>
<?=$JS;  ?>