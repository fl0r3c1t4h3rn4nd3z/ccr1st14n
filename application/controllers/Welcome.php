<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('email');
        //$this->load->library('lang');
        $this->lang->load('traduccion', 'spanish');
    }

    public function index() {
        //	$this->load->view('welcome_message');
        $this->load->view('city_taxy/header.php');
        //inicializo el arreglo
        $out=array();
        //cargo las imagenes
        $out['images']=array('logo.jpg','imagen2.jpg','imagen3.jpg');
        $this->load->view('city_taxy/banner.php',$out);
        $this->load->view('city_taxy/footer.php');
        
    }
    function about() {
        $this->load->view('city_taxy/header.php');
      $this->load->view('city_taxy/about.php');
        //inicializo el arreglo
        
        
        //$this->load->view('city_taxy/footer.php');  
    }
    function whatwedo()
    {
      $this->load->view('city_taxy/header.php');
      $this->load->view('city_taxy/whatwedo.php');  
        
    }
    function services()
    {
       $this->load->view('city_taxy/header.php');
      $this->load->view('city_taxy/services.php');  
         
        
    }
}
