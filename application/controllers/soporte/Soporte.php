<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soporte extends CI_Controller {
    public function __construct(){
        parent::__construct();
      
        $this->load->model("Clientes_model");
        $this->load->model("Productos_model");
        $this->load->model("Soporte_model");

    }

    public function add(){
        $data = array(
      
            "clientes"=>$this->Clientes_model->getClientes()

        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/soporte/add",$data);
        $this->load->view("layouts/footer");
    }
    public function index(){
        $data = array(
            'informes' =>$this->Soporte_model->getInformes(),
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/soporte/list",$data);
        $this->load->view("layouts/footer");

    }

    public function store(){
        $fecha = $this->input->post("fecha");
        $subtotal = $this->input->post("subtotal");
        $iva = $this->input->post("iva");
        $descuento  = $this->input->post("descuento");
        $total = $this->input->post("total");  
        $idcliente = $this->input->post("idcliente");
        $oferta = $this->input->post("oferta");
        $tiempoentrega = $this->input->post("tiempoentrega");
        $pago = $this->input->post("pago");
        $marca = $this->input->post("marca");
        $serie = $this->input->post("serie");
        $codigo = $this->input->post("codigo");
        $falla = $this->input->post("falla");
        $diagnostico = $this->input->post("diagnostico");

        $idproducto = $this->input->post("idproducto");
        $precios = $this->input->post("precios");
        $cantidades = $this->input->post("cantidades");
        $importes = $this->input->post("importes");

        $data = array(
        'id_cliente'=>$idcliente,
        'fecha' =>$fecha,
        'marca_modelo'=>$marca,
        'serie'=>$serie,
        'codigo'=>$codigo,
        'valido_oferta'=>$oferta,
        'tiempo_entrega'=>$tiempoentrega,
        'forma_pago'=>$pago,
        'falla'=>$falla,
         'diagnostico'=>$diagnostico,
         'subtotal'=>$subtotal,
        'iva'=>$iva,
        'descuento'=>$descuento,
         'total'=>$total,
        );

        


        if($this->Soporte_model->save($data)){
            $idinforme = $this->Soporte_model->lastID();
            $this->save_detalle($idproducto,$idinforme,$precios,$cantidades,$importes);
            redirect(base_url()."soporte/soporte");
        }else{
            redirect(base_url()."soporte/soporte/add");
        }

        }

        
        protected function save_detalle($producto,$idinforme,$precios,$cantidades,$importes){
            for ($i=0; $i < count($producto); $i++){
                $data = array(
                    'producto_id'=>$producto[$i],
                    'informe_id'=>$idinforme,
                    'precio'=>$precios[$i],
                    'cantidad'=>$cantidades[$i],
                    'importe'=>$importes[$i],
                );

                $this->Soporte_model->save_detalle($data);
                
            }
        }

        public function view(){
            $idinforme = $this->input->post("id");
            $data = array(
                "informes"=>$this->Soporte_model->getInforme($idinforme),
                "detalles"=>$this->Soporte_model->getDetalleInforme($idinforme)
            );
            $this->load->view("admin/soporte/view",$data);
        }

}