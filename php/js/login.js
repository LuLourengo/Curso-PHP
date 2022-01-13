
function mensajeAlertaIngreso(mensaje){

    document.getElementById("alertaFaltaDatosIngreso").style.display = "block";
    document.getElementById("alertaFaltaDatosIngreso").innerHTML = mensaje;

}

function cambiarColorBordesOriginal(){

    document.getElementById("correoIngreso").style.borderColor="";
    document.getElementById("passwordIngreso").style.borderColor="";

}

function cerrarAlerta(){

    document.getElementById("alertaFaltaDatosIngreso").style.display="none";

}




function validarDatosIngreso(){

    let correoIngreso = document.getElementById("correoIngreso").value;
    let passwordIngreso = document.getElementById("passwordIngreso").value;

    cambiarColorBordesOriginal();
    cerrarAlerta();
    

    let datosCompletos = true;

    if(correoIngreso === ""){
        document.getElementById("correoIngreso").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(passwordIngreso === ""){
        document.getElementById("passwordIngreso").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    
    return datosCompletos;
}



function ingresar(){
    let datosCompletos = true;


    datosCompletos = validarDatosIngreso();

    if(!datosCompletos){
        mensajeAlertaIngreso("Por favor complete los datos faltantes");
    } 

    return datosCompletos;
    
}