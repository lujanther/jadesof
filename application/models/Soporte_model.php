<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Soporte_model extends CI_Model {

        public function getInformes(){
            $this->db->select("i.*,c.nombre");
            $this->db->from("informe i");
            $this->db->join("clientes c","i.id_cliente = c.id");
            
            $resultados = $this->db->get();
            if ($resultados->num_rows() > 0) {
                return $resultados->result();
            }else
            {
                return false;
            }
        }

        public function lastID(){
            return $this->db->insert_id();
        }
        public function save($data){

            return $this->db->insert("informe",$data);
        }

      
    

    
        public function save_detalle($data){
            $this->db->insert("detalle_informe",$data);
    
        }

        public function getproductos ($valor){
            $this->db->select("id,codigo,nombre as label,precio,stock,estado");
            $this->db->from("productos");
         
            $this->db->like("codigo",$valor);
            $this->db->or_like("nombre",$valor);
            $resultados = $this->db->get();
            return $resultados->result_array();
    
    
        }
        public function getInforme($id){
            $this->db->select("i.*,c.*");
            $this->db->from("informe i");
            $this->db->join("clientes c","i.id_cliente = c.id");
            $this->db->where("i.id",$id);
            $resultado = $this->db->get();
            return $resultado->row();
        }
    
        public function getDetalleInforme($id){
            $this->db->select("di.*,p.codigo,p.nombre");
            $this->db->from("detalle_informe di");
            $this->db->join("productos p","di.producto_id = p.id");
            $this->db->where("di.informe_id",$id);
            $resultados=$this->db->get();
            return $resultados->result();
    
        }


    }