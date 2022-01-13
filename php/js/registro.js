
function borrarFormularioRegistro(){
    
    document.getElementById("nombre").value = "";
    document.getElementById("apellido").value = "";
    document.getElementById("dni").value = "";
    document.getElementById("telefono").value = "";
    document.getElementById("correoRegistro").value = "";
    document.getElementById("passwordRegistro").value = "";
    
    cerrarAlerta();
    cambiarColorBordesOriginal();
        
}

function cambiarColorBordesOriginal(){
    document.getElementById("nombre").style.borderColor="";
    document.getElementById("apellido").style.borderColor="";
    document.getElementById("dni").style.borderColor="";
    document.getElementById("telefono").style.borderColor="";
    document.getElementById("correoRegistro").style.borderColor="";
    document.getElementById("passwordRegistro").style.borderColor="";
}

function cerrarAlerta(){
    document.getElementById("alertaFaltaDatosRegistro").style.display="none";

}


function mensajeAlertaRegistro(mensaje){
    document.getElementById("alertaFaltaDatosRegistro").style.display = "block";
    document.getElementById("alertaFaltaDatosRegistro").innerHTML = mensaje;
}

function validarDatosRegistro(){
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let dni = document.getElementById("dni").value;
    let telefono = document.getElementById("telefono").value;
    let correoRegistro = document.getElementById("correoRegistro").value;
    let passwordRegistro = document.getElementById("passwordRegistro").value;
    
    cambiarColorBordesOriginal();
    cerrarAlerta();

    let datosCompletos = true;
    if(nombre === ""){
        document.getElementById("nombre").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(apellido === ""){
        document.getElementById("apellido").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(dni === ""){
        document.getElementById("dni").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(telefono === ""){
        document.getElementById("telefono").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(correoRegistro === ""){
        document.getElementById("correoRegistro").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(passwordRegistro === ""){
        document.getElementById("passwordRegistro").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    
    return datosCompletos;
}



function registrar(){

    let datosCompletos = true;

    datosCompletos = validarDatosRegistro();
    if(!datosCompletos){
        mensajeAlertaRegistro("Por favor complete los datos faltantes");
    }    
  
    return datosCompletos;
}

