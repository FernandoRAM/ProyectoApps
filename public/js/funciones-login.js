function registrarse(){
  document.getElementById("login").classList.add("hidden");
  document.getElementById("regis").classList.add("hidden");
  document.getElementById("log").classList.remove("hidden");
  document.getElementById("registro").classList.remove("hidden");
}
function login(){
  document.getElementById("log").classList.add("hidden");
  document.getElementById("registro").classList.add("hidden");
  document.getElementById("regis").classList.remove("hidden");
  document.getElementById("login").classList.remove("hidden");
}
function habilitar(){
  document.getElementById("respuesta").disabled = false;
  document.getElementById("respuesta2").disabled = false;
}
function abrirpregunta(){
  document.getElementById("log").classList.add("hidden");
  document.getElementById("login").classList.add("hidden");
  document.getElementById("pregunta").classList.remove("hidden");
  document.getElementById("regresar").classList.remove("hidden");
}
function regresar(){
  document.getElementById("pregunta").classList.add("hidden");
  document.getElementById("regresar").classList.add("hidden");
  document.getElementById("regis").classList.remove("hidden");
  document.getElementById("login").classList.remove("hidden");
} 