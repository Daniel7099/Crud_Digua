

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Nombre
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_nombre(obj){    // Funcion contador para campo Nombre
    var maxLength = 40;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumN").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumN").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumN").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumN").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Apellido
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_apellido(obj){    // Funcion contador para campo Nombre
    var maxLength = 40;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumA").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumA").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumA").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumA").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Correo
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_correo(obj){    // Funcion contador para campo Correo
    var maxLength = 50;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumC").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumC").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumC").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumC").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Telefono
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_telefono(obj){    // Funcion contador para campo telefono
    var maxLength = 15;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumT").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumT").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumT").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumT").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Telefono2
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_telefono2(obj){    // Funcion contador para campo telefono2
    var maxLength = 15;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumT2").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumT2").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumT2").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumT2").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Celular
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_Celular(obj){    // Funcion contador para campo telefono2
    var maxLength = 15;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumCe").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumCe").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumCe").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumCe").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
//Direccion
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_direccion(obj){    // Funcion contador para campo Direccion
    var maxLength = 50;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumDi").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumDi").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumDi").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumDi").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Empresa
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars_empresarubro(obj){    // Funcion contador para campo Empresa/Rubro
    var maxLength = 40;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 11 &&  charRemain > 5 ){
    document.getElementById("charNumEm").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain < 6 &&  charRemain > 0 ){
    document.getElementById("charNumEm").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumEm").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumEm").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//Detalle
//////////////////////////////////////////////////////////////////////////////////////////////////////////
function countChars(obj){    // Funcion contador para campo Detalle 
var maxLength = 100;
var strLength = obj.value.length;
var charRemain = (maxLength - strLength);

if(charRemain < 11 &&  charRemain > 5 ){
document.getElementById("charNum").innerHTML = '<span class ="contador" style="color: blue;">Caracteres restantes: '+charRemain+'</span>';
}
else if(charRemain < 6 &&  charRemain > 0 ){
document.getElementById("charNum").innerHTML = '<span class ="contador" style="color: red;">Caracteres restantes: '+charRemain+'</span>';
}
else if(charRemain == 0){
document.getElementById("charNum").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado: '+charRemain+' caracteres</span>';
}else{
document.getElementById("charNum").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
}
}


/* habilita el contador de caracteres en cada campo que digitemos, en caso contrario Oculta el contador de caracteres si los campos estan vacios */

 // oculta el contador de caracteres si el campo nombre es vacio
 $(document).ready(function() {
    $("#nombre").on("keyup", function() {
        var largo = $("#nombre").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumN").css("display", "block");
        } else {
            $("#charNumN").css("display", "none");
        }
    });
});


$(document).ready(function() {
    $("#apellido").on("keyup", function() {
        var largo = $("#apellido").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumA").css("display", "block");
        } else {
            $("#charNumA").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#correo").on("keyup", function() {
        var largo = $("#correo").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumC").css("display", "block");
        } else {
            $("#charNumC").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#telefono").on("keyup", function() {
        var largo = $("#telefono").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumT").css("display", "block");
        } else {
            $("#charNumT").css("display", "none");
        }
    });
});


// oculta el contador si el campo telefono 2 es vacio
$(document).ready(function() {
    $("#telefono2").on("keyup", function() {
        var largo = $("#telefono2").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumT2").css("display", "block");
        } else {
            $("#charNumT2").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#celular").on("keyup", function() {
        var largo = $("#celular").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumCe").css("display", "block");
        } else {
            $("#charNumCe").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#direccion").on("keyup", function() {
        var largo = $("#direccion").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumDi").css("display", "block");
        } else {
            $("#charNumDi").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#empresa").on("keyup", function() {
        var largo = $("#empresa").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNumEm").css("display", "block");
        } else {
            $("#charNumEm").css("display", "none");
        }
    });
});

$(document).ready(function() {
    $("#text-area").on("keyup", function() {
        var largo = $("#text-area").val().length
        // Ocultar o mostrar de acuerdo al largo del texto
        if (largo > 0) {
            $("#charNum").css("display", "block");
        } else {
            $("#charNum").css("display", "none");
        }
    });
});



$(document).ready(function() {
    $("#formI input").on("keyup", function() {

        var tele = $("#telefono").val().length
        var celu = $("#celular").val().length

        
        // Ocultar o mostrar de acuerdo al largo del texto
        if (tele > 2 || celu >2) {
            $("#btnRegistrar").removeAttr('disabled');
        }
        else{
            $("#btnRegistrar").attr('disabled','disabled');
        }
    });

});

$(document).ready(function() {
    $("#formM input").on("keyup", function() {

        var tel = $("#telefono").val().length
        var cel = $("#celular").val().length
        var tel2 = $("#telefono2").val().length

        
        // Ocultar o mostrar de acuerdo al largo del texto
        if (tel > 2 || cel >2 ||tel2 >2) {
            $("#btnMod").removeAttr('disabled');
        }
        else{
            $("#btnMod").attr('disabled','disabled');
        }
    });

});



/*
$(document).ready(function() {
    $("#celular").on("keyup", function() {
        var celu =$("#celular").val().length


        if(celu != ""){
            $("#btnRegistrar").removeAttr('disabled');
        }

        else{
            $("#btnRegistrar").attr('disabled','disabled');
        }


    })
})
*/



/*
function toggleButton(){
$(document).ready(function(){
            
                $('#celular').keypress(function(){
                $('#telefono').keypress()
                var celu = $('#celular').val();
                var tele = $('#telefono').val();

                if (tele != "") {
                    $('#btnRegistrar').removeAttr('disabled');
                } 
                else if(celu != ""){
                    $('#btnRegistrar').removeAttr('disabled');
                }
                else{
                    $('#btnRegistrar').attr('disabled', true);
                }
            })
             })
            }

*/
//////////////////////////////////////////////////////////////////////////////////////
/* Al escribir en el campo nombre o tabular hacia el los demas contador de caracteres se esconden. Asimismo con todos los demas campos */

$('#nombre').on('keyup',function(){
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#apellido').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#correo').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#telefono').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#telefono2').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#celular').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#direccion').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumEm").css("display", "none");
    $("#charNum").css("display", "none");

    
})
$('#empresa').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNum").css("display", "none");

    
})

$('#text-area').on('keyup',function(){
    $("#charNumN").css("display", "none");
    $("#charNumA").css("display", "none");
    $("#charNumC").css("display", "none");
    $("#charNumT").css("display", "none");
    $("#charNumT2").css("display", "none");
    $("#charNumCe").css("display", "none");
    $("#charNumDi").css("display", "none");
    $("#charNumEm").css("display", "none");

    
})