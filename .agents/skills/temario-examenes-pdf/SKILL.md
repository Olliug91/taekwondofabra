---
name: temario-examenes-pdf
description: Guía y reglas para la edición del temario de exámenes en JSON y la maquetación de PDFs con DOMPDF y códigos QR dinámicos.
---

# Skill: Temario de Exámenes y Generador PDF (DOMPDF)

Este skill define las pautas para manipular la base de conocimiento del temario oficial (`resources/data/exam_syllabus.json`) y la plantilla de renderizado PDF (`resources/views/pdf/exam.blade.php`).

## 1. Estructura de `exam_syllabus.json`

El archivo se organiza por grupos de edad:
- `iniciacion` (3-7 años)
- `cadete` (8-13 años)
- `junior-adultos` (+14 años)

Cada grupo contiene un array de exámenes con la estructura:
```json
{
  "belt": "Blanco-Amarillo",
  "name": "Cinturón Blanco-Amarillo",
  "physical": ["Flexibilidad básica", "10 Fondos"],
  "stances": ["Ap sogui: Paso corto", "Ap kubi: Paso largo"],
  "blocks": ["Arae makki: Defensa baja"],
  "attacks": ["Momtong jireugi: Golpe medio de puño"],
  "kicks": ["Ap chagi: Patada frontal"],
  "poomsae": "Taegeuk Il Chang (1º Poomsae)",
  "poomsae_video_url": "https://www.youtube.com/watch?v=..."
}
```

### Reglas de Parseo de Técnicas
- Cada técnica suele llevar el formato: `Término Coreano: Traducción o descripción en español`.
- El parser visual divide la cadena por `:` para dar jerarquía tipográfica (coreano en negrita/oscuro, español en color secundario).

## 2. Reglas Estrictas de Maquetación para DOMPDF

DOMPDF no soporta CSS Flexbox ni CSS Grid moderno de forma fiable. Toda la maquetación debe realizarse usando:
- **Estructuras de Tablas HTML (`<table>`, `<tr>`, `<td>`):** Utilizar tablas con anchos explícitos en porcentaje (ej. `width="50%"`) para asegurar layouts de **2 columnas reales**.
- **Control de Salto de Página:**
  ```css
  page-break-inside: avoid;
  page-break-after: avoid;
  ```
  Evita que títulos y bloques de técnicas queden huérfanos o cortados entre páginas.
- **Fuentes e Imágenes:** Utilizar fuentes seguras compatibles con el motor de DOMPDF (Helvetica, DejaVu Sans). Las imágenes locales deben cargarse vía rutas absolutas o base64.
- **Códigos QR Dinámicos:** Los PDFs de exámenes que incluyen Poomsae integran dinámicamente un código QR (vía servicio de renderizado de QR) que apunta al vídeo de YouTube correspondiente para que el alumno pueda escanearlo desde el papel impreso.
