<?php

class Miembro { //Esta clase va a ser abstracta para que herede de ella tanto, profesor, como alumno


    //Atributos
    private int $id;
    private string $nombre;
    private string $apellidos;
    private string $email;

    //-------    Métodos ------

    //Constructor
    function __construct($id, $name, $surname, $email) {
        $this -> id = $id;
        $this -> nombre = $name;
        $this -> apellidos = $surname;
        $this -> email = $email;

    }

    //Getters
    public function getId(): int {
        return $this -> id;
    }
    public function getNombre(): string {
        return $this -> nombre;
    }

    public function getApellidos(): string {
        return $this -> apellidos;
    }
    
    public function getEmail(): string {
        return $this -> email;
    }

    //Setters

    public function setId (int $id): void {
        $this -> id = $id;
    }

    public function setNombre (string $name): void {
        $this -> nombre = $name;
    }

    public function setApellidos (string $surname): void {
        $this -> apellidos = $surname;
    }

    public function setEmail (string $email): void {
        $this -> email = $email;
    }
    
    // toString

    public function __toString()
    {
        return "Nombre: {$this->nombre}, Email: {$this->email}";
    }
}