<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  ?>
<?php  
class MY_Controller extends  CI_Controller  {  
    public function __construct(){  
        parent::__construct();  
        $this->_init();  
    }  
    protected function _init(){  
        session_start();  
    }  
}  