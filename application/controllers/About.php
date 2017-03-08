<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


    public function index()
    {
        $this->load->model('Aboutusm');
        $data['aboutUs'] = $this->Aboutusm->show_about_us_banner_content();
        $data['aboutUsDetails'] = $this->Aboutusm->show_about_us_details_content();
        $data['aboutUsfeature']=$this->Aboutusm->show_about_us_feature_content();
        $this->load->view('about', $data);
        //print_r($data['aboutUsfeature']);
        //echo "Hello dolly";
    }
}
