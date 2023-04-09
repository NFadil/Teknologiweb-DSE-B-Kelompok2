<?php
class Home extends CI_Controller{

    function Index(){
        $this->load->view('dashboard');
        
    }
    function CV1(){
        $this->load->view('dashboard');
        $this->load->view('Cv_Nurul');
        
    }
    function CV2(){
        $this->load->view('dashboard');
        $this->load->view('Cv_Alfin');

    }
    function CV3(){
        $this->load->view('dashboard');
        $this->load->view('Cv_Adhani');

    }
}

?>