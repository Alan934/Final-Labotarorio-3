function validarRegistro(){
    var form = document.formRegistro;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

    if(!regexEmail.test(form.email.value)){
        alert("Ingrese Email Valido");
        form.email.value="";
        form.email.focus();
        return false;
    }

    if(form.nombre.value == 0){
        alert("Ingrese Nombre");
        form.nombre.value="";
        form.nombre.focus();
        return false;
    }

    if(form.usuario.value == 0){
        alert("Ingrese Usuario");
        form.usuario.value="";
        form.usuario.focus();
        return false;
    }

    if(form.dni.value == 0){
        alert("Ingrese DNI");
        form.dni.value="";
        form.dni.focus();
        return false;
    }
    
    if(form.dni.value.length > 8){
        alert("No puede exceder de 8 caracteres el DNI");
        form.dni.value="";
        form.dni.focus();
        return false;
    }

    if(form.contrasena.value == 0){
        alert("Ingrese Contraseña");
        form.contrasena.value="";
        form.contrasena.focus();
        return false;
    }
}
