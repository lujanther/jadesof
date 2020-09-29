<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                VENTAS
                <small>Listado</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>movimientos/ventas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Venta</a>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Cliente</th>
                                    <th>Tipo</th>
                                    <th>Numero</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th>Nota</th>
                                    <th>Ciudad</th>
                                    <th>Agencia</th>
                                    <th>Area/Encargado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                                <tbody>
                                  <?php if (!empty($ventas)): ?>
                                    <?php foreach($ventas as $venta): ?>
                                          <tr>
                                            <td><?php echo $venta->id ?></td>
                                            <td><?php echo $venta->nombre ?></td>
                                            <td><?php echo $venta->tipocomprobante ?></td>
                                            <td><?php echo $venta->numero_documento ?></td>
                                            <td><?php echo $venta->fecha ?></td>
                                            <td><?php echo $venta->total ?></td>
                                            <td><?php echo $venta->notas ?></td>
                                            <td><?php echo $venta->ciudad ?></td>
                                            <td><?php echo $venta->agencia ?></td>
                                            <td><?php echo $venta->area ?></td>
                                            <td>
                                              
                                              <a target="_blank" href="<?php echo base_url()?>pdfmaster/pdf_venta_cotizacion/<?php echo $venta->id;?>" class="btn btn-info"><span class="glyphicon glyphicon-file"></span></a>
                                            </td>
                                          </tr>
                                    <?php endforeach;?>
                                  
                                    <?php endif; ?>
                                </tbody>
                            </table>
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


<!-- /.modal -->
