<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
</head>

<body style="font-family: Arial, sans-serif; background:#eef1f6; margin:0; padding:30px;">

<div style="
    max-width:1100px; 
    margin:auto; 
    background:white; 
    padding:30px; 
    border-radius:12px; 
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
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
        🧑‍🤝‍🧑 <span>Listado de Personas</span>
    </h1>

    <a href="/microsoftvrma/public/persona/create" style="text-decoration:none;">
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
            margin-bottom:20px;
        "
        onmouseover="this.style.background='#174ad1'"
        onmouseout="this.style.background='#1e5bff'">
            ✚ Agregar Persona
        </button>
    </a>

    <table style="width:100%; border-collapse:collapse; font-size:15px;">
        <thead>
            <tr style="background:#1e5bff; color:white; text-align:left;">
                <th style="padding:14px;">ID</th>
                <th style="padding:14px;">Nombres</th>
                <th style="padding:14px;">Apellidos</th>
                <th style="padding:14px;">Nacimiento</th>
                <th style="padding:14px;">Sexo</th>
                <th style="padding:14px;">Estado Civil</th>
                <th style="padding:14px;">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($personas) && is_array($personas)): ?>
                <?php foreach ($personas as $persona): ?>
                    <tr style="background:white; border-bottom:1px solid #e2e2e2;">
                        <td style="padding:12px;"><?= htmlspecialchars($persona['idpersona']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($persona['nombres']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($persona['apellidos']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($persona['fechanacimiento']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($persona['elsexo']); ?></td>
                        <td style="padding:12px;"><?= htmlspecialchars($persona['elestadocivil']); ?></td>

                        <td style="padding:12px;">

                            <a href="/microsoftvrma/public/persona/view?idpersona=<?= htmlspecialchars($persona['idpersona']); ?>">
                                <button style="
                                    background:#17a2b8;
                                    color:white;
                                    padding:6px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    margin-right:5px;
                                ">👁 Ver</button>
                            </a>

                            <a href="/microsoftvrma/public/persona/edit?idpersona=<?= htmlspecialchars($persona['idpersona']); ?>">
                                <button style="
                                    background:#ffc107;
                                    color:black;
                                    padding:6px 12px;
                                    border:none;
                                    border-radius:6px;
                                    cursor:pointer;
                                    margin-right:5px;
                                ">✏ Editar</button>
                            </a>

                            <a href="/microsoftvrma/public/persona/deleteForm?id=<?= htmlspecialchars($persona['idpersona']); ?>"
                               onclick="return confirm('¿Estás seguro de eliminar esta persona?');">
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
                    <td colspan="7" style="
                        padding:15px; 
                        text-align:center; 
                        background:#f4f4f4; 
                        color:#555;
                    ">
                        No hay registros de personas disponibles.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>
</body>
</html>