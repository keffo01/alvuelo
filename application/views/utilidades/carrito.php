 <form method="post" id="frmCarrito">
  <table class="table table-striped">
<thead>
    <tr>
        <th width="10%"></th>
        <th width="30%">Product</th>
        <th width="15%">Price</th>
        <th width="13%">Quantity</th>
        <th width="20%" class="text-right">Subtotal</th>
        <th width="12%"></th>
    </tr>
</thead>
<tbody>
    <?php foreach($this->cart->contents() as $items){    ?>
    <tr>
        <td>
            <?php $imageURL = !empty($items["image"])?base_url($items["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="50"/>
        </td>

        <td>
           <?php switch ($items['ensalada']) {
                      case '1':
                        $items['ensalada'] = 'ensalada fresca';
                        break;
                        case '2':
                           $items['ensalada'] = 'ensalada blanca';
                          break;
                          case '3':
                             $items['ensalada'] = 'ensalada de coditos';
                            break;
                            case '4':
                               $items['ensalada'] = 'chimol';
                              break;
                              case '5':
                                 $items['ensalada'] = 'puré de papa';
                                break;
                  
                    } ?>
          <?php echo $items["name"].' con '.$items['ensalada']; ?></td>
        <td><?php echo '$'.$items["price"].' USD'; ?></td>
        <td><input type="number" style="width: 50%;" class="form-control text-center" value="<?php echo $items["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $items["rowid"]; ?>')"></td>
        <td class="text-right"><?php echo '$'.$items["subtotal"].' USD'; ?></td>
        <td class="text-right">

            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('carrito/RemoveItem/'.$items["rowid"]); ?>':false;"><i class="fas fa-trash"></i> </button>

             </td>
    </tr>
    <?php  } ?>
   <tr>
        <td colspan="4"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>
</tbody>
</table>
<div class="separador"></div>
<div class="row">
    <div class="col">
        <p><?php $class = array('class' => 'btn btn-warning', 'id' => 'updateCart');
        echo form_submit('update_cart', 'Actualizar pedido',$class); ?></p>

         <?php if ($this->cart->total_items() > 0) {?>
          <a class="btn btn-warning" href="<?php echo base_url('carrito/vaciar_carrito')?>"><i class="fas fa-trash"></i> Vaciar</a>
        
         <?php  }else{?>
       <a class="btn btn-secondary disabled" href="<?php echo base_url('carrito/vaciar_carrito')?>"><i class="fas fa-trash"></i> Vaciar</a>
    <?php  } ?>
    </div>
     <div class="col"></div>
      <div class="col">
        <?php if ($this->cart->total_items() > 1 ) {?>
              <a href="<?=base_url('Checkout/Pasarela')?>" class="btn btn-success">Pagar</a>
      <?php  }else{ ?>
           <button class="btn btn-secondary" disabled="true">pagar</button>
      <?php  } ?>
      </div>
</div>

    </form>