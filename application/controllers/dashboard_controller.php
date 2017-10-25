<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/21/2017
 * Time: 12:47 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller{

    public function index(){

        if($this->session->userdata('logged_in')){

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            $data['local'] = 'dashboard.js';

            $this->load->view('template/header');
            $this->load->view('dashboard_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer',$data);
        }
        else{
            redirect(site_url('login'));
        }

    }





}