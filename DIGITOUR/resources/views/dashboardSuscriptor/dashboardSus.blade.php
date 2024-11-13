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

        /* Nuevo estilo para el navbar */
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
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #4a5568;
            background-color: #1e2936;
            border-radius: 6px;
            color: white;
            margin-bottom: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4ade80;
        }

        .social-inputs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo-area">
                <div class="logo-circle"></div>
                <h2>Panel Admin</h2>
            </div>
            <!-- Nuevo navbar -->
            <nav class="navbar">
                <div class="nav-item active">
                    <span>📊</span>
                    <span>Dashboard</span>
                </div>
            </nav>
        </aside>

        <main class="main-content">
            <div class="content-form">
                <div class="form-header">
                    <h2>Información del Emprendimiento</h2>
                    <button class="btn-green">Guardar Cambios</button>
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
                            <input type="text" placeholder="Facebook URL">
                            <input type="text" placeholder="Instagram URL">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Datos de Contacto</label>
                        <input type="tel" placeholder="Teléfono">
                        <input type="email" placeholder="Correo electrónico">
                    </div>

                    <div class="form-group">
                        <label>Geolocalización</label>
                        <input type="text" placeholder="URL de Google Maps">
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>