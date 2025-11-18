<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Estados Civiles</title>
</head>
<body style="font-family: Arial; background:#eef1f5; margin:0; padding:30px;">

<div style="
    max-width: 900px;
    margin: auto;
    background:white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.12);
">

    <h1 style="text-align:center; color:#333; margin-bottom:25px;">
        📄 Listado de Estados Civiles
    </h1>

    <a href="/microsoftvrma/app/views/estadocivil/create.php" style="text-decoration:none;">
        <button style="
            background: linear-gradient(45deg, #2563eb, #1d4ed8);
            color:white;
            padding:12px 20px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:600;
            margin-bottom:20px;
            box-shadow:0 3px 8px rgba(0,0,0,0.2);
            display:flex;
            align-items:center;
            gap:8px;
        ">
            ✚ Agregar Estado Civil
        </button>
    </a>

    <table style="width:100%; border-collapse:collapse; margin-top:10px;">
        <thead>
            <tr style="background:#2563eb; color:white;">
                <th style="padding:12px;">ID</th>
                <th style="padding:12px;">Nombre</th>
                <th style="padding:12px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($estadosciviles) && is_array($estadosciviles)): ?>
                <?php foreach ($estadosciviles as $estadocivil): ?>
                    <tr style="background:#f9f9f9; border-bottom:1px solid #ddd;">
                        <td style="padding:12px; text-align:center;">
                            <?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>
                        </td>

                        <td style="padding:12px; text-align:center;">
                            <?php echo htmlspecialchars($estadocivil['nombre']); ?>
                        </td>

                        <td style="padding:12px; text-align:center;">

                            <a href="/microsoftvrma/public/estadocivil/edit?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>">
                                <button style="
                                    background:#facc15;
                                    color:#000;
                                    padding:7px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    font-size:13px;
                                    font-weight:600;
                                    margin-right:6px;
                                    box-shadow:0 2px 5px rgba(0,0,0,0.15);
                                ">
                                    ✏ Editar
                                </button>
                            </a>

                            <a href="/microsoftvrma/public/estadocivil/eliminar?idestadocivil=<?php echo htmlspecialchars($estadocivil['idestadocivil']); ?>"
                               onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                <button style="
                                    background:#e63946;
                                    color:white;
                                    padding:7px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    font-size:13px;
                                    font-weight:600;
                                    box-shadow:0 2px 5px rgba(0,0,0,0.15);
                                ">
                                    🗑 Eliminar
                                </button>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr style="background:#f3f3f3;">
                    <td colspan="3" style="padding:15px; text-align:center; color:#555;">
                        No hay registros disponibles.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>

