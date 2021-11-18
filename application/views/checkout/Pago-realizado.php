<head>
    <?=$CSS;  ?>
</head>
<?=$Navbar;  ?>
<div class="separador"></div>

<?php
 $id = $order['Id_cliente'];
  if ($this->session->userdata('Id_cliente') == $id ) {?>
<div class="container">
    <h1>ORDER STATUS</h1>
<?php if(!empty($order)){ ?>
    <div class="col-md-12">
        <div class="alert alert-success">¡Tu orden ha sido recibida, espérala durante los próximos 30 minutos!</div>
    </div>
    <div class="row"> 
    <!-- Order status & shipping info -->
    <div class=" col-lg-5 ord-addr-info">
        <div class="card">
        <div class="card-content">  
        <div class="card-title">  <div class="hdr">Información de la orden</div>  </div>
          <div class="card-body">   
        <p><b>Reference ID:</b> #<?php echo $order['Id']; ?></p>
        <p><b>Total:</b> <?php echo '$'.$order['Consumo_total'].' USD'; ?></p>
        <p><b>Cambio:</b> <?php echo '$'.$order['Cambio'].' USD'; ?></p>
        <p><b>Placed On:</b> <?php echo $order['Creado']; ?></p>
        <p><b>Buyer Name:</b> <?php echo $order['Nombre']; ?></p>
        <p><b>Email:</b> <?php echo $order['Direccion']; ?></p>
        <p><b>Phone:</b> <?php echo $order['Telefono']; ?></p>
          </div>
          </div>
        </div>
        
        
    </div>
    
    <!-- Order items -->
    <div class="col-lg-7">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($order['items'])){  
                    foreach($order['items'] as $item){ 
                ?>
                <tr>
                    <td>
                        <?php $imageURL = !empty($item["img"])?base_url($item["img"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["Nombre_producto"].' con '.$item['ensalada']; ?></td>
                    <td><?php echo '$'.$item["precio"].' USD'; ?></td>
                    <td><?php echo $item["Cantidad"]; ?></td>
                    <td><?php echo '$'.$item["Sub_total"].' USD'; ?></td>
                </tr>
                <?php } 
                } ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo base_url('CCA/'); ?>" class="btn btn-block btn-warning btn-lg text-light">Ir al inicio</a>
     </div>
<?php  }else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Your order submission failed.</div>
    <a href="<?php echo base_url('CCA/'); ?>" class="btn btn-block btn-warning btn-lg text-light">Ir al inicio</a>
</div>

<?php } ?>
</div>
<?php }else{?>

<div class="text-center">
            <p><h1>¡OOOOOOH!</h1></p>
            <p><h3>esta informacion no está disponible</h3></p>
            <?php echo $order['Id_cliente'];
            echo $this->session->userdata('Id_cliente'); ?>
            
            <img src="<?=base_url()?>/assets/img/torogoz.png" alt="oops" class="img-fluid">
            
        </div>
    <?php } ?>

<?=$JS;  ?>