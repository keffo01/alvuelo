<!-- Navbar -->
<a class="navbar-brand navlogo" href="<?=base_url('CCA')?>">
  <img src="<?=base_url()?>assets/img/Alvuelo.png" width="100px" height="100" class="d-inline-block align-top" alt="">
</a>
<nav class="navbar navbar-expand-md fixed-top" id="navbar">
  <a class="navbar-brand"></a>
  <a id="carritomovile" class="openbtn nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#carritomodal" onclick="loadCarrito()"><i class="fas fa-shopping-cart"></i></a>

  <button type="button" class="navbar-toggler navbar-dark bg-skyblue" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="nav">
    <ul class="navbar-nav">
      <li class="nav-item active">
       <?php if ($this->session->userdata('Logueado') == TRUE ) { ?>
        <a class="nav-link" href="#"><?php echo $this->session->userdata('Nombre');?></a>
      <?php   }else{ ?>
        <a class="nav-link" href="#"data-toggle="modal" data-target="#modalRegister" data-whatever="@mdo"><i class="fas fa-user-plus"></i>Registrarse <span class="sr-only">(current)</span></a>
      <?php   }?>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="collapse" data-target="#items">
       <i class="fas fa-drumstick-bite"></i> Platillos
     </a>
     <div class="collapse" id="items">
       <a class="dropdown-item text-light" id="categories" href="<?=base_url('CCA/Pollo')?>">Pollo</a>
       <a class="dropdown-item text-light" id="categories" href="<?=base_url('CCA/Res')?>">Res</a>
       <a class="dropdown-item text-light" id="categories" href="<?=base_url('CCA/Cerdo')?>">Cerdo</a>
       <a class="dropdown-item text-light" id="categories" href="<?=base_url('CCA/Pastas')?>">Pastas</a>
       <a class="dropdown-item text-light" id="categories" href="<?=base_url('CCA/Rellenos')?>">Rellenos</a>
   </div>

 </li>
 <li  class="nav-item">
   <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="collapse" data-target="#fastfood">
     <i class="fas fa-hamburger"></i> Comida rapida</a>
     <div class="collapse"  id="fastfood">
       <a class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Tortas')?>">Tortas</a>
       <a class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Hamburguesas')?>">Hamburguesas</a>
       <a class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Pizza')?>">Pizza</a>
       <a  class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Mexicana')?>">Comida Mexicana</a>
       <a class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Antojitos')?>">Antojitos</a>
       <a class="dropdown-item text-light" id="categories" href="<?php echo base_url('CCA/Helados')?>">Helados</a>
     </div>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('CCA/Pupusas'); ?>"><i class="fas fa-cookie"></i> Pupusas</a>
  </li>
  <li class="nav-item">
    <?php if ($this->session->userdata('Id_cliente') > 0) { ?>

      <a class="nav-link" href="<?php echo base_url('Auth/logOut') ?>" class="nav-link">
       <i class="fas fa-sign-out-alt"></i>Cerrar Sesion </a>

     <?php   }else{?>

       <a class="nav-link" href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin" data-whatever="@mdo">
         <i class="fas fa-user-friends"></i>Iniciar Sesión </a>

       <?php   }?>

     </li>
     <li class="nav-item" id="licarrito">
      <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#carritomodal" onclick="loadCarrito()"><i class="fas fa-shopping-cart"></i> carrito</a>

    </li>
  </ul>
</div>

</nav>
<!--/Navbar-->

<!--Modal login-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?=base_url('Auth/verificarUsuario')?>" id="frmlogin">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="Lusuario" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" name="Lusuario" id="Lusuario" placeholder="Por ejemplo: Carlos" required="">
          </div>
          <div class="form-group">
            <label for="Lpassword" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" name="Lpassword" id="Lpassword" placeholder="********" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-skyblue text-light" id="btnLogin">Ingresar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--/Modal login-->

<!--Modal register-->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?php echo base_url('Auth/createUser'); ?>" id="frmRegister" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="Nombre" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Por ejemplo: Carlos" required="">
          </div>
          <div class="form-group">
            <label for="Email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="Email" id="Email" placeholder="Por ejemplo: user@gmail.com" required="">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input class="form-control" name="Password" id="Password" placeholder="********">
          </div>
          <div class="form-group">
            <label for="Direccion" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Por ejemplo: Col. los mangos pje 11 casa #1" required="">
          </div>
          <div class="form-group">
            <label for="Municipio" class="col-form-label">Municipio:</label>
            <select name="Municipio" class="form-control">
              <option value="">--Seleccione--</option>
              <option value="Aguilares">Aguilares</option>
            </select>
          </div>

          <div class="form-group">
            <label for="Telefono" class="col-form-label">Teléfono:</label>
            <input class="form-control" name="Telefono" id="Telefono" placeholder="por ejemplo: 7654-3210" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn bg-skyblue text-light" id="btnregistro">Registrarse</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--/Modal register-->
<!-- Modal carrito-->
<div class="modal fade" id="carritomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="carritoDetails">

      </div>
    </div>
  </div>
</div>

<!-- /Modal carrito-->

<!-- Modal platillo-->
<div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-body" id="PlatilloDetails">
        ...
      </div>

    </div>
  </div>
</div>
      <!-- /Modal -->