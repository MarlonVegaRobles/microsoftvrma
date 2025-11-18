<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Teléfonos</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #eef1f6;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.12);
        }

        h1 {
            font-size: 28px;
            color: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .btn-agregar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #1565ff;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            transition: 0.2s;
        }

        .btn-agregar:hover {
            background: #0f4bd8;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        thead tr {
            background: #1565ff;
            color: white;
        }

        th, td {
            padding: 14px;
            text-align: left;
            font-size: 15px;
        }

        tbody tr:nth-child(even) {
            background: #f4f6fa;
        }

        tbody tr:hover {
            background: #eaeef5;
        }

        button {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-editar {
            background: #007bff;
            color: white;
        }

        .btn-editar:hover {
            background: #0069d9;
        }

        .btn-eliminar {
            background: #e63946;
            color: white;
        }

        .btn-eliminar:hover {
            background: #c82333;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>📞 <span>Listado de Teléfonos</span></h1>

    <a href="/microsoftvrma/public/telefono/create" class="btn-agregar">
        ✚ Agregar Teléfono
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Persona</th>
                <th>Número</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($telefonos) && is_array($telefonos)): ?>
                <?php foreach ($telefonos as $telefono): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($telefono['idtelefono']); ?></td>
                        <td><?php echo htmlspecialchars($telefono['lapersona']); ?></td>
                        <td><?php echo htmlspecialchars($telefono['numero']); ?></td>

                        <td>
                            <a href="/microsoftvrma/public/telefono/edit?idtelefono=<?php echo htmlspecialchars($telefono['idtelefono']); ?>">
                                <button class="btn-editar">Editar</button>
                            </a>

                            <a href="/microsoftvrma/public/telefono/eliminar?idtelefono=<?php echo htmlspecialchars($telefono['idtelefono']); ?>"
                               onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                <button class="btn-eliminar">Eliminar</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center; color:#555;">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

</body>
</html>
