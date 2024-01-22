//carga inicial de preguntas al abrir la pagina
window.onload = function(){
    cargarArticulos();
    document.getElementById("iniciarsesion").onclick = function(){
    iniciarSesion();
    }
    nuevaPregunta();

    document.querySelector("h1").onclick = function(){
        cargarArticulos();
    }
}
