	</main>
	<footer class="pie relative">
		<div class="footer-pattern"></div>
		<div class="container">

			<div class="row">
				<div class="col-sm-3">
					<a class="pie__logo" href="<?=url('home')?>">
						<img class="img-responsive" src="images/logo_nav-principal-pie.png" alt="<?=Empresa::$nombre?>">
					</a>
				</div>
				<div class="v-regina inline-block">
					<ul class="unstyled-list text-left footer-list">
						<li><b>Villa Regina</b></li>
						<li><?= Empresa::$direccion ?></li>
						<li><?= Empresa::$localidad ?> - <?= Empresa::$provincia ?> <?= Empresa::$CP ?></li>
						<li><a href="tel:<?= Empresa::$telefono_enlace ?>">Tel. <?= Empresa::$telefono ?></a></li>

					</ul>
				</div>
				<div class="neuquen inline-block">
						<ul class="unstyled-list text-left footer-list">
						<li><b>Neuquén</b></li>
						<li><?= Empresa::$direccion2 ?></li>
						<li><?= Empresa::$provincia2 ?> <?= Empresa::$CP ?></li>
						<li><a href="tel:<?= Empresa::$telefono_enlace2 ?>">Tel. <?= Empresa::$telefono2 ?></a></li>
						</ul>
				</div>
				<div class="inline-block mail">
					<div class="text-center">
						<a href="mailto:<?= Empresa::$email ?>" class="color-5"><i class="fa fa-envelope color-1"></i><?= Empresa::$email ?></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-left">
					<div class="row">
						<span>Hanomag Patagonia 2016 ©</span>
					</div>
				</div>
				<div class="col-sm-3 text-right">
					<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Diseño web</a>
				</div>
			</div>		
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   <!-- Imágenes responsive -->
    <script>
    
	   	//Defino el nuevo ancho de las imágenes
	      	var anchoVentana = $(window).width();
	      	var anchos = [1920,1200,990,768,490];
	      	var nuevoAncho = 1920;
	      	for (var i=0; i<anchos.length; i++) {
	      		if( anchoVentana<anchos[i] ){
		      		nuevoAncho = anchos[i];
		      	}
	      	}

	      	//Cambio el src de las imágenes
	      	var imagenes = ['.slider-principal__imagen'];
	      	for (var i=0; i<imagenes.length; i++) {
	      		$(imagenes[i]).each(function(){
	       			var src = $(this).attr('src');
	       			$(this).attr('src',src.replace('1920',nuevoAncho));
	      		});
	      	}
    </script>
    <!-- Fin Imágenes responsive -->



    <!-- Scroll en cabecera -->
	<script>
		//Anima el menú cuando hay scroll
		$( window ).scroll(function(){
			var $cabecera = $('.cabecera');
			if( $(window).scrollTop() > 20){
				$cabecera.addClass('scroll');
			}else{
				$cabecera.removeClass('scroll');
			}
		});
		//Oculta y muestra el menú cuando hay scroll
		var $cabecera = $('.cabecera');
		var previousScroll = 0;
		$(window).scroll(function(event){
		   var scroll = $(this).scrollTop();
		   if (scroll > previousScroll && scroll > 400){
		       $cabecera.addClass('ocultar');
		       //Cierra el menú cuando hay scroll
				$(".navbar-collapse").removeClass("in").addClass("collapse");
				$(".navbar-toggle").removeClass("is-active");
		   } else {
		      $cabecera.removeClass('ocultar');
		   }
		   previousScroll = scroll;
		});
	</script>
	<!-- Fin Scroll en cabecera -->

	<!-- Menú desplegable --> 
	<script> 
	
		$(window).resize(function(){
			if( $(window).width() > 767){

				$('.js-desplegable > a').mouseover(function(){ 
					if( ! $(this).hasClass('activo') ){
					/*$('.js-desplegable > a').each(function(){ 
					cerrarDesplegable($(this)); 
					});*/ 
					setTimeout( abrirDesplegable($(this)), 1000); 

					} 
				}); 

				//Cierra el desplegable cuando salimos del listado 
				$('.js-desplegable').mouseleave(function(){ 
					var $enlaceDesplegable = $(this).children('.js-desplegar').siblings('a'); 
					if( $enlaceDesplegable.hasClass('activo') ){ 
					setTimeout( cerrarDesplegable($enlaceDesplegable), 1000); 
					} 
				}); 

				function cerrarDesplegable($enlaceDesplegable){ 
					$enlaceDesplegable.siblings('.js-desplegar').stop().slideUp(500); 
					$enlaceDesplegable.removeClass('activo'); 
				} 

				function abrirDesplegable($enlaceDesplegable){ 
					$enlaceDesplegable.siblings('.js-desplegar').stop().slideDown(500); 
					$enlaceDesplegable.addClass('activo'); 
				} 
			} else {
				$('.js-desplegable > a').click(function(){ 
					if( ! $(this).hasClass('activo') ){
					/*$('.js-desplegable > a').each(function(){ 
					cerrarDesplegable($(this)); 
					});*/ 
					function cerrarDesplegable($enlaceDesplegable){ 
						$enlaceDesplegable.siblings('.js-desplegar').stop().slideUp(500); 
						$enlaceDesplegable.removeClass('activo'); 
					} 

					function abrirDesplegable($enlaceDesplegable){ 
						$enlaceDesplegable.siblings('.js-desplegar').stop().slideDown(500); 
						$enlaceDesplegable.addClass('activo'); 
					} 					
					abrirDesplegable($(this)); 

					} else if( $(this).hasClass('activo') ) {
						function cerrarDesplegable($enlaceDesplegable){ 
							$enlaceDesplegable.siblings('.js-desplegar').stop().slideUp(500); 
							$enlaceDesplegable.removeClass('activo'); 
						} 

						function abrirDesplegable($enlaceDesplegable){ 
							$enlaceDesplegable.siblings('.js-desplegar').stop().slideDown(500); 
							$enlaceDesplegable.addClass('activo'); 
						} 
						cerrarDesplegable($enlaceDesplegable); 
					} 
				}); 


			}

		});

	</script> 
	<!-- Fin Menú desplegable -->
    <!-- Hamburguesa  -->
    <script>
	$(document).ready(function(){
		$('.hamburger').click(function(){
			$(this).toggleClass('is-active');
		});
	});
    </script>
	<!-- Fin hamburguesa -->
	<?php if(in_array('slider-principal', $js)){ ?>
	<!-- Owl Carousel -->
	<!-- http://owlcarousel2.github.io/OwlCarousel2/ -->
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
<!--     <link rel="stylesheet" href="js/jquery.owl.carousel/owl.transitions.css" /> -->


	<?php }

	if(in_array('slider-principal', $js)){ ?>
	<!-- Owl Carousel -->
    <script>
		$(document).ready(function(){
			$('.slider-principal > .owl-carousel').owlCarousel({
			    items: 1,
 				autoplay: true,
            	singleItem: true,
			    loop: true,
			});
			// $('.slider-principal > .owl-carousel').owlCarousel({
			//       navigation : false, // Show next and prev buttons
			//       slideSpeed : 300,
			//       paginationSpeed : 400,
			// 	  singleItem:true
			// });

		});

    </script>

  	<script>	
			$('.maquinas-usadas__carousel_carousel').owlCarousel({
			    items: 1,
 				autoplay: false,
            	singleItem: true,
			    loop: true,
			    autoheight: true,
			    nav: true,
			      navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"]

			});


	</script>


	<?php } ?>	
	<?php 
		if (SECCION == 'home') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />

	<script>
		$(document).ready(function(){
		  //   function owlCarWidth(carousel) {

				//     var
				//         totalWidth = 0;

				//     carousel.find('.owl-item').each(function() {
				//         totalWidth += $(this).width();
				//     });

				//     carousel.find('.owl-stage').width(totalWidth+1);

				// }
				// owlCarWidth( $('#marcas-carousel') );

				//     $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				//              owlCarWidth( $('#marcas-carousel') );
				// });

				// $(window).trigger('resize');

			  var owl2 = $("#maquinas-viales-carousel");
			 
			  owl2.owlCarousel({
			    nav : true, // Show next and prev buttons
			  	loop: true,
			  	autoplay: true,
     		  	slideBy: 3,
    	      	  	navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"],
			  	resonsiveClass: true,
 				responsive: {
			  	 	0: {
			  	  		items: 1,
				    },
				    511 : {
			  	  		items: 2,
				    },
				    768 : {
			  	  		items: 3,
				    }
			  	  }
			     });
			});
			 		
	</script>
	<?php
		}
	?>		
	<?php 
	if (defined('SLIDERMARCAS')) {
	?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('#marcas-carousel') );

				    $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('#marcas-carousel') );
				});

				$(window).trigger('resize');

			  var owl2 = $("#marcas-carousel");
			 
			  owl2.owlCarousel({
			  	  loop: true,
		          autoplay: true,
		          slideBy: 3,
			  	  resonsiveClass: true,
			  	  responsive: {
			  	 	0: {
			  	  		items: 1,
			  	  		autoWidth:false,
 			            slideBy: 1
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
			  	  		autoWidth:false,
 			            slideBy: 2

				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 2,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 3,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 4,
			  	  		autoWidth:false
				    },		 
				    1300 : {
			  	  		items: 6	
				    }		 
			  	  }
			     });
			});
			 		
	</script>  
	<?php 
		}	
	?>
	<?php 
		if (SECCION == 'quienes-somos') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.transitions.css" />
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />

	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('#marcas-carousel') );

				    $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('#marcas-carousel') );
				});

				$(window).trigger('resize');

			  var owl3 = $("#marcas-carousel");
			 
			  owl3.owlCarousel({
			  	  autoWidth:true,
			  	  loop: false,
			  	  resonsiveClass: true,
			  	  responsive: {
			  	 	0: {
			  	  		items: 1,
			  	  		autoWidth:false
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
			  	  		autoWidth:false
				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 3,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 4,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 5,
			  	  		autoWidth:false
				    },		 
				    1300 : {
			  	  		items: 5
				    }		 
			  	  }
			     });
			});
			 		
	</script>
	<?php
		}
	?>		

	<?php 
		if (SECCION == 'ficha') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script>
 		var owl = $('.slider-ficha__carousel');
 			owl.owlCarousel({
			      nav : true, // Show next and prev buttons
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      autoWidth: true,
			      navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"],
			      items : 1,
			  });

    		var itemCount = owl.length;
 			if ( itemCount == 1 ){
 				$('.slider-ficha .btn').css('display', 'none');
 			}

    </script>			
	<?php
		}
	?>
	<script>
		$('.contenedor-categoria > .categoria-titulo').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('checked');
				if ($(this).siblings('.categoria-elementos').is(':visible')){
				} else{
						$(this).siblings('.categoria-elementos').slideDown();
				}
				console.log($(this).siblings('.categoria-elementos').find('li > a'));
			  }
			 if ($(this).hasClass('checked')) {
				$(this).siblings('.categoria-elementos').find('li > a > label').addClass('checked');
				console.log('checked');			 	
			 } else{
				$(this).siblings('.categoria-elementos').find('li > a > label').removeClass('checked');
				console.log('not checked');			 	
			 }
			 return false;			
		});
		$('.contenedor-categoria > .categoria-titulo > a').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('active');
				$(this).parent().siblings('.categoria-elementos').slideToggle();
			    }
			    return false;			
			
		});
		$( '.categoria-elementos li a' ).on( 'click', 'input[type="checkbox"]', function () {
		    $(this).parent('label').toggleClass('checked');
		});		
	</script>
  </body>
</html>