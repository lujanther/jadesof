        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2020 <a href="https://www.facebook.com/Jadetechbol/">JADETECH Servicios Integrales</a>.</strong> Derechos Reservados.
        </footer>
    </div>
    <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-print/jquery.print.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables Export -->
<script src="<?php echo base_url();?>assets/template/datatables-export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables-export/js/buttons.print.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<script>
$(document).ready(function () {

   var base_url= "<?php echo base_url();?>";
   
    $(".btn-remove").on("click",function(e){
        e.preventDefault();
        var ruta = $(this).attr("href");
        $.ajax({
            url: ruta,
            type:"POST",
            success: function(resp){
               window.location.href = base_url + resp;
            }
        });
    });
 

    $(".btn-view-cliente").on("click",function(){
        var cliente =$(this).val();
        //alert(cliente);
        var infocliente = cliente.split("*");
        html = "<p><strong>Nombre: </strong>"+infocliente[1]+"</p>"
        html += "<p><strong>Tipo de Cliente: </strong>"+infocliente[2]+"</p>"
        html += "<p><strong>Tipo de Documento: </strong>"+infocliente[3]+"</p>"
        html += "<p><strong>Numero de documento: </strong>"+infocliente[4]+"</p>"
        html += "<p><strong>Telefono: </strong>"+infocliente[5]+"</p>"
        html += "<p><strong>Direccion: </strong>"+infocliente[6]+"</p>";
        $("#modal-default .modal-body").html(html);
    });


    $(".btn-view-producto").on("click",function(){
        var producto =$(this).val();
        //alert(cliente);
        var infoproducto = producto.split("*");
        html = "<p><strong>Codigo: </strong>"+infoproducto[1]+"</p>"
        html += "<p><strong>Nombre: </strong>"+infoproducto[2]+"</p>"
        html += "<p><strong>Descripcion: </strong>"+infoproducto[3]+"</p>"
        html += "<p><strong>Precio: </strong>"+infoproducto[4]+"</p>"
        html += "<p><strong>Stock: </strong>"+infoproducto[5]+"</p>"
        html += "<p><strong>Categoria: </strong>"+infoproducto[6]+"</p>";
        $("#modal-default .modal-body").html(html);
    });


    $(".btn-view").on("click",function(){
        var id=$(this).val();
        $.ajax({
            url: base_url + "mantenimiento/categorias/view/"+id,
            type: "POST",
            success: function(resp){
                $("#modal-default .modal-body").html(resp);
                //alert(resp);
            }
        })
    });


    $(".btn-view-usuario").on("click",function(){
        var id=$(this).val();
        $.ajax({
            url: base_url + "administrador/usuarios/view",
            type: "POST",
            data:{idusuario:id},
            success: function(resp){
                $("#modal-default .modal-body").html(resp);
                //alert(resp);
            }
        })
    });

    $('#example').DataTable({
        dom:'Bfrtip',
        buttons: [
            {
                extend: "excelHtml5",
                title: "REPORTE DE VENTAS",
                exportOptions: {
                    columns: [0,1,2,3,5,6,7,8,9,10,11]
                }
            },
            {
                extend: "pdfHtml5",
                title: "REPORTE DE VENTAS",
                exportOptions: {
                    columns: [0,1,2,3,5,6,7,8,9,10,11]
                }
            }
        ]
    });


    $("#example1").DataTable();
    $('.sidebar-menu').tree();


    $("#comprobantes").on("change",function(){
        option = $(this).val();

        if(option != ""){
            infocomprobante = option.split("*");

            $("#idcomprobante").val(infocomprobante["0"]);
            $("#iva").val(infocomprobante["2"]);
            $("#serie").val(infocomprobante["3"]);
            $("#numero").val(generarnumero(infocomprobante["1"]));
        }else{
            $("#idcomprobante").val(null);
            $("#iva").val(null);
            $("#serie").val(null);
            $("numero").val(null);

        }
        suma();
    })

    $(document).on("click",".btn-check",function(){
        cliente =$(this).val();
        infocliente=cliente.split("*");
        $("#idcliente").val(infocliente[0]);
        $("#cliente").val(infocliente[1]);
        $("#modal-default").modal("hide");
    });


    $("#producto").autocomplete({
        source:function(request, response){
            $.ajax({
                url: base_url+"movimientos/ventas/getproductos",
                type: "POST",
                dataType:"json",
                data:{ valor: request.term },
                success: function(data){
                    response(data);
                }
            });
        },
        minLength:1,
        select:function(event, ui){
            data = ui.item.id + "*" + ui.item.codigo + "*" + ui.item.label + "*" + ui.item.precio + "*" + ui.item.stock;
            $("#btn-agregar").val(data);
        },

    });

    $("#btn-agregar").on("click",function(){
        data = $(this).val();
        if (data !=''){
            infoproducto = data.split("*");
            html = "<tr>";
            html += "<td><input type='hidden' name='idproducto[]' value='"+infoproducto[0]+"'>"+infoproducto[1]+"</td>";
            html += "<td>"+infoproducto[2]+"</td>";
            html += "<td><input type='hidden' name='precios[]' value='"+infoproducto[3]+"'>"+infoproducto[3]+"</td>";
            html += "<td>"+infoproducto[4]+"</td>";
            html += "<td><input type='text' name='cantidades[]' value='1' class='cantidades'></td>";
            html += "<td><input type='hidden' name='importes[]' value='"+infoproducto[3]+"'><p>"+infoproducto[3]+"</p></td>";
            html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-remove'></span></button></td>";
            html += "</tr>";
            $("#tbventas tbody").append(html);
            sumar();
            $("#btn-agregar").val(null);
            $("#producto").val(null);
            
        }else{
            alert("seleccione un producto...");
        }

    });

    $(document).on("click",".btn-remove-producto",function(){
        $(this).closest("tr").remove();
        sumar();
    });

    $(document).on("keyup","#tbventas input.cantidades",function(){
        cantidad = $(this).val();
        precio = $(this).closest("tr").find("td:eq(2)").text();
        importe = cantidad * precio;
        $(this).closest("tr").find("td:eq(5)").children("p").text(importe);
        $(this).closest("tr").find("td:eq(5)").children("input").val(importe);
        sumar();
    });


        $(document).on("click",".btn-view-venta",function(){
            valor_id = $(this).val();
            $.ajax({
                url: base_url+"movimientos/ventas/view",
                type: "POST",
                dataType: "html",
                data:{id:valor_id},
                success: function(data){
                    $("#modal-default .modal-body").html(data);
                }
            })
        })

        $(document).on("click",".btn-view-informe",function(){
            valor_id = $(this).val();
            $.ajax({
                url: base_url+"soporte/soporte/view",
                type: "POST",
                dataType: "html",
                data:{id:valor_id},
                success: function(data){
                    $("#modal-default .modal-body").html(data);
                }
            })
        })


        
        $(document).on("click",".btn-print",function(){
            $("#modal-default .modal-body").print({
                title:"*",
                
            });
        })
})

function generarnumero(numero){
    if(numero>=99999 && numero<999999){
        return Number(numero)+1;
    }
    if(numero>=9999 && numero<99999){
        return "0"+(Number(numero)+1);
    }
    if(numero>=999 && numero<9999){
        return "00"+(Number(numero)+1);
    }
    if(numero>=99 && numero<999){
        return "000"+(Number(numero)+1);
    }
    if(numero>=9 && numero<99){
        return "0000"+(Number(numero)+1);
    }
    if(numero<9){
        return "00000"+(Number(numero)+1);
    }

}

function sumar(){
    subtotal=0;
    $("#tbventas tbody tr").each(function(){
        subtotal = subtotal +Number($(this).find("td:eq(5)").text());

    });
    $("input[name=subtotal]").val(subtotal);
    porcentaje = $("#iva").val();
    iva = subtotal * (porcentaje/1000);
    $("input[name=iva]").val(iva);
    descuento = $("input[name=descuento]").val();
    total = subtotal+iva- descuento;
    $("input[name=total]").val(total);

}



</script>
</body>
</html>
