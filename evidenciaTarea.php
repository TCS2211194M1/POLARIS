<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Tareas</title>
    <link rel="stylesheet" href="css/stylesEvidencia.css"> <!-- Enlaza tu archivo CSS aquí -->
</head>
<body>

<div class="project-details">
    <h2>Detalles del Proyecto</h2>
    <div class="column-container">
        <div class="column">
            <ul>
                <li><strong>Empresa:</strong> <span id="empresa">Nombre de la empresa</span></li>
                <li><strong>RFC:</strong> <span id="rfc">RFC de la empresa</span></li>
                <li><strong>Teléfono:</strong> <span id="telefono">Teléfono de contacto</span></li>
            </ul>
        </div>
        <div class="column">
            <ul>
                <li><strong>Correo:</strong> <span id="correo">Correo electrónico</span></li>
                <li><strong>ID del Proyecto:</strong> <span id="id-proyecto">ID del proyecto</span></li>
                <li><strong>Fecha de Emisión:</strong> <span id="fecha-emision">Fecha de emisión</span></li>
                <li><strong>Encargado:</strong> <span id="encargado">Nombre del encargado</span></li>
            </ul>
        </div>
    </div>
</div>



<table class="tasks-table">
  <thead>
    <tr>
      <th>Tarea</th>
      <th>Nombre de la Tarea</th>
      <th>Descripción de la Tarea</th>
      <th>Fecha de creación</th>
      <th>Tarea realizada por</th>
      <th>Comentario</th>
      <th>Evidencia</th>
      <th>Estado</th>
      <th>Modificar Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Desarrollo de módulo de autenticación</td>
      <td>Crear un sistema de autenticación seguro</td>
      <td>2024-03-12</td>
      <td>Juan</td>
      <td>Se ha revisado el alcance de la tarea</td>
      <td>Archivo.pdf</td>
      <td>En proceso</td>
      <td><button>Modificar</button></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Implementación de interfaz de usuario</td>
      <td>Diseñar y desarrollar la interfaz de usuario del software</td>
      <td>2024-03-15</td>
      <td>Rodrigo</td>
      <td>Se han revisado los prototipos y se ha iniciado la implementación</td>
      <td>Captura_de_pantalla.png</td>
      <td>En proceso</td>
      <td><button>Modificar</button></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Pruebas de integración</td>
      <td>Realizar pruebas de integración para garantizar el funcionamiento correcto del software</td>
      <td>2024-03-20</td>
      <td>Edgar</td>
      <td>Se ha completado la configuración del entorno de pruebas</td>
      <td>Informe_de_pruebas.docx</td>
      <td>Pendiente</td>
      <td><button>Modificar</button></td>
    </tr>
  </tbody>
</table>


</body>
</html>
