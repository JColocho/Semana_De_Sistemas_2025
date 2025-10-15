<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-cpu me-2"></i>Semana de Sistemas 2025
            </a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Día 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Día 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Día 3</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Día 4</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Día 5</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mi Información</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <?= $content ?? "" ?>
    </main>
        <!-- Pie de página -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Semana de Sistemas 2025</h5>
                    <p>"La innovación es lo que distingue a un líder de los demás."</p>
                    <p>-Steve Jobs.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white mb-3">Conéctate con ASEIS</h5>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/FMOASEIS" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/aseis.fmo" class="social-icon"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Repositorio del proyecto</h5>
                    <a href="https://github.com/JColocho/Semana_De_Sistemas_2025.git" class="social-icon"><i class="bi bi-github"></i></a>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 Semana de Sistemas.</p>
            </div>
        </div>
    </footer>
</body>
</html>