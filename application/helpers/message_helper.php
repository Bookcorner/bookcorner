<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function getFormErrorMsg() {
    return "El formulario no es correcto";
}

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
function getAvatarChangeOkMsg() {
    return 'El avatar ha sido modificado con éxito';
}
function bookNotAddedErrorMsg() {
    return 'El libro no está en tu lista';
}
function getMailActivationMsg($nameReceiver, $url, $validation) {
    return "<h4>Email de thecornerbook@gmail.com <br /><br />Bienvenido $nameReceiver:<br/>
                Te has registrado en BookCorner, este es un mensaje de activación. <br/><br/>
                </h4>
                <h2> Si has realizado el registro puedes <a href='$url/activar/$validation'>activar tu cuenta</a> </h2>
    
                <br/> <br/><br/> <br/><br/>
    
                <h3> Si no has realizado tú este registro, puedes <a href='$url/cancelar/$validation'>cancelar la operación aquí</a> </h3>
    
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
    return 'Tu petición ha sido enviada. 
            Tras la comprobación de nuestros moderadores tu libro será publicado. 
            Muchas gracias por colaborar en nuestra comunidad.';
}
function getBookImageErrorMsg(){
    return 'La imagen del libro no ha sido subida correctamente. Asegurese de que el tamaño no supera los 5 MB y la resolución sea de 1024x768 como máximo';    
}
function getAuthorErrorMsg(){
    return 'No ha seleccionado ni añadido ningún autor.';
}
function getAuthorImageErrorMsg(){
    return 'La imagen del autor no ha sido subida correctamente. Asegurese de que el tamaño no supera los 5 MB y la resolución sea de 1024x768 como máximo';
}
function getVerifySuccessMsg(){
    return 'El libro/autor ya se encuentra disponible. ¡Gracias por tu ayuda!';
}
function getRejectSuccessMsg(){
    return 'El libro/autor ha sido rechazado. ¡Gracias por tu ayuda!';
}