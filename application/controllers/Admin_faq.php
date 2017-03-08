<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_Faq extends CI_Controller {
    public function index()
    {
        $this->load->model('Faqm');
        $this->data['show_faq_content'] = $this->Faqm->show_faq_content();
        $this->load->view('admin_faq',$this->data);
    }
    public function insert_faq(){
        $this->load->model('Faqm');
        $this->Faqm->insert_faq();
        redirect(Admin_Faq);
    }
    public function editcontent($id){
        $this->load->model('Faqm');
        $this->Faqm->edit($id);
        redirect(Admin_Faq);
    }
    function showedit()
    {
        $id = $this->input->post('id');
        $this->load->model('Faqm');
        $this->data['edit'] = $this->Faqm->showedit($id);
        foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"http://localhost/Rak/Admin_Faq/editcontent/$e->id\" >
                                    <div class=\"form-group\">
                                        <label>Header</label>
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