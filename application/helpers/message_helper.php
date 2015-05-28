<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
function getSignInErrorMsg() {
    return 'Debes registrarte primero';
}
function getBookAlreadyAddedErrorMsg() {
    return 'El libro ya está en tu lista';
}
function getBookAddedSuccessMsg() {
    return 'El libro ha sido añadido';
}
