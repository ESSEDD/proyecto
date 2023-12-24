window.onload = function() {
    fetch("../../005-API/preguntas.php")
    .then(function(response){
        return response.json()
    }).then(function(datos){
        for(let i =0;i<datos.length;i++){
            let articulo = document.createElement("article");
            document.querySelector("section").appendChild(articulo)
        }
    })
}