//carga inicial de preguntas al abrir la pagina
window.onload = function(){
    cargarArticulos();
    document.getElementById("iniciarsesion").onclick = function(){
        console.log("vamos a iniciar sesion")
        document.getElementById("modal").style.display = "block"
        document.getElementById("contenedormodal").innerHTML="";
        let plantilla = document.getElementById("plantillainiciosesion");
        let importado= document.importNode(plantilla.content,true);
        document.getElementById("contenedormodal").appendChild(importado);
        document.getElementById("enviainiciosesion").onclick = function(){
            console.log("inicio sesion")
            let nombre = document.getElementById("usuario").value
            let contrasena = document.getElementById("contrasena").value
            console.log("envio: "+nombre+"-"+contrasena)
            fetch("../../005-API/login.php?usuario="+nombre+"&contrasena="+contrasena)
            .then(function(response){
            return response.json();
            })
            .then(function(datos){
                console.log(datos)
                if(datos.llave=="si"){
                    document.getElementById("modal").style.display = "none";
                    document.cookie = "usuario="+nombre+";";
                }
                window.location = window.location;
            })
        }
    }

    //compruebo el boton de inicio de sesion
    console.log(valorCookie("usuario"));
    if(valorCookie("usuario") != "" && valorCookie("usuario") != undefined){
        console.log("el usuario existe")
        let boton = document.getElementById("iniciarsesion")
        boton.innerHTML = "nueva pregunta";
        boton.classList.add("botonnuevapregunta")
        boton.onclick = null
        boton.setAttribute("id","nuevapregunta")
        boton = document.getElementById("nuevapregunta");
        boton.onclick = function(){
            console.log("creamos nueva pregunta")
            let seccion = document.querySelector("section")
            seccion.innerHTML=""

            let contenedor = document.createElement("div");
            contenedor.classList.add("contenedorinterior")
            let texto = document.createElement("p");
            texto.innerHTML = "titulo de tu pregunta";
            contenedor.appendChild(texto);
            let titulo = document.createElement("input");
            titulo.setAttribute("type","text");
            contenedor.appendChild(titulo)
            texto = document.createElement("p");
            texto.innerHTML = "Contenido de la pregunta";
            contenedor.appendChild(texto);
            let bloquetexto = document.createElement("textarea");
            contenedor.appendChild(bloquetexto)
            texto=document.createElement("p");
            texto.innerHTML = "Palabras clave";
            contenedor.appendChild(texto);
            let palabrasclave = document.createElement("input");
            palabrasclave.setAttribute("type","text");
            contenedor.appendChild(palabrasclave)
            texto = document.createElement("p");
            texto.innerHTML = "elige una categoria";
            contenedor.appendChild(texto);
            let categorias = document.createElement("select");
            let opcion = document.createElement("option");
            opcion.setAttribute("value","General")
            opcion.innerHTML = "General"
            categorias.appendChild(opcion)
            contenedor.appendChild(categorias)
            let boton = document.createElement("button")
            boton.setAttribute("value","Enviar")
            boton.innerHTML = "Enviar"
            contenedor.appendChild(boton)
            boton.onclick = function(){
                console.log("creamos una nueva entrada")
                console.log(titulo.value)
                console.log(bloquetexto.value)
                console.log(palabrasclave.value)
                console.log(categorias.value)
                fetch("../../005-API/nuevapregunta.php?titulo="+titulo.value+
                "&bloquetexto="+bloquetexto.value+"&palabrasclave="+palabrasclave.value+"&categorias="+
                categorias.value)
                .then(function(response){
                    
                    cargarArticulos();
                })
            }
            seccion.appendChild(contenedor)
            
        }
    }

    document.querySelector("h1").onclick = function(){
        cargarArticulos();
    }
}
//carga de un articulo concreto con sus preguntas asociadas
function cargarArticulo(identificador){
    document.querySelector("section").innerHTML = "";
    fetch("../../005-API/preguntasyrespuestas.php?id="+identificador)
    .then(function(response){
        return response.json();
    }).then(function(datos){
        console.log(datos)
        //cargo las preguntas
        let plantilla = document.getElementById("plantillapregunta")
        let seccion = document.querySelector("section")
        let pregunta = datos.pregunta[0]
        
        let importado = document.importNode(plantilla.content,true);
        importado.querySelector("article").setAttribute("name",pregunta.Identificador);
        importado.querySelector("h3").textContent = pregunta.titulo;
        importado.querySelector("time").textContent = pregunta.fecha;
        importado.querySelector("p").textContent = pregunta.texto;
        seccion.appendChild(importado);
        //cargo las respuestas
        let plantilla2 = document.getElementById("plantillarespuesta")
        let respuestas = datos.respuestas
        for(let i=0;i<respuestas.length;i++){
            let importado = document.importNode(plantilla2.content,true);
            importado.querySelector("article").setAttribute("name",respuestas[i].Identificador);
            importado.querySelector("time").textContent = respuestas[i].fecha;
            importado.querySelector("p").textContent = respuestas[i].texto;
            seccion.appendChild(importado);
        }

    })
}

function cargarArticulos(){
    fetch("../../005-API/preguntas.php")
    .then(function(response){
        return response.json();
    })
    .then(function(datos){
        let plantilla = document.getElementById("plantillapregunta");
        let seccion = document.querySelector("section")
        seccion.innerHTML="";
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

