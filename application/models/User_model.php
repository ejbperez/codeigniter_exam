<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User_model extends CI_Model
    {
        function fetch_all()
        {
            $this->db->order_by('id', 'DESC');
            return $this->db->get('user');
        }

        function insert_user($data)
        {
            $this->db->insert('user', $data);
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        function fetch_single_user($user_id)
        {
            $this->db->where("id", $user_id);
            $query = $this->db->get('user');
            return $query->result_array();
        }

        function update_user($user_id, $data)
        {
            $this->db->where("id", $user_id);
            $this->db->update("user", $data);
        }

        function delete_user($user_id)
        {
            $this->db->where("id", $user_id);
            $this->db->delete("user");
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
    }
?>