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

<main class="main-content">
    <div class="content-form" id="emprendimiento-section">
        <div class="form-header">
            <h2>Información del Emprendimiento</h2>
        </div>

        <form method="POST" action="{{ route('profiles.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del Emprendimiento</label>
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de su emprendimiento" value="{{ old('nombre', $profile->nombre ?? '') }}">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" rows="4" placeholder="Describa su emprendimiento">{{ old('descripcion', $profile->descripcion ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="redes_sociales">Redes Sociales</label>
                <div class="social-inputs">
                    <input type="text" name="redes_sociales" id="redes_sociales" placeholder="Ingrese URL de red social" value="{{ old('redes_sociales', $profile->redes_sociales ?? '') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="datos_contacto">Datos de Contacto</label>
                <input type="tel" name="datos_contacto" id="datos_contacto" placeholder="Teléfono" value="{{ old('datos_contacto', $profile->datos_contacto ?? '') }}">
            </div>

            <div class="form-group">
                <label for="url_geolocalizacion">Geolocalización</label>
                <input type="text" name="url_geolocalizacion" id="url_geolocalizacion" placeholder="URL de Google Maps" value="{{ old('url_geolocalizacion', $profile->url_geolocalizacion ?? '') }}">
            </div>

            <div class="form-group">
                <label for="imagen">Subir Imagen</label>
                <input type="file" name="imagen" id="imagen" accept="image/*">
            </div>

            @if(isset($profile->imagen))
                <div class="form-group">
                    <p>Imagen:</p>
                    <img src="{{ Storage::url($profile->imagen) }}" alt="Imagen del Emprendimiento" style="width: 150px; height: auto;">
                </div>
            @endif

            <!-- Botón de Guardar -->
            <button type="submit" class="btn-green">Guardar Cambios</button>
        </form>
    </div>
</main>


            <!--Ofertas-->
            <div class="content-form" id="vouchers-section">
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <div class="form-header">
                    <h2>Gestión de Ofertas</h2>
                </div>
                <form method="POST" action="{{ route('offers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="descripcion">Descripción de la oferta</label>
                        <textarea name="descripcion" id="descripcion" rows="3" placeholder="Ingrese el tipo de oferta Ej: Porcentaje de descuento u 2x1">{{ old('descripcion_oferta') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha_inicio">Fecha de Inicio</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio') }}">
                    </div> 
                    <div class="form-group">
                        <label for="fecha_vencimiento">Fecha de Vencimiento</label>
                        <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" value="{{ old('fecha_vencimiento') }}">
                    </div>
                    <div class="form-group">
                        <label for="cantidad_vouchers">Cantidad de Vouchers</label>
                        <input type="number" name="cantidad_voucher" id="cantidad_voucher" min="1" placeholder="Ingrese la cantidad de vouchers disponibles" value="{{ old('cantidad_vouchers') }}">
                    </div>
                    <button type="submit" class="btn-green">Guardar oferta</button>
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
