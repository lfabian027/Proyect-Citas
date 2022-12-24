<script>

$("#formularioCitas").on("submit",function (e){
    e.preventDefault();
    let Url = "<?php echo base_url('citas/add') ?>";
    $.ajax({
        'type': 'post',
        url: Url,
        data:$("#formularioCitas").serialize(),
        dataType: "json",
        success:function (res){
            console.log(res)

            if (res.success) {

                $('#formularioCitas').trigger('reset');
                toastr["success"](res.success, "Cita");


            }
            clearErrors()
            $.each(res.error, function (prefix, val) {
                $('#formularioCitas').find('span.' + prefix + '_error').text(val);
            });
        }
    })
})
function clearErrors() {
    $('#formularioCitas').find('span.nombre_error').text("");
    $('#formularioCitas').find('span.apellido_error').text("");
    $('#formularioCitas').find('span.celular_error').text("");
    $('#formularioCitas').find('span.correo_error').text("");

}



</script>
