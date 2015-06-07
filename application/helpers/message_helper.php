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
function bookNotExistErrorMsg() {
    return 'El libro no existe';
}
function bookRemovedSuccessMsg() {
    return 'El libro ha sido quitado';
}
function bookNotAddedErrorMsg() {
    return 'El libro no está en tu lista';
}
function getMailActivationMsg($nameReceiver, $url, $validation) {
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

function getUsernameAlreadyExistsMsg(){
    return 'El nombre de usuario ya existe, escoja otro.';
}

function getUsernameChangeOkMsg(){
    return 'El nombre de usuario ha sido modificado con éxito.';
}

function getEmailAlreadyExistsMsg(){
    return 'La dirección de correo electrónico ya está registrada.';
}

function getEmailChangeOkMsg(){
    return 'La dirección de correo electrónico ha sido modificada con éxito.';
}

function getPassChangeOkMsg(){
    return 'La contraseña ha sido modificada con éxito.';
}

function getPassNoMatchMsg(){
    return 'La antigua contraseña no coincide.';
}
function getbookCreatedSuccessMsg(){
    return 'Su petición ha sido enviada. Tras la comprobación de nuestros moderadores su libro será publicado. Muchas gracias por tu ayuda';
}
function getBookImageErrorMsg(){
    return 'La imagen del libro no ha sido subida correctamente. Asegurese de que el tamaño no supera los 5 MB y la resolución sea de 1024x768 como máximo';    
}
function getAuthorImageErrorMsg(){
    return 'La imagen del autor no ha sido subida correctamente. Asegurese de que el tamaño no supera los 5 MB y la resolución sea de 1024x768 como máximo';
}