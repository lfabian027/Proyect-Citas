<?= $this->extend('plantilla/layout')?>
<?= $this->section('titulo')?>
<?php echo $title;?>
<?= $this->endSection()?>

<?= $this->section('contenido')?>
    <br>

<?=$this->include('cita/tabla')?>


<?= $this->endSection()?>


<?= $this->section('scripts')?>
<?=$this->include('cita/citas')?>
<?= $this->endSection()?>