<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home/presentation';

// static pages
$route['que-es-bookcorner'] = 'home/goToWhatIs';
$route['quienes-somos'] = 'home/goToWhoAreWe';
$route['contacto'] = 'home/goToContact';
$route['informacion-legal'] = 'home/legalInformation';

//book
$route['libros'] = 'book/index';
$route['libro/:any'] = 'book/showBook';
$route['busqueda-libros/:any'] = 'book/showBooksSearched';
$route['verificar-libro/:num'] = 'book/setBookAvailable';
$route['rechazar-libro/:num'] = 'book/deleteBook';
$route['comentar'] = 'book/addBookComment';

//author
$route['autores'] = 'author/index';
$route['autor/:any'] = 'author/showAuthor';
$route['busqueda-autores/:any'] = 'author/showAuthorsSearched';
$route['verificar-autor/:num'] = 'author/setAuthorAvailable';
$route['rechazar-autor/:num'] = 'author/deleteAuthor';

//search
$route['busqueda'] = 'search/searchAuthorOrBook';

//user
$route['informacion-de-usuario'] = 'user/showUserInfo';
$route['registrarse'] = 'user/signup';
$route['actualizar-pass'] = 'user/editPass';
$route['actualizar-username'] = 'user/editUsername';
$route['actualizar-mail'] = 'user/editEmail';
$route['actualizar-avatar'] = 'user/editAvatar';
$route['activar/:any'] = 'user/activate';
$route['cancelar/:any'] = 'user/cancel';
$route['contactar'] = 'user/sendContact';
$route['eliminar'] = 'user/deleteAccount';
$route['usuario/:any'] = 'user/showList';


//listbook
$route['lista-libros'] = 'listbook/showListBooks';
$route['anadir-libro/:num'] = 'listbook/addBookToList';
$route['quitar-libro/:num'] = 'listbook/removeBookFromList';

//login
$route['salir'] = 'login/logout';
$route['ajax'] = 'login/getInfoAjax';

//vote
$route['ver-votos'] = 'vote/showTablesVotes';
$route['libros-mas-puntuados'] = 'vote/showAllPopularBooks';
$route['media-libros-mas-puntuados'] = 'vote/showAllPopularAVGBooks';
$route['estado-general-libros'] = 'vote/showAllStateBooks';

//reporte
$route['reportes'] = 'report/index';
$route['crear-libro-y-autor'] = 'report/addBookAndPossibleAuthor';
$route['moderar'] = 'report/showMainReports';


// admin
$route['adminusers'] = 'admin/showUsersMasterTable';
$route['adminbooks'] = 'admin/showBooksMasterTable';
$route['adminauthors'] = 'admin/showAuthorsMasterTable';
$route['admingenre'] = 'admin/showGenrebookMasterTable';
$route['adminlistbook'] = 'admin/showListbookMasterTable';

// error
$route['prohibido'] = 'error/showForbiddenError';

$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;
