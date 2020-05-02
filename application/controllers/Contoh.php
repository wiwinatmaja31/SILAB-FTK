<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contoh extends CI_Controller{
    function index(){
        $this->load->view('template_contoh');
    }     
}?>