<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Salud - Inicio</title>

    <!-- CDN de Bootstrap 5 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Centro de Salud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-lg-2" href="/login">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="container my-5">
        <div class="p-5 mb-4 bg-light rounded-3 shadow-sm text-center">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold text-primary">Sistema del Centro de Salud</h1>
                <p class="fs-5 text-muted">Gestión de turnos médicos y registro clínico de pacientes.</p>
                <a href="/login" class="btn btn-primary btn-lg mt-3">Acceder al Sistema</a>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="text-center py-4 text-muted border-top bg-white fixed-bottom">
        <small>&copy; {{ date('Y') }} Centro de Salud. Todos los derechos reservados.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
