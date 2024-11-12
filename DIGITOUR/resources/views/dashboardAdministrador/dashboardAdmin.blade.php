<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-bg: #1e2936;
            --secondary-bg: #2a3746;
            --accent-green: #37f34d;
            --accent-cyan: #3ff6ce;
        }

        body {
            background-color: var(--primary-bg);
            color: white;
        }

        .sidebar {
            background-color: var(--secondary-bg);
            height: 100vh;
            position: fixed;
            width: 250px;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }

        .stat-card {
            background-color: var(--secondary-bg);
            border-radius: 15px;
            padding: 1.5rem;
            color: white;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .green-glow {
            background-color: rgba(102, 238, 118, 0.826);
            color: var(--accent-green);
        }

        .cyan-glow {
            background-color: rgba(68, 246, 207, 0.785);
            color: var(--accent-cyan);
        }

        .data-card {
            background-color: var(--secondary-bg);
            border-radius: 15px;
            margin-top: 2rem;
        }

        .nav-link {
            color: #fff;
            padding: 0.8rem 1.5rem;
            margin: 0.2rem 0;
            border-radius: 8px;
        }

        .nav-link:hover, .nav-link.active {
            background-color: var(--primary-bg);
        }

        .nav-link i {
            margin-right: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background-color: var(--accent-green);
            border-radius: 50%;
        }

        .form-control, .form-select {
            background-color: var(--primary-bg);
            border: 1px solid rgba(216, 206, 206, 0.999);
            color: white;
        }

        .form-control:focus, .form-select:focus {
            background-color: var(--primary-bg);
            color: white;
            border-color: var(--accent-green);
            box-shadow: 0 0 0 0.25rem rgba(55, 243, 77, 0.25);
        }

        .table {
            color: white;
        }

        .btn-green {
            background-color: var(--accent-green);
            color: white;
        }

        .btn-green:hover {
            background-color: #2cb33e;
            color: white;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar px-4 py-5">
    <div class="d-flex align-items-center mb-5 ps-2">
        <div class="user-avatar me-3"></div>
        <span class="fw-semibold">Panel Admin</span>
    </div>

    <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="bi bi-house"></i> Inicio</a>
        <a class="nav-link" href="#"><i class="bi bi-people"></i> Usuarios</a>
    </nav>
</div>

<!-- Contenido Principal -->
<div class="main-content">
    <!-- Tarjetas de Estadísticas -->
    <div class="row">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0">285</h3>
                        <p class="text-muted mb-0">Usuarios Totales</p>
                    </div>
                    <div class="stat-icon green-glow">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0">197</h3>
                        <p class="text-muted mb-0">Usuarios Activos</p>
                    </div>
                    <div class="stat-icon cyan-glow">
                        <i class="bi bi-person-check fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0">352</h3>
                        <p class="text-muted mb-0">Nuevos Usuarios</p>
                    </div>
                    <div class="stat-icon green-glow">
                        <i class="bi bi-person-plus fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de Usuarios y Formulario -->
    <div class="data-card p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0">Gestión de Usuarios</h5>
            <button class="btn btn-green" data-bs-toggle="modal" data-bs-target="#userModal">
                <i class="bi bi-person-plus"></i> Nuevo Usuario
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irá el código PHP para mostrar los usuarios -->
                  <!-- <?php
                        // Ejemplo: Conectar a la base de datos y obtener los usuarios
                        // $usuarios = obtenerUsuarios(); // función ficticia
                        // foreach($usuarios as $usuario) {
                        //     echo "<tr>";
                        //     echo "<td>{$usuario['id']}</td>";
                        //     echo "<td>{$usuario['nombre']}</td>";
                        //     echo "<td>{$usuario['apellido']}</td>";
                        //     echo "<td>{$usuario['correo']}</td>";
                        //     echo "<td>{$usuario['telefono']}</td>";
                        //     echo "<td>{$usuario['rol']}</td>";
                        //     echo "<td>{$usuario['estado']}</td>";
                        //     echo "<td>
                        //             <a href='#' class='btn btn-sm btn-light'>Editar</a>
                        //             <a href='#' class='btn btn-sm btn-danger'>Eliminar</a>
                        //           </td>";
                        //     echo "</tr>";
                        // }
                    ?> >-->

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal para Nuevo Usuario -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title">Nuevo Usuario</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="row g-3">
                        <!-- Columna 1 -->
                        <div class="col-md-6">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="correo_electronico" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" name="telefono">
                        </div>

                        <!-- Columna 2 -->
                        <div class="col-md-6">
                            <label class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sexo</label>
                            <select class="form-select" name="sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rol</label>
                            <select class="form-select" name="rol">
                                <option value="admin">Administrador</option>
                                <option value="user">Usuario</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estado</label>
                            <select class="form-select" name="estado">
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-green">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
