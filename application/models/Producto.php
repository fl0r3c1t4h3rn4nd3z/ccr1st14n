<?php

/**
 * Producto
 * 
 * Description...
 * 
 * @package Producto
 * @author Andersson Paz Narvaez <your@email.com>
 * @version 0.0.0
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class producto extends CI_Model {

    public function __construct() {
        parent::__construct();

        // load Producto config
        $this->load->library("nusoap_library");
    }

    function getProductsForCategory($id = 0,$limit=0,$offset=0,$maximgs=10) {

        $method = 'getProductsForCategory';
        $params = array('id' => $id,'limit' => $limit,'offset' => $offset,'maximgs' => $maximgs);
        return $this->call($method, $params);
    }

    function call($method, array $params) {
        $parameters = array_merge(array('authentication' => $this->auth), $params);
        $res = $this->soapclient->call($method, $parameters, $this->ns, '');
       // var_dump($res);
        $this->result = $res['result'];
         $this->max_results = 0;
        if (isset( $res['max_results']))
        $this->max_results = $res['max_results'];
        return isset($res['products']) ? $res['products'] : array();
    }

    function conf($url, $auth) {
        $this->url = $url;
        $this->auth = $auth;
        $this->soapclient = new nusoap_client($this->url . '/webservices/' . 'server_category2.php');
        if ($this->soapclient) {
            $this->soapclient->soap_defencoding = 'UTF-8';
            $this->soapclient->decodeUTF8(false);
        }
    }

}

/* End of file Producto.php */
/* Location: ./application/models/Producto.php */