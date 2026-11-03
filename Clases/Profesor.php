<?php

Class Profesor extends Miembro {

// Atributos
    private bool $titular;
    private Asignatura $asignatura;

// ------- Métodos -------

// Constructor
    function __construct($id, $nombre, $apellidos, $mail, Asignatura $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $mail);
        $this -> titular = false;
        $this -> asignatura = $asignatura;
    }


// Método estático que genera una colección de profesores.

    public static function crearProfesorDeMuestra(): array {
        
    
        $listaProfesoresDeMuestra = [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", Asignatura::buscarAsignaturaPorId(1)), 
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", Asignatura::buscarAsignaturaPorId(3)),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", Asignatura::buscarAsignaturaPorId(2)),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", Asignatura::buscarAsignaturaPorId(4)),             
            ];

        return $listaProfesoresDeMuestra;

    }
}