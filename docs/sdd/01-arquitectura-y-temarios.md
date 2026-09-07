# SDD-001: Arquitectura Global y Módulos de Taekwondo Fabra

- **Estado:** Activo / Vigente
- **Fecha:** Septiembre 2026
- **Autor:** Guillo Tudela Marco & Antigravity
- **Proyecto:** Taekwondo Fabra Valencia ([taekwondofabra.es](https://taekwondofabra.es))

---

## 1. Visión General del Sistema

Taekwondo Fabra es la plataforma web corporativa y educativa del club de artes marciales **Taekwondo Fabra** en Valencia. Su propósito es doble:
1. **Canal Institucional:** Presentar el club, historia, horarios, ligas deportivas (ej. Hockey Manopla), ubicación y vías de contacto a futuros alumnos y familias.
2. **Plataforma Educativa de Exámenes:** Permitir a los alumnos y maestros consultar el temario técnico oficial por grado y grupo de edad de forma interactiva (web) y descargar/imprimir fichas de examen de alta calidad con códigos QR dinámicos para estudiar Poomsaes en vídeo.

---

## 2. Stack Tecnológico

| Componente | Tecnología | Notas |
|---|---|---|
| **Framework Backend** | Laravel 12 (PHP 8.2+) | Rutas limpias, controladores ligeros, soporte de streaming PDF |
| **Capa Reactiva** | Livewire 4.4 | Sin necesidad de SPA pesada; componentes fullstack reactivos |
| **Estilos & Diseño** | Tailwind CSS 4 | Configuración moderna de Vite con `@tailwindcss/vite` |
| **Compilación Frontend** | Vite 7 | Empaquetado ultrarrápido de assets |
| **Motor de PDF** | DOMPDF 3.1 (`barryvdh/laravel-dompdf`) | Renderizado de PDFs imprimibles con tipografías estrictas |
| **Base de Datos** | MariaDB / SQLite | Para tests se aísla 100% en SQLite `:memory:` |
| **Despliegue & Servidor** | VPS Plesk (Nginx + PHP 8.3/8.4 + Node 22) | Automatizado mediante GitHub Actions SSH |

---

## 3. Módulos Principales

### 3.1. Base de Conocimiento del Temario (`resources/data/exam_syllabus.json`)
En lugar de crear un esquema relacional sobredimensionado para datos de examen que raramente cambian en tiempo de ejecución, el temario reside en un fichero JSON estructurado.
- **Grupos de edad:**
  - `iniciacion`: Alumnos de 3 a 7 años.
  - `cadete`: Alumnos de 8 a 13 años.
  - `junior-adultos`: Alumnos a partir de 14 años.
- **Campos técnicos:** `physical` (pruebas físicas), `stances` (posiciones), `blocks` (defensas), `attacks` (ataques de mano), `kicks` (patadas), `poomsae` (forma requerida), `poomsae_video_url` (vídeo de demostración en YouTube), `kicks_app` y `comb_app` (aplicaciones técnicas).

### 3.2. Visor Interactivo Web (`App\Livewire\ExamViewer`)
Componente Livewire situado en la página principal o sección de temarios:
- Permite alternar con un solo clic entre las edades y cinturones disponibles.
- Formatea los términos coreanos y su traducción al español separando las cadenas por el delimitador `:`.
- Incrusta el reproductor de YouTube de forma responsiva para facilitar el aprendizaje visual del Poomsae.
- Incluye el botón directo de impresión/descarga en PDF.

### 3.3. Generador de Temario Imprimible en PDF (`/examenes/descargar-pdf/{ageGroup}/{belt}`)
Genera un documento PDF listo para imprimir en A4:
- **Estructura a 2 columnas:** Construida con tablas HTML para evitar fallos de renderizado en DOMPDF.
- **Evitación de saltos huérfanos:** Reglas CSS `page-break-inside: avoid` en todas las secciones clave.
- **Código QR dinámico:** Lee el vídeo del Poomsae y genera un código QR usando un generador vectorial/rasterizado para que el estudiante escanee la hoja de papel con su smartphone y acceda al instante al vídeo demostrativo.

### 3.4. Integración con Instagram (`App\Services\InstagramService`)
Servicio encargado de consultar periódicamente la API de Instagram Graph / Basic Display para incrustar las publicaciones más recientes del club en la web sin saturar los límites de cuota de la API.

---

## 4. Pipeline de CI/CD y Despliegue en Producción

El despliegue está 100% automatizado mediante GitHub Actions (`.github/workflows/deploy.yml`):
- Se activa en cada `push` o `merge` a la rama `main`.
- Conecta por SSH con el VPS Plesk.
- Sincroniza el código forzando un reset limpio con `git reset --hard origin/main`.
- Instala dependencias Composer con `--no-dev` y `--optimize-autoloader`.
- Compila con Vite usando el Node 22 provisto por Plesk.
- Limpia y reconstruye cachés (`config:cache`, `route:cache`, `view:cache`).
- Garantiza cero tiempos de caída inconsistentes activando el modo mantenimiento durante la ejecución.
