
<script>
    console.log('asdsadasd')
    //Cargar datos para la tabla
    let tablaCitas = $('#tablaCitas').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ Citas",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registro de roles del _START_ al _END_ de un total de _TOTAL_",
            "infoEmpty": "Mostrando registro del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado un todal de _MAX_ re)",
            "sSearch": "Buscar : ",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            }
        },
    });


    function loadCitas() {
        tablaCitas.row().clear();
        let Url = "<?php echo base_url('citas/all') ?>";
        $.ajax({
            'type': 'get',
            url: Url,
            dataType: 'json',
            success: function (res) {
                console.log(res)
                let cont = 1;
                let temp = "";

                res['citas'].forEach(cita => {


                    temp = tablaCitas.row.add([cont,cita.nombre+" "+cita.apellido,cita.correo,cita.celular,cita.ciudad,cita.rol,cita.carrera,cita.nivel,cita.fecha

                    ]);
                    cont++;

                });
                tablaCitas.draw(true);
            }
        });
    }


    window.onload = loadCitas;
</script>
