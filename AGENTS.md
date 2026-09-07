# Taekwondo Fabra — Guía para Agentes IA

Fichero de contexto multi-herramienta (estándar [AGENTS.md](https://agents.md)). Compatible de forma nativa con Antigravity/Gemini, Codex/ChatGPT y Cursor.

**Taekwondo Fabra** ([taekwondofabra.es](https://taekwondofabra.es)) es la web oficial y plataforma digital del club **Taekwondo Fabra Valencia**. Sus funcionalidades principales son la presencia corporativa del club, el visor web interactivo de temarios de examen por edades y grados, y la generación automatizada de temarios oficiales en PDF de alta fidelidad con códigos QR dinámicos para el estudio de Poomsaes.

Stack tecnológico principal: **Laravel 12 (PHP 8.2+) + Livewire 4.4 + TailwindCSS 4 + Vite 7 + DOMPDF 3.1 + MariaDB/MySQL + PHPUnit 11**.

La especificación formal de arquitectura y dominio reside en `docs/sdd/` (en español, metodología SDD: todo cambio o nueva funcionalidad se documenta antes de implementarse).

---

## Comandos Habituales

```bash
# Servidor local y desarrollo (Herd en taekwondofabra.test)
composer dev                  # Servidor concurrentemente con Vite, queue y logs
npm run dev                   # Servidor de desarrollo reactivo de Vite
npm run build                 # Compilación para producción (Tailwind 4 + Vite 7)

# Calidad de código y tests
php artisan test              # Ejecutar tests sobre SQLite en memoria (aislado)
php artisan test --filter=ExampleTest

# Cachés y optimización
php artisan optimize:clear    # Limpiar todas las cachés
php artisan config:cache      # Cachear configuración
php artisan route:cache       # Cachear rutas
php artisan view:cache        # Cachear vistas Blade
```

---

## Reglas de Trabajo Obligatorias

1. **Código e identificadores en inglés; textos de UI, documentación y conversación en español.**
2. **Protección Absoluta de la Base de Datos en Tests (Regla de Oro):**
   - Los tests corren **exclusivamente** sobre SQLite en memoria (`phpunit.xml`: `<env name="DB_CONNECTION" value="sqlite"/>` y `<env name="DB_DATABASE" value=":memory:"/>`).
   - **PROHIBIDO** ejecutar `migrate:fresh`, `db:wipe` o comandos destructivos contra las bases de datos de trabajo o producción.
3. **Metodología SDD (Spec-Driven Development):**
   - Todo requisito o ajuste estructural se formaliza primero en `docs/sdd/`.
   - Antes de iniciar cambios de código, avisar: *"Voy a redactar la especificación y preparar la rama para este cambio"*.
4. **Commits y Pull Requests:**
   - Prefijo en mayúsculas: `ADD:`, `CHANGE:`, `FIX:`, `REFACTOR:` o `DOCS:` + descripción clara en español.
   - Trabajo en rama descriptiva (`feat/`, `fix/`) con Pull Request final documentada.
5. **Node.js en Servidor de Producción (Plesk):**
   - En producción se utiliza Node 22/20 vía NVM/Plesk (`/opt/plesk/node/22/bin`).
   - Livewire 3/4 sirve scripts virtuales que no deben ser bloqueados por la intercepción de estáticos de Nginx en Plesk.

---

## Arquitectura de la Aplicación

- `routes/web.php`: Rutas públicas (`/`, `/conocenos`, `/preguntas-frecuentes`, `/{id}poomsae`, `/liga-hockey-manopla`, legales) y endpoint de generación/stream de PDF (`/examenes/descargar-pdf/{ageGroup}/{belt}`).
- `app/Livewire/`:
  - `ExamViewer.php`: Componente Livewire interactivo que gestiona la selección de grupo de edad (`iniciacion`, `cadete`, `junior-adultos`) y cinturón, desglosando técnicas con jerarquía lingüística (coreano/español) e incrustando reproductores de YouTube para los Poomsaes requeridos.
- `app/Services/`:
  - `InstagramService.php`: Integración con Instagram Graph API para alimentar el feed de publicaciones del club.
- `resources/data/`:
  - `exam_syllabus.json`: Base de conocimiento central de los temarios de examen en formato JSON plano estructurado por grupos de edad y cinturones.
- `resources/views/`:
  - `pdf/exam.blade.php`: Plantilla HTML/CSS estricta para DOMPDF, estructurada en tablas de 2 columnas con códigos QR dinámicos.
  - `livewire/exam-viewer.blade.php`: Vista reactiva del visor de exámenes.
- `docs/sdd/`: Especificaciones técnicas modulares y vigentes del sistema.

---

## Skills Disponibles

Ubicados en `.agents/skills/<nombre>/SKILL.md`:

| Skill | Cuándo Utilizarlo |
|---|---|
| `temario-examenes-pdf` | Modificar la estructura de `exam_syllabus.json`, maquetar plantillas DOMPDF, tablas a 2 columnas, saltos de página o generación de QR para Poomsaes. |
| `visor-livewire-examenes` | Trabajar en la reactividad de `ExamViewer.php`, selector por edades y cinturones, parsing de terminología coreano/español o embebido de vídeos. |

---

## Workflows

Playbooks paso a paso en `.agents/workflows/`:

- `nueva-funcionalidad.md` — SDD en `docs/sdd/` → Componentes Livewire/Blade → Verificación en SQLite → Build Vite.
- `pre-pr.md` — Checklist de calidad (PHPUnit, SQLite y Vite build) antes de push y apertura de PR.
