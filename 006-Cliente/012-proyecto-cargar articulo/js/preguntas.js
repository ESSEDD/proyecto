//carga inicial de preguntas al abrir la pagina
window.onload = function(){
    fetch("../../005-API/preguntas.php")
    .then(function(response){
        return response.json();
    })
    .then(function(datos){
        let plantilla = document.getElementById("plantillapregunta");
        let seccion = document.querySelector("section")
        for(let i =0;i<datos.length;i++){
            let importado= document.importNode(plantilla.content,true);
            importado.querySelector("article").setAttribute("name",datos[i].Identificador);
            importado.querySelector("h3").textContent = datos[i].titulo;
            importado.querySelector("time").textContent = datos[i].fecha;
            importado.querySelector("p").textContent = datos[i].texto;
            importado.querySelector("article").onclick = function(){
                let identificador = this.getAttribute("name")
                console.log("has hecho click")
                console.log("el id es: "+identificador)
                cargarArticulo(identificador);
            }
            seccion.appendChild(importado);
        }
    })
}

function cargarArticulo(identificador){
    document.querySelector("section").innerHTML = "";
    fetch("../../005-API/preguntasyrespuestas.php?id="+identificador)
    .then(function(response){
        return response.json();
    }).then(function(datos){
        console.log(datos)
        let plantilla = document.getElementById("plantillapregunta")
        console.log("la plantilla es:; ")
        console.log(plantilla)
        let seccion = document.querySelector("section")
        let pregunta = datos.pregunta[0]
        console.log(pregunta)
        let importado = document.importNode(plantilla.content,true);
        importado.querySelector("article").setAttribute("name",pregunta.Identificador);
        importado.querySelector("h3").textContent = pregunta.titulo;
        importado.querySelector("time").textContent = pregunta.fecha;
        importado.querySelector("p").textContent = pregunta.texto;
        seccion.appendChild(importado);
        
    })
}