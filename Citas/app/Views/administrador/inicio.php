<script>
    const colorFondo = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(125, 9, 255, 0.2)',
        'rgba(54, 22, 25, 0.2)',
        'rgba(15, 6, 123, 0.2)',
        'rgba(235, 72, 200, 0.2)',
        'rgba(203, 21, 25, 0.2)',
        'rgba(185, 15, 164, 0.2)'
    ];
    const colorBoder = [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(125, 9, 255, 1)',
        'rgba(54, 22, 25, 1)',
        'rgba(15, 6, 123, 1)',
        'rgba(235, 72, 200, 1)',
        'rgba(203, 21, 25, 1)',
        'rgba(185, 15, 164, 1)'
    ];

  

   


    function Cargarfunciones() {
        totalGraficos()
        let Url = "<?php echo base_url('citas/reporte') ?>";
        $.ajax({
            'type': 'get',
            url: Url,
            dataType: 'json',
            success: function(res) {
                let currentTime = new Date();
                let mensajeTotalUsers = '<h2> <i class="fas fa-users"></i> &nbsp;' + parseFloat(res.total_users[0]['TOTAL'])+ '&nbsp;<h2><h5>TOTAL USUARIOS </h5>';
                let users = document.getElementById("total_users");
                users.innerHTML = mensajeTotalUsers;

                let mensajeTotalCitaMes = '<h2> <i class="fas fa-users"></i> &nbsp;' + parseFloat(res.total_cita_mes[0]['TOTAL'])+ '&nbsp;<h2><h5>TOTAL CITA MES '+meseslabel((currentTime.getMonth()+1)+"")+'</h5>';
                let citaMes = document.getElementById("total_citas_mes");
                citaMes.innerHTML = mensajeTotalCitaMes;


                let mensajeTotalCitaMesDia = '<h2> <i class="fas fa-users"></i> &nbsp;' + parseFloat(res.total_cita_dia_mes[0]['TOTAL'])+ '&nbsp;<h2><h5>TOTAL CITA MES '+dialabel((currentTime.getDay())+"")+'</h5>';
                let citaMesDias = document.getElementById("total_citas_dia");
                citaMesDias.innerHTML = mensajeTotalCitaMesDia;

            }
        });

    }


    function totalGraficos() {
        let Url = "<?php echo base_url('citas/reporte') ?>";
        let ctx = document.getElementById('myAreaChart').getContext('2d');

        $.ajax({
            'type': 'get',
            url: Url,
            dataType: 'json',
            success: function(res) {
                let total = [];
                let labels = [];
                
                res['total'].forEach(tot => {
                
                    total.push(tot.TOTAL);
                    labels.push(meseslabel(tot.mes));
                });
                total.push(0);
                new Chart(ctx, {
                    type: 'bar', // Tipo de gráfica
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Estadistica de citas',
                            data: total,
                            backgroundColor: colorFondo,
                            borderColor: colorBoder,
                            borderWidth: 2
                        }]

                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        title: {
                            display: true,
                            text: "Citas",
                        }
                    }
                });
            }
        });
    }


    function meseslabel(mes) {
        let mensaje="";
        switch (mes) {
            case '1':
                mensaje= "ENERO";
                break;
            case '2':
                mensaje= "FEBRERO";
                break;
            case '3':
                return "MARZO";
                break;
            case '4':
                mensaje="ABRIL";
                break;
            case '5':
               mensaje="MAYO";
                break;
            case '6':
                mensaje="JUNIO";
                break;
            case '7':
               mensaje="JULIO";
                break;
            case '8':
                mensaje="AGOSTO";
                break;
            case '9':
                mensaje="SEPTIEMBRE";
                break;
            case '10':
                mensaje="OCTUBRE";
                break;
            case '11':
               mensaje="NOVIEMBRE";
                break;
            case '12':
                mensaje="DICIEMBRE";
                break;
                
            default:
                // code block
        }

        return mensaje;
    }

    
    function dialabel(mes) {
        let mensaje="";
        switch (mes) {
            case '1':
                mensaje= "LUNES";
                break;
            case '2':
                mensaje= "MARTES";
                break;
            case '3':
                return "MIERCOLES";
                break;
            case '4':
                mensaje="JUEVES";
                break;
            case '5':
               mensaje="VIERNES";
                break;
            case '6':
                mensaje="SABADO";
                break;
            case '7':
               mensaje="DOMINGO";
                break;
            case '8':
                mensaje="AGOSTO";
                break;
            default:
                // code block
        }

        return mensaje;
    }

    window.onload = Cargarfunciones;
</script>