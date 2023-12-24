window.onload = function() {
    fetch("../../005-API/preguntas.php")
    .then(function(response){
        return response.json()
    }).then(function(datos){
        console.log(datos)
    })
}