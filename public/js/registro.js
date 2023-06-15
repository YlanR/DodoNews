const nombre = document.getElementById("nombre");
const password = document.getElementById("password");
var error = document.getElementById('error');
error.style.color = 'red';

//const parrafo = document.getElementById("warnings")
var form = document.getElementById('formulario');
form.addEventListener('submit', function(evt){
    evt.preventDefault();
    var mensajeError = [];

    if(nombre.value > 6){
        mensajeError.push('Tu nombre debe tener mas de 6 caracteres');
    }
    if(nombre.value > 5){
        mensajeError.push('Tu contraseña debe tener mas de 5 caracteres');
    }

    error.innerHTML = mensajeError.join(', ');
})


// form.addEventListener("submit", e=>{
//     e.preventDefault()
//     let warnings = ""
//     if(nombre.value.length <6){
//         warnings += 'El nombre no es valido <br>'
//     }
// })