<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Report extends CI_Controller {
    public function index() {
        if (get_userrole () != 3) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url (), 'refresh' );
        }
        
        $data ['title'] = 'Reporte';
        $this->load->model('authors_model');
        $data['authors'] = $this->authors_model->searchAllAuthorsOrderedByName();
        loadBasicViews ( 'report/showReportForm', $data );
    }
}