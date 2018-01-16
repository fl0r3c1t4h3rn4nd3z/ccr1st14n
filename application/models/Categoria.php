<?php

/**
 * Categoria
 * 
 * Description...
 * 
 * @package categoria
 * @author Andersson Paz Narvaez <your@email.com>
 * @version 0.0.0
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class categoria extends CI_Model {

    var $result;

    public function __construct() {

        parent::__construct();

// load categoria config
//$this->load->config('categoria',TRUE);
        $this->load->library("nusoap_library");
//conf
// Call the WebService method and store its result in $result.
    }

    function getAll($type=null) {

        $method = 'getCategory';
        $params = array('type'=>$type);
        return $this->call($method, $params);
    }

    function call($method, array $params) {
        $parameters = array_merge(array('authentication' => $this->auth), $params);
        $res = $this->soapclient->call($method, $parameters, $this->ns, '');
      //  var_dump($res);
        $this->result = $res['result'];
        return isset($res['CategorieArray']) ? $res['CategorieArray'] : array();
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

/* End of file categoria.php */
/* Location: ./application/models/categoria.php */