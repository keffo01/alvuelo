
<?=$CSS?>
<form action="<?=base_url('carrito/get_Item')?>" method="post" id="frmplatillo">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 3%; margin-left: 85%;">
          <span aria-hidden="true" class="text-light"><h3>&times;</h3></span>
        </button>
 <img src="<?=base_url().$principal->Img;?>" class="card-img-top w-100" alt="...">
 <h5 class="mt-0" ><?=$principal->Nombre_producto;?></h5>
 <h6>Precio: <?=$principal->precio;?></h6>
 <div>
  <span>el texto de la descripcion del platillo irá aquí</span>
</div>
<br>
 <div class="row">
   <div class="col">
    <label for="ensalada" id="labelensalada">ensalada</label>
    <select name="ensaladas" id="ensalada" class="form-control">
      <option value="0">------</option>
      <?php foreach ($ensalada as $e) { ?>
        <option value="<?=$e->Id_ensalada;?>"><?=$e->ensalada;?></option>
      <?php }?>           
    </select>
  </div>
  <div class="col">
   <label for="cantidad">orden(es)</label>
   <input type="number" placeholder="1" id="cantidad" name="cantidad" class="form-control" value="1">
 </div>
</div>
<br>
<!--Informacion que se enviará del pedido-->
<input type="text" name="imgplato" hidden="true" value="<?=$principal->Img;?>">
<input type="text" hidden="true" name="id_producto" value="<?=$principal->Id_producto;?>">
<input type="text" hidden="true" name="nombre_producto" value="<?=$principal->Nombre_producto;?>">
<input type="text" hidden="" name="preciopp" value="<?=$principal->precio;?>" id="preciopp"> 
<button type="submit" class="btn bg-skyblue text-light" id="btnAddToCart">Agregar al carrito</button> 
</form>

<?=$JS?>
