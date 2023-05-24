const btnEnviar=document.getElementById('enviar');
const bloque=document.getElementById('bloque');
const formulario=document.getElementById('form-reclamaciones');

// Declaracion de inputs
const nombre=document.getElementById('nombre');
const apellido=document.getElementById('apellido');
const dni=document.getElementById('dni');
const telefono=document.getElementById('telefono');
const correo=document.getElementById('correo');
const monto=document.getElementById('monto');
const motivo=document.getElementById('motivo');
const descripcion=document.getElementById('descripcion');
const identificacion=document.querySelector('input[name="identificacionBien"]');


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
function eventListeners(){ //Listamos todos los eventos dentro de una funcion
    // Declaracion de eventos del formulario
    nombre.addEventListener('blur', validarFormulario);
    apellido.addEventListener('blur', validarFormulario);
    dni.addEventListener('blur', validarFormulario);
    telefono.addEventListener('blur', validarFormulario);
    correo.addEventListener('blur', validarFormulario);
    monto.addEventListener('blur', validarFormulario);
    motivo.addEventListener('blur', validarFormulario);
    descripcion.addEventListener('blur', validarFormulario);

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



    // Validar apellido
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

    console.log(e.target.value)

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



    // Validacion Email
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




    // Validar Monto
    if(e.target.classList.contains('monto')){
        if(e.target.value.length > 0){
            if(expMonto.test(e.target.value) || expEntero.test(e.target.value)){
                const error = document.querySelector('.bloque');
                if(error){
                    error.remove()
                }
                e.target.classList.remove('red');
                e.target.classList.add('green');
            }else{
                e.target.classList.remove('green');
                e.target.classList.add('red');
                mostrarError("MONTO INGRESADO NO VALIDO")
            }
        }else{
            e.target.classList.remove('green');
            e.target.classList.add('red');
            mostrarError('Todos los campos son obligatorios'); 
        }
    }


    // Validar Motivo
    if(e.target.classList.contains('motivo')){
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


    // Validar Descripcion
    if(e.target.classList.contains('descripcion')){
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


    // Activar button submit
    if(expNombre.test(nombre.value) && nombre.value!='' && expNombre.test(apellido.value) && apellido.value!='' && expDNI.test(dni.value) && dni.value!='' && expTelefono.test(telefono.value) && telefono.value!='' && expEmail.test(correo.value) && correo.value!='' && (expMonto.test(monto.value) || expEntero.test(monto.value)) && monto.value!='' && motivo.value!='' && descripcion.value!=''){
        btnEnviar.disabled=false; 
        btnEnviar.classList.remove('cursor') 
    }else{
        e.preventDefault();
        btnEnviar.disabled=true; 
        btnEnviar.classList.add('cursor') 
    }                                                                   
}


function mostrarError(mensaje){
    const mensajeError = document.createElement('p'); 
    mensajeError.textContent = mensaje 
    mensajeError.classList.add('bloque') 

    // Validacion para que no aparezcan muchos mensajes de error
    const errores=document.querySelectorAll('.bloque') 
    if(errores.length ===0){    
        bloque.appendChild(mensajeError)  
    }
}


function enviarEmail(){
    alert("Formulario Enviado");
}