        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                CLIENTES
                <small>Nuevo Cliente</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <?php if($this->session->flashdata("error")): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
                                <p> <i class="icon fa fa-ban"></i> <?php if($this->session->flashdata("error")); ?></p>
                            </div>
                            <?php endif; ?>

                            <form action="<?php echo base_url();  ?>mantenimiento/clientes/store" method="POST">
                                <div class="form-group">
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>

                                <div class="form-group">
                                    <label for="tipocliente">Tipo de Cliente: </label>
                                    <select name="tipocliente" id="tipocliente" class="form-control" required="required">
                                        <option value="">Seleccione...</option>
                                        <?php foreach ($tipoclientes as $tipocliente):  ?>
                                            <option value="<?php echo $tipocliente->id;?>"><?php echo $tipocliente->nombre?></option>
                                        <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="tipodocumento">Tipo de Documento: </label>
                                    <select name="tipodocumento" id="tipodocumento" class="form-control" required="required">
                                        <option value="">Seleccione...</option>
                                        <?php foreach ($tipodocumentos as $tipodocumento):  ?>
                                            <option value="<?php echo $tipodocumento->id;?>"><?php echo $tipodocumento->nombre?></option>
                                        <?php endforeach; ?>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="numero">Numero de Documento: </label>
                                    <input type="text" class="form-control" id="numero" name="numero">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono: </label>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Direccion: </label>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
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