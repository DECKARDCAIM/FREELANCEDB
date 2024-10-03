<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /freelance/web/views/pages/login.php'); // Redirige a la página de inicio de sesión
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        #wrapper {
            display: flex;
            transition: all 0.3s ease;
        }

        #sidebar-wrapper {
            width: 250px;
            background-color: #343a40;
            color: white;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        #sidebar-wrapper.collapsed {
            width: 80px;
        }

        #sidebar-wrapper.collapsed .list-group-item {
            text-align: center;
        }

        #sidebar-wrapper.collapsed .list-group-item i {
            margin-right: 0;
        }

        #sidebar-wrapper.collapsed .list-group-item span {
            display: none;
        }

        #sidebar-wrapper .list-group-item {
            background-color: #343a40;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        #sidebar-wrapper .list-group-item:hover {
            background-color: #495057;
        }

        #sidebar-wrapper .sidebar-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.5rem;
            padding: 1rem;
            background-color: #212529;
        }

        #sidebar-wrapper.collapsed .sidebar-heading {
            font-size: 1.5rem;
            padding: 0.5rem;
        }

        #page-content-wrapper {
            width: 100%;
            padding: 20px;
        }

        .navbar {
            padding: 1rem;
        }

        .btn-toggle {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-toggle:hover {
            background-color: #0056b3;
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
            border: none;
            margin-left: 10px;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        .btn-web {
            background-color: #28a745;
            color: white;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form-group button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .list-group-item i {
            margin-right: 10px;
        }

        /* Ajuste del ícono ☰ en el panel lateral */
        .sidebar-heading .btn-toggle {
            padding: 0;
            background: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-end bg-dark" id="sidebar-wrapper">
            <div class="sidebar-heading text-white">
                <button class="btn-toggle" id="menu-toggle">☰</button>
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#home">
                    <i class="fas fa-home"></i> <span>Dashboard</span>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#portfolio">
                    <i class="fas fa-briefcase"></i> <span>Portafolio</span>
                </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#contact">
                    <i class="fas fa-envelope"></i> <span>Contactanos</span>
                </a>
            </div>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <a href="/freelance/web/" class="btn btn-web ms-auto">Ir a la web</a>
                    <a href="/freelance/web/views/pages/logout.php" class="btn btn-logout">Cerrar sesión</a>
                </div>
            </nav>

            <div class="container-fluid" id="content">
                <div id="home" class="section">
                    <h1>Dashboard</h1>
                    <p>Bienvenido al Dashboard. Selecciona una opción del menú para ver el contenido.</p>
                </div>

                <div id="portfolio" class="section" style="display:none;">
                    <h1>Portafolio</h1>
                    <p>Esta es la sección de tu portafolio.</p>
                </div>

                <div id="contact" class="section" style="display:none;">
                    <h1>Contactanos</h1>
                    <p>Esta es la sección de contacto.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Alternar el menú de la barra lateral
        document.getElementById("menu-toggle").addEventListener("click", function () {
            document.getElementById("sidebar-wrapper").classList.toggle("collapsed");
        });

        // Cambiar entre secciones
        const sections = document.querySelectorAll('.section');
        document.querySelectorAll('.list-group-item').forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault();
                sections.forEach(section => section.style.display = 'none');
                const target = item.getAttribute('href').substring(1);
                const targetSection = document.getElementById(target);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
