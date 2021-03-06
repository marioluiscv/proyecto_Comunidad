<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		$this->load->view('layout/header');
		$this->load->view('pages/index');
		$this->load->view('layout/footer');
	}
	public function page_login()
	{
		$this->load->view('pages/login');
	}
	public function acceso_login()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/inicio_usuario');
		$this->load->view('layout/footer');
	}
	public function registrar_usuario()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/registro_usuario');
		$this->load->view('layout/footer');
	}
	public function listado_usuarios()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/listar_usuarios');
		$this->load->view('layout/footer');
	}
	public function forget_pass(){
		$this->load->view('pages/forget_pass');
	}

	public function principal(){
		$this->load->view('layout/header');
		$this->load->view('pages/index');
		$this->load->view('layout/footer');
	}
	public function perfil()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/perfil');
		$this->load->view('layout/footer');
	}
	public function logout()
	{
		$this->load->view('pages/login');
	}
}
