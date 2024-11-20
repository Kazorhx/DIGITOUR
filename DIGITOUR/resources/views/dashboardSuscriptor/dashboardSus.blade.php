<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Emprendimiento</title>
    <style>
        /* Tu estilo CSS aquí */
        /* Sin cambios respecto al anterior */
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
                <form method="POST" action="{{ route('emprendimiento.update') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Emprendimiento</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de su emprendimiento" value="{{ old('nombre') }}">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="4" placeholder="Describa su emprendimiento">{{ old('descripcion') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="redes_sociales">Redes Sociales</label>
                        <div class="social-inputs">
                            <input type="text" name="redes_sociales" id="redes_sociales" placeholder="Ingrese URL de red social" value="{{ old('redes_sociales') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="datos_contacto">Datos de Contacto</label>
                        <input type="tel" name="datos_contacto" id="datos_contacto" placeholder="Teléfono" value="{{ old('datos_contacto') }}">
                    </div>
                    <div class="form-group">
                        <label for="url_geolocalizacion">Geolocalización</label>
                        <input type="text" name="url_geolocalizacion" id="url_geolocalizacion" placeholder="URL de Google Maps" value="{{ old('url_geolocalizacion') }}">
                    </div>
                    <button type="submit" class="btn-green">Guardar Cambios</button>
                </form>
            </div>

            <!--Ofertas-->
            <div class="content-form" id="vouchers-section">
                <div class="form-header">
                    <h2>Gestión de Ofertas</h2>
                </div>
                <form method="POST" action="{{ route('vouchers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="descripcion_oferta">Descripción de la oferta</label>
                        <textarea name="descripcion_oferta" id="descripcion_oferta" rows="3" placeholder="Ingrese el tipo de oferta Ej: Porcentaje de descuento u 2x1">{{ old('descripcion_oferta') }}</textarea>
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
                        <input type="number" name="cantidad_vouchers" id="cantidad_vouchers" min="1" placeholder="Ingrese la cantidad de vouchers disponibles" value="{{ old('cantidad_vouchers') }}">
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
