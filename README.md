# DSI (Diseño de Sistemas en Internet)
---

## 📘 README - Plantilla Admin para Sistema Web

### 📌 Descripción

Esta plantilla de panel de administración ha sido desarrollada como parte del curso **Diseño de Sistemas en Internet**. Su objetivo es proporcionar una base funcional y visualmente atractiva para gestionar los distintos módulos de un sistema web. Los estudiantes pueden utilizarla como punto de partida para sus propios proyectos.

---

### 🧩 Características

- Interfaz moderna y responsiva
- Panel de navegación lateral
- Dashboard con estadísticas básicas
- Gestión de modulos (CRUD)
- Integración con gráficos (Chart.js)
- Formularios y validaciones básicas

---

### 🚀 Tecnologías Utilizadas

- HTML5, CSS3, JavaScript (ES6+)
- Bootstrap 5
- Font Awesome
- jQuery
- PHP
- MySQL

---

### 📁 Estructura del Proyecto

```
admin-template/
│
├── assets/
│   └── css
│   └── js
│   └── media
│   └── fonts
├── controller/
│   └── autoload.php
├── core/
│   └── example.db
├── views/
│   ├── header
│   │   └── widget-default.php
│   ├── dashboard
│   │   └── widget-default.php
│   ├── footer
│   │   └── widget-default.php
│   ├── users.html
│   └── settings.html
├── README.md
├── index.php
├── .htaccess
```

---

### ⚙️ Instrucciones de Uso

1. Clona o descarga este repositorio.
2. Abre `index.php` en tu navegador.
3. Personaliza los archivos según las necesidades de tu proyecto.
4. Integra con tu backend si es necesario.


---

### ⚙️ Instrucciones para nuevas vitas

1. Dentro de la carpeta `views/` crea una carpeta con el nombre de la nueva vista que deseas.
2. Dentro de la carpeta de la vista nueva crea un archivo llamado `widget-default.php`.
3. En la carpeta `controller/` en el archivo `autoload.php` en el array `$permitidos = [];` agrega el nombre de la carpeta de la nueva vista.
4. En la carpeta `views/header` en el archivo `mennu.php` agregar el enlace de la nueva vista.

---

### 🎯 Objetivos Académicos

- Aplicar principios de diseño web responsivo.
- Comprender la estructura de un panel de administración.
- Integrar componentes visuales con lógica de negocio.
- Fomentar buenas prácticas de desarrollo frontend.

---

### 📌 Créditos

Desarrollado por [Edrad Godoy] para la asignatura **Diseño de Sistemas en Internet** – [BICU - CUR Bilwi].

---
