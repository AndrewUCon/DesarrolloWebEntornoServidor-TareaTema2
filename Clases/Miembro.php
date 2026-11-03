<?php

class Miembro { //Esta clase va a ser abstracta para que herede de ella tanto, profesor, como alumno


    //Atributos
    private int $id;
    private string $name;
    private string $surname;
    private string $email;

    //-------    Métodos ------

    //Constructor
    function __construct($id, $name, $surname, $email) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> email = $email;

    }

    //Getters
    public function getId(): int {
        return $this -> id;
    }
    public function getName(): string {
        return $this -> name;
    }

    public function getSurname(): string {
        return $this -> surname;
    }
    
    public function getEmail(): string {
        return $this -> email;
    }

    //Setters

    public function setId (int $id): void {
        $this -> id = $id;
    }

    public function setName (string $name): void {
        $this -> name = $name;
    }

    public function setSurname (string $surname): void {
        $this -> surname = $surname;
    }

    public function setEmail (string $email): void {
        $this -> email = $email;
    }
    
    // toString

    public function __toString()
    {
        return "Nombre: {$this->name}, Email: {$this->email}";
    }
}