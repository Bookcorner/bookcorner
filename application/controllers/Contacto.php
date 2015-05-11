<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

    public function __construct(){
	        parent::__construct();
	        $this->load->library('session');
    }

    public function index(){

        $data['title'] = "Contacto";

        $this->load->view('templates/header', $data);
        $this->load->view('contacto');
        $this->load->view('templates/footer');

    }

    public function enviar(){

        $this->load->library('email');

        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'proyectosoji@gmail.com', // correo del administrador
            'smtp_pass' => '', // contraseña del correo
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        $this->email->initialize($configGmail);

        $this->email->from($this->input->post("email"), $this->input->post("nombre")); // a quien se le envia
        $this->email->to('proyectosoji@gmail.com'); // correo del administrador

        $this->email->subject('Mensaje de Contacto');

        $this->email->message("Email de ".$this->input->post("email")." <br/><br/>Mensaje: ".$this->input->post("comentarios"));

        if($this->email->send()){
            $this->session->set_flashdata('envio', '<div class="exito"><h2>Email enviado correctamente <span>&#128582;</span></h2></div>');
        }else{
            $this->session->set_flashdata('envio', '<div class="fracaso"><h2>ERROR! No se a podido enviar el email. Inténtelo de nuevo</h2></div>');
        }

        redirect(base_url("contacto"));

    }
}

?>