const btns = document.querySelectorAll(".tab-btn");
const articles = document.querySelectorAll(".block");
const btn=document.querySelector('.btn-container') //Declaramos el div que contiene todos los botones para recorrerlo posteriormente

cargarEventos()
function cargarEventos(){
    btn.addEventListener('click', mostrarInfo) //Este sera el div que recorreremos cuando suceda el evento click
}

function mostrarInfo(e){ //Funcion principal, dentro de esta ejecutamos las siguientes realizadas
    id=e.target.dataset.id; //e es el parametro que utilizamos para recorrer el div y capturar los data-id de cada boton que declaramos en el HTML
    if(id){ //Si el id existe ejecutamos lo siguiente .. 
        efectoBoton(e) //Efecto para el boton, remueve y añade las clases
        ocultarInfo() //Oculta los campos de texto de cada botton
        const bloque=document.getElementById(id); //Cada campo de texto tiene un id similar al data-id de cada button, segun hagamos click en nuestro button el id se añadira a la const bloque y este ejecutara lo siguiente
        bloque.classList.add('active'); //dentro del la constante bloque que creamos agregamos la class active(este es un display block, primeramente los bloques comienzan con un display none)
    }
}

// Esta funcion es opcional, pueden eliminarla y colocarle un efecto con CSS momentaneo
function efectoBoton(e){
    btns.forEach(function (btn) { //btns es nuestra variable declarada, con forEach recorreremos nuestro button y removeremos la clase activeBtn
        btn.classList.remove('activeBtn');
    });
    e.target.classList.add('activeBtn'); //Agregamos la clase
}

function ocultarInfo(){ //Funcion para ocultar los campos de texto
    articles.forEach(function (bloque) { //Recorremos nuestro div con forEach, bloque actua como parametro y remueve la class active
        bloque.classList.remove('active')
    });
}