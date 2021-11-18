 
 <!--imagenes en Javascript-->
<img class="img-fluid" id="portada" src="" alt="wall">
<div class="separador"></div>
<!--carrusel de los principales-->
<div class=" container-fluid headerCard"><h2>Platillos Principales</h2></div>
    <div id="carouselprincipales" class="carousel slide" data-ride="carousel" data-interval="9000">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
        <div class="carousel-item col-md-3  active">
         <div class="panel panel-default">
           <?php foreach ($encebollado as $e ) { ?>
             <div class="not-available">
              <p class="not-available-text"><b>No disponible</b></p>
            </div>
            <a href="" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$e->Id_producto?>)" id="comprar">
              <div class="viñeta">
                <label id="first-title" class="text-light"><span>$</span><?=$e->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$e->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$e->Img;?>" alt="Card image cap">
            </a>

          <?php } ?>
        </div>
      </div>
      <div class="carousel-item col-md-3 ">
       <div class="panel panel-default">
         <?php foreach ($piernaAsada as $pa ) { ?>
          <a href="" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$e->Id_producto?>)" id="comprar">
            <div class="viñeta">
              <label id="first-title" class="text-light"><span>$</span><?=$pa->precio?></label>
            </div> 
            <div class="box-titlename card-title text-light">
              <?=$pa->Nombre_producto?>
            </div> 
            <img id="imgProducto" class="card-img-top w-100 " src="<?=$pa->Img;?>" alt="Card image cap">
            
          </a>
        <?php } ?>
      </div>
    </div>
    <div class="carousel-item col-md-3 ">
     <div class="panel panel-default">
      <?php foreach ($piernaAsada as $pa ) { ?>
        <div class="panel-thumbnail">
          <a href="" class="" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$pa->Id_producto?>)" id="comprar">
           <div class="viñeta">
            <label id="first-title" class="text-light"><span>$</span><?=$pa->precio?></label>
          </div> 
          <div class="box-titlename card-title text-light">
            <?=$pa->Nombre_producto?>
          </div> 
          <img id="imgProducto" class="card-img-top w-100 " src="<?=$pa->Img;?>" alt="Card image cap">
        </a>
      </div>
    <?php } ?>
  </div>
</div>
<div class="carousel-item col-md-3 ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 5" class="thumb">
       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
     </a>
   </div>
 </div>
</div>
<div class="carousel-item col-md-3 ">
  <div class="panel panel-default">
    <div class="panel-thumbnail" id="contenedorcarga" role="status">
      <div id="carga"></div>
    </div>
  </div>
</div>
<div class="carousel-item col-md-3 ">
 <div class="panel panel-default">
  <div class="panel-thumbnail">
    <a href="#" title="image 7" class="thumb">
      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
    </a>
  </div>
</div>
</div>
<div class="carousel-item col-md-3 ">
 <div class="panel panel-default">
  <div class="panel-thumbnail">
    <a href="#" title="image 8" class="thumb">
      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
    </a>
  </div>
</div>
</div>
<div class="carousel-item col-md-3  ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 2" class="thumb">
       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
     </a>
   </div>

 </div>
</div>
</div>

<a class="carousel-control-prev" href="#carouselprincipales" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next text-faded" href="#carouselprincipales" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
</div>
<!--/carrusel de los principales-->