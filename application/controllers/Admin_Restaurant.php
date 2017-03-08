<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Restaurant extends CI_Controller
{
    public function index()
    {
        $this->load->model('Restaurantm');
        $this->data['show_res_content'] = $this->Restaurantm->show_restuarant_content();
        $this->load->view('admin_restaurant', $this->data );

    }

    public function insert_res(){

        $this->load->model('Restaurantm');
        $this->Restaurantm->insert_restuarant_content();
        redirect(Admin_Restaurant);
    }

    public function showedit(){

        $id = $this->input->post('id');
        $this->load->model('Restaurantm');
        $this->data['edit'] = $this->Restaurantm->showedit($id);
         print_r($this->data[edit]);
        /*foreach ($this->data['edit'] as $e) {
            echo "<form role=\"form\" method=\"post\" action=\"<?php echo base_url()?>Admin_Restaurant/insert_res\" >
                                        <div class=\"form-group\">
                                            <label>Name</label>
                                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\" $e->name \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Type</label>
                                            <input class=\"form-control\" type=\"text\" name=\"type\" value=\" $e->type \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Address</label>
                                            <input class=\"form-control\" type=\"text\" name=\"address\" value=\" $e->address \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>City</label>
                                            <input class=\"form-control\" type=\"text\" name=\"city\" value=\" $e->city \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>State</label>
                                            <input class=\"form-control\" type=\"text\" name=\"state\" value=\" $e->state \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Postal Code</label>
                                            <input class=\"form-control\" type=\"text\" name=\"postal_code\" value=\" $e->postal_code \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Country</label>
                                            <input class=\"form-control\" type=\"text\" name=\"country\" value=\" $e->country \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Time</label>
                                            <input class=\"form-control\" type=\"text\" name=\"time\" value=\" $e->time \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Username</label>
                                            <input class=\"form-control\" type=\"text\" name=\"username\" value=\" $e->username \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>password</label>
                                            <input class=\"form-control\" type=\"text\" name=\"password\" value=\" $e->password \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>VAT</label>
                                            <input class=\"form-control\" type=\"text\" name=\"vat\" value=\" $e->vat \">
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Status</label>
                                            <input class=\"form-control\" type=\"text\" name=\"status\" value=\" $e->status \">
                                        </div>

                                        <input class=\"btn btn-success\" type=\"submit\">
                                    </form>
                                    ";
        }*/
    }

}