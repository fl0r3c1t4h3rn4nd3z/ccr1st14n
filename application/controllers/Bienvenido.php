<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ini_set("error_reporting", E_ALL & ~E_DEPRECATED);
        $this->load->helper('form');
        $this->load->library('havalite');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('email');
        $this->load->model('categoria');
        $this->load->model('producto');
        //Codeigniter : Write Less Do More
        //   include_once '/var/www/html/blog/havalite/hava_connect.php';
         //webservice
         $this->ns = 'http://www.dolibarr.org/ns/';
        $this->wsurl = 'http://localhost/dolibarr/htdocs/';
        $this->wsauth = array(
            'dolibarrkey' => 'key',
            'sourceapplication' => 'DOWNDOCUMENT',
            'login' => 'ander',
            'password' => 'ander',
            'entity' => '');
    }

    function index($page = 'home') {
        $blog_path = APPPATH . '../../blog/index.php';
        $blog_url = 'http://localhost/blog/index.php';

        $data['page'] = $page;
        $ids = array(5);
        foreach ($ids as $p) {
            $info['title'] = $this->havalite->hava_single_post($p, 'title');
            $postText = $this->havalite->hava_single_post($p, 'text');
            $info['text'] = substr($postText, 0, 150);
            $info['url'] = $blog_url . "?p=" . $p;
            $data['infos'][] = $info;
        }


        //noticias
        $data['noticias'] = array();
        $postResults = $this->havalite->hava_posts('noticia', 4);
        foreach ($postResults as $row) {
            $postDate = $this->havalite->hava_date($row['date']);
            $postText = strip_tags($row['text'], '<br>'); // remove html tags, leave only <p> and <br>
            $info['title'] = $row['title'];
            $info['text'] = substr($postText, 0, 400);
            $info['date'] = $postDate;
            $info['url'] = $blog_url . "?p=" . $row['id'];
            $data['noticias'][] = $info;
        }

        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }

    function servicios() {
        $blog_path = APPPATH . '../../blog/index.php';
        $blog_url = 'http://localhost/blog/index.php';
        //servicios
        $data['servicios'] = array();
        $postResults = $this->havalite->hava_posts('servicio', 4);
        foreach ($postResults as $row) {
            $info['img'] = $row['img'];
            $postDate = $this->havalite->hava_date($row['date']);
            $postText = strip_tags($row['text'], '<br>'); // remove html tags, leave only <p> and <br>
            $info['title'] = $row['title'];
            $info['text'] = substr($postText, 0, 400);
            $info['date'] = $postDate;
            $info['url'] = $blog_url . "?p=" . $row['id'];
            $data['servicios'][] = $info;
        }
        $data['page'] = 'services';
        $this->load->view('header', $data);
        $this->load->view('features', $data);
        $this->load->view('footer', $data);
       
      
    }

    function nosotros() {
        $blog_url = 'http://localhost/blog/index.php';
        //nosotros
        $data['nosotros'] = array();
        $postResults = $this->havalite->hava_posts('colaboradores', 10);
        foreach ($postResults as $row) {
            $info['img'] = $row['img'];
            $postDate = $this->havalite->hava_date($row['date']);
            $postText = strip_tags($row['text'], '<br>'); // remove html tags, leave only <p> and <br>
            $info['title'] = $row['title'];
            $info['text'] = substr($postText, 0, 50).'...';
            $info['date'] = $postDate;
            $info['url'] = $blog_url . "?p=" . $row['id'];
            $data['nosotros'][] = $info;
        }
        //var_dump( $data['nosotros']);
        $data['page'] = 'about';
        $this->load->view('header', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
    }

    function portafolio($catid = 0) {
        $this->categoria->conf($this->wsurl, $this->wsauth);
        $this->producto->conf($this->wsurl, $this->wsauth);
        $cats = $this->categoria->getAll(0);
        $data['productos'] = $this->producto->getProductsForCategory($catid,0,0);
      //  var_dump($data['productos']);
        $data['page'] = 'about';
         $data['catid'] = $catid;
        //var_dump($cats);
        $data['categorias'] = $cats;
        $this->load->view('header', $data);
        $this->load->view('work', $data);
        $this->load->view('footer', $data);
    }

}
