window.onload = function() {
    fetch("../../005-API/preguntas.php")
    .then(function(response){
        return response.json()
    }).then(function(datos){
        let plantilla = document.getElementById("plantillapregunta");
        let seccion = document.querySelector("section")
        for(let i =0;i<datos.length;i++){
            let importado= document.importNode(plantilla.content,true);
            seccion.appendChild(importado);
        }
    })
}