//Vérifie si le mot de passe et la confirmation de mot de passe sont identiques ou non

var password = document.getElementById("Password")
  , confirm_password = document.getElementById("Passwordconfirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Les mots de passe ne sont pas identiques");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



