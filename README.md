<!-- Moodle-plugin-motivacion — README -->
<div align="center">

# ✦ Moodle-plugin-motivacion ✦
### Plugin Moodle · Bloque de frases motivacionales · PHP

![PHP](https://img.shields.io/badge/PHP-8.2-ff9f43?style=flat-square&logo=php&logoColor=0f0a0d)
![Moodle](https://img.shields.io/badge/Moodle-4.0+-ff6b9d?style=flat-square)
![Version](https://img.shields.io/badge/versión-1.0-ffe066?style=flat-square)
![DAM](https://img.shields.io/badge/Prácticas-Datacontrol_Tecnología-f97316?style=flat-square)

</div>

---

## 📋 Descripción

Plugin de tipo `block` para Moodle que muestra una **frase motivacional aleatoria** relacionada con programación y aprendizaje, con un botón para generar una nueva frase sin recargar toda la página.

Desarrollado durante las prácticas FCT en Datacontrol Tecnología de la Información.

---

## ✨ Funcionalidades

- 💡 **15 frases motivacionales** sobre programación y aprendizaje
- 🔄 **Botón "Nueva frase"** — genera una frase diferente a la actual via URL param
- 📍 **Multi-contexto** — compatible con página principal, cursos, módulos y escritorio (`my`)
- 🧩 **Integración nativa** — usa la API de bloques de Moodle (`block_base`)

---

## 🛠️ Stack

![PHP](https://img.shields.io/badge/PHP_8.2-ff9f43?style=flat-square&logo=php&logoColor=0f0a0d)
![Moodle](https://img.shields.io/badge/Moodle_Block_API-ff6b9d?style=flat-square)

---

## 📁 Estructura del plugin

```
moodle/blocks/motivacion/
├── block_motivacion.php     # Lógica del bloque: frases, renderizado HTML, botón
├── version.php              # Metadatos del plugin
├── db/
└── lang/
    └── es/block_motivacion.php
```

---

## 🚀 Instalación

1. Copiar la carpeta `motivacion` en `moodle/blocks/`
2. Acceder al panel de administración de Moodle (`/admin`)
3. Moodle detecta el plugin y muestra la pantalla de actualización
4. Hacer clic en **Actualizar base de datos** → **Continuar**
5. Añadir el bloque desde cualquier curso o página de Moodle

> Requiere Moodle 4.0+ y PHP 8.2

---

<div align="center">
<sub>Desarrollado durante prácticas FCT en Datacontrol Tecnología de la Información · CFGS DAM · CESUR Málaga ☕</sub>
</div>
