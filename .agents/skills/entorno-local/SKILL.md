---
name: entorno-local
description: Pautas para el entorno de desarrollo local de Taekwondo Fabra con Laravel Herd, Livewire 4, DOMPDF, Tailwind CSS 4 y tests en SQLite en memoria.
---

# Entorno Local (Taekwondo Fabra)

Instrucciones operativas para trabajar en local en la plataforma del club Fabra Sport.

## 1. Topología de Desarrollo
- **Host:** `http://taekwondofabra.test` servido a través de **Laravel Herd**.
- **PHP:** 8.2+ con extensiones `gd`, `sqlite3`, `mbstring`.
- **Frontend:** Tailwind CSS 4 vía Vite 7 + Livewire 4.
- **Generación de Documentos:** DOMPDF 3.1 + códigos QR para Poomsaes.

## 2. Comandos Diarios
```bash
# Servidor de desarrollo reactivo
npm run dev

# Compilación de producción
npm run build

# Batería de tests (SQLite en memoria)
php artisan test
php artisan test --filter=ExampleTest

# Limpieza de cachés
php artisan optimize:clear
```

## 3. Protección de Base de Datos
- `phpunit.xml` tiene configurado SQLite en memoria (`<env name="DB_CONNECTION" value="sqlite"/>` y `<env name="DB_DATABASE" value=":memory:"/>`).
- Prohibido `migrate:fresh` o alterar bases de datos de producción.
