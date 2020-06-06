<!DOCTYPE html>
<html lang="en">
<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-edit" aria-hidden="true"></i> Registro Centro o Bodega</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="center"><?php echo $this->mensaje;?></div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="<?php echo constant('URL'); ?>centro/crear" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="id_centro">Id Centro</label>
                                <input type="number" class="form-control" name="id_centro" id="id_centro">
                                <small id="id_centroHelp" class="form-text text-muted">Ingrese el número de Id Centro</small>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                                <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del Centro</small>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <small id="emailHelp" class="form-text text-muted">Diligencie el email del Centro</small>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="telefono">Telefono</label>
                                <input type="number" class="form-control" name="telefono" id="telefono">
                                <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero del Centro</small>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="whatsapp">Whatsapp</label><br>
                                <input type="radio"  name="whatsapp" id="whatsapp1" value="1" checked> SI
                                <input type="radio"  name="whatsapp" id="whatsapp2" value="2" checked> NO <br>
                                <small id="whatsappHelp" class="form-text text-muted">El numero indicado tiene whatsapp</small>
                            </div>
                            <div class="col-lg-12" style="padding-top: 8px;">
                                <div class="card">
                                    <div class="card-header">
                                    Seleccione Departamento y Ciudad
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="">Departamento</label>
                                                    <select class="js-example-basic-single" name="departamento" id="departamento" style="width: 100%;">  
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="">Ciudad</label>
                                                <select class="js-example-basic-single" name="ciudad" id="ciudad" style="width: 100%;">  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="encargado">Encargado</label>
                                <input type="text" class="form-control" name="encargado" id="encargado">
                                <small id="encargadoHelp" class="form-text text-muted">Persona encargada</small>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" name="lugar" id="lugar">
                                <small id="lugarHelp" class="form-text text-muted">Lugar de ubicacion</small>
                            </div>
                        </div>
                        <div class="text-center ">
                            <button type="submit" class="btn btn-info">Registrar centro</button>
                            <button class="btn btn-danger">Cancelar</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
    </div>
</div><br>

    <?php require 'views/footer.php'; ?>

</body>
</html>