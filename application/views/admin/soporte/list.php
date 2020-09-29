<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                INFORMES + COTIZACION
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
                        <a href="<?php echo base_url(); ?>soporte/soporte/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Venta</a>
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
                                    <th>Fecha</th>
                                    <th>Total</th>
                        
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                                <tbody>
                                  <?php if (!empty($informes)): ?>
                                    <?php foreach($informes as $informe): ?>
                                          <tr>
                                            <td><?php echo $informe->id?></td>
                                            <td><?php echo $informe->nombre ?></td>
                                            <td><?php echo $informe->fecha ?></td>
                                            <td><?php echo $informe->total ?></td>
            
                                            <td>
                                              
                                              <a target="_blank" href="<?php echo base_url()?>pdfmaster/pdf_informe/<?php echo $informe->id;?>" class="btn btn-info"><span class="glyphicon glyphicon-file"></span></a>
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
        <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"></span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- /.modal -->