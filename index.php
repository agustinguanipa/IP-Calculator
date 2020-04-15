<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio | Calculadora IP</title>
	<meta name="description" content="Calculadora IP - Agustin Guanipa">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!--- Favicon --->
  <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imagen/favicon.ico" type="image/x-icon">
	<!--- CSS --->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<!--- JS --->
	<script src="js/galeria.js" type="text/javascript"></script>
	<!--- jQuery --->
  <script src="libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
	<!--- Bootstrap 4 --->
  <link rel="stylesheet" href="libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
  <script src="libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
  <!--- Bootstrap 4 UI E-Commerce --->
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>
 
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
  <link href="libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
  <script src="libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
</head>

<body>

<!-- Header --->

<header class="section-header" id="index">
	<div class="index-background">
	  <h4 class="card-title text-white" style="font-size: 40px;"><b>Calculadora IP</b></h4>
    <p class="card-text text-white"><b>Redes</b></p>
	</div>
	<nav id="navbarNavDropdown" class="navbar navbar-expand-sm bg-light navbar-primary py-1" data-toggle="sticky-onscroll">
		<a class="navbar-brand" href="index.php">
	    <img src="imagen/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Calculadora <b>IP</b>
  	</a>
  	<button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
    </button>
  	<div class="navbar-collapse collapse" id="navbarNavDropdown">
  		<ul class="navbar-nav ml-auto">
	    	<li class="nav-item active">
	      	<a class="nav-link" href="#index"><b>Inicio</b></a>
	    	</li>
	    	<li class="nav-item">
	      	<a class="nav-link" href="#section1"><b>Introducción</b></a>
	   	 	</li>
	   	 	<li class="nav-item">
	      	<a class="nav-link" href="#section2"><b>Calculadora IP</b></a>
	   	 	</li>
	  	</ul>
  	</div>
	</nav>
</header>

<!-- Main --->

	<div class="jumbotron text-center" id="fondo_info">
	  <div class="container" id="section1">
	  	<h4 class="" style="color: #000000;"><b>Introducción</b></h4>
	  	<hr class="my-4">
	  	<div class="row">
	  		<div class="col-sm-4 form-group">
	  			<p class="titulo">IP's</p>
		     	<p class="contenido">
		     		Todos los dispositivos conectados a Internet poseen una dirección IP. Dada una dirección IP (IPv4) y una máscara de subred, es posible calcular la dirección de la subred a la que pertenece dicho dispositivo.
		    	</p>
	  			
	  		</div>
	  		<div class="col-sm-4 form-group">
				<p class="titulo">Objetivos</p>
		     	<p class="contenido">
		     		<ul class="text-left">
			     		<li>Identificar la dirección de la subred a la que pertenece una dirección IP (IPv4) con una determinada máscara de subred.</li>
							<li>Representar en binario direcciones IP y máscaras de 32 bits.</li>
							<li>Identificar el rango de direcciones asignables a los hosts que pertenecen a la subred identificada.</li>
							<li>Calcular el número de direcciones IP disponibles en una red IPv4.</li>
						</ul>
		    	</p>
	  		</div>
	  		<div class="col-sm-4 form-group">
	  			<p class="titulo">Instrucciones</p>
		     	<p class="contenido">
		     		<ul class="text-left">
			     		<li>Introduce una dirección IP (IPv4) junto con la máscara de red (en formato decimal o mediante una longitud de prefijo).</li>
			     		<li>Presiona Calcular.</li>
			     		<li>Obtendrás la dirección de la subred a la que pertenece dicha dirección IP, la dirección de broadcast de dicha subred, la primera y última dirección IP asignable, y el número total de direcciones IP asignables en la subred.</li>
			     	</ul>
		    	</p>
	  		</div>
	  	</div>
	  </div>
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FFFFFF;">
	  <div class="container" id="section2">
	  	<h4 style="color: #000000;"><b>Calculadora IP</b></h4>
	  	<hr class="my-4">
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
	  	<br>
		</div>
	</div>

	<!-- Footer --->

	<footer class="section-footer bg2">
	  <div class="container">
	    <section class="footer-bottom row">
	      <div class="col-sm-4" align="left"> 
	        <p><b>Diseñado y Desarrollado por: </b><br><a href="https://agustinguanipa.epizy.com/" title="Agustin Guanipa">Carlos Agustin Guanipa Alvarez</a></p>
	      </div>
	      <div class="col-sm-4 form-group" align="center">
	          <p class="pie"><b>Redes Sociales</b></p>
	           <a href="https://facebook.com/agustin.guanipa"><i class="icono fab fa-facebook white"></i></a>
		          <a href="https://twitter.com/AgustinGuanipa" class="icono fab fa-twitter"></a>
		          <a href="https://instagram.com/agustinguanipa/" class="icono fab fa-instagram"></a>
		          <a href="https://wa.me/584266908396" class="icono fab fa-whatsapp"></a>
	        </div>
	      <div class="col-sm-4" align="right">
	        <p class="text-sm-right"><b>Calculadora IP</b></p>
	        <p class="text-sm-right">Copyright &copy 2020<br>
	        </p>
	      </div>
	    </section>
	  </div>
	</footer>

</body>

</html>

<script>

// Sticky navbar
// =========================
            $(document).ready(function () {
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
            });


// Scrolling Effect -----

$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbarNavDropdown a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});

</script>