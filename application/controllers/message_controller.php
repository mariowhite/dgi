<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 3/2/2017
 * Time: 3:18 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Message_controller extends CI_Controller
{

    public function index()
    {

        if($this->session->userdata('logged_in')){

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            $data['local'] = 'message.js';


            $this->load->view('template/header');
            $this->load->view('message_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer');
        }
        else{
            redirect(site_url('login'));
        }
    }

}