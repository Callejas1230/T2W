<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000, #0a0a0a, #101010);
            color: #d0eaff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-neon {
            background-color: #0d0d0d;
            border-radius: 15px;
            padding: 30px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 0 25px rgba(0, 191, 255, 0.25);
        }
        .card-neon h2 {
            text-align: center;
            color: #80dfff;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>
<div class="card-neon">
    <h2>Añadir Persona</h2>
    <form method="POST" action="guardar.php">
        <div class="mb-3">
            <label class="form-label">CI</label>
            <input type="text" name="ci" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
</body>
</html>
