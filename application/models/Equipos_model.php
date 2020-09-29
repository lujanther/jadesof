<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Equipos_model extends CI_Model {

        public function getEquipos(){
            $this->db->where("estado",1);
            $resultados = $this->db->get("impresoras");
            return $resultados->result();
        }
        public function save($data){
            return $this->db->insert("impresoras",$data);
        }
        public function getEquipo($id){

            $this->db->where("id",$id);
            $resultado = $this->db->get("impresoras");
            return $resultado->row();
        }
    
        public function update($id, $data){
    
            $this->db->where("id",$id);
            return $this->db->update("impresoras",$data);
            
        }



    }