<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Direcciones</title>
</head>

<body style="font-family: Arial, sans-serif; background:#eef1f6; margin:0; padding:30px;">

<div style="
    max-width:1000px; 
    margin:auto; 
    background:white; 
    padding:30px; 
    border-radius:12px; 
    box-shadow:0 6px 20px rgba(0,0,0,0.1);
">

    <h1 style="
    font-size:28px; 
    color:#222; 
    display:flex; 
    align-items:center; 
    justify-content:center; 
    gap:10px; 
    margin-bottom:25px;
">
    📄 <span>Listado de Direcciones</span>
</h1>


    <a href="/microsoftvrma/public/direccion/create" style="text-decoration:none;">
        <button style="
            background:#1e5bff; 
            color:white; 
            padding:10px 20px; 
            border:none; 
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:bold;
            transition:0.2s;
        "
        onmouseover="this.style.background='#174ad1'"
        onmouseout="this.style.background='#1e5bff'">
            ✚ Agregar Dirección
        </button>
    </a>

    <table style="width:100%; border-collapse:collapse; margin-top:20px; font-size:15px;">
        <thead>
            <tr style="background:#1e5bff; color:white;">
                <th style="padding:14px; text-align:left;">ID</th>
                <th style="padding:14px; text-align:left;">Persona</th>
                <th style="padding:14px; text-align:left;">Nombre</th>
                <th style="padding:14px; text-align:left;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($direccions) && is_array($direccions)): ?>
                <?php foreach ($direccions as $direccion): ?>
                    <tr style="background:white; border-bottom:1px solid #e2e2e2;">
                        <td style="padding:12px;"><?= htmlspecialchars($direccion['iddireccion']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($direccion['lapersona']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($direccion['nombre']); ?></td>

                        <td style="padding:12px;">

                            <a href="/microsoftvrma/public/direccion/edit?iddireccion=<?= htmlspecialchars($direccion['iddireccion']); ?>">
                                <button style="
                                    background:#ffc107;
                                    color:black;
                                    padding:6px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    margin-right:6px;
                                ">✏ Editar</button>
                            </a>

                            <a href="/microsoftvrma/public/direccion/eliminar?iddireccion=<?= htmlspecialchars($direccion['iddireccion']); ?>"
                               onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                <button style="
                                    background:#dc3545;
                                    color:white;
                                    padding:6px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                ">🗑 Eliminar</button>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="4" style="
                        padding:15px; 
                        text-align:center; 
                        color:#666; 
                        background:#f4f4f4;
                    ">
                        No hay registros disponibles.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>