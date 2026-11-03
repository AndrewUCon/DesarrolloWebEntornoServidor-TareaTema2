<?php

Class Asignatura {

// Atributos
    private int $id;
    private string $nombre;

    private $creditos;


// ------- Métodos -------

//Constructor

    function __construct($id, $nombre, $creditos) {
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> creditos = $creditos;
    }

// Método estático que genera una coleccion de asignaturas

    public static function crearAsignaturasDeMuestra(): array {
        $asignaturasDeMuestra = [
            new Asignatura(1, "DEWS", "7 Créditos"),
            new Asignatura(2, "DWEC", "6 Créditos"),
            new Asignatura(3, "DIW", "4 Créditos"),
            new Asignatura(4, "DAW", "4 Créditos"),

        ];
        return $asignaturasDeMuestra;
    }

// To String

    public function __toString() {
        return "{$this -> id}, {$this -> nombre}, {$this -> creditos}.";   
    }



}