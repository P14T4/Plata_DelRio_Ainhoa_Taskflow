# 📋 Taskflow - Gestor de Tareas

Aplicación web para la gestión de tareas con autenticación de usuarios.

## 🚀 Características
- ✅ **Autenticación de usuarios** - Login seguro con validación
- ✅ **Gestión de tareas** - Crear, visualizar y completar tareas
- ✅ **Dashboard** - Panel de control para el usuario autenticado
- ✅ **Pruebas unitarias** - Tests para validar la lógica de negocio
- ✅ **Arquitectura MVC** - Separación de controladores, modelos y vistas

## 📁 Estructura del Proyecto

```
Plata_DelRio_Ainhoa_Taskflow/
├── app/
│   ├── controllers/
│   │   └── AuthController.php      # Lógica de autenticación
│   ├── models/
│   ├── views/
│   │   ├── login.view.php          # Vista del formulario de login
│   │   ├── tareas.view.php         # Vista del dashboard
│   │   ├── header.php              # Encabezado común
│   │   └── footer.php              # Pie de página común
│   ├── data.php                    # Datos de prueba (usuarios)
│   └── functions.php               # Funciones auxiliares
├── public/
│   ├── index.php                   # Punto de entrada de la aplicación
│   ├── index.php                   # Router principal
│   └── assets/
│       ├── css/                    # Estilos CSS
│       └── js/                     # Scripts JavaScript
├── tests/
│   └── AuthTest.php                # Pruebas unitarias de autenticación
├── run_tests.php                   # Script para ejecutar pruebas
├── composer.json                   # Dependencias del proyecto
├── phpunit.xml                     # Configuración de PHPUnit
└── README.md                       # Este archivo

```

## 👤 Usuarios de Prueba

Puedes usar estas credenciales para probar el login:

| Email | Contraseña |
|-------|-----------|
| usuario1@taskflow.com | pass123 |
| usuario2@taskflow.com | admin |

## 🔐 Funcionalidades de Autenticación

### Login
- Valida email y contraseña contra la base de datos
- Crea una sesión si las credenciales son correctas
- Redirige al dashboard si el login es exitoso
- Muestra error si las credenciales son inválidas

### Dashboard
- Solo accesible si el usuario está autenticado
- Muestra lista de tareas del usuario
- Permite completar tareas (funcionalidad futura)

## 👨‍💼 Autor
**Ainhoa Plata del Río**
