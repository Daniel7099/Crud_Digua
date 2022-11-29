
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
    document.getElementById("charNumN").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumN").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumA").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumA").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumC").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumC").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumT").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumT").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumT2").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumT2").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumCe").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumCe").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
    }else{
    document.getElementById("charNumCe").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
    }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
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
    document.getElementById("charNumDi").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumDi").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
    document.getElementById("charNumEm").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
    }
    else if(charRemain == 0){
    document.getElementById("charNumEm").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
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
document.getElementById("charNum").innerHTML = '<span class ="contador" style="color: red;">se aproxima al limite de caracteres: '+charRemain+' caracteres</span>';
}
else if(charRemain == 0){
document.getElementById("charNum").innerHTML = '<span style="color: red;">Limite de caracteres alcanzado '+charRemain+' caracteres</span>';
}else{
document.getElementById("charNum").innerHTML = '<span class ="contador" > Caracteres restantes: '+charRemain+'</span> ';
}
}
