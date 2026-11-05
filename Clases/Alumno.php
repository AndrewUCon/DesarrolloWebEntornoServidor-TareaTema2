<?php 

class Alumno extends Miembro {

// Atributos que no extienden de la clase Miembro
    private int $edad;
    private array $asignaturas;

    private bool $cursoAbonado;

    //-------    Métodos ------


    // Constructor
    function __construct ($id, $name, $surname, $email, $edad, array $asignaturas = []) {
        parent::__construct($id, $name, $surname, $email);
        $this -> edad = $edad;
        $this -> asignaturas = [];
        

    }

    // Getters
    public function getEdad():int {
        return $this -> edad;
    }

    public function getAsignaturas():array {
        return $this -> asignaturas;
    }
    // Método Abonar Curso
    public function abonarCurso($cursoAbonado) {
        $this -> cursoAbonado = $cursoAbonado;
    }

    // Método Matricularse en una asignatura 
    public function matricularEnAsignatura (Asignatura $asignatura) {

    if (in_array($asignatura, $this -> asignaturas)) {
        return  "Ya estás matriculado en esta asignatura";
    } 
    else {
        $this -> asignaturas[] = $asignatura;
        return "Matriclado en : {$asignatura} con éxito!";
    }


    }

    // Método estático que devolvera una coleccion de alumnos.

    public static function crearAlumnosDeMuestra(): array {
        $listaAlumnosdeMuestra = [  
                                    new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
                                    new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
                                    new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
                                    new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
                                    new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
                                    new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
                                    new Alumno(7, "Lucia", "Jiménez", "lucia.jimenez@email.com", 20),
                                    new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
                                    new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
                                    new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),];

        return $listaAlumnosdeMuestra;      

    }

}