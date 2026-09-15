# SDD-002: Enlaces a Grupos Oficiales de WhatsApp por Clases

- **Estado:** En Proceso / Aprobado
- **Fecha:** Septiembre 2026
- **Autor:** Guillo Tudela Marco & Antigravity
- **Proyecto:** Taekwondo Fabra Valencia ([taekwondofabra.es](https://taekwondofabra.es))

---

## 1. Contexto y Justificación

Para facilitar la comunicación directa entre los instructores del club, los alumnos y las familias, se han habilitado canales oficiales de difusión/comunidad en WhatsApp específicos para cada grupo y horario de entrenamiento.

Con el objetivo de agilizar la incorporación de los miembros a sus respectivos grupos sin depender exclusivamente de carteles físicos en las instalaciones, la plataforma web integra accesos directos a través de botones de invitación en la sección de **Horarios**.

---

## 2. Definición de Grupos y Enlaces de Invitación

| Clase | Edades | Horario (L-X-V) | Enlace de Invitación WhatsApp |
|---|---|---|---|
| **Infantil** | 3 - 7 años | 17:30 - 18:25 | `https://chat.whatsapp.com/Kj6lALyMSiFABMEiYgdV8D` |
| **Precadete** | 8 - 11 años | 18:30 - 19:25 | `https://chat.whatsapp.com/H61ysmGM0uRKZHuxBmDuEV` |
| **Cadete/Junior** | 12 - 14 años | 19:30 - 20:25 | `https://chat.whatsapp.com/Iqz8tYaFoyNHAxMGLc06rm` |
| **Junior / Senior** | +14 años | 20:30 - 21:30 | `https://chat.whatsapp.com/LlXdonmgrLF4zepQY8Kr2o` |

---

## 3. Arquitectura y Estructura de Datos

### 3.1. Configuración Centralizada (`config/taekwondo.php`)
Para cumplir con los principios de mantenibilidad y evitar *hardcoding* disperso en vistas Blade:
- Se crea el archivo `config/taekwondo.php` con la clave `whatsapp_groups`.
- Cada grupo define:
  - `name`: Nombre visible del grupo.
  - `age`: Rango de edad orientativo.
  - `schedule`: Franja horaria de la clase.
  - `days`: Días de entrenamiento (Lunes, Miércoles y Viernes).
  - `price`: Cuota mensual.
  - `whatsapp_url`: URL canónica del grupo de WhatsApp.
  - `description`: Descripción del público objetivo del grupo.

### 3.2. Vistas Frontend (`resources/views/home.blade.php`)
Los enlaces se integran en la sección `#horarios`:
1. **Tarjetas de dispositivos móviles (`.md:hidden`):**
   - Se añade un botón visible y accesible con el icono oficial de WhatsApp y el texto *"Unirse al grupo de WhatsApp"*.
   - Atributos de seguridad: `target="_blank"` y `rel="noopener noreferrer"`.
2. **Tarjetas de precios y clases en escritorio (`.hidden.md:grid`):**
   - Se incorpora el botón de *"Unirse al grupo de WhatsApp"* dentro de la tarjeta de cada clase.
3. **Tabla de horarios desktop:**
   - Se incorpora un acceso directo mediante el icono de WhatsApp en cada fila de horario para una experiencia ágil.

---

## 4. Estilo y Accesibilidad

- **Color WhatsApp:** `#25D366` / `hover:bg-emerald-600` o integración con Tailwind `bg-emerald-500 hover:bg-emerald-600 text-white` para destacar de forma limpia sobre el fondo blanco de las tarjetas.
- **Microinteracciones:** Transición suave (`transition-all duration-200`) y efecto elevación / hover.
- **Semántica:** Enlaces nativos `<a>` con texto accesible y atributos `aria-label` descriptivos para lectores de pantalla.

---

## 5. Plan de Verificación

1. `php artisan config:cache` para validar que el nuevo archivo de configuración compila sin errores.
2. `php artisan test` para asegurar que la suite de pruebas automatizadas pasa al 100% sobre SQLite en memoria.
3. `npm run build` para comprobar la compilación correcta de assets frontend (Vite + Tailwind 4).
4. Verificación visual responsiva tanto en pantalla móvil como en escritorio.
