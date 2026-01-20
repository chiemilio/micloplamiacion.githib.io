<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONAFE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CONAFE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../src/pages/registro.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 80px;">
  <h1>CONAFE</h1>
  <img src="assets/img/logo.jpeg" alt="CONAFE" class="img-fluid">
        <p>
            Bienvenido al Consejo Nacional de Fomento Educativo. Este sitio web permite a los estudiantes 
            y al personal de control escolar acceder a sus funciones correspondientes mediante una cuenta personal.
        </p>
    </div>

    <!-- Carrusel Bootstrap -->
  <div id="conafeCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Imagen 1 -->
        <div class="carousel-item active">
          <img src="assets/img/grafica.png" class="d-block w-100" alt="Clase en aula" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modal1">
        </div>
        <!-- Imagen 2 -->
        <div class="carousel-item">
          <img src="assets/img/academica2.svg" class="d-block w-100" alt="Laboratorio" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modal2">
        </div>
        <!-- Imagen 3 -->
        <div class="carousel-item">
          <img src="assets/img/biblioteca.svg" class="d-block w-100" alt="Biblioteca" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modal3">
        </div>
        <!-- Imagen 4 -->
        <div class="carousel-item">
          <img src="assets/img/evento_academico.svg" class="d-block w-100" alt="Evento académico" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modal4">
        </div>
        <!-- Imagen 5 -->
        <div class="carousel-item">
          <img src="assets/img/deportes.svg" class="d-block w-100" alt="Deportes" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modal5">
        </div>
      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#conafeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
  <button class="carousel-control-next" type="button" data-bs-target="#conafeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <!-- Modales para cada imagen -->
    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal1Label">Clase en aula</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/imagen1.svg" class="img-fluid mb-3" alt="Clase en aula">
            <p>Los estudiantes participan activamente en clases presenciales, fomentando el aprendizaje colaborativo y el desarrollo académico.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal2Label">Laboratorio</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="/src/img/academica2.jpg" class="img-fluid mb-3" alt="Laboratorio">
            <p>Las prácticas en laboratorio permiten a los alumnos aplicar conocimientos teóricos en entornos reales y experimentales.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal3Label">Biblioteca</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/academica3.svg" class="img-fluid mb-3" alt="Biblioteca">
            <p>La biblioteca ofrece recursos académicos y espacios de estudio para el desarrollo intelectual de la comunidad estudiantil.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 4 -->
    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal4Label">Evento académico</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/academica4.svg" class="img-fluid mb-3" alt="Evento académico">
            <p>Los eventos académicos promueven la integración, el intercambio de ideas y el reconocimiento de logros estudiantiles.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 5 -->
    <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal5Label">Deportes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/academica5.svg" class="img-fluid mb-3" alt="Deportes">
            <p>La actividad deportiva fomenta el trabajo en equipo, la disciplina y el bienestar físico entre los estudiantes.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Sección de tarjetas promocionales -->
    <div class="container my-5">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Tarjeta Biblioteca -->
        <div class="col">
          <div class="card h-100">
            <img src="assets/img/biblioteca_card.svg" class="card-img-top" alt="Biblioteca">
            <div class="card-body">
              <h5 class="card-title">Biblioteca</h5>
              <p class="card-text">Accede a una amplia colección de libros, revistas y recursos digitales para apoyar tu formación académica.</p>
              <a href="#" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <!-- Tarjeta Orientación académica -->
        <div class="col">
          <div class="card h-100">
            <img src="assets/img/orientacion_card.svg" class="card-img-top" alt="Orientación académica">
            <div class="card-body">
              <h5 class="card-title">Orientación académica</h5>
              <p class="card-text">Recibe asesoría personalizada para tu trayectoria educativa y profesional dentro de CONAFE.</p>
              <a href="#" class="btn btn-primary">Solicitar cita</a>
            </div>
          </div>
        </div>
        <!-- Tarjeta Extensión universitaria -->
        <div class="col">
          <div class="card h-100">
            <img src="assets/img/extension_card.svg" class="card-img-top" alt="Extensión universitaria">
            <div class="card-body">
              <h5 class="card-title">Extensión universitaria</h5>
              <p class="card-text">Participa en actividades culturales, deportivas y sociales que enriquecen tu experiencia universitaria.</p>
              <a href="#" class="btn btn-primary">Inscribirse</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>