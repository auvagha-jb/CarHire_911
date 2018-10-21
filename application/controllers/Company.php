<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller{

    public function index(){
        if($this->session->userdata('logged_in')){
            $this->user_redirect($this->session->userdata('user_type'));
        }
        $this->load->view('templates/admin/header');
        $this->load->view('company/login');
        $this->load->view('templates/admin/footer');
    }

    public function login(){
        $user = $this->users->login();
        if($user){
            switch($user->status)
                {
                    case 0:
                    {
                        $this->session->set_flashdata('error','Your account is suspended');
                        $this->user_redirect(0);
                        break;
                    }
                    case 1:
                    {
                        //Create session
                        $user_data = array(
                            'user_id' => $user->user_id,
                            'name' => $user->fname.' '.$user->lname,
                            'email' => $user->email,
                            'user_type' => $user->user_type,
                            'logged_in' => true
                        );
                        if(isset($user->logged_once)){
                            $user_data['logged_once'] = $user->logged_once;
                        }

                        $this->session->set_userdata($user_data);
                        $this->session->set_flashdata('message',"Welcome, ".$user_data['name']);
                        $this->user_redirect($user_data['user_type']);
                        break;
                    }
                    case 2:
                    {
                        $this->session->set_flashdata('error','You can no longer access the system');
                        $this->user_redirect(0);
                        break;
                    }
                    default: break;
                }
        }else{
            $this->session->set_flashdata('error',"You don't have access to the system");
            $this->user_redirect(0);
        }
    }

    /**
     * Verifies the email 
     */
    public function check_login_email(){
        echo json_encode($this->users->check_login_email());
    }

    /**
     * Verifies the login password 
     */
    public function check_login_password(){
        echo json_encode($this->users->check_login_password());        
    }

    /**
     * Logs out user
     */
    public function logout(){
        $this->session->unset_userdata(array('user_id','logged_in','name','email','user_type','logged_once'));
        session_destroy();
        $this->session->set_flashdata('message','You are now logged out');
        redirect(base_url('company'));
    }

    /**
     * Forgot password call
     */
    public function forgot_password(){
        if(isset($_POST['reminder'])){
            //Send email to user with a reset link
            $reset_code = random_string('sha1');
    
            $user = $this->users->get_user($this->input->post('reminder-email'));
    
            //Update reset code to database
            $updated = $this->users->set_reset_code($reset_code,$user['user_id']);
    
    
            $body = '<p>Dear '.$user['fname'].',</p>
            <p>Use the link below to reset your password. If you have not requested for a password
            reset, please check your account for security reasons.</p>
            <a href="'.base_url('company/update_password/'.$user['user_id'].'/'.$reset_code).'">Reset Password</a>
            <p>This link will expire in 48 hours</p>';
            
            $settings = array(
                'to' => $this->input->post('reminder-email'),
                'subject' => 'PASSWORD RESET',
                'body' => $body
            );
    
            if($updated){
                // Send email to user
                if(send_email($settings)){
                    $this->session->set_flashdata('message','Reset link sent to your email');
                    redirect(base_url('company/forgot_password'));
                }
            }else {
                //Set session message
                $this->session->set_flashdata('error','Email could not be sent. Please try again later');
                redirect(base_url('company/forgot_password'));
            }
        }

        $this->load->view('templates/admin/header');
        $this->load->view('company/forgot_password');
        $this->load->view('templates/admin/footer');
    }

    /**
     * Checks for first time log in 
     */
    public function employee_check(){
        if($this->session->userdata('logged_once') == 0){
            redirect(base_url('company/update_password'));
        }else{
            die("Let's go to the employee module");
        }

    }

    /**
     * Update password call
     */
    public function update_password($user_id = false,$token=false){
        if($user_id && $token){
            $valid_code = $this->users->validate_reset_code($user_id,$token);

            if(!$valid_code){
                $this->session->set_flashdata('error',"The reset link has expired or does not exist");
                redirect(base_url('company'));
            }else{
                $this->session->set_userdata('user_id',$user_id);
                $_SESSION['reset_code'] = $token;
            }

            $data = array(
                "title" => "Seems like you have forgotten your password",
                "description" => "Why don't you set one you will remember now"
            );
            
        }else{
            if(isset($_POST['update'])){
                $first = false;
                if($this->session->userdata('logged_in')){
                    $first = true;
                }
                $updated = $this->users->update_password($this->session->userdata('user_id'),$first);
                if($updated){
                    $this->session->set_flashdata('message','Password updated');
                    $this->session->set_userdata('logged_once',1);
                    
                    if($this->session->userdata('logged_in')){
                        $this->user_redirect($this->session->userdata('user_type'));
                    }else{
                        $this->user_redirect(0);
                    }

                }else{
                    $this->session->set_flashdata('error','Could not update password. Try again later.');
                }
            }else if(!$this->session->userdata('logged_in')){
                $this->user_redirect(0);
            }else if($this->session->userdata('logged_once') == 1){
                $this->user_redirect($this->session->userdata('user_type'));
            }
            $data = array(
                "title" => "Hey there, you seem new",
                "description" => "Why don't you set your own password"
            );      
        }       

        $this->load->view('templates/admin/header');
        $this->load->view('company/update_password',$data);
        $this->load->view('templates/admin/footer');

    }

    /**
     * Helps with the redirect based on the user role
     */
    public function user_redirect($type){
        switch($type){
            case 2:
                redirect('company/employee_check');
                break;
            case 3:
                redirect('admin');
                break;
            default:
                redirect(base_url('company'));
                break;
        }
    }
}
