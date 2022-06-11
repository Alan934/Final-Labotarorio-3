const nombre = document.getElementsByName("nombre")
const email = document.getElementsByName("email")
const contrasena = document.getElementsByName("contrasena")
const usuario = document.getElementsByName("usuario")
const dni = document.getElementsByName("dni")
const mostrarValidacion = document.getElementById("validaciones")
const form = document.getElementsByName("formRegistro")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let validaciones = ""
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let entrar = false
    if(!regexEmail.test(email.value)){
        validaciones += `Ingrese Email valido <br>`
        entrar = true
    }

    if(nombre.value == 0){
        validaciones += `Ingrese Nombre <br>`
        entrar = true
    }

    if(entrar){
        mostrarValidacion.innerHTML = validaciones
    }
})