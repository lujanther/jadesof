<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

    public function __construct(){
        parent::__construct();
   
        $this->load->model("Equipos_model");

     }

     public function index()
     {
         $data = array(
            
             'equipos'=>$this->Equipos_model->getEquipos(),
             
         );
         $this->load->view('layouts/header');
         $this->load->view('layouts/aside');
         $this->load->view('admin/equipos/list',$data);
         $this->load->view('layouts/footer');
 
     }

     public function add(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/equipos/add');
        $this->load->view('layouts/footer');

    }

    public function store(){
        $marca = $this->input->post("marca");
        $modelo = $this->input->post("modelo");
        $serie = $this->input->post("serie");
        $codigo = $this->input->post("codigo");
        $suministros = $this->input->post("suministros");
        $tipo = $this->input->post("tipo");
        $data = array(
                'marca'=>$marca,
                'modelo'=>$modelo,
                'serie'=>$serie,
                'codigo_interno'=>$codigo,
                'suministros'=>$suministros,
                'tipo'=>$tipo,
                'estado'=>"1"
            );
            if($this->Equipos_model->save($data)){
                redirect(base_url()."mantenimiento/equipos");

            }else{
                $this->session->set_flashaata("error","Nose guardo la informacion");
                redirect(base_url()."mantenimiento/equipos/add");
            }
        }

        public function edit($id){
            $data = array(
               
                'equipo'=>$this->Equipos_model->getEquipo($id)
            );
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/equipos/edit',$data);
            $this->load->view('layouts/footer');
    
         }

        public function update(){
            $idequipo = $this->input->post("idequipo");
            $marca = $this->input->post("marca");
            $modelo = $this->input->post("modelo");
            $serie = $this->input->post("serie");
            $codigo = $this->input->post("codigo");
            $suministros = $this->input->post("suministros");
            $tipo = $this->input->post("tipo");
            $data = array(
                    'marca'=>$marca,
                    'modelo'=>$modelo,
                    'serie'=>$serie,
                    'codigo_interno'=>$codigo,
                    'suministros'=>$suministros,
                    'tipo'=>$tipo,
                    'estado'=>"1"
                );
                if($this->Equipos_model->update($idequipo,$data)){
                    redirect(base_url()."mantenimiento/equipos");
    
                }else{
                    $this->session->set_flashaata("error","Nose guardo la informacion");
                    redirect(base_url()."mantenimiento/equipos/add");
                }
            }


    }
