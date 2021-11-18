<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?=base_url()?>assets/bootstrap-4.4.1/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/6e63e948c0.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
// Update item quantity
function updateCartItem(obj, rowid){
	$.get("<?php echo base_url('carrito/update_carrito/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
		if(resp == 'ok'){
			location.reload();
		}else{
			alert('Cart update failed, please try again.');
		}
	});
}
//funcion para solicitar cambio
function TotalCambio(){
	var totalcompra = parseFloat($("#total").val());
	var Cambio = parseFloat($("#Cambio").val());

	if(totalcompra > Cambio){
		alert('el cambio debe ser mayor a '+totalcompra);
		$("#Cambio").val('');
	}else{
		if(totalcompra == Cambio){
			alert('usted no necesita cambio');
			$("#Cambio").val('');
		}
	}
}	

//ocultar elemento de cambio
$(function(){
	$('#CheckCambio').change(function(){
		if(!$(this).prop('checked')){
			$('#nocambio').hide();
			$('#Cambio').removeAttr("required");

		}else{
			$('#nocambio').show();
			$('#Cambio').prop("required", true);
		}

	})

})
</script>
<script>
//cargar la vista de platillos en el modal
function OrdenPlatillo(id){
	$('#PlatilloDetails').load('<?=base_url()?>CCA/Platillos?id='+id);
}
//cargar la vista del carrito en el modal
function loadCarrito(){
	$('#carritoDetails').load('<?php echo base_url('carrito/load_carrito')?>');
}

	//comprobamos si el carrito agrego correctamente los datos
	$('#frmplatillo').submit(function(e){
		e.preventDefault();
		$.ajax({
			url:$(this).attr('action'),
			type:'POST',
			dataType:'json',
			data: $(this).serialize(),
			success: function(pedido){

				if (pedido['error'] === true) {
					alert('a error has ocurred!');
				}else{
					Swal.fire({
						position: 'top-center',
						icon: 'success',
						title: 'agregado al carrito!',
						showConfirmButton: false,
						timer: 1000
					});
				}

			}
		});
	});

	//comprobamos si el inicio de sesion es correcto
	$('#frmlogin').submit(function(e){
		e.preventDefault();
		
		$.ajax({
			url:$(this).attr("action"),
			type: 'POST',
			data: $(this).serialize(),
			success: function(datos){
				if (datos === "error") {
					alert('A ocurrido un error');
				}else{
					location.reload();
				}
			}


		});

	});

	//comprobamos que los datos sean correctos para el registro
	$("#frmRegister").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).attr('action'),
			data: $(this).serialize(),
			type: 'POST',
			dataType:'json',
			success: function(mensaje){
				
				if (mensaje['error']){

					var err_data = mensaje['mensaje'];

					$.toast({
						title: 'Notice!',
						subtitle: '1 seg ago',
						content: err_data,
						type: 'info',
						delay: 3000,

					});
				}else{
					Swal.fire({
						position: 'top-center',
						icon: 'success',
						title: 'Regristado!',
						showConfirmButton: false,
						timer: 1500
					});

					$('#modalRegister').modal('hide');
					$('#frmRegister')[0].reset();

				}
			}

		});

	});


</script>

<script>
//damos color al navbar cuando se le haga scroll a la pagina
$(window).scroll(function(){
	if ($("#navbar").offset().top > 75) {
		$("#navbar").addClass("bg-skyblue");
	}else{
		$("#navbar").removeClass("bg-skyblue");
	}
});

</script>
<script>
	if(window.location.href.indexOf('ubicacion') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('contacto') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Pollo') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Res') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Cerdo') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Pastas') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Pasarela') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('orderSuccess') > -1){
		$("#navbar").addClass("bg-skyblue");
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Hamburguesas') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Tortas') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Pizza') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Mexicana') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Antojitos') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Helados') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Pupusas') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}
	if(window.location.href.indexOf('Rellenos') > -1){
		$("#navbar").addClass("bg-skyblue");
		$("#ensalada").hide();
		$("#labelensalada").hide();
		$(window).scroll(function(){
			if ($("#navbar").offset().top > -1) {
				$("#navbar").addClass("bg-skyblue");
			}
		});
	}

</script>
<script>
	//Funcion para que el carrusel de las card funcionen

	$('#carouselprincipales').on('slide.bs.carousel', function (e) {


		var $e = $(e.relatedTarget);
		var idx = $e.index();
		var itemsPerSlide = 4;
		var totalItems = $('.carousel-item').length;

		if (idx >= totalItems-(itemsPerSlide-1)) {
			var it = itemsPerSlide - (totalItems - idx);
			for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
            	$('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
            	$('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


	$('#carouselprincipales').carousel({ 
		interval: 0
	});


	$(document).ready(function() {
		/* show lightbox when clicking a thumbnail */
		$('a.thumb').click(function(event){
			event.preventDefault();
			var content = $('.modal-body');
			content.empty();
			var title = $(this).attr("title");
			$('.modal-title').html(title);        
			content.html($(this).html());
			$(".modal-profile").modal({show:true});
		});

	});
</script>
<!--Cambiar la imagen segun resolucion de pantalla-->
<script >
	var portada = document.getElementById('portada');
	if (window.screen.width > 540) {
		portada.src="./assets/img/portada-alvuelo.gif";
	}else{
		portada.src="./assets/img/Bannermovil.gif";
	}
	
</script>


