<?php
class Profesor extends Miembro {

    private $titular;
    private $asignatura;

    
    public function __construct($titular, $asignatura) {
        $this->titular = $titular;
        $this->asignatura = $asignatura;
    }

 
    public function esTitular() {
        return $this->titular;
    }

    public function getAsignatura() {
        return $this->asignatura;
    }

    public static function crearProfesoresDeMuestra() {
       
        $asignaturas = Asignatura::crearAsignaturasDeMuestra();

        return [
            new Profesor(true, $asignaturas[0]), 
            new Profesor(false, $asignaturas[1]), 
            new Profesor(true, $asignaturas[2]), 
            new Profesor(false, $asignaturas[3]), 
            new Profesor(true, $asignaturas[4])  
        ];
    }
}

$profesoresDeMuestra = Profesor::crearProfesoresDeMuestra();
foreach ($profesoresDeMuestra as $profesor) {
    $asignatura = $profesor->getAsignatura();
    echo "Profesor Titular: " . ($profesor->esTitular() ? "Sí" : "No") . "\n";
    echo "Asignatura: " . $asignatura->getNombre() . "\n";
    echo "Créditos de la asignatura: " . $asignatura->getCreditos() . "\n";
    echo "-------------------------\n";
}
?>
