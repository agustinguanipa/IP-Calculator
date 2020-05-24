/* Calculadora IP */

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

