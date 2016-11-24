<?php
require APPPATH . '/libraries/REST_Controller.php';
class Api extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Restservice');
    }
    public function students_get()
    {
        $this->load->model('restservice');
        $record = $this->restservice->students_get();
        $this->response($record);
    }
    
    public function student_get()
    {
        $id = $this->uri->segment(4);
        $this->load->model('restservice');
        $record = $this->restservice->student_get($id);
        
        if ($id != NULL) {
            
            if (isset($record->id)) {
                
                $this->response($record);
            } else {
                $this->response("This is not valid id ", 404);
            }
        } else {
            $this->response("Please enter any id", 404);
        }
        
    }
    
    public function form_get()
    {
        $this->load->view('student_view');
    }
    public function student_post()
    {
           $data=[
                'name'=>$this->post('name'),
                'email'=>$this->post('email'),
                'mobile'=>$this->post('mobile'),
                'message'=>$this->post('message')

              ];

        
        $this->load->model('restservice');
        $this->restservice->student_post($data);
        echo "Data successfully added";
    }
    
}
