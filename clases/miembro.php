<?php

abstract class Miembro
{
    
    protected int $id;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;
    protected int $edad;


    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->edad = $edad;
    }
  


    
    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

}
?>
