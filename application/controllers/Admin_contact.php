<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends CI_Controller {

    public function index()
    {
        $this->load->model('Contactm');
        $this->data['show_contact_content'] = $this->Contactm->show_contact_content();
        $this->data['show_customer_content'] = $this->Contactm->show_customer_service_content();
        $this->data['show_resturant_content'] = $this->Contactm->show_resturant_service_content();
        $this->load->view('admin_contact', $this->data);

    }

    public function insert_main_content(){

        $this->load->model('Contactm');
        $this->Contactm->insert_main_content();
        redirect(Admin_contact);

    }
    public function insert_customer_service_content(){

        $this->load->model('Contactm');
        $this->Contactm->insert_customer_service_content();
        redirect(Admin_contact);

    }
    public function insert_resturant_service_content(){

        $this->load->model('Contactm');
        $this->Contactm->insert_resturant_service_content();
        redirect(Admin_contact);

    }
}