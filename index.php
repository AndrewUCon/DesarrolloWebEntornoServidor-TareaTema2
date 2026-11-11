<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Tema 2 Desarrollo Web Entorno Servidor</title>
</head>
<body>

<a href="index.php">Index</a>
<a href="triangle.php">Triangulo</a>
<a href="biblioteca.php">Biblioteca</a>
    
    <h2>Alumnos</h2>

    <ul>
        <?php 
        // Importamos las clases 
        require_once 'Clases/Miembro.php';
        require_once 'Clases/Alumno.php';
        require_once 'Clases/Profesor.php';
        require_once 'Clases/Asignatura.php';

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
        
        // Cargamos las asignaturas de muestra
        $asignaturas = Asignatura::crearAsignaturasDeMuestra();

        // Recorremos y mostramos la información
        foreach ($asignaturas as $asignatura) {
            echo "<li>" . $asignatura . "</li>";
        }

        ?>
    </ul>

    <h2>Alumnos <= 23</h2>

    <ul>
        <?php 

        //Cargamos los alumnos de muestra 
        $alumnosFiltrados = Alumno::crearAlumnosDeMuestra();

        // Filtramos el array
        $alumnosFiltrados = array_filter($alumnosFiltrados, function($alumno) {
            return $alumno->getEdad() <= 23;});
        
        // Recorremos el array de alumnos filtrados y mostramos la información
        foreach ($alumnosFiltrados as $alumno) {
            echo "<li>" . $alumno . "</li>";
        }    

        ?>
    </ul>

    <h2>Alumnos con al menos dos asignaturas</h2>
    
    <ul>
        <?php  

        // Matriculamos a los alumnos
        $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[1]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[2]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[2]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[3]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[4]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[5]->matricularEnAsignatura($asignaturas[0]);
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[7]->matricularEnAsignatura($asignaturas[2]);
        $alumnos[8]->matricularEnAsignatura($asignaturas[1]);
        $alumnos[9]->matricularEnAsignatura($asignaturas[0]);

        $alumnos = array_filter($alumnos, function($alumno){
            return count($alumno->getAsignaturas()) >=2;
        });

        foreach ($alumnos as $alumno){
            echo "<li>" . $alumno . "</li>";
        }
        ?>
    </ul>

    <h2>Asignaturas con algun alunmno matriculado</h2>

    <ul>
        <?php 

        $asignaturasConAlumnos = [];
        foreach ($alumnos as $alumno){
            foreach ($alumno->getAsignaturas() as $asignatura){
                if (!in_array($asignatura, $asignaturasConAlumnos)){
                    $asignaturasConAlumnos[] = $asignatura;
                }
            }
        }

        foreach ($asignaturasConAlumnos as $asignatura){
            echo "<li>" . $asignatura . "</li>"; 
        }
        ?>
    </ul>
   
</body>
</html>