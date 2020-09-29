        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Equipos
                <small>Editar</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form action="<?php echo base_url();  ?>mantenimiento/equipos/update" method="POST">
                             
                            <input type="hidden" name="idequipo" value="<?php echo $equipo->id; ?>">
                                <div class="form-group">
                                    <label for="descripcion">Marca: </label>
                                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $equipo->marca; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Modelo: </label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $equipo->modelo; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Serie: </label>
                                    <input type="text" class="form-control" id="serie" name="serie" value="<?php echo $equipo->serie; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Codigo Interno: </label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $equipo->codigo_interno; ?>" >
                                </div>

                                

                                <div class="form-group">
                                    <label for="">Suministros: </label>
                                    <input type="text" class="form-control" id="suministros" name="suministros" value="<?php echo $equipo->suministros; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Tipo: </label>
                                    <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $equipo->tipo; ?>">
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