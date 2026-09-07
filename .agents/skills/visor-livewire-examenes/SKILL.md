---
name: visor-livewire-examenes
description: Guía para el desarrollo y mantenimiento del componente interactivo ExamViewer en Livewire 4, selector de edades y cinturones y reproductores de vídeo.
---

# Skill: Visor Interactivo de Exámenes (Livewire)

Este skill define la arquitectura y consideraciones técnicas del componente `app/Livewire/ExamViewer.php` y su vista asociada `resources/views/livewire/exam-viewer.blade.php`.

## 1. Funcionamiento del Componente

- **Propiedades Reactivas:**
  - `$selectedAgeGroup`: Grupo de edad activo (`iniciacion`, `cadete`, `junior-adultos`).
  - `$selectedBelt`: Cinturón actualmente seleccionado dentro del grupo.
  - `$syllabusData`: Datos cargados en memoria desde `resources/data/exam_syllabus.json`.
- **Carga de Datos:** En el método `mount()`, el componente lee el JSON y valida la existencia de los grupos.
- **Acciones Livewire:**
  - Métodos como `selectAgeGroup($group)` y `selectBelt($belt)` que actualizan la vista sin recargar la página.

## 2. Experiencia de Usuario y Renderizado

- **Tarjetas de Técnicas:** Las técnicas se renderizan separando visualmente el término coreano de la traducción española.
- **Reproductor de Poomsaes:** Si el examen seleccionado requiere un Poomsae y tiene `poomsae_video_url`, se renderiza un `<iframe>` responsivo de YouTube para que el estudiante pueda ver la ejecución en vídeo.
- **Botón de Descarga / Impresión:** Enlace directo a la ruta `/examenes/descargar-pdf/{ageGroup}/{belt}` para obtener la versión oficial imprimible generada por DOMPDF.

## 3. Particularidades de Producción (Plesk + Livewire)

- En servidores con Plesk y Nginx, asegurarse de que las peticiones a `/livewire/livewire.js` o endpoints de actualización no sean interceptadas erróneamente como archivos estáticos 404. Livewire gestiona sus propios scripts virtuales.
