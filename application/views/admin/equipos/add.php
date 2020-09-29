        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Equipos
                <small>Nuevo Equipo</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="<?php echo base_url();  ?>mantenimiento/equipos/store" method="POST">
                             
                                <div class="form-group">
                                    <label for="">Marca: </label>
                                    <input type="text" class="form-control" id="marca" name="marca">
                                </div>

                                <div class="form-group">
                                    <label for="">Modelo: </label>
                                    <input type="text" class="form-control" id="modelo" name="modelo">
                                </div>

                                <div class="form-group">
                                    <label for="">Serie: </label>
                                    <input type="text" class="form-control" id="serie" name="serie">
                                </div>

                                <div class="form-group">
                                    <label for="">Codigo Interno: </label>
                                    <input type="text" class="form-control" id="codigo" name="codigo">
                                </div>

                                

                                <div class="form-group">
                                    <label for="">Suministros: </label>
                                    <input type="text" class="form-control" id="suministros" name="suministros">
                                </div>

                                <div class="form-group">
                                    <label for="">Tipo: </label>
                                    <input type="text" class="form-control" id="tipo" name="tipo">
                                </div>

                        

                                <div class="form-group">

                                <button type="submit" class="btn btn-success btn-flat">Guadar</button>
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
