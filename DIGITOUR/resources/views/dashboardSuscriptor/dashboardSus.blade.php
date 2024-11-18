<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Emprendimiento</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #1e2936;
            color: white;
            min-height: 100vh;
        }

        .container {
            display: grid;
            grid-template-columns: 250px 1fr;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #1a232e;
            padding: 2rem;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .logo-circle {
            width: 40px;
            height: 40px;
            background-color: #4ade80;
            border-radius: 50%;
        }

        .navbar {
            margin-top: 2rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            margin: 0.5rem 0;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            gap: 1rem;
            color: #a0aec0;
        }

        .nav-item:hover {
            background-color: #2a3441;
            color: white;
        }

        .nav-item.active {
            background-color: #2a3441;
            color: white;
        }

        .main-content {
            padding: 2rem;
        }

        .content-form {
            background-color: #2a3441;
            padding: 2rem;
            border-radius: 10px;
            margin-top: 2rem;
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .btn-green {
            background-color: #4ade80;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-green:hover {
            background-color: #3ec46d;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #a0aec0;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #4a5568;
            background-color: #1e2936;
            border-radius: 6px;
            color: white;
            margin-bottom: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #4ade80;
        }

        .social-inputs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        #vouchers-section {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo-area">
                <div class="logo-circle"></div>
                <h2>Panel Suscriptor</h2>
            </div>
            <nav class="navbar">
                <div class="nav-item active">
                    <span>📊</span>
                    <span>Información del Emprendimiento</span>
                </div>
                <div class="nav-item">
                    <span>🎟️</span>
                    <span>Vouchers y Ofertas</span>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Información del Emprendimiento -->
            <div class="content-form" id="emprendimiento-section">
                <div class="form-header">
                    <h2>Información del Emprendimiento</h2>
                </div>
                <form>
                    <div class="form-group">
                        <label>Nombre del Emprendimiento</label>
                        <input type="text" placeholder="Ingrese el nombre de su emprendimiento">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea rows="4" placeholder="Describa su emprendimiento"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Redes Sociales</label>
                        <div class="social-inputs">
                            <input type="text" placeholder="Ingrese URL de red social">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Datos de Contacto</label>
                        <input type="tel" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <label>Geolocalización</label>
                        <input type="text" placeholder="URL de Google Maps">
                    </div>
                    <button class="btn-green">Guardar Cambios</button>
                </form>
            </div>

            <!--Ofertas-->
            <div class="content-form" id="vouchers-section">
                <div class="form-header">
                    <h2>Gestión de Ofertas</h2>
                </div>
                <form>
                    <div class="form-group">
                        <label>Descripción de la oferta</label>
                        <textarea rows="3" placeholder="Ingrese el tipo de oferta Ej: Porcentaje de descuento u 2x1"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Fecha de Inicio</label>
                        <input type="date">
                    </div>
                    <div class="form-group">
                        <label>Fecha de Vencimiento</label>
                     <input type="date">
                    </div>
                    <div class="form-group">
                        <label>Cantidad de Vouchers</label>
                        <input type="number" min="1" placeholder="Ingrese la cantidad de vouchers disponibles">
                    </div>
                    <button class="btn-green">Guardar oferta</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const navItems = document.querySelectorAll(".nav-item");
            const sections = {
                emprendimiento: document.getElementById("emprendimiento-section"),
                vouchers: document.getElementById("vouchers-section"),
            };

            navItems.forEach((item, index) => {
                item.addEventListener("click", () => {
                    navItems.forEach(nav => nav.classList.remove("active"));
                    item.classList.add("active");

                    if (index === 0) {
                        sections.emprendimiento.style.display = "block";
                        sections.vouchers.style.display = "none";
                    } else {
                        sections.emprendimiento.style.display = "none";
                        sections.vouchers.style.display = "block";
                    }
                });
            });
        });
    </script>
</body>
</html>
