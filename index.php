<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Tema 2 Desarrollo Web Entorno Servidor</title>
</head>
<body>
    
    <h2>Alumnos</h2>
    <ul>
        <?php 
        // Importamos las clases 
        require_once 'Clases/Miembro.php';
        require_once 'Clases/Alumno.php';


        // Cargamos los alumnos de muestra
        $alumnos = Alumno::crearAlumnosDeMuestra();
        
        // Recorremos y mostramos la información
        foreach ($alumnos as $alumno) {
            echo "<li>" . $alumno . "</li>";
        }
        
        ?>
    </ul>
    <h2>Profesores</h2>
    <ul>
        <?php 
        // Importamos las clases 
        require_once 'Clases/Miembro.php';
        require_once 'Clases/Profesor.php';
        require_once 'Clases/Asignatura.php';

        // Cargamos los profesores de muestra
        $profesores = Profesor::crearProfesorDeMuestra();

        // Recorremos y mostramos la información
        foreach ($profesores as $profesor) {
            echo "<li>" . $profesor . "</li>";
        }
        
        ?>
    </ul>

    <h2>Asignaturas</h2>
    <ul>
        <?php 
        // Importamos la clase
        require_once 'Clases/Asignatura.php';

        // Cargamos las asignaturas de muestra
        $asignaturas = Asignatura::crearAsignaturasDeMuestra();

        // Recorremos y mostramos la información
        foreach ($asignaturas as $asignatura) {
            echo "<li>" . $asignatura . "</li>";
        }

        
        ?>
    </ul>
   
</body>
</html>