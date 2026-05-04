# 🚀 Admin Central

<div align="center">

![Admin Central Logo](https://img.shields.io/badge/Admin%20Central-Enterprise%20Platform-blue?style=for-the-badge&logo=laravel)

**Enterprise Multi-Tenant Management Platform for ApiBrisas Ecosystem**

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.3+-blue?style=flat&logo=php)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-3.x-38B2AC?style=flat&logo=tailwind-css)](https://tailwindcss.com)
[![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=flat&logo=docker)](https://docker.com)
[![VitalAccess](https://img.shields.io/badge/VitalAccess-RBAC-green?style=flat)](https://github.com/Brisask)

[🌐 **Demo en Vivo**](http://localhost:8000) • [📚 **Documentación**](#📚-documentación) • [🐳 **Docker Setup**](#🐳-instalación-con-docker) • [🌍 **Bilingual**](#🌍-soporte-bilingüe)

</div>

---

## 🌟 **Características Principales**

### 🏢 **Gestión Multi-Tenant Avanzada**
- **Aislamiento Completo**: Base de datos dedicada por tenant
- **Subdominios Personalizados**: Configuración automática de dominios
- **Almacenamiento Aislado**: Archivos completamente separados por tenant
- **API Integration**: Conexión seamless con ApiBrisas ecosystem

### 🎨 **Diseño de Vanguardia**
- **🌈 Tailwind CSS Avanzado**: Animaciones sofisticadas y efectos 3D
- **✨ Glassmorphism UI**: Diseño moderno con efectos de cristal
- **🎭 Animaciones Complejas**: Transforms, parallax y micro-interacciones
- **📱 Responsive Design**: Mobile-first con breakpoints optimizados
- **🎨 Gradient Systems**: Paletas de colores profesionales

### 🌍 **Soporte Bilingüe Completo**
- **🔄 Cambio Dinámico**: Español ↔ Inglés en tiempo real
- **💾 Preferencias Persistentes**: LocalStorage para recordar idioma
- **⌨️ Atajos de Teclado**: `Alt+L` para cambio rápido
- **🔄 Transiciones Suaves**: Animaciones al cambiar idioma
- **📝 Contenido Completo**: Toda la interfaz traducida

### 🔐 **Seguridad Empresarial**
- **🛡️ VitalAccess RBAC**: Control de acceso basado en roles
- **🔑 Laravel Breeze**: Sistema de autenticación robusto
- **🔒 Validación Avanzada**: Sanitización y validación de datos
- **🔐 Cifrado**: Datos sensibles protegidos
- **📊 Audit Logs**: Registro de actividades

### ⚡ **Performance & DevOps**
- **🐳 Docker Ready**: Containerización completa
- **⚡ Optimización**: Cache, CDN y compresión
- **📈 Escalabilidad**: Arquitectura preparada para crecer
- **🔍 Monitoring**: Logs y métricas integradas
- **🚀 CI/CD Ready**: Preparado para despliegue automático

---

## 🛠️ **Stack Tecnológico**

<table>
<tr>
<td align="center" width="150px">
<img src="https://laravel.com/img/logomark.min.svg" width="40" height="40" alt="Laravel"/>
<br><strong>Laravel 11</strong>
<br><sub>Framework Backend</sub>
</td>
<td align="center" width="150px">
<img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" width="40" height="40" alt="PHP"/>
<br><strong>PHP 8.3+</strong>
<br><sub>Lenguaje</sub>
</td>
<td align="center" width="150px">
<img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" width="40" height="40" alt="Tailwind"/>
<br><strong>Tailwind CSS</strong>
<br><sub>Framework UI</sub>
</td>
<td align="center" width="150px">
<img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel_Livewire_logo.svg" width="40" height="40" alt="Alpine"/>
<br><strong>Alpine.js</strong>
<br><sub>JavaScript</sub>
</td>
</tr>
<tr>
<td align="center">
<img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" width="40" height="40" alt="MySQL"/>
<br><strong>MySQL 8</strong>
<br><sub>Base de Datos</sub>
</td>
<td align="center">
<img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" width="40" height="40" alt="Docker"/>
<br><strong>Docker</strong>
<br><sub>Containerización</sub>
</td>
<td align="center">
<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg" width="40" height="40" alt="Vite"/>
<br><strong>Vite</strong>
<br><sub>Build Tool</sub>
</td>
<td align="center">
<img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="40" height="40" alt="GitHub"/>
<br><strong>GitHub</strong>
<br><sub>Control de Versiones</sub>
</td>
</tr>
</table>

---

## 🚀 **Instalación Rápida**

### 📋 **Prerequisitos**
- PHP 8.3+
- Composer 2.x
- Node.js 18+
- MySQL 8.0+
- Docker (opcional)

### ⚡ **Setup Local**

```bash
# 1️⃣ Clonar repositorio
git clone https://github.com/Brisask/admincentral.git
cd admincentral

# 2️⃣ Instalar dependencias
composer install
npm install

# 3️⃣ Configurar entorno
cp .env.example .env
php artisan key:generate

# 4️⃣ Configurar base de datos (.env)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=admincentral
DB_USERNAME=root
DB_PASSWORD=

# 5️⃣ Ejecutar migraciones
php artisan migrate --seed

# 6️⃣ Build assets
npm run build

# 7️⃣ Iniciar servidor
php artisan serve
```

🎉 **¡Listo!** Visita: `http://localhost:8000`

---

## 🐳 **Instalación con Docker**

### 🔥 **Setup Completo en 1 Comando**

```bash
# Clonar y ejecutar
git clone https://github.com/Brisask/admincentral.git
cd admincentral
docker-compose up -d

# Configurar aplicación
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
docker-compose exec app npm run build
```

### 📊 **Servicios Docker**
- **🌐 Aplicación**: `http://localhost:8000`
- **🗄️ Base de Datos**: MySQL en puerto `3306`
- **🚀 Nginx**: Servidor web optimizado
- **📧 Mailhog**: Testing de emails en puerto `8025`

---

## 🎮 **Demo & Credenciales**

### 🔑 **Acceso Demo**
```
📧 Email:    admin@admincentral.com
🔐 Password: AdminCentral2024!
```

### 🌟 **Características Demo**
- ✅ **Gestión de Tenants**: Crear, editar, eliminar
- ✅ **Dashboard Analytics**: Métricas en tiempo real  
- ✅ **Sistema RBAC**: Roles y permisos
- ✅ **API Integration**: Conexión con ApiBrisas
- ✅ **Responsive Design**: Mobile & Desktop
- ✅ **Bilingual Support**: ES/EN

---

## 🌍 **Soporte Bilingüe**

### 🔄 **Cambio de Idioma**
- **🖱️ Click**: Botón de idioma en navegación
- **⌨️ Teclado**: `Alt + L` para cambio rápido
- **💾 Persistente**: Se recuerda la preferencia

### 🎯 **Cobertura de Traducción**
- ✅ Interfaz completa (100%)
- ✅ Mensajes de error
- ✅ Notificaciones
- ✅ Emails transaccionales
- ✅ Documentación

---

## 📚 **Documentación**

### 🔧 **Configuración Avanzada**

<details>
<summary><strong>⚙️ Variables de Entorno</strong></summary>

```bash
# 🌐 Aplicación
APP_NAME="Admin Central"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://admincentral.brisask.com

# 🗄️ Base de Datos
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=admincentral_prod
DB_USERNAME=admin
DB_PASSWORD=secure_password

# 📧 Email
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password

# 🔗 ApiBrisas API
APIBRISAS_URL=http://api.brisask.com
APIBRISAS_TOKEN=your_api_token

# 🔐 VitalAccess
VITALACCESS_ENABLED=true
VITALACCESS_CACHE_PERMISSIONS=true
```
</details>

<details>
<summary><strong>🏗️ Arquitectura del Sistema</strong></summary>

```
🏢 Admin Central
├── 🎨 Frontend (Blade + Tailwind)
├── ⚡ Backend (Laravel 11)
├── 🗄️ Database (MySQL)
├── 🔗 API Layer (ApiBrisas)
├── 🛡️ Security (VitalAccess RBAC)
└── 🐳 Infrastructure (Docker)
```

**🔄 Flujo de Datos:**
1. Usuario → Frontend (Tailwind UI)
2. Frontend → Laravel Controller
3. Controller → Service Layer
4. Service → ApiBrisas API
5. Response → Frontend → Usuario
</details>

<details>
<summary><strong>🔌 API Endpoints</strong></summary>

```bash
# 🏢 Tenants
GET    /api/tenants          # Listar tenants
POST   /api/tenants          # Crear tenant
GET    /api/tenants/{id}     # Obtener tenant
PUT    /api/tenants/{id}     # Actualizar tenant
DELETE /api/tenants/{id}     # Eliminar tenant

# 👥 Usuarios
GET    /api/users            # Listar usuarios
POST   /api/users            # Crear usuario
GET    /api/users/{id}       # Obtener usuario
PUT    /api/users/{id}       # Actualizar usuario

# 📊 Analytics
GET    /api/stats            # Estadísticas generales
GET    /api/stats/tenants    # Estadísticas de tenants
GET    /api/stats/users      # Estadísticas de usuarios
```
</details>

---

## 🤝 **Contribuir**

### 🌟 **¿Cómo Contribuir?**

1. **🍴 Fork** el repositorio
2. **🌿 Crea** una rama feature (`git checkout -b feature/amazing-feature`)
3. **💻 Desarrolla** tu feature
4. **✅ Testing** (`php artisan test`)
5. **📝 Commit** (`git commit -m 'Add amazing feature'`)
6. **🚀 Push** (`git push origin feature/amazing-feature`)
7. **🎯 Pull Request**

### 📋 **Estándares de Código**
- **PSR-12** para PHP
- **ESLint** para JavaScript
- **Prettier** para formateo
- **PHPStan** nivel 8
- **Tests** obligatorios para nuevas features

---

## 📄 **Licencia**

Este proyecto es software propietario de **Brisask Organization**.

**© 2024 Brisask. Todos los derechos reservados.**

---

## 🎯 **Roadmap**

### 🔮 **Próximas Funcionalidades**

- [ ] 📊 **Dashboard Avanzado**: Analytics en tiempo real
- [ ] 🔔 **Sistema de Notificaciones**: Push, email, SMS
- [ ] 📱 **Mobile App**: React Native companion
- [ ] 🤖 **AI Integration**: Chat bot y automatizaciones
- [ ] 📈 **Advanced Reporting**: Reportes personalizables
- [ ] 🔗 **API Gateway**: Gestión centralizada de APIs
- [ ] 🌐 **Multi-región**: Soporte para múltiples regiones
- [ ] 🔐 **SSO Integration**: SAML, OAuth2, LDAP

### 🏁 **Hitos 2024**
- ✅ **Q1**: Lanzamiento Alpha
- 🔄 **Q2**: Sistema bilingüe y Docker
- 📅 **Q3**: API v2 y Mobile App
- 📅 **Q4**: AI Integration y Multi-región

---

<div align="center">

### 💝 **¡Gracias por usar Admin Central!**

**Desarrollado con ❤️ por el equipo de [Brisask](https://github.com/Brisask)**

[![⭐ Star en GitHub](https://img.shields.io/github/stars/Brisask/admincentral?style=social)](https://github.com/Brisask/admincentral)
[![🐛 Report Bug](https://img.shields.io/badge/-Report%20Bug-red?style=flat&logo=github)](https://github.com/Brisask/admincentral/issues)
[![💡 Request Feature](https://img.shields.io/badge/-Request%20Feature-blue?style=flat&logo=github)](https://github.com/Brisask/admincentral/issues)

</div>