<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?> My PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
        }

        header {
            background-color: #4a90e2;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }

        main {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .task-item {
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            background-color: #eee;
            transition: 0.3s;
        }

        .task-item.completed {
            text-decoration: line-through;
            opacity: 0.6;
        }

        .priority-alta {
            border-left: 6px solid #e74c3c;
        }

        .priority-media {
            border-left: 6px solid #f1c40f;
        }

        .priority-baja {
            border-left: 6px solid #2ecc71;
        }
    </style>
</head>
    <body>
        <header>
        <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
        </header>

        <main>
            <h2>Perfil del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $userName; ?></p>
        <p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
        <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>