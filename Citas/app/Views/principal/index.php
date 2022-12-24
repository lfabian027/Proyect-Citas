<!DOCTYPE html>
<html lang="en">

<head>
    <?=$this->include('plantilla/header') ?>
</head>

<body class="sb-nav-fixed">
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="/">CITAS INSTITUTO SUPERIOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/auth">LOGIN</a>
            </li>

        </ul>
    </div>
</nav>

<div class="container">
    <br>
    <h2>FORMULARIO DE CITAS</h2>
    <br>
    <form name="formularioCitas" id="formularioCitas">
        <div class="form-group row">
            <div class="col-sm-6 mb-6 mb-sm-0">
                <label class="small mb-1">NOMBRE : </label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre">
                <span class="text-danger error-text nombre_error"></span>
            </div>
            <div class="col-sm-6 mb-6 mb-sm-0">
                <label class="small mb-1">APELLIDO : </label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese el apellido">
                <span class="text-danger error-text apellido_error"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-6 mb-sm-0">
                <label class="small mb-1">CORREO : </label>
                <input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese el correo">
                <span class="text-danger error-text correo_error"></span>
            </div>
            <div class="col-sm-6 mb-6 mb-sm-0">
                <label class="small mb-1">CELULAR : </label>
                <input type="text" class="form-control" name="celular" id="celular" placeholder="Ingrese el celular">
                <span class="text-danger error-text celular_error"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label class="small mb-1">CIUDAD : </label>
                <select class="form-control" id="id_ciudad" name="id_ciudad">
                    <?php foreach ($ciudades as $ciudad){ ?>
                        <option value="<?php  echo $ciudad['id_ciudad'] ?>"> <?php echo $ciudad['ciudad']?></option>
                    <?php } ?>
                </select>
                <span class="text-primary error-text id_ciudad_error"></span>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label class="small mb-1">USUARIO : </label>
                <select class="form-control" id="id_rol" name="id_rol">
                    <?php foreach ($roles as $rol){ ?>
                        <option value="<?php  echo $rol['id_rol'] ?>"> <?php echo $rol['rol']?></option>
                    <?php } ?>
                </select>
                <span class="text-primary error-text id_rol_error"></span>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label class="small mb-1">CARRERA :</label>
                <select class="form-control" id="id_carrera" name="id_carrera">
                    <?php foreach ($carreras as $carrera){ ?>
                        <option value="<?php  echo $carrera['id_carrera'] ?>"> <?php echo $carrera['carrera']?></option>
                    <?php } ?>

                </select>
                <span class="text-primary error-text id_carrera_error"></span>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <label class="small mb-1">NIVEL : </label>
                <select class="form-control" id="id_nivel" name="id_nivel">

                    <?php foreach ($niveles as $nivel){ ?>
                       <option value="<?php  echo $nivel['id_nivel'] ?>"> <?php echo $nivel['nivel']?></option>
                    <?php } ?>
                </select>
                <span class="text-primary error-text id_nivel_error"></span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" >Registrar Cita</button>
        </div>
    </form>
</div>


<?=$this->include('js/metodos')?>
<?=$this->include('principal/principal')?>
<?= $this->renderSection('scripts')?>

<?=$this->include('plantilla/links')?>
</body>

</html>

