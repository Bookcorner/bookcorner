<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Author extends CI_Controller {
	public function index() {
		$data ['title'] = 'Autor';
		$viewUri = 'authors/main_author_content';
		loadBasicViews ( $viewUri, $data );
	}
	public function showAuthorsSearched() {
		$authors = $this->session->flashdata ( 'authorData' );
		
		if (empty ( $authors )) {
			$data ['authors'] = 'Ningún autor coincide con la búsqueda';
			$viewUri = 'authors/no_author_found';
			loadBasicViews ( $viewUri, $data );
		} else {
			$data ['authors'] = $authors;
			$viewUri = 'authors/list_of_authors';
			loadBasicViews ( $viewUri, $data );
		}
	}
}