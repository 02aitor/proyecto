<?php
class Asignatura {
  
    private $id;
    private $nombre;
    private $creditos;

   
    public function __construct($id, $nombre, $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public static function crearAsignaturasDeMuestra() {
        return [
            new Asignatura(1, "Matemáticas", 5),
            new Asignatura(2, "Física", 4),
            new Asignatura(3, "Química", 3),
            new Asignatura(4, "Historia", 2),
            new Asignatura(5, "Lengua", 4)
        ];
    }
}

$asignaturasDeMuestra = Asignatura::crearAsignaturasDeMuestra();
foreach ($asignaturasDeMuestra as $asignatura) {
    echo "ID: " . $asignatura->getId() . "\n";
    echo "Nombre: " . $asignatura->getNombre() . "\n";
    echo "Créditos: " . $asignatura->getCreditos() . "\n";
    echo "-------------------------\n";
}
?>
