<?php
abstract class Miembro
{

    private int $id;
    private string $nombre;
    private string $apellidos;
    private string $email;
    private int $edad;

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
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new InvalidArgumentException("El formato del email no es válido.");
        }
    }

    public function setEdad(int $edad): void
    {
      
        if ($edad > 0) {
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException("La edad debe ser un número positivo.");
        }
    }
}
?>
