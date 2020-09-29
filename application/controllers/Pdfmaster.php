<?php 


class Pdfmaster extends CI_Controller
{
    function __construct() 
    { 
        parent::__construct();
         
        // add library of Pdf
        $this->load->model("Ventas_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
        $this->load->model("Categorias_model");
        $this->load->model("Soporte_model");
        $this->load->library('Pdf');

    } 



    
    function index()
    {
                // coder for CodeIgniter TCPDF Integration
        $tcpdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        // Set Title 
        $tcpdf->SetTitle('Pdf Example onlinecode');
        // Set Header Margin
        $tcpdf->SetHeaderMargin(30);
        // Set Top Margin
        $tcpdf->SetTopMargin(20);
        // set Footer Margin
        $tcpdf->setFooterMargin(20);
        // Set Auto Page Break
        $tcpdf->setPrintHeader(false);
        $tcpdf->setPrintFooter(false);
        $tcpdf->SetAutoPageBreak(true);
        // Set Author
        $tcpdf->SetAuthor('onlinecode');
        // Set Display Mode
        $tcpdf->SetDisplayMode('real', 'default');
        // Set Write text
        $tcpdf->Write(5, 'CodeIgniter TCPDF Integration - onlinecode');
        // Set Output and file name
        
        $tcpdf->Output('tcpdfexample-onlinecode.pdf', 'I');
    }

    public function pdf_informe($id) 
    {
                // coder for CodeIgniter TCPDF Integration
        
        // make new advance pdf document
        $tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
       
        // set document information
        $tcpdf->SetCreator(PDF_CREATOR);
        $tcpdf->SetAuthor('Muhammad Saqlain Arif');
        $tcpdf->SetTitle('INFORME JADETECH');
        $tcpdf->SetSubject('TCPDF Tutorial');
        $tcpdf->SetKeywords('TCPDF, PDF, example, test, guide');   
       
        //set default header information 
         
        $tcpdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING, array(0,65,256), array(0,65,127));
        $tcpdf->setFooterData(array(0,65,0), array(0,65,127)); 
       
        //set header  textual styles 
        // $tcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        //set footer textual styles
        //$tcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
       

        $tcpdf->setPrintHeader(false);
        $tcpdf->setPrintFooter(false);
        //set default monospaced textual style 
        $tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
       
        // set default margins
        $tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        // Set Header Margin
        $tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // Set Footer Margin
        $tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
       
        // set auto for page breaks
        $tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
       
        // set image for scale factor
        $tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
       
        // it is optional :: set some language-dependent strings
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) 
        {
            // optional
            require_once(dirname(__FILE__).'/lang/eng.php');
            // optional
            $tcpdf->setLanguageArray($l);
        }   
 
       
        // set default font for subsetting mode
        $tcpdf->setFontSubsetting(true);   
       
        // Set textual style 
        // dejavusans is an UTF-8 Unicode textual style, on the off chance that you just need to 
        // print standard ASCII roasts, you can utilize center text styles like 
        // helvetica or times to lessen record estimate. 
        $tcpdf->SetFont('dejavusans', '', 14, '', true);   
       
        // Add a new page 
        // This technique has a few choices, check the source code documentation for more data. 
        $tcpdf->AddPage(); 
       
        // set text shadow for effect
        $tcpdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,197,198), 'opacity'=>1, 'blend_mode'=>'Normal'));    
       
        //Set some substance to print
        

		$data = array(
            "informes"=>$this->Soporte_model->getInforme($id),
            "detalles"=>$this->Soporte_model->getDetalleInforme($id)
        );

        $set_html = $this->load->view('admin/soporte/view',$data,true); 
 
        //Print content utilizing writeHTMLCell() 
        $tcpdf->writeHTMLCell(0, 0, '', '', $set_html, 0, 1, 0, true, '', true); 
 
        // Close and yield PDF record 
        // This technique has a few choices, check the source code documentation for more data.
        ob_end_clean(); 
        $tcpdf->Output('InformeTecnico_Jadetech.pdf', 'I'); 
                // successfully created CodeIgniter TCPDF Integration
          }
          
          
    public function pdf_venta_cotizacion($id) 
          {
                      // coder for CodeIgniter TCPDF Integration
              
              // make new advance pdf document
              $tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
             
              // set document information
              $tcpdf->SetCreator(PDF_CREATOR);
              $tcpdf->SetAuthor('Muhammad Saqlain Arif');
              $tcpdf->SetTitle('Respaldo Jadetech');
              $tcpdf->SetSubject('TCPDF Tutorial');
              $tcpdf->SetKeywords('TCPDF, PDF, example, test, guide');   
             
              //set default header information 
               
              $tcpdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING, array(0,65,256), array(0,65,127));
              $tcpdf->setFooterData(array(0,65,0), array(0,65,127)); 
             
              //set header  textual styles 
              //$tcpdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
              //set footer textual styles
              //$tcpdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
             
      
              $tcpdf->setPrintHeader(false);
              $tcpdf->setPrintFooter(false);
              //set default monospaced textual style 
              $tcpdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
             
              // set default margins
              $tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
              // Set Header Margin
              $tcpdf->SetHeaderMargin(PDF_MARGIN_HEADER);
              // Set Footer Margin
              $tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
             
              // set auto for page breaks
              $tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
             
              // set image for scale factor
              $tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
             
              // it is optional :: set some language-dependent strings
              if (@file_exists(dirname(__FILE__).'/lang/eng.php')) 
              {
                  // optional
                  require_once(dirname(__FILE__).'/lang/eng.php');
                  // optional
                  $tcpdf->setLanguageArray($l);
              }   
       
             
              // set default font for subsetting mode
              $tcpdf->setFontSubsetting(true);   
             
              // Set textual style 
              // dejavusans is an UTF-8 Unicode textual style, on the off chance that you just need to 
              // print standard ASCII roasts, you can utilize center text styles like 
              // helvetica or times to lessen record estimate. 
              $tcpdf->SetFont('dejavusans', '', 14, '', true);   
             
              // Add a new page 
              // This technique has a few choices, check the source code documentation for more data. 
              $tcpdf->AddPage(); 
             
              // set text shadow for effect
              $tcpdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,197,198), 'opacity'=>1, 'blend_mode'=>'Normal'));    
             
              //Set some substance to print
              
      
              $data = array(
                "venta"=>$this->Ventas_model->getVenta($id),
                "detalles"=>$this->Ventas_model->getDetalle($id)
            );
      
              $set_html = $this->load->view("admin/ventas/view",$data,true); 
       
              //Print content utilizing writeHTMLCell() 
              $tcpdf->writeHTMLCell(0, 0, '', '', $set_html, 0, 1, 0, true, '', true); 
       
              // Close and yield PDF record 
              // This technique has a few choices, check the source code documentation for more data.
              ob_end_clean(); 
              $tcpdf->Output('Respaldo_jadetech.pdf', 'I'); 
                      // successfully created CodeIgniter TCPDF Integration
                }
}
/* end tcpdfexample.php file for CodeIgniter TCPDF Integration */
?>