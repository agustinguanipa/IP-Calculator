/* Calculadora IP */

$( document ).ready( function () {
  $( "#calculadora" ).validate( {
    rules: {
      oct0: {
        required: true,
        number: false,
        minlength: 3
      },
    },

    messages: {
      oct0: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
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

