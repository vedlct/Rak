<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {


    public function index()
    {
        $this->load->model('Homem');
        $this->data['show_main_content'] = $this->Homem->show_main_content();
        $this->data['show_resturant_content']=$this->Homem->show_resturant_content();
        $this->data['show_howitwork_content']=$this->Homem->show_howitwork_content();
        $this->data['show_sectionfour_content']=$this->Homem->show_sectionfour_content();
        $this->data['show_sectionfive_content']=$this->Homem->show_sectionfive_content();
        $this->data['show_sectionsix_content']=$this->Homem->show_sectionsix_content();

        $this->load->view('admin_home',$this->data);

    }

    public function insert_main_content(){

        $this->load->model('Homem');
        $this->Homem->insert_main_content();
        $this->Homem->insert_resturant_andmore_content();
        redirect(Admin_Home);

    }

    public function insert_resturant_content(){

        $this->load->model('Homem');
        $this->Homem->insert_resturant_andmore_content();
        redirect(Admin_Home);

    }
    public function insert_how_it_work(){

        $this->load->model('Homem');
        $this->Homem->insert_howitwork_content();
        redirect(Admin_Home);

    }
    public function insert_section_four(){

        $this->load->model('Homem');
        $this->Homem->insert_sectionfour_content();
        redirect(Admin_Home);

    }
    public function insert_section_five(){

        $this->load->model('Homem');
        $this->Homem->insert_sectionfive_content();
        redirect(Admin_Home);

    }
    public function insert_section_six(){

        $this->load->model('Homem');
        $this->Homem->insert_sectionsix_content();
        redirect(Admin_Home);

    }

}
