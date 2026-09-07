# Workflow: Checklist Pre-PR (Taekwondo Fabra)

Checklist de verificación obligatorio antes de realizar commit, push y apertura de Pull Request en el repositorio de **Taekwondo Fabra**.

1. **Aislamiento y Paso de Tests:**
   ```bash
   php artisan test
   ```
   - Confirmar que todos los tests pasan con éxito.
   - Confirmar que la ejecución se realiza sobre SQLite en memoria y ninguna BD real ha sido modificada.

2. **Compilación de Assets Frontend:**
   ```bash
   npm run build
   ```
   - Confirmar que la compilación con Vite y TailwindCSS 4 finaliza sin advertencias ni fallos.

3. **Revisión de Git Diff:**
   ```bash
   git status
   git diff
   ```
   - Confirmar que solo se incluyen archivos intencionados.
   - No comitear archivos temporales (`.DS_Store`, cachés, credenciales sensibles o `.env`).

4. **Formato de Mensaje de Commit:**
   - Usar prefijos canónicos: `ADD:`, `CHANGE:`, `FIX:`, `REFACTOR:` o `DOCS:` seguido de una descripción concisa en español.
