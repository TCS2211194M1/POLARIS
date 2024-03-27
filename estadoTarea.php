<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Tareas</title>
    <link rel="stylesheet" href="css/p.css"> <!-- Enlaza tu archivo CSS aquí -->
</head>
<body>
    <div class="form-container">
        <div class="form">
            <span class="heading">ESTADO DE TAREAS</span>
            <input placeholder="Nombre de la tarea:" type="text" class="input">
            <input placeholder="Descripción de la tarea:" type="text" class="input">
            <select class="input" id="estado" name="estado">
                <option value="" disabled selected>Selecciona el estado de la tarea</option>
                <option value="evaluado">Evaluado</option>
                <option value="cotizado">Cotizado</option>
                <option value="autorizado">Autorizado</option>
                <option value="pagado">Pagado</option>
                <option value="en_proceso">En Proceso</option>
                <option value="en_revision">En Revisión</option>
                <option value="completada">Completada</option>
                <option value="rechazada">Rechazada</option>
                <option value="en_espera">En Espera</option>
                <option value="en_retraso">En Retraso</option>
                <option value="bloqueada">Bloqueada</option>
                <option value="cancelada">Cancelada</option>
            </select>

            <label for="fecha-actualizacion">Fecha de Actualización:<br></label><br>
            <input id="fecha-actualizacion" placeholder="Día:" type="date" class="input">


            <textarea placeholder="Escribe tus comentarios:" rows="3" cols="30" id="message" name="message" class="textarea"></textarea>
            
            <!-- Contenedor para cargar archivos -->
            <label for="evidencias">Añade tus evidencias:<br></label><br>
            <input type="file" id="archivo" name="archivo" accept="*" class="input" placeholder="Añade tus evidencias">
            <!-- Accept especifica los tipos de archivos permitidos -->

            <div class="button-container">
                <div class="send-button">Enviar</div>
                <div class="reset-button-container">
                    <div id="reset-btn" class="reset-button">Limpiar</div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script> <!-- Enlaza tu archivo JavaScript aquí -->

</body>
</html>
