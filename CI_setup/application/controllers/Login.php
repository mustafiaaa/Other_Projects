<?php
defined('BASEPATH') OR EXIT('No Direct Script Access Allowed');
//cerating the Login class and extending the CI controller
class Login extends CI_Controller{
    public function index(){
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE)
            $this->load->view('login.php');
        else{
            $this->load->model('Login_model', '', TRUE);
            $result = $this->Login_model->check_user($_POST['email'], $_POST['password']);
            if($result != 0){
                $data['name']=$result['name'];
                $data['email']=$result['user_id'];
                $this->load->view('dashboard.php', $data);
            }
            else{
                $wrong_input['msg'] = 'No user found, Please give the credentials correctly.';
                $this->load->view('login.php', $wrong_input);
            }
        }
    }
    public function authenticate(){
        $usr_id = $_POST['email'];
        $password = $_POST['password'];
    }
} 