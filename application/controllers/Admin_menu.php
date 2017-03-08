<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function index()
    {
        $this->load->model('Restaurantm');
        $this->load->model('Menum');
        $data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $data['mattribute'] = $this->Menum->show_menu_attribute();
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_menu',$this->data);

    }
    public function insert_res(){

        $this->load->model('Menum');
        $this->Menum->insert_menu_content();
        redirect(Admin_Restaurant);
    }

    function test(){
        extract($_POST);

        //print_r($textbox);

        for ($i=0;$i<2;$i++){
            echo $textbox[$i]."<br>";
            echo $textimage[$i]."<br>";
        }


    }
    function insert_menu_attr(){
        $this->load->model('Menum');
        $this->Menum->insert_menu_attr();

        redirect(Admin_menu);
    }
    function getres_id() {

        $rname = $this->input->post('rname');
        $this->load->model('Menum');
        $this->data['edit'] = $this->Menum->getres_id($rname);
        foreach ($this->data['edit'] as $s){
            echo $s->name;
        }
    }
    function showadd()
    {
        $id = $this->input->post('id');
        $this->load->model('Menum');
        $this->data['edit'] = $this->Menum->showedit($id);
        foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_menu/editcontent/$e->id\" >
                                    <div class=\"form-group\">
                                        <label>Resturant name</label>
                                        <input class=\"form-control\" type=\"text\" name=\"header\" value=\" $e->header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Sub Header</label>
                                        <input class=\"form-control\"type=\"text\" name=\"sub_header\" value=\" $e->sub_header \">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Details</label>
                                        <textarea class=\"form-control\"  name=\"details\" value=\" $e->details \">$e->details</textarea>
                                    </div>
                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>";
        }
    }
}