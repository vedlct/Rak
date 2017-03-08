<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends CI_Controller {


    public function index()
    {
        $this->load->view('grid_list');
        //echo "Hello dolly";
    }
}
