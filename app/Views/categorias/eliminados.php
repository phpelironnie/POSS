
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>

                        <div>
                            <p>
                                <a href="<?php echo base_url(); ?>/categorias" class="btn btn-info">Unidades</a>
                            </p>
                        </div>
                       
                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach($datos as $dato) { ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                
                                                <td><a href="<?php echo base_url(). '/categorias/reingresar/'. $dato['id']; ?>"><i class="fas fa-arrow-alt-circle-up"></i></a></td>
                                                
                                            </tr>

                                        <?php } ?>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>
            </div>
