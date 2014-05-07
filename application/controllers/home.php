<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        
        // Custom Theme CSS
        $this->template->add_css("assets/css/master.css", "screen");
        
        // Custom Theme JavaScript
        $this->template->add_js("assets/js/grayscale.js", TRUE);
    }

    public function index() 
    {
        $this->template->render('home/index');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */