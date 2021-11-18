<!DOCTYPE html>
<html lang="en">
<head>
 <?=$CSS?>
 <meta charset="UTF-8">
 <title>Al vuelo</title>
</head>
<body>
  <div id="contenedorcarga">
  <div id="carga"></div>
</div>
   <?=$Navbar?>
 <?php if (date('H:i:s') > '10:00:00' || date('H:i:s') < '14:00:00') { ?>
  <div class="container-fluid">
    <?=$Principales?>  
<div class="separador"></div>
    <?=$CarneRes?>
<!--Menú de cerdo-->
<div class="separador"></div>
<div class="headerCard">nuestra selección <b>( Cerdo )</b></div>
<div class="separador"></div>
<div class="row">
  <?php foreach ($productosCER as $p ) { ?>
    <div class="col-md-4 col-sm-4">
     <div class="not-available">
      <p class="not-available-text"><b>No disponible</b></p>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="viñeta">
          <label id="first-title" class="text-light"><span>$</span><?=$p->precio?></label>
        </div> 
        <div class="box-titlename card-title text-light">
          <?=$p->Nombre_producto?>
        </div>  
        <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
      </div>
      <div class="card-footer">
        <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
      </div>
    </div>

  </div>

<?php } ?>
</div>
<!--Menú de cerdo-->

<!--Menú Cremas-->
<div class="separador"></div>
<div class="headerCard">Lo más cremoso</div>
<div class="separador"></div>
<div class="row">
  <?php foreach ($productosC as $p ) { ?>
    <div class="col-md-4 col-sm-4">
     <div class="not-available">
      <p class="not-available-text"><b>No disponible</b></p>
    </div>
    <div class="card">
      <div class="card-content">
        <div class="viñeta">
          <label id="first-title" class="text-light"><span>$</span><?=$p->precio?></label>
        </div> 
        <div class="box-titlename card-title text-light">
          <?=$p->Nombre_producto?>
        </div> 
        <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
      </div>
      <div class="card-footer">
        <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
      </div>
    </div>  
  </div>
<?php } ?>
</div>
<?php }else { ?>
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($productos as $p ) { ?>
        <div class="col-md-4 col-sm-4">
         <div class="card">
          <div class="card-content">
            <div class="viñeta">
              <label id="first-title" class="text-light"><span>$</span><?=$p->precio?></label>
            </div> 
            <div class="box-titlename card-title text-light">
              <?=$p->Nombre_producto?>
            </div> 
            <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
          </div>
          <div class="card-footer">
            <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
          </div>
        </div>

      </div>

    <?php } ?>
  </div>

  <!--Menú de carnes-->
  <div class="separador"></div>
  <div class="headerCard">nuestra selección <b>( RES )</b></div>
  <div class="separador"></div>
  <div class="row">
    <?php foreach ($productosR as $p ) { ?>
      <div class="col-md-4 col-sm-4">
       <div class="card">
        <div class="card-content">
          <div class="viñeta">
            <label id="first-title" class="text-light"><span>$</span><?=$p->precio?></label>
          </div> 
          <div class="box-titlename card-title text-light">
            <?=$p->Nombre_producto?>
          </div> 
          <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
        </div>
        <div class="card-footer">
          <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
        </div>
      </div>

    </div>

  <?php } ?>
</div>
<!--Menú de carnes-->
<!--Menú de cerdo-->
<div class="separador"></div>
<div class="headerCard">nuestra selección <b>( Cerdo )</b></div>
<div class="separador"></div>
<div class="row">
  <?php foreach ($productosCER as $p ) { ?>
    <div class="col-md-4 col-sm-4">
     <div class="card">
      <div class="card-content">
        <div class="viñeta">
          <label id="first-title" class="text-light"><span>$</span><?=$p->precio?></label>
        </div> 
        <div class="box-titlename card-title text-light">
          <?=$p->Nombre_producto?>
        </div> 
        <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
      </div>
      <div class="card-footer">
        <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
      </div>
    </div>

  </div>

<?php } ?>
</div>
<!--/Menú de cerdo-->
<div class="separador"></div>
<!--Menú Cremas-->
<div class="headerCard">Lo más cremoso</div>
<div class="separador"></div>
<div class="row">
  <?php foreach ($productosC as $p ) { ?>
    <div class="col-md-4 col-sm-4">
      <div class="card">
        <div class="card-content">
          <div class="viñeta">
            <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
          </div> 
          <div class="box-titlename card-title text-light">
            <?=$p->Nombre_producto?>
          </div> 
          <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
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
<div class="headerCard">Mucha carne</div>
<div class="separador"></div>
<?php if (date('H:i:s') < '10:00:00' || date('H:i:s') > '23:50:00'){ ?>
  <!--Menú Hamburguesa-->

  <div class="container-fluid">
    <div class="row">
      <?php foreach ($productosH as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="not-available">
            <p class="not-available-text"><b>No Disponible</b></p>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div>
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div>   
              
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/Menú Hamburguesa-->
    <div class="separador"></div>
    <div class="headerCard">Tortas</div>
    <div class="separador"></div>
    <!--Menú Tortas-->
    <div class="row">
      <?php foreach ($productosT as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="not-available">
            <p class="not-available-text"><b>No Disponible</b></p>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div>
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div>   
              
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/Menú Tortas-->
    <div class="separador"></div>
    <div class="headerCard">Tacos</div>
    <div class="separador"></div>
    <!--Menú Tacos-->
    <div class="row">
      <?php foreach ($productosTc as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="not-available">
            <p class="not-available-text"><b>No Disponible</b></p>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div>
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div>   
              
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/Menú Tacos-->
    <div class="separador"></div>
    <div class="headerCard">Pizzas</div>
    <div class="separador"></div>
    <!--Menú Pizza-->
    <div class="row">
      <?php foreach ($productosPz as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="not-available">
            <p class="not-available-text"><b>No Disponible</b></p>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div>
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div>   
              
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/Menú Pizza-->
  </div>
<?php }else{ ?>
  <!--Menú Hamburguesa-->
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($productosH as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/Menú Hamburguesa-->
    <div class="separador"></div>
    <div class="headerCard">Tortas</div>
    <div class="separador"></div>
    <!--Menú Tortas-->
    <div class="row">
      <?php foreach ($productosT as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/menú tortas-->
    <div class="separador"></div>
    <div class="headerCard">Tacos</div>
    <div class="separador"></div>
    <!--Menú Tacos-->
    <div class="row">
      <?php foreach ($productosTc as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/menú tacos-->
    <div class="separador"></div>
    <div class="headerCard">Pizzas</div>
    <div class="separador"></div>
    <!--Menú Pizza-->
    <div class="row">
      <?php foreach ($productosPz as $p ) { ?>
        <div class="col-md-4 col-sm-4">
          <div class="card">
            <div class="card-content">
              <div class="viñeta">
                <label id="first-title" class="text-light" ><span>$</span><?=$p->precio?></label>
              </div> 
              <div class="box-titlename card-title text-light">
                <?=$p->Nombre_producto?>
              </div> 
              <img id="imgProducto" class="card-img-top w-100 " src="<?=$p->Img;?>" alt="Card image cap">
            </div>
            <div class="card-footer">
              <a href="" class="btn bg-skyblue text-light" data-toggle="modal" data-target="#staticBackdrop" onclick="OrdenPlatillo(<?=$p->Id_producto?>)" id="comprar">Comprar</a>
            </div>
          </div>  
        </div>
      <?php } ?>
    </div>
    <!--/menú Pizza-->
  </div>
<?php } ?>
<div class="separador"></div>
<?=$Footer;?>
</body>

</html>
<?=$JS?>