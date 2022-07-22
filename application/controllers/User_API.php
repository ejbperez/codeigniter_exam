<?php
    
defined('BASEPATH') OR exit('No direct script access allowed');
class User_API extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('Response');
    }
    public function index()
    {
        echo 'here';
    }

    public function insert_user()
    {
        $this->form_validation->set_rules("first_name", "Firstname", "required");
        $this->form_validation->set_rules("last_name", "Lastname", "required");
        $this->form_validation->set_rules("position", "Position", "required");
        // $array = array();
            if($this->form_validation->run())
            {
                $data = array(
                    'first_name' => trim($this->input->post('first_name')),
                    'last_name'  => trim($this->input->post('last_name')),
                    'position'  => trim($this->input->post('position'))
                );
                $this->User_model->insert_user($data);

                $array_response = ['code'=>'1','message'=>'success', 'success'  => true];
                
            }
            else
            {
                $array_response = ['code'=>'0','message'=>'failed', 'error'    => true, 'errors'=> [
                    'first_name_error' => form_error('first_name'),
                    'last_name_error' => form_error('last_name'),
                    'position_error' => form_error('position')
                ]];
            }
            Response::output(Response::json_output($array_response));
        // echo json_encode($array, true);
    }

    public function all_users()
    {
        $data = $this->User_model->fetch_all();

        if($data){
            $array_response = ['code'=>'1','message'=>'success', 'data'=>$data->result_array()];
            // exit (json_encode($data->result_array()));
        }else{
            $array_response = ['code'=>'0','message'=>'failed'];
        }

        Response::output(Response::json_output($array_response));
    }

    function fetch_single_user()
    {
        if($this->input->post('id'))
        {
            $data = $this->User_model->fetch_single_user($this->input->post('id'));
            if($data){
                $array_response = ['code'=>'1','message'=>'success', 'data'=>$data];
                // exit (json_encode($data);
            }else{
                $array_response = ['code'=>'0','message'=>'failed'];
            }
    
            Response::output(Response::json_output($array_response));
        }
    }


    function update_user()
    {
        $this->form_validation->set_rules("first_name", "Firstname", "required");
        $this->form_validation->set_rules("last_name", "Lastname", "required");
        $this->form_validation->set_rules("position", "Position", "required");

        if($this->form_validation->run())
        {
            $data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name'  => trim($this->input->post('last_name')),
                'position'  => trim($this->input->post('position'))
            );

            $this->User_model->update_user($this->input->post('id'), $data);
            $array_response = ['code'=>'1','message'=>'success', 'success'  => true];
                
        }
        else
        {
            $array_response = ['code'=>'0','message'=>'failed', 'error'    => true, 'errors'=> [
                'first_name_error' => form_error('first_name'),
                'last_name_error' => form_error('last_name'),
                'position_error' => form_error('position')
            ]];
        }
        Response::output(Response::json_output($array_response));
    }

    function delete_user()
    {
        if($this->input->post('id'))
        {
            if($this->User_model->delete_user($this->input->post('id')))
            {
                $array_response = ['code'=>'1','message'=>'success', 'success'  => true];
            }
            else
            {
                $array_response = ['code'=>'0','message'=>'failed', 'error'  => true];
            }
            Response::output(Response::json_output($array_response));
        }
    }
}

/* End of file Controllername.php */

?>