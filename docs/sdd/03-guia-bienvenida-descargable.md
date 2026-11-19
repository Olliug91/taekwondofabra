# SDD-003: Descargable de Guía de Bienvenida y Normativa para Nuevos Miembros

- **Estado:** En Proceso / Aprobado
- **Fecha:** Noviembre 2026
- **Autor:** Guillo Tudela Marco & Antigravity
- **Proyecto:** Taekwondo Fabra Valencia ([taekwondofabra.es](https://taekwondofabra.es))

---

## 1. Contexto y Justificación

El club dispone de una **Guía de Bienvenida y Normativa** oficial en formato PDF (A4 a doble cara, 2 páginas) dirigida a nuevos alumnos y familias, donde se resumen horarios, cuotas, normas básicas del dojang, licencia federativa, equipación y acceso al área privada / app BasicSoft Club.

Para que cualquier interesado pueda consultarla, imprimirla o compartirla por WhatsApp de forma directa y con una URL limpia y permanente, se integra el PDF en la plataforma web con accesos visibles en los puntos de mayor intención de nuevos miembros.

---

## 2. Arquitectura y Ruta Canónica

### 2.1. Ubicación del Documento
- **Archivo fuente versionado en Git:** `resources/docs/Guia_Bienvenida_Taekwondo_Fabra.pdf`
- Al residir dentro de `resources/docs/` (siguiendo el mismo patrón que `resources/data/exam_syllabus.json`), se despliega automáticamente con GitHub Actions sin depender de enlaces simbólicos de `storage` ni reglas de estáticos de Nginx/Plesk.

### 2.2. Endpoint Público (`routes/web.php` y `app/Http/Controllers/PageController.php`)
- **URL limpia:** `GET /guia-bienvenida`
- **Controlador:** `PageController::welcomeGuide()`
- **Nombre de ruta:** `guide.welcome`
- **Comportamiento:** Sirve el archivo con `response()->file(...)` y cabeceras:
  - `Content-Type: application/pdf`
  - `Content-Disposition: inline; filename="Guia_Bienvenida_Taekwondo_Fabra.pdf"`
- Permite abrir el PDF en una nueva pestaña en el visor nativo del navegador (leer, imprimir o descargar) y compartir un enlace limpio (`https://taekwondofabra.es/guia-bienvenida`).
- Si el archivo no existe, responde `404`.

---

## 3. Puntos de Integración en la Interfaz (UI)

Todos los accesos utilizan `{{ route('guide.welcome') }}` con `target="_blank" rel="noopener noreferrer"`:

1. **Home — Sección `#horarios` (`resources/views/home.blade.php`):**
   - Banner/tarjeta destacada al pie del bloque de horarios y tarifas dirigida a nuevos alumnos y familias, con botón principal en color corporativo (`bg-cyan-brand`) para abrir la Guía de Bienvenida y Normativa (PDF).
2. **Home — Sección `#primera-clase` (`resources/views/home.blade.php`):**
   - Acceso secundario limpio junto a los datos de contacto y beneficios, para quienes están valorando reservar su primera clase gratuita.
3. **Preguntas Frecuentes (`resources/views/pages/faq.blade.php`):**
   - Tarjeta destacada sobre el índice de preguntas frecuentes invitando a consultar la guía completa del club en PDF.
4. **Footer global (`resources/views/layouts/app.blade.php`):**
   - Enlace permanente bajo *"Enlaces de Interés"*, accesible desde cualquier página del sitio.

---

## 4. Plan de Verificación

1. **Tests automatizados (`tests/Feature/WelcomeGuideTest.php`):**
   - `GET /guia-bienvenida` devuelve HTTP `200`, `Content-Type: application/pdf` y `Content-Disposition` `inline` con el nombre de archivo esperado.
   - `GET /` (Home) y `GET /preguntas-frecuentes` (FAQ) muestran el enlace a `route('guide.welcome')`.
2. **Ejecución de suite completa sobre SQLite en memoria:** `php artisan test`.
3. **Compilación frontend:** `npm run build`.
4. **Validación de caché de rutas:** `php artisan route:cache && php artisan optimize:clear`.
