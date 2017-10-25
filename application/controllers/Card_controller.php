<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/24/2017
 * Time: 9:08 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Card_controller extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('card_model','card');
    }


    //load both tables
    //personne physiques and personnes morales
    public function index()
    {

        if($this->session->userdata('logged_in')){

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            //get list of personne physiques from the database
            $data['personnes_physiques'] = $this->card->get_cards('personne_physique');
            $data['elements_physiques'] = count($data['personnes_physiques']);

            //local javascript library
            $data['local'] = 'physique_table.js';

            //get list of personne morales from database
            $data['personnes_morales'] = $this->card->get_cards('personne_morale');
            $data['elements_morales'] = count($data['personnes_morales']);

            //prepare view
            $this->load->view('template/header');
            $this->load->view('cards_physiques_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer');
        }
        else{
            redirect(site_url('login'));
        }

    }



    //delete card by nif, it works for both physiques and morales
    public function delete_card($nif)
    {
        $this->card->delete_by_id($nif);

        redirect(site_url('cardtable'));

    }


    //check a card info and edit it
    public function load_edit_card($nif)
    {

        if($this->session->userdata('logged_in')) {

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            //get list of personne physiques from the database
            $data['personnes_physiques'] = $this->card->get_by_id('personne_physique',$nif);

            $data['local']='edit_card.js';


            //prepare view
            $this->load->view('template/header');
            $this->load->view('card_edit_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer');



        }
        else{
            redirect(site_url('login'));
        }



    }




    public function prepare_insert_card()
    {
        if($this->session->userdata('logged_in')) {

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            //prepare view with the form to insert new user
            $this->load->view('template/header');
            $this->load->view('card_insert_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer');



        }
        else{
            redirect(site_url('login'));
        }
    }


    public function generate_access_code()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function done_registering()
    {
        $this->load->view('done_registering_view');
    }

    public function send_Welcome_Email($email, $nif, $access_code)
    {

        //from localhost using gmail
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'mariowhite2007@gmail.com',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE,
            'newline' => "\r\n",
        );

/*
        //from iimsteigroup.com using info@dgi.iimsteigroup.com
        $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'a2plcpnl0066.prod.iad2.secureserver.net',
            'smtp_user' => 'info@dgi.iimsteigroup.com',
            'smtp_pass' => 'dgimali',
            'mailtype' => 'html',
            'wordwrap' => TRUE,
            'newline' => "\r\n",
        );
        */
        $main_address = base_url();
        //content
        $content = '<h1>Code d\'accès</h1>';
        $content .= '<p>Votre code d\'accès est: <b>'.$access_code.'</b></p>';
        $content .= '<p> Cliquez sur le lien suivant pour activer votre compte <a href="'.$main_address.'activate/'.$nif.'/'.$access_code.'">link</a></p>';
        $content .= '<p> Une fois votre compte activé, connectez-vous normalement en utilisant votre nom d\'utilisateur et votre mot de passe.</p>';
        $content .= '<p style="font-size: 11px;"> * Email généré automatiquement par notre système. <br> * Non surveillé. Ne pas répondre.</p>';


        $this->load->library('email', $config);

        $this->email->from('info@dgi.iimsteigroup.com', 'DGI Mali');
        $this->email->to($email);

        $this->email->subject('Bienvenue à DGI Online Services');
        $this->email->message($content);

        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        }
        else
        {
            redirect(site_url('register_succ'));
        }

    }


    //register new users to the system
    public function add_card()
    {
        //receive input post parameter

        $physique_array = array(
            //for all tables
            'nif' => $this->input->post('nif') ,

            //for table personne_physique
            'nom' => $this->input->post('nom') ,
            'prenom' => $this->input->post('prenom'),
            'nom_pere' => $this->input->post('nom_pere') ,
            'prenom_pere' => $this->input->post('prenom_pere'),
            'nom_mere' => $this->input->post('nom_mere'),
            'prenom_mere' => $this->input->post('prenom_mere'),
            'sexe' => $this->input->post('sexe'),
            'date_naissance' => $this->input->post('date'),
            'lieu_naissance' => $this->input->post('lieu'),
            'nina' => $this->input->post('nina'),
            'situation_matrimoniale' => $this->input->post('situation_matrimoniale')
        );

        $carte_array = array(
            //for all tables
            'nif' => $this->input->post('nif') ,

            //for table carte_personne
            'telephone_mobile' =>$this->input->post('telephone_mobile'),
            'profession' => $this->input->post('profession'),
            'activite_principale' => $this->input->post('activite')
        );

        $adresse_array = array(
             //for all tables
            'nif' => $this->input->post('nif') ,

            //for table adresse
            'commune' => $this->input->post('commune'),
            'quartier' => $this->input->post('quartier'),
            'immeuble' => $this->input->post('immeuble'),
            'nom_rue' => $this->input->post('nom_rue'),
            'numero_rue' => $this->input->post('numero_rue'),
            'numero_porte' => $this->input->post('numero_porte')
        );

        $access_code = $this->generate_access_code();

        $account_array = array(
            //for all tables
            'nif' => $this->input->post('nif') ,

            //for account table
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'status' => 'no-active',
            'account_type'=> 'User',
            'access_code' => $access_code,

        );


        if($this->card->insert($account_array,$carte_array,$physique_array, $adresse_array))
        {
                //send email asking to activate account

                $email = $this->input->post('email');  //email address t be sent
                //$access_code //variable access code previously declared to be used

                $this->send_Welcome_Email($email, $this->input->post('nif'), $access_code);

        }

    }



    //edit card information
    public function edit_card(){


        $physique_array = array(
            //for all tables

            //for table personne_physique
            'nom' => $this->input->post('nom') ,
            'prenom' => $this->input->post('prenom'),
            'nom_pere' => $this->input->post('nom_pere') ,
            'prenom_pere' => $this->input->post('prenom_pere'),
            'nom_mere' => $this->input->post('nom_mere'),
            'prenom_mere' => $this->input->post('prenom_mere'),
            'sexe' => $this->input->post('sexe'),
            'date_naissance' => $this->input->post('date'),
            'lieu_naissance' => $this->input->post('lieu'),
            'nina' => $this->input->post('nina'),
            'situation_matrimoniale' => $this->input->post('situation_matrimoniale')
        );

        $carte_array = array(
            //for all tables

            //for table carte_personne
            'telephone_mobile' =>$this->input->post('telephone_mobile'),
            'profession' => $this->input->post('profession'),
            'activite_principale' => $this->input->post('activite')
        );

        $adresse_array = array(
            //for all tables

            //for table adresse
            'commune' => $this->input->post('commune'),
            'quartier' => $this->input->post('quartier'),
            'immeuble' => $this->input->post('immeuble'),
            'nom_rue' => $this->input->post('nom_rue'),
            'numero_rue' => $this->input->post('numero_rue'),
            'numero_porte' => $this->input->post('numero_porte')
        );

        $access_code = $this->generate_access_code();

        $nif = $this->input->post('nif');

        $this->card->update($nif,$carte_array,$physique_array, $adresse_array);

        $this->index();

    }

    public function review($nif)
    {

        if($this->session->userdata('logged_in')) {

            //get info of the user logged in
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['type'] = $session_data['account_type'];
            $data['nif'] = $session_data['nif'];

            //get list of personne physiques from the database
            $data['personnes_physiques'] = $this->card->get_by_id('personne_physique',$nif);

            $data['local'] = 'view_card.js';

            //prepare view with the form to insert new user
            $this->load->view('template/header');
            $this->load->view('card_review_view', $data);
            $this->load->view('template/main_menu');
            $this->load->view('template/footer');

        }
        else
            redirect(site_url('login'));

    }


    function check_nif()
    {
        $nif = $this->input->post('nif');

        $used =  $this->card->check_nif_is_used($nif); //return true is it is found in database, false otherwise

        header('Content-type: application/json');
        echo json_encode($used);

    }





}