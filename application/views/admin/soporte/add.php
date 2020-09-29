
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        INFORME + COTIZACION
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <form action="<?php echo base_url();?>soporte/soporte/store" method="POST" class="form-horizontal">
                            
                        
                        <div class="form-group">
                                
                                <div class="col-md-6">
                                <input type="hidden" id="iva">
                                    <label for="">Cliente:</label>
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente">
                                        <input type="text" class="form-control" disabled="disabled" id="cliente">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div> 
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                                 
                            </div>
                            <div class="form-group">
                            <div class="col-md-4">
                                    <label for="">Valido de Oferta:</label>
                                    <input type="text" class="form-control" id="oferta" name="oferta" >
                             </div>
                             <div class="col-md-4">
                                    <label for="">Tiempo de Entrega:</label>
                                    <input type="text" class="form-control" id="tiempoentrega" name="tiempoentrega" >
                             </div>
                             <div class="col-md-4">
                                    <label for="">forma de pago:</label>
                                    <select name="pago" id="pago" class="form-control">
                                        <option value="Cheque">Cheque</option>
                                        <option value="Tranferencia Bancaria">Transferencia Bancaria</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Credito">Credito</option>
                                        <option value="Otros">Otros</option>
                                      
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-md-4">
                                    <label for="">Marca y Modelo:</label>
                                    <input type="text" class="form-control" id="marca" name="marca" >
                             </div>
                             <div class="col-md-4">
                                    <label for="">Serie:</label>
                                    <input type="text" class="form-control" id="serie" name="serie" >
                             </div>
                             <div class="col-md-4">
                                    <label for="">Codigo Interno:</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" >
                             </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-12">
                                    <label for="">Falla Reportada:</label>
                                    <input type="text" class="form-control" id="falla" name="falla" >
                             </div>
                             </div>
                             <div class="form-group">
                            <div class="col-md-12">
                                    <label for="">Diagnostico:</label>
                                    <input type="text" class="form-control" id="diagnostico" name="diagnostico" >
                             </div>
                             </div>



                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                       
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="subtotal" name="subtotal" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">IVA:</span>
                                        <input type="text" class="form-control" placeholder="iva" name="iva" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="descuento" name="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="total" name="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lita de Clientes</h4>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($clientes)):?>
        <?php foreach($clientes as $cliente):?>
    <tr>
        <td><?php echo $cliente->id; ?></td>
        <td><?php echo $cliente->nombre; ?></td>
     <td><?php echo $cliente->num_documento; ?></td>

        <?php $datacliente = $cliente->id."*".$cliente->nombre."*".$cliente->tipocliente."*".$cliente->tipodocumento."*".$cliente->num_documento."*".$cliente->telefono."*".$cliente->direccion; ?>
        <td>
            <button type="button" class="btn btn-success btn-check" value="<?php echo $datacliente; ?>"><span class="fa fa-check"></span></button>
        </td>
    </tr>
        <?php endforeach;  ?>
    <?php endif;  ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
