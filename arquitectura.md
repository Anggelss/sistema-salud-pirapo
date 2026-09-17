# Arquitectura del Sistema - Centro de Salud Pirapó Puerto

El sistema está diseñado bajo el patrón arquitectónico **MVC (Modelo-Vista-Controlador)**, estructurado en capas para garantizar la separación de responsabilidades, la mantenibilidad y la escalabilidad del software.

## 📂 Estructura de Directorios (MVC)
El proyecto se organiza bajo la estructura estándar del framework utilizado:
- **`app/Http/Controllers/`**: Contiene la lógica de negocio y actúa como intermediario entre las peticiones del usuario y los modelos de datos.
- **`app/Models/`**: Capa de persistencia y representación de las entidades de la base de datos (ej. Paciente, Cita, Médico).
- **`resources/views/`**: Capa de presentación (Interfaces de usuario desarrolladas con HTML, Blade, Bootstrap y JavaScript).
- **`routes/`**: Archivos de enrutamiento web y de API que gestionan las peticiones entrantes.
- **`database/migrations/`**: Scripts de control de cambios para la estructura relacional de la base de datos.

## 🌐 Comunicación con el Exterior
- **Interfaz Web (Frontend):** Las vistas interactúan con el usuario mediante formularios HTML y peticiones asíncronas (AJAX), renderizándose en el navegador del cliente.
- **Servidor Web:** Las solicitudes HTTP son procesadas por el servidor local (Apache/Nginx vía XAMPP o Artisan Serve), el cual enruta la petición al controlador correspondiente para consultar la base de datos MySQL y retornar la respuesta adecuada.
