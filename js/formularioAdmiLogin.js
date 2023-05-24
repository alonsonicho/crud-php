const usuario = document.querySelector("#usuario");
const password = document.querySelector("#password");
const formulario = document.querySelector("#formularioAdmiLogin");

eventListeners();

function eventListeners() {
  formulario.addEventListener("submit", validarFormulario);
}

function validarFormulario(e) {
  if (usuario.value === "") {
    e.preventDefault();
    alert("INGRESE SU USUARIO!");
    usuario.focus();
    return;
  }

  if (password.value === "") {
    e.preventDefault();
    alert("DIGITE SU CONTRASEÑA!");
    password.focus();
    return;
  }
}
