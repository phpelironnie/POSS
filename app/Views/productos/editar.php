
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>
                        <?php \Config\Services::validation()->listErrors(); ?>
                        <form method="POST" action="<?php echo base_url(); ?>/productos/actualizar" autocomplete="off">
                        <?php csrf_field(); ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <lavel>Código</lavel>
                                        <input class="form-control" id="codigo" name="codigo" type="text" autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <lavel>Nombre</lavel>
                                        <input class="form-control" id="nombre" name="nombre" type="text" required />
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <lavel>Unidad</lavel>
                                        <select class="form-control" id="id_unidad" name="id_unidad" required>
                                            <option value="">Selecionar unidad</option>
                                            <?php foreach($unidades as $unidad) { ?>
                                                <option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <lavel>Categorias</lavel>
                                        <select class="form-control" id="id_categoria" name="id_categoria" required>
                                            <option value="">Selecionar categoría</option>
                                            <?php foreach($categorias as $categoria) { ?>
                                                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <lavel>Precio venta</lavel>
                                        <input class="form-control" id="precio_venta" name="precio_venta" type="text" autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <lavel>Precio compra</lavel>
                                        <input class="form-control" id="precio_compra" name="precio_compra" type="text" required />
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <lavel>Stock mínimo</lavel>
                                        <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" autofocus required />
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <lavel>Es inventariable</lavel>
                                        <select name="inventariable" id="inventariable" class="form-control">
                                            <option value="1">Si</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </main>
