# AdminCentral - Laravel Project with Docker

Este proyecto Laravel está configurado con Docker y completamente instalado y funcionando.

## ✅ Estado del Proyecto

**INSTALADO Y FUNCIONANDO** 🎉

### Servicios Activos:
- **Laravel App**: ✅ http://localhost:8000
- **phpMyAdmin**: ✅ http://localhost:8080  
- **MySQL Database**: ✅ localhost:3306

### Base de Datos:
- **Conexión**: MySQL configurada correctamente
- **Tablas creadas**: ✅ (users, cache, jobs, sessions, etc.)
- **Migraciones**: Ejecutadas exitosamente

## 🚀 Comandos Útiles

### Gestión de Contenedores
```bash
# Iniciar servicios
docker compose up -d

# Detener servicios
docker compose down

# Ver estado de contenedores
docker compose ps

# Ver logs
docker compose logs -f [service_name]
```

### Comandos Laravel
```bash
# Ejecutar comandos Artisan
docker compose exec app php artisan [command]

# Ejemplos:
docker compose exec app php artisan migrate
docker compose exec app php artisan make:controller AdminController
docker compose exec app php artisan tinker
```

### Comandos Composer
```bash
# Instalar paquetes
docker compose exec app composer install
docker compose exec app composer require [package]

# Actualizar dependencias
docker compose exec app composer update
```

### Acceso al Contenedor
```bash
# Bash en el contenedor de la aplicación
docker compose exec app bash

# Acceso a MySQL
docker compose exec db mysql -u laravel -ppassword admincentral
```

## 📁 Estructura del Proyecto

```
admincentral/
├── app/                 # Código de la aplicación Laravel
├── config/              # Archivos de configuración
├── database/            # Migraciones y seeders
├── docker/              # Configuraciones Docker
│   ├── nginx/
│   └── php/
├── public/              # Archivos públicos (punto de entrada)
├── resources/           # Vistas, assets, lang
├── routes/              # Definición de rutas
├── storage/             # Logs, cache, uploads
├── tests/               # Tests automatizados
├── docker-compose.yml   # Orquestación de servicios
├── Dockerfile          # Imagen PHP personalizada
└── install-laravel.sh  # Script de instalación (ya ejecutado)
```

## 🔒 Credenciales

### Base de Datos MySQL
- **Host**: `db` (dentro de Docker) / `localhost:3306` (desde host)
- **Base de datos**: `admincentral`  
- **Usuario**: `laravel`
- **Contraseña**: `password`
- **Root password**: `root`

### phpMyAdmin
- **URL**: http://localhost:8080
- **Usuario**: `laravel` o `root`
- **Contraseña**: `password` o `root`

## 🛠️ Desarrollo

### Workflow típico:
1. Crear controladores: `docker compose exec app php artisan make:controller`
2. Crear modelos: `docker compose exec app php artisan make:model`  
3. Crear migraciones: `docker compose exec app php artisan make:migration`
4. Ejecutar migraciones: `docker compose exec app php artisan migrate`

### Hot Reload:
Los archivos se sincronizan automáticamente entre host y contenedor, por lo que los cambios se reflejan inmediatamente.

## 📝 Próximos Pasos

1. **Desarrollo**: Comenzar a crear controladores y vistas para el panel administrativo
2. **Autenticación**: Implementar sistema de login/registro
3. **Middleware**: Configurar middleware para proteger rutas admin
4. **Frontend**: Integrar un framework CSS (Bootstrap, Tailwind, etc.)

---

**¡El proyecto está listo para desarrollo!** 🚀