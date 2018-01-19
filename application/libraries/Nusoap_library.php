<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Nusoap_library
 * 
 * Description...
 * 
 * @package nusoap_library
 * @author Andersson Paz Narvaez <your@email.com>
 * @version 0.0.0
 */
class nusoap_library {

    /**
     * Constructor function
     *
     * @return Nusoap_library 
     */
    public function __construct() {
        // load nusoap_library config
       // $this->load->config('nusoap_library', TRUE);
        // load nusoap_library_model
      //  $this->load->model('nusoap_library_model');
        require_once(str_replace("\\", "/", APPPATH) . 'third_party/nusoap/lib/nusoap.php' ); //Por si estamos ejecutando este script en un servidor Windows
        return $this;
    }

    /**
     * __call
     * 
     * call method from content model
     *
     * */
    public function __call($method, $arguments) {
        if (!method_exists($this->nusoap_library_model, $method)) {
            throw new Exception('Undefined method Nusoap_library::' . $method . '() called');
        }

        return call_user_func_array(array($this->nusoap_library_model, $method), $arguments);
    }

    /**
     * __get
     * 
     * Enables the use of CI super-global without having to define an extra variable.
     * 
     *
     * @access	public
     * @param	$var
     * @return	mixed
     */
    public function __get($var) {
        return get_instance()->$var;
    }

    function Nusoap_library() {
        require_once(str_replace("\\", "/", APPPATH) . 'third_party/nusoap/lib/nusoap' . EXT); //Por si estamos ejecutando este script en un servidor Windows
    }

}

/* End of file nusoap_library.php */
/* Location: ./application/libraries/nusoap_library.php */