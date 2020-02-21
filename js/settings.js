// Calendar function
$(document).ready(function(){
  $('#date').mask('00/00/0000');
  $('.cpf-mask').mask('000.000.000-00', {reverse: true});
  $('.rg-mask').mask('000.000.000-0', {reverse: true});
  $('#celphone').mask('(00)0-0000-0000');
  $('#phone').mask('(00) 0000-0000');
  $('#validate').mask('00/0000');
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}



