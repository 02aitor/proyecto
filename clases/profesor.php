<?php
include_once('clases/Miembro.php');

class Profesor extends Miembro {
    protected bool $titular;  
    protected string $asignatura; 

    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad, string $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->titular = false;  
        $this->asignatura = $asignatura;
    }

    public function isTitular(): bool { 
        return $this->titular;
    }

    public function getAsignatura(): string {
        return $this->asignatura;
    }

    public static function crearProfesoresDeMuestra(array $asignaturas): array { 
        return [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", 70, $asignaturas[0]),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", 36, $asignaturas[1]),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", 35, $asignaturas[1]),
            new Profesor(4, "Rasmus", "Lerdorf", "rasmus@php.com", 55, $asignaturas[2]) 
        ];
    }

    public function __toString(): string { 
        return "Profesor  Nombre: " . $this->getNombre() .
               ", apellidos: " . $this->getApellidos() .
               ", email: " . $this->getEmail() .
               ", edad: " . $this->getEdad() .
               ", titular: " . ($this->titular ? "Sí" : "No") .
               ", asignatura: " . $this->asignatura . "";
    }
}
?>
