const formulario=document.getElementById('cotizador'); //Formulario
const bloque=document.getElementById('bloque') //Dentro de este div con el id="bloque" insertaremos el div que se creara

eventListeners()
function eventListeners(){
    formulario.addEventListener('submit', cotizarEnvio); //Cuando se ejecute el evento submit se llamara a la funcion cotizarEnvio
}

// Arreglos con la informacion
let precios = [8,10,15,16,13,10,15,7,17,14,10,10,12,16,17,30,25,20,15,15,22,26,20,20,20,18]
let dias=["1-2","2-4","6-8","4-6","4-6","4-6","4-6","6-7","1-2","5-7","4-7","4-7","2-4","4-6","3-5","4-6","7-9","7-8","4-6","4-6","5-7","5-7","6-7","5-8","5-8","6-8"];

function cotizarEnvio(e){
    e.preventDefault()
    limpiar() //Limpiamos el HTML antes de ejecutar
    const departamentos=document.getElementById('departamentos').value; //Recuperamos el valor del select


    const div=document.createElement('div'); //Creamos un div para insertar los datos
    div.classList.add('divMensaje') //Agregamos una clase
    div.innerHTML=` 
                <span class="text">Precio estimado de envio : $${precios[departamentos]} </span>
                <span class="text">Dias aproximados para recibir el producto : ${dias[departamentos]} dias</span>
                  `
    bloque.appendChild(div) //Insertamos el div creado con appendChild en el DIV creado
}

// Funcion que limpiara el div con id bloque,  para que no aparezca mas de 1 bloque de informacion
function limpiar(){
    while(bloque.firstChild){ //Se ejecutara mientras nuestro contenedor tenga 1 elemento adentro
        bloque.removeChild(bloque.firstChild) //Remueve el primer elemento sucesivamente.
    }
}










