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
	<!--- AngularJS --->
	<script src="libs/angularjs/angular.min.js" type="text/javascript"></script>
	<!--- jQuery --->
  <script src="libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
  <!--- jQuery Validation --->
  <script type="text/javascript" src="libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
  <!--- jQuery Mask Plugin --->
  <script type="text/javascript" src="libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
  <!--- JS --->
	<script src="validacion.js" type="text/javascript"></script>
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
			     		<li>Introduce una dirección IP (IPv4) junto con la máscara de red.</li>
			     		<li>Automáticamente te indicara los resultados.</li>
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
	  	
			<div ng-app='myApp' ng-controller='myCtrl'>
				<div class="row center"> 
					<div class="col s12 m12 l12"> 
						<div class="card" style="width: 54 rem;">
							<div class="card-header">
						    <b>Dirección IP y Máscara de Red</b>
						  </div>
						  <form name="calculadora" id="calculadora" class="justify-content-center" align="center" enctype="multipart/form-data" action="" method="" >
							  <div class="card-body" id="calculadora">
							    <input ng-model="oct0" id="oct0" type="number" min="0" max="255" style="width:50px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "3"/>.
				 					<input ng-model="oct1" id="oct1" type="number" min="0" max="255" style="width:50px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "3"/>.
				 					<input ng-model="oct2" id="oct2" type="number" min="0" max="255" style="width:50px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "3"/>.
				 					<input ng-model="oct3" id="oct3" type="number" min="0" max="255" style="width:50px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "3"/>/
				 					<input ng-model="prefix" id="prefix" type="number" min="0" max="32" style="width:50px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "2"/>
							  </div>
						  </form>
						</div>
						<br>
						<div class="card-deck">
							<div class="card" style="width: 18rem;">
							  <ul class="list-group list-group-flush">
							    <li class="list-group-item" style="font-size: 20px;"><b>Clase: <b style="color: #0F80FF;">{{class()}}</b></b><br/> </li>
							    <li class="list-group-item"><b>Dirección de Red:</b> {{networkAddress()}}<br/></li>
							    <li class="list-group-item"><b>Máscara de Subred:</b> {{subnetMask()}}</li>
							  </ul>
							</div>
						
						<div class="card" style="width: 18rem;">
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item"><b>IP en Binario:</b> <br>{{IPBinary()}}<br/><br/> </li>
						    <li class="list-group-item"><b>Red en Binario:</b> <br> {{networkBinary}}<br/></li>
						    <li class="list-group-item"><b>Subred en Binario:</b> <br>{{subnetBinary()}}<br/> </li>
						  </ul>
						</div>
						
						<div class="card" style="width: 18rem;">
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item"><b>Network Bits:</b> {{prefix}}<br/></li>
						    <li class="list-group-item"><b>Host Bits:</b> {{32-prefix}}<br/></li>
						    <li class="list-group-item"><b>Subnet Bits:</b> {{subnetBits()}}<br/> </li>
						    <li class="list-group-item"><b>Total de Subredes:</b> {{totalSubnets()}}<br/> </li>
						    <li class="list-group-item"><b>Hosts por Subred:</b> {{hostsPerSubnet()}}<br/> </li>
						    <li class="list-group-item"><b>Total de Host en la Red:</b> {{hostCount}}<br/> </li>
						    <li class="list-group-item"><b>Host Perdidos por Subred:</b> {{hostsLostToSubnets()}}<br/> </li>
						  </ul>
						</div>
	 				</div> 
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Footer --->

	<footer class="section-footer bg2">
	  <div class="container">
	    <section class="footer-bottom row">
	      <div class="col-sm-4" align="left"> 
	        <p><b>Diseñado y Desarrollado por: </b><br>Carlos Agustin Guanipa Alvarez</p>
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

