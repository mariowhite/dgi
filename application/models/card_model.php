<?php
/**
 * Created by PhpStorm.
 * User: MARIOWHITE
 * Date: 2/24/2017
 * Time: 9:08 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model{

    var $morale = 'personne_morale';
    var $physique = 'personne_physique';
    var $card = 'carte_personne';
    var $address = 'adresse';
    var $account = 'account';

    public function __construct()
    {
        parent::__construct();
    }


    //get list of all physiques personnes cards to be displayed in the table
    public function get_cards($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($this->card, $this->card.'.nif = '.$table.'.nif');
        $this->db->join($this->address, $this->address.'.nif = '.$table.'.nif');
        $this->db->join($this->account, $this->account.'.nif = '.$table.'.nif');
        $query = $this->db->get();

        return $query->result_array();


    }


    //count total of element in the table
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }




    public function get_by_id($table, $nif)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($this->card, $this->card.'.nif = '.$table.'.nif');
        $this->db->join($this->address, $this->address.'.nif = '.$table.'.nif');
        $this->db->join($this->account, $this->account.'.nif = '.$table.'.nif');
        $this->db->where ( $table.'.nif', $nif);   //in case of spesific person
        $query = $this->db->get();


        return $query->row_array();
    }


    //delete a card by its nif
    //it is going to delete from table account and mysql will delete automatically the rest using foreign key contrains
    public function delete_by_id($id)
    {
        $this->db->where('nif', $id);
        $this->db->delete($this->account);
    }


    //update card info
    public function update($nif,$carte_array,$physique_array, $adresse_array)
    {
        $this->db->update($this->card, $carte_array, array('nif'=>$nif));
        $this->db->update($this->address, $adresse_array, array('nif'=>$nif));
        $this->db->update($this->physique, $physique_array, array('nif'=>$nif));

        return $this->db->affected_rows();

    }

    //insert info in each corresponding table
    public function insert($account_array,$carte_array,$physique_array, $adresse_array)
    {
        $this->db->insert($this->account, $account_array);
        $this->db->insert($this->card, $carte_array);
        $this->db->insert($this->physique, $physique_array);
        $this->db->insert($this->address, $adresse_array);

        //todo
        /*
         * verify that all the insertion were successfully
         * */
        if($this->db->affected_rows())
            return true;
        return false;

    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    //check if nif is used
    public function check_nif_is_used($nif)
    {
        $this->db->from($this->table);
        $this->db->where('nif', $nif);
        $query = $this->db->get();

        if($query->num_rows())
            return true;
        else
            return false;
    }



}