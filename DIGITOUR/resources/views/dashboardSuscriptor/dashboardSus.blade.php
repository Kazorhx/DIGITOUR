<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        /* Estilos generales */
        body {
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .dashboard {
            max-width: 800px;
            margin: 3rem auto;
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Título */
        h2 {
            color: #00bfa5;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        /* Estilo del formulario y entradas */
        .form-control {
            background-color: #f8fafc;
            border: 1px solid #ced4da;
            color: #495057;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 191, 165, 0.5);
            border-color: #00bfa5;
        }
        .form-label {
            color: #666;
            font-weight: 600;
        }

        /* Botón de guardar */
        .btn-success {
            background-color: #00bfa5;
            border-color: #00a590;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-success:hover {
            background-color: #00a590;
            box-shadow: 0 4px 10px rgba(0, 191, 165, 0.3);
        }

        /* Placeholder color */
        ::placeholder {
            color: #adb5bd;
            opacity: 1;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2 class="text-center">Dashboard del Usuario</h2>
    <form id="user-content-form">
        <!-- Nombre del Emprendimiento -->

        <div class="mb-3">
            <label for="businessName" class="form-label">Nombre del Emprendimiento</label>
            <input type="text" class="form-control" id="businessName" name="businessName" required>
        </div>

        <!-- Descripción -->
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <!-- Redes Sociales -->
        <div class="mb-3">
            <label for="socialMedia" class="form-label">Redes Sociales</label>
            <input type="text" class="form-control" id="socialMedia" name="socialMedia" placeholder="Ej: https://facebook.com/miemprendimiento">
        </div>

        <!-- Datos de Contacto -->
        <div class="mb-3">
            <label for="contact" class="form-label">Datos de Contacto</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Email o Teléfono" required>
        </div>

        <!-- Localización -->
        <div class="mb-3">
            <label for="location" class="form-label">Geolocalización</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Url de Geolocalización" required>
        </div>

        <!-- Botón de Guardar -->
        <button type="submit" class="btn btn-success w-100">Guardar Cambios</button>
    </form>
</div>

</body>
</html>
