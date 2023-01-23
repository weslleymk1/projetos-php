// ------------VALIDAÇÃO DE SENHA---------

var password = document.getElementById("senha")
  , confirm_password = document.getElementById("confirma-senha");

function validatePassword(){

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity('As senhas não conferem');

  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;