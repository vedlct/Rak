<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_aboutus extends CI_Controller {

    public function index()
    {
        $this->load->model('Aboutusm');
        $this->data['show_about_us_content'] = $this->Aboutusm->show_about_us_content();
        $this->data['show_about_us_details_content'] = $this->Aboutusm->show_about_us_details_content();
        $this->data['show_about_us_feature_content'] = $this->Aboutusm->show_about_us_feature_content();
        $this->data['show_about_us_banner_content'] = $this->Aboutusm->show_about_us_banner_content();
        $this->data['icon'] = $this->Aboutusm->show_icon();

        $this->load->view('admin_aboutus', $this->data);

    }
    public function insert_about_us_content(){

        $this->load->model('Aboutusm');
        $this->Aboutusm->insert_about_us_content();
        redirect(Admin_aboutus);

    }
    public function insert_about_us_details_content(){

        $this->load->model('Aboutusm');
        $this->Aboutusm->insert_about_us_details_content();
        redirect(Admin_aboutus);

    }
    public function insert_about_us_feature_content(){

        $this->load->model('Aboutusm');
        $this->Aboutusm->insert_about_us_feature_content();
        redirect(Admin_aboutus);

    }
    public function insert_about_us_banner_content(){

        $this->load->model('Aboutusm');
        $this->Aboutusm->insert_about_us_banner_content();
        redirect(Admin_aboutus);

    }


}