<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'TaskFlow'; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        header {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        header h1 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .user-info {
            font-size: 14px;
            opacity: 0.9;
            margin-top: 10px;
        }
        main {
            max-width: 700px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 24px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
        }
        button {
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        button[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 100%;
        }
        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .logout-btn {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
            transition: all 0.3s;
        }
        .logout-btn:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            text-align: center;
            margin-top: 10px;
        }
        p[style*="color:red"] {
            color: #e74c3c !important;
            font-weight: 600;
        }
        ul {
            list-style: none;
        }
        .task-item {
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 5px;
            border-left: 4px solid #ddd;
            background-color: #f8f9fa;
            transition: all 0.2s;
        }
        .task-item:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .task-item.completed {
            text-decoration: line-through;
            opacity: 0.6;
            background-color: #f0f0f0;
        }
        .task-item.priority-alta {
            border-left-color: #e74c3c;
            background-color: #fdeaea;
        }
        .task-item.priority-media {
            border-left-color: #f39c12;
            background-color: #fef5e7;
        }
        .task-item.priority-baja {
            border-left-color: #3498db;
            background-color: #eaf2f8;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo SITE_NAME ?? 'TaskFlow'; ?></h1>
        <?php if (isset($_SESSION['user_nombre'])): ?>
            <div class="user-info">
                Bienvenido, <strong><?php echo $_SESSION['user_nombre']; ?></strong>
                <br>
                <a href="index.php?accion=logout" class="logout-btn">Cerrar Sesión</a>
            </div>
        <?php endif; ?>
    </header>
    <main>
        
