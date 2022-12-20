
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>

                        <div>
                            <p>
                                <a href="<?php echo base_url(); ?>/unidades" class="btn btn-info">Unidades</a>
                            </p>
                        </div>
                       
                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Nombre corto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach($datos as $dato) { ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><?php echo $dato['nombre_corto']; ?></td>
                                                
                                                <td><a href="<?php echo base_url(). '/unidades/reingresar/'. $dato['id']; ?>"><i class="fas fa-arrow-alt-circle-up"></i></a></td>
                                                <!--<td><a href="#" data-href="<?php echo base_url(). '/unidades/reingresar/'. $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Reingresar registro"><i class="fas fa-arrow-alt-circle-up"></i></i></a></td>-->

                                            </tr>

                                        <?php } ?>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>
                <!-- Modal
            
                <div class="modal fade" id="modal-confirma" tabindex="+1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-ms" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea reingresar este registro?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
                                <a class="btn btn-danger tbn-ok">Si</a>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
