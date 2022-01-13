const ValorEntrada = 200;

function cerrarAlerta(){
    document.getElementById("alertaFaltaDatos").style.display="none";
}

function borrar(){
    
    document.getElementById("nombre").value = "";
    document.getElementById("apellido").value = "";
    document.getElementById("correo").value = "";
    document.getElementById("cantidad").value = "";
    document.getElementById("descuento").value = 1;
    document.getElementById("totalAPagar").innerHTML=("Total a Pagar: $ ");
    cerrarAlerta();
    cambiarColorBordesOriginal();
        
}

function calcularTotalAPagar(){
    let descuento = 0;
    let cantidad = parseInt(document.getElementById("cantidad").value);
    let opcionDescuento = parseInt(document.getElementById("descuento").value);

    switch(opcionDescuento){
        case 1:
            descuento = 0;
            break;
        case 2:
            descuento = 0.8;
            break;
        case 3:
            descuento = 0.5;
            break;    
        case 4:
            descuento = 0.15;
            break;

    }
    let totalAPagar = 0;

    totalAPagar = (ValorEntrada * cantidad);
    totalAPagar = (totalAPagar - (totalAPagar * descuento));

    document.getElementById("totalAPagar").innerHTML=("Total a Pagar: $ "+ totalAPagar);
}
function mensajeAlerta(mensaje){
    document.getElementById("alertaFaltaDatos").style.display = "block";
    document.getElementById("alertaFaltaDatos").innerHTML = mensaje;
}

function validarDatos(){
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let correo = document.getElementById("correo").value;
    let cantidad = document.getElementById("cantidad").value;
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
    if(correo === ""){
        document.getElementById("correo").style.borderColor = "#FF0000";
        datosCompletos = false;
    }
    if(cantidad === "" || cantidad < 0){
        document.getElementById("cantidad").style.borderColor = "#FF0000";
        datosCompletos = false;
    }

    return datosCompletos;
}
function cambiarColorBordesOriginal(){
    document.getElementById("nombre").style.borderColor="";
    document.getElementById("apellido").style.borderColor="";
    document.getElementById("correo").style.borderColor="";
    document.getElementById("cantidad").style.borderColor="";
}
function resumen(){

    let datosCompletos = true;

    datosCompletos = validarDatos();
    if(datosCompletos){
        calcularTotalAPagar();
    }else{
        mensajeAlerta("Por favor complete los datos faltantes");
    }
}
