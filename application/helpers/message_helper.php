<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
function getSignInErrorMsg() {
    return 'Debes iniciar sesión primero';
}
function getBookAlreadyAddedErrorMsg() {
    return 'El libro ya está en tu lista';
}
function getBookAddedSuccessMsg() {
    return 'El libro ha sido añadido';
}
function captchaErrorMsg() {
    return 'Captcha incorrecto';
}
function getMailMsg() {
    return "Email de thecornerbook@gmail.com <br /><br />Hola, $nameReceiver:<br/>
                Se ha registrado en BookCorner, este es un mensaje de activación. <br/><br/>
    
                <h2> Si ha realizado este registro puede confirmar la operación mediante este link: $url/activar/$validation </h2>
    
                <br/> <br/><br/> <br/><br/> <br/>
    
                <h3> Si no ha realizado este registro puede cancelar la operación mediante este link: $url/cancelar/$validation </h3>
    
                <br/> <br/>
                Atentamente, El equipo de BookCorner";
}
function getUserAlreadyActivateMsg(){
    return 'El usuario ya está activado';
}
