<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/21/2017
 * Time: 11:23 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{


    public function index()
    {
        $this->load->view('login_view');
    }

    //check provided username and password
    public function login(){

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('login_model');

            //create session
            $sess_array = array(
                'logged_in' => FALSE,
            );

            if($this->login_model->checkUser($username, $password)) {
                //if the user appears in the database and the credentials are correct
                $account = $this->login_model->getUser($username);

                $sess_array = array(
                    'username' => $account['username'],
                    'nif' => $account['nif'],
                    'status' => $account['status'],
                    'account_type' => $account['account_type'],
                    'access_code'=>$account['access_code'],
                    'email'=>$account['email'],
                    'logged_in' => TRUE
                );


                $this->session->set_userdata('logged_in', $sess_array);
            }
                header('Content-type: application/json');
                echo json_encode($sess_array);



    }

    //activate a new account
    public function activate($nif, $access_code)
    {
        $this->load->model('login_model');

        $data['process'] = $this->login_model->activate($nif, $access_code);
        $this->load->view('activation_view', $data);

    }

    public function logout()
    {

        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(base_url());

    }

    public function register()
    {
            $this->load->view('register_view');
    }


    //check whether the user is in use
    //return true if is in use
    //return false if it can be used
    public function is_username_in_use()
    {

        $this->load->model('login_model');
        //return true if username is available, false otherwise
        $username = $this->input->post('username');

        $used = $this->login_model->is_username_used($username);
        if($used)
            $message = "Ce Nom d'utilisateur est déjà utilisé, veuillez en choisir un autre.";
        else
            $message = "Nom d'utilisateur disponible.";

        $arrayToJs = array(
            "in_use" => $used,
            "message" => $message
        );
        header('Content-type: application/json');
        echo json_encode($arrayToJs);


    }


    public function is_nif_in_use()
    {

        $this->load->model('login_model');
        //return true if username is available, false otherwise
        $nif = $this->input->post('nif');

        $used = $this->login_model->is_nif_used($nif);
        if($used)
            $message = "Le Numéro d'Identification Fiscale (NIF) est déjà enregistré, veuillez contacter la DGI.";
        else
            $message = "NIF disponible.";

        $arrayToJs = array(
            "in_use" => $used,
            "message" => $message
        );
        header('Content-type: application/json');
        echo json_encode($arrayToJs);


    }



}