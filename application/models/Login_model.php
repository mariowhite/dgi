<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/21/2017
 * Time: 11:26 AM
 */

class Login_model extends CI_Model{

    //check if the provided username and password are correct
    public function checkUser($username, $password){

        $query = $this->db->get_where('account', array('username' => $username, 'password' => $password));

        if($query->num_rows() == 1)
            return true;
        return false;
    }

    //get primary info of an account
    public function getUser($username){

        $query = $this->db->get_where('account', array('username' => $username));
        return $query->row_array();

    }

    public function activate($nif, $access_code)
    {

                           // table       fields to change                where clause
        $this->db->update('account', array('status'=>'active'), array('nif'=>$nif, 'access_code'=>$access_code));
        return $this->db->affected_rows();

    }

    //return true is the username in in use, false otherwise
    public function is_username_used($username)
    {
        $query = $this->db->get_where('account', array('username' => $username));
        if($query->num_rows() == 1)
            return true;
        return false;
    }

    //return true is the username in in use, false otherwise
    public function is_nif_used($nif)
    {
        $query = $this->db->get_where('account', array('nif' => $nif));
        if($query->num_rows() == 1)
            return true;
        return false;
    }



}