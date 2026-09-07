# Workflow: Nueva Funcionalidad o Módulo (Taekwondo Fabra)

Playbook paso a paso para aplicar la metodología SDD en el proyecto **Taekwondo Fabra**.

1. **Documentación Previa en SDD:**
   - Crear o actualizar el documento correspondiente en `docs/sdd/` (ej. `02-nombre-funcionalidad.md`).
   - Definir impacto en rutas, controladores, componentes Livewire, plantillas Blade o estructura de `exam_syllabus.json`.
2. **Creación de Rama de Trabajo:**
   - Crear rama descriptiva a partir de `main` actualizado (`feat/nombre-feature` o `fix/nombre-bug`).
3. **Desarrollo Backend / Frontend:**
   - Si afecta a los temarios, validar la integridad del JSON `resources/data/exam_syllabus.json`.
   - Implementar componentes Livewire, controladores o vistas Blade.
   - Si requiere estilos, usar clases utilitarias de TailwindCSS 4 manteniendo la identidad visual del club.
4. **Verificación Local y Tests:**
   - Ejecutar la batería de tests: `php artisan test`.
   - Confirmar que la ejecución se realiza sobre SQLite en memoria y sin efectos secundarios.
   - Compilar assets frontend: `npm run build`.
5. **Apertura de Pull Request:**
   - Ejecutar el checklist del workflow `pre-pr.md`.
