// Boton enviar
const btnEnviar=document.getElementById('enviar'); //Boton que envia el formulario
const bloque=document.getElementById('bloque'); //Lugar donde insertamos el bloque de errores
// Formulario
const formulario=document.getElementById('enviarEmail');

// Declaracion de variables de los inputs del formulario
const nombres=document.getElementById('nombres');
const apellidos=document.getElementById('apellidos');
const dni=document.getElementById('dni');
const correo=document.getElementById('correo');
const telefono=document.getElementById('telefono');
const categoria=document.getElementById('categoria');
const mensaje=document.getElementById('mensaje');

// Radio button del Formulario
// const motivo = document.querySelector('input[name="motivo"]:checked');

// Checkbox del formulario
const check1=document.getElementById('check1');
const check2=document.getElementById('check2');


// Expresion regular para validar el email
const expEmail=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
// const expDNI=/^\d{8}[a-zA-Z]$/;
const expDNI=/^\d{8}(?:[-\s]\d{4})?$/;
// Expresion para validar nombres
const expNombre = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/;
// Expresion para validar telefono
const expTelefono = /^([0-9])*$/;
// Expresion para validar decimales
const expMonto = /^\d*\.\d+$/;
// Expresion solo numeros
const expEntero = /^[0-9]+$/;


eventListeners()
function eventListeners(){ 
    // Declaracion de eventos del formulario
    nombres.addEventListener('blur', validarFormulario);
    apellidos.addEventListener('blur', validarFormulario);
    dni.addEventListener('blur', validarFormulario);
    correo.addEventListener('blur', validarFormulario);
    telefono.addEventListener('blur', validarFormulario);
    categoria.addEventListener('blur', validarFormulario);
    mensaje.addEventListener('blur', validarFormulario);
    check1.addEventListener('click', validarFormulario);
    check2.addEventListener('click', validarFormulario);

    btnEnviar.addEventListener('DOMContentLoaded', desabilitar);

    formulario.addEventListener('submit', enviarEmail);
}

function desabilitar(){
    btnEnviar.disabled=true; 
    btnEnviar.classList.add('cursor');
}





function validarFormulario(e){
    // Validar nombres
    if(e.target.classList.contains('nombre')){
        if(e.target.value.length > 0){
            if(expNombre.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("NOMBRE INGRESADO NO VALIDO")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }

    // Validar apellidos
    if(e.target.classList.contains('apellido')){
        if(e.target.value.length > 0){
            if(expNombre.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("APELLIDO INGRESADO NO VALIDO")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }

    // Validar DNI
    if(e.target.classList.contains('dni')){
        if(e.target.value.length > 0){
            if(expDNI.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("DNI INGRESADO NO VALIDO")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }

    
    

    // Validar telefono
    if(e.target.classList.contains('telefono')){
        if(e.target.value.length > 0){
            if(expTelefono.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("TELEFONO INGRESADO NO VALIDO")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }


  
    // Validacion para el Email
    if(e.target.type === 'email'){
        if(e.target.value.length > 0){
            if(expEmail.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("Email no valido")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }


    // Validacion Categoria
    if(e.target.classList.contains('categoria')){
        if(e.target.value.length > 0){
            const error = document.querySelector('.bloque') 
            if(error){
                error.remove()  
            }
            e.target.classList.remove('red');
            e.target.classList.add('green'); 
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }


    if(e.target.classList.contains('asunto')){
        if(e.target.value.length > 0){
            const error = document.querySelector('.bloque') 
            if(error){
                error.remove()  
            }
            e.target.classList.remove('red');
            e.target.classList.add('green'); 
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }
    

    if(expNombre.test(nombres.value) && nombres.value!='' && expNombre.test(apellidos.value) && apellidos.value!='' && expDNI.test(dni.value) && dni.value!='' && expTelefono.test(telefono.value) && telefono.value!='' && expEmail.test(correo.value) && correo.value!='' && categoria.value!='' && mensaje.value!='' && (check1.checked==true) && (check2.checked==true)){
        btnEnviar.disabled=false; 
        btnEnviar.classList.remove('cursor') 
    }else{
        // e.preventDefault();
        btnEnviar.disabled=true; 
        btnEnviar.classList.add('cursor')
    }

}






// Creacion del mensaje error 
function mostrarError(mensaje){
    const mensajeError = document.createElement('p'); //Creamos un elemento parrafo
    mensajeError.textContent = mensaje //Insertacion en el parrafo que creamos un mensaje con textContent (mensaje es nuestro parametro)
    mensajeError.classList.add('bloque') //Agregamos la clase bloque que definimos en el CSS

    // Validacion para que no aparezcan muchos mensajes de error
    const errores=document.querySelectorAll('.bloque') //Busca los elementos con la clase bloque
    if(errores.length ===0){    //Si no encuentra ninguno inserta en el html
        bloque.appendChild(mensajeError)  //Utilizamos apendChild para insertar el parrafo 
    }
}


function enviarEmail(){
    alert("Formulario Enviado");
}