// Calculadora IP
// =========================

	//returns true if it is, else false
	if(typeof Number.isInteger === "undefined") Number.prototype.isInteger = function(x) { return x % 1 === 0;};
	//inserts a string into another string at the specified index
	String.prototype.insert = function(index, string) {
	  if(index > 0)
	    return this.toString().substring(0, index) + string + this.toString().substring(index, this.toString().length);
	  else
	    return string + this.toString();
	};
	//repeats a string 'x' times
	if(typeof String.repeat === "undefined") {
		String.prototype.repeat = function(x) {
			var temp = "";
			for(var i=0;i<x;i++) temp += this.toString();
			return temp;
		};
	}
	//returns true if the string starts with said string, else false
	if(typeof String.startsWith === "undefined") {
		String.prototype.startsWith = function(str) {
			if(this.toString().substring(0,str.length) === str) return true;
			else return false;
		};
	}
	//returns true if the string ends with said string, else false
	if(typeof String.endsWith === "undefined") {
		String.prototype.endsWith = function(str) {
			if(this.toString().substring(this.toString().length - str.length, this.toString().length) === str) return true;
			else return false;
		};
	}
	//returns true if the string has said string in it, else false
	if(typeof String.includes === "undefined") {
		String.prototype.includes = function(str) {
			if(this.toString().indexOf(str) >= 0) return true;
			else return false;
		};
	}
	Number.prototype.intToBinary = function() {
		var binary = parseInt(this, 10).toString(2);
		return "0".repeat(8 - binary.length) + binary;
	};
	String.prototype.binaryToInt = function() {
		return parseInt(this.toString(), 2);
	};
	function intToBinary(int){
	    var binStr = parseInt(int, 10).toString(2);
		binStr = "0".repeat(8 - binStr.length) + binStr;
		return binStr;
	}
	function binaryToInt(bin) {
		return parseInt(bin, 2);
	}
	var decToHex = function(dec) {
		return "0".repeat(2-(dec).toString(16).length) + (dec).toString(16);
	};

	var app = angular.module("myApp", []);
	app.controller("myCtrl", function($scope){
		$scope.oct0 = 0;
		$scope.oct1 = 0;
		$scope.oct2 = 0;
		$scope.oct3 = 0;
		$scope.prefix = 24;
		
		$scope.class = function() {
			if($scope.prefix >= 8 && $scope.prefix <= 15) return "A";
			else if($scope.prefix >= 16 && $scope.prefix <= 23) return "B";
			else if($scope.prefix >= 24 && $scope.prefix <= 30) return "C";
			else return "";
		};
		
		$scope.IPBinary = function() {
			var ipBin = [
				intToBinary($scope.oct0 ? $scope.oct0 : 0),
				intToBinary($scope.oct1 ? $scope.oct1 : 0),
				intToBinary($scope.oct2 ? $scope.oct2 : 0),
				intToBinary($scope.oct3 ? $scope.oct3 : 0)
			];
			return ipBin.join(".");
		};
		
		$scope.subnetBits = function() {
			if($scope.class() == "A") return $scope.prefix - 8;
			else if($scope.class() == "B") return $scope.prefix - 16;
			else if($scope.class() == "C") return $scope.prefix - 24;
			else return 0;
		};
		
		$scope.subnetMask = function() {
			var mask = "1".repeat($scope.prefix);
			mask += "0".repeat(32-mask.length);
			mask = mask.replace(/\s*[01]{8}\s*/g, function(mask) {return parseInt(mask, 2).toString() + ".";});
			return mask.substring(0, mask.length-1);
		};
		
		$scope.subnetBinary = function() {
			var subnetBin = "1".repeat($scope.prefix);
			subnetBin += "0".repeat(32 - subnetBin.length);
			subnetBin = subnetBin.insert(8, ".").insert(17, ".").insert(26, ".");
			return subnetBin;
		};
		
		$scope.totalSubnets = function() {
			return Math.pow(2, $scope.subnetBits());
		};
		
		$scope.networkAddress = function() {
			var netBin = "";
			for(var i=0;i<35;i++){
				if($scope.IPBinary()[i] == $scope.subnetBinary()[i]){
					netBin += $scope.IPBinary()[i];
				} else {
					netBin += "0";
				}
			}
			$scope.networkBinary = netBin;
			var net = netBin.split(".");
			net[0] = binaryToInt(net[0]);
			net[1] = binaryToInt(net[1]);
			net[2] = binaryToInt(net[2]);
			net[3] = binaryToInt(net[3]);
			return net.join(".");
		};
		
		$scope.hostsPerSubnet = function() {
			return Math.pow(2, 32-$scope.prefix) - 2;
		};
		
		$scope.hostsLostToSubnets = function() {
			$scope.hostCount = (Math.pow(2, 32-$scope.prefix) - 2) * $scope.totalSubnets();
			if($scope.class() == "A") return (16777214 - $scope.hostCount);
			else if($scope.class() == "B") return (65534 - $scope.hostCount);
			else if($scope.class() == "C") return (254 - $scope.hostCount);
			else return;
		};
	});

// Sticky Navbar
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

// 

$( document ).ready( function () {
  $( "#calculadora" ).validate( {
    rules: {
      oct0: {
        required: true,
        number: true,
        max: 255,
        min: 0
      },
      oct1: {
        required: true,
        maxlength: 3
      },
      oct2: {
        required: true,
        minlength: 1,
        maxlength: 3
      },
      oct3: {
        required: true,
        minlength: 1,
        maxlength: 3
      },
      prefix: {
        required: true,
        number: false,
        minlength: 1,
        maxlength: 2
      },
    },

    messages: {
      oct0: {
        required: "Ingrese su Primer Nombre",
        max: "Ingrese Valor menos a 255",
        min: "Ingrese Valor menos a 255"
      },
      oct1: {
        required: "Ingrese su Primer Nombre",
        minlength: "Tu Nombre debe contener al menos 2 caracteres",
        maxlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      oct2: {
        required: "Ingrese su Primer Nombre",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      oct3: {
        required: "Ingrese su Primer Nombre",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      prefix: {
        required: "Ingrese su Primer Nombre",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  } );

} );


jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

/* Masks */

$('.telef-mask').mask('(0000) 000 0000');
$('.pesoo-mask').mask('000000000000000.00 KG', {reverse: true});
$('.preci-mask').mask('000000000000000.00', {reverse: true});
$('.taman-mask').mask('###.00 x ###.00 x ###.00', {reverse: false});


</script>