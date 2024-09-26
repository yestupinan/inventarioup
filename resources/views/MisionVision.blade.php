
@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


<!--<div style="background-image: url('{{ asset('storage/uploads/fondo.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">!-->
    <div class="container">
        <div style="text-align: justify" >
            
            <h1 class="text-danger mt-5">MISIÓN</h1>
            
            <p class="mt-4">La Universidad de Pamplona como institución pública de orden departamental, asume su compromiso social educativo con las nuevas generaciones, a partir del desarrollo de las funciones de docencia, investigación y extensión, fomentando la creación de conocimiento soportada en la innovación científica y tecnológica, la promoción de la cultura, las artes y las humanidades, con una vocación de liderazgo, calidad y excelencia que impulsa la paz y el desarrollo de las regiones con responsabilidad social y ambiental.</p>
                        
            <h1 class="text-danger mt-5"> VISIÓN</h1>
            <br class="mt-4">
            <p>La Universidad de Pamplona para el 2030, será reconocida como una institución de alta calidad con impacto regional, nacional e internacional, por su liderazgo en los procesos académicos, de investigación y extensión soportados en el desarrollo social y tecnológico y por el desempeño de sus egresados en el medio laboral.</p>
                   
            
            <!-- <p class="small font-italic">Universidad de Pamplona: Formando líderes para la construcción de un nuevo país en paz</p> -->
            <p class="small font-italic text-end" dir="rtl">Universidad de Pamplona: Formando líderes para la construcción de un nuevo país en paz</p>
            <p class="small font-italic text-end" dir="rtl">Institución de Educación sujeta a Inspección y Vigilancia del Ministerio de Educación Nacional</p>
        </div>
        <div class="row">     
            
        </div>
    </div>
</div>

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