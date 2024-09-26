<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!--<div style="background-image: url('{{ asset('css/fondo.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">!-->
    <div class="container mt-4">
        
        <h1>Lista de Ordenadores</h1>
        <br>
        <div class="row">
            @foreach ($ordenadores as $ordenador)
            
                <div class="col-md-6 mb-3">
                    <a href="#" class="btn btn-success btn-lg w-100 py-4 d-flex flex-column align-items-center" 
                        data-id="{{ $ordenador->id_ordenador }}" 
                        data-bs-toggle="modal" data-bs-target="#Detalles_Ordenador">
                        <!--<i class="bi bi-pc-display-horizontal display-2"></i>!-->
                        <img src="{{ asset('images/ordenadores.png') }}" class="img-fluid" style="max-width: 180px;">  
                        <span >{{ $ordenador->numero_en_salon }}</span> 
                    </a>
                    
                </div>
            @endforeach
            
        </div>    
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Detalles_Ordenador" tabindex="-1" aria-labelledby="Detalles_OrdenadorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Detalles_OrdenadorLabel">Detalles del Ordenador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 

                <table class="table table-hover">
                    <tbody id="caracteristicas-body">

                    </tbody>

                    <tbody id="observaciones-body">

                    </tbody>
                </table>
                            
            </div>                
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('Detalles_Ordenador');
    
        modal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;  
            var id_ordenador = button.getAttribute('data-id');  
    
            fetch('/ordenadores/' + id_ordenador + '/caracteristicas')
                .then(response => response.json())
                .then(data => {
                    var tbody = document.getElementById('caracteristicas-body');
                    tbody.innerHTML = '';  
    
                    data.forEach(function(caracteristica) {
                        var row = `
                                <tr>
                                    <td><p class="mb-0 me-2 fw-bold">ID ORDENADOR:</p></td>
                                    <td><p class="mb-0">${caracteristica.id_ordenador}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="mb-0 me-2 fw-bold">OFFICE:</p></td>
                                    <td><p class="mb-0">${caracteristica.office}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="mb-0 me-2 fw-bold">SO:</p></td>
                                    <td><p class="mb-0">${caracteristica.so}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">CPU:</p> </td>
                                    <td><p class="mb-0">${caracteristica.cpu}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">RAM:</p></td>
                                    <td><p class="mb-0">${caracteristica.ram}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL CPU:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_cpu}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL MONITO:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_monitor}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL TECLADO:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_teclado}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL MOUSE:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_mouse}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL HDD:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_disco_duro_mecanico}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DEL SSD:</p></td>
                                    <td><p class="mb-0">${caracteristica.serial_disco_solido}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">SERIAL DE LA CAMARA:</p></td>
                                    <td><p class="mb-0">${caracteristica.camara_web}</p></td>
                                </tr>
                                <tr>
                                    <td><p class="fw-bold">ESTABILIZADORES:</p></td>
                                    <td><p class="mb-0">${caracteristica.estabilizadores}</p></td>
                                </tr>
                                
                                `;
                                
                        tbody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error al obtener las características:', error));

            
            // Fetch observaciones
            fetch('/ordenadores/' + id_ordenador + '/observaciones')
                .then(response => response.json())
                .then(observaciones => {
                    var observacionesBody = document.getElementById('observaciones-body');
                    observacionesBody.innerHTML = '';

                    observaciones.forEach(function(observacion) {
                        var row = `
                            <tr>
                                <td><p class="fw-bold">FECHA:</p></td>
                                <td><p class="mb-0">${observacion.fecha}</p></td>
                            </tr>
                            <tr>
                                <td><p class="fw-bold">OBSERVACION:</p></td>
                                <td><p class="mb-0">${observacion.observacion}</p></td>
                            </tr>
                        `;
                        observacionesBody.innerHTML += row;
                    });
                })
                .catch(error => console.error('Error al obtener las observaciones:', error));    
        });
    });
</script>


<!-- Footer solo para la pantalla de inicio -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Sedes</h5>

                <h6 style="text-decoration: underline">Sede Principal Pamplona</h6>
                <p>
                    Km 1 Vía Bucaramanga Ciudad Universitaria<br>
                    Pamplona - Norte de Santander<br>
                    Teléfono: (+57) 3153429495 - 3160244475
                </p>
                <h6 style="text-decoration: underline">Sede Villa del Rosario</h6>
                <p>
                    Autopista Internacional Vía Los Álamos  Villa Antigua <br>
                    Villa del Rosario - Norte de Santander <br>
                    Teléfono: (+57) 3153429495 - 3160244475 <br>
                    villarosario@unipamplona.edu.co
                </p>

            </div>

            <div class="col-md-4">
                <h5>Contastos</h5>
                <h6 style="text-decoration: underline">Atención al Ciudadano y Transparencia</h6>
                <p>
                    Teléfono: (+57) 3153429495 - 3160244475 <br>
                    atencionalciudadano@unipamplona.edu.co
                </p>

                <ul class="list-unstyled">
                    <li><a href="https://tawk.to/chat/618304b86bb0760a4941063f/1fjjsksnu" class="text-white" target="_blank">Atención en linea</a></li>
                </ul>

            </div>
            
            <div class="col-md-4">
                <h5>Síguenos</h5>
                <a href="https://www.facebook.com/unipamplona" class="text-white me-2" target="_blank" style="font-size: 1.5rem"><i class="bi bi-facebook"></i></a>
                <a href="https://x.com/i/flow/login?redirect_after_login=%2FUnipamplona" class="text-white me-2" target="_blank" style="font-size: 1.5rem"><i class="bi bi-twitter"></i></a>
                <a href="https://www.instagram.com/unipamplona/" class="text-white" target="_blank" style="font-size: 1.5rem"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/@UnipamplonaTv" class="text-white" target="_blank" style="font-size: 1.5rem"><i class="bi bi-youtube"></i></a>
                <a href="https://play.google.com/store/apps/developer?id=CIADTI+-+UNIVERSIDAD+DE+PAMPLONA" class="text-white" target="_blank" style="font-size: 1.5rem"><i class="bi bi-google-play"></i></a>
            
                <h6 style="text-decoration: underline">Mapa de ubicación Sede principal</h6>
                
                <a href="https://www.unipamplona.edu.co/unipamplona/portalIG/home_1/recursos/01_general/21112023/mapa-campusppal2023.jpg" target="_blank">
                    <img src="https://www.unipamplona.edu.co/unipamplona/portalIG/home_1/recursos/01_general/21112023/mapa-campusppal2023.jpg" style="width: 220px; height: 40px; margin-righ: 10px; border-radius: 6px; object-fit: cover; object-position: center;">
                </a>
                
            </div>
        </div>
        <div class="text-center mt-3">
            &copy; 2024 Institución de Educación sujeta a Inspección y Vigilancia del Ministerio de Educación Nacional
        </div>
    </div>
</footer>
@endsection