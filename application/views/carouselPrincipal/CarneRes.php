<!--Menú de carnes-->
<div class="container-fluid headerCard">Carnes de res</div>

 <div class="container-fluid">

    <!--carrusel de las carnes-->

    <div id="carouselres" class="carousel slide" data-ride="carousel" data-interval="9000">
      <div class="carousel-inner row w-100 mx-auto" role="listbox">
        <div class="carousel-item col-md-3  active">
         <div class="panel panel-default">
           <?php foreach ($productosR as $res ) { ?>
             <div class="not-available">
              <p class="not-available-text"><b>No disponible</b></p>
            </div>
            <a href="" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$res->Id_producto?>)" id="comprar">
              <div class="viñeta">
                <label id="first-title" class="text-light"><span>$</span><?=$res->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$res->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-90 " src="<?=$res->Img;?>" alt="Card image cap">
            </a>

          <?php } ?>
        </div>
      </div>
<div class="carousel-item col-md-3 ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 5" class="thumb">
       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
     </a>
   </div>
 </div>
</div>
<div class="carousel-item col-md-3 ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 6" class="thumb">
        <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
      </a>
    </div>
  </div>
</div>
<div class="carousel-item col-md-3 ">
 <div class="panel panel-default">
  <div class="panel-thumbnail">
    <a href="#" title="image 7" class="thumb">
      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
    </a>
  </div>
</div>
</div>
<div class="carousel-item col-md-3 ">
 <div class="panel panel-default">
  <div class="panel-thumbnail">
    <a href="#" title="image 8" class="thumb">
      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
    </a>
  </div>
</div>
</div>
<div class="carousel-item col-md-3  ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 2" class="thumb">
       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
     </a>
   </div>

 </div>
</div>
<div class="carousel-item col-md-3  ">
  <div class="panel panel-default">
    <div class="panel-thumbnail">
      <a href="#" title="image 2" class="thumb">
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

<a class="carousel-control-prev" href="#carouselres" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next text-faded" href="#carouselres" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

</div>
</div>
<!--/carrusel de las carnes-->