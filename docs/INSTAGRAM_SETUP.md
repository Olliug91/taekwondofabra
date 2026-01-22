# Guía de Configuración: Instagram Access Token

Para mostrar tus fotos de Instagram en la web, necesitas generar un "Access Token" desde Facebook/Meta. Sigue estos pasos:

### 1. Crear la App en Meta
1. Ve a [Meta for Developers](https://developers.facebook.com/).
2. Haz clic en **"Mis Apps"** > **"Crear App"**.
3. Selecciona **"Otro"** (Other) > Siguiente.
4. Selecciona **"Consumidor"** (Consumer) > Siguiente.
5. Ponle un nombre (ej: `Taekwondo Web`) y crea la app.

### 2. Configurar Instagram Basic Display
1. En el panel de la app, busca el producto **"Instagram Basic Display"** y dale a **"Configurar"**.
2. Haz clic en **"Create New App"** (abajo del todo) y ponle nombre.
3. En la sección **"Client OAuth Settings"**, añade estas URLs:
   - `http://localhost`
   - `https://taekwondofabra.com`
   - `https://taekwondofabra.com/auth/instagram/callback` (opcional)
4. Guarda los cambios.

### 3. Añadir Usuario de Pruebas
1. En el menú izquierdo, ve a **roles** > **Roles**.
2. Baja hasta **"Probadores de Instagram"** (Instagram Testers).
3. Dale a **"Añadir probadores de Instagram"**.
4. Escribe el nombre de usuario de tu cuenta de Instagram (`taekwondofabra`) y selecciónalo.
5. Dale a Enviar.

### 4. Aceptar la Invitación
1. Abre [Instagram.com](https://www.instagram.com/) en otra pestaña (logueado con tu cuenta).
2. Ve a **Configuración** (`rueda dentada`) > **Apps y sitios web**.
3. Clic en **"Invitaciones de probadores"**.
4. Acepta la invitación de la app que creaste.

### 5. Generar el Token
1. Vuelve al panel de desarrolladores (Meta).
2. Ve a **Instagram Basic Display** > **Basic Display**.
3. Baja hasta la sección **"User Token Generator"**.
4. Ahora verás tu cuenta ahí. Dale al botón azul **"Generate Token"**.
5. Loguéate si te lo pide y acepta los permisos.
6. Marca "Entiendo" y copia el código largo que aparece.

### 6. Instalar en la Web
1. Abre el archivo `.env` de tu proyecto.
2. Pega el código al final:
   ```env
   INSTAGRAM_ACCESS_TOKEN=IGQVJ... (tu código largo aquí)
   ```
3. Guarda el archivo.
