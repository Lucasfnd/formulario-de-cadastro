//Validation Cell and Telephone
$("#celphone").mask("(00) 0000-00009");
$("#telephone").mask("(00) 0000-0000");
if ($('#celphone' && ('#telephone')).is(':empty')){
  alert('Tem que conter pelo menos um número para contato');
 }
 else ($('#celphone' || ('#telephone')).is(':empty'))
  console.log('passou');


//Validator Email
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if (!filter.test(form.email.value)) {
    form.email.focus();
    $("MsgErro").show()
    .text('Por favor, informe um email válido.');
    return false;
}

//Calendar function
$( function() {
    $( "#datepicker" ).datepicker();
} );


//   $(function() {
//     $( "#datepickerMonth" ).datepicker({dateFormat: 'MM/YYYY'});
// });


//Validade CPF
jQuery.validator.addMethod("cpf", function(value, element) {
  value = jQuery.trim(value);
 
 value = value.replace('.','');
 value = value.replace('.','');
 cpf = value.replace('-','');
 while(cpf.length < 11) cpf = "0"+ cpf;
 var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
 var a = [];
 var b = new Number;
 var c = 11;
 for (i=0; i<11; i++){
   a[i] = cpf.charAt(i);
   if (i < 9) b += (a[i] * --c);
 }
 if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
 b = 0;
 c = 11;
 for (y=0; y<10; y++) b += (a[y] * c--);
 if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
 
 var retorno = true;
 if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;
 
 return this.optional(element) || retorno;

}, console.log("Informe um CPF válido"));


$(document).ready(function(){

  $("#meuForm").validate({
     rules: {
         cpf: {cpf: true, required: true}
     },
     messages: {
        cpf: { cpf: 'CPF inválido'}
     }
     ,submitHandler:function(form) {
        alert('ok');
     }
  });
});

