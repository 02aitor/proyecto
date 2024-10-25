<?php
class Alumno extends Miembro{
 
    private $asignaturas = [];
    private $cursoAbonado = false;
    private $edad;
    public function __construct($edad) { 
        $this->edad= $edad;
        $this->cursoAbonado = false;
        $this->asignaturas = [];

    }

    public function abonarCurso() {
        $this->cursoAbonado = true;
        echo "Curso abonado correctamente.\n";
    }

    public function matricularseEnAsignatura($asignatura) {
        if (!in_array($asignatura, $this->asignaturas)) {
            $this->asignaturas[] = $asignatura;
            echo "Matriculado en la asignatura: $asignatura.\n";
        } else {
            echo "Ya estás matriculado en la asignatura: $asignatura.\n";
        }
    }

    public function bajaEnAsignatura($asignatura) {
        $key = array_search($asignatura, $this->asignaturas);
        if ($key !== false) {
            unset($this->asignaturas[$key]);
            $this->asignaturas = array_values($this->asignaturas); // Reindexar el array
            echo "Baja en la asignatura: $asignatura.\n";
        } else {
            echo "No estás matriculado en la asignatura: $asignatura.\n";
        }
    }
    public static function crearAlumnosDeMuestra() {
        $alumnos = [];
        $alumno1 = new Alumno(20);
        $alumno1->abonarCurso();
        $alumno1->matricularseEnAsignatura("Matemáticas");
        $alumno1->matricularseEnAsignatura("Historia");

        $alumno2 = new Alumno(22);
        $alumno2->matricularseEnAsignatura("Biología");
        $alumno2->matricularseEnAsignatura("Química");

        $alumnos[] = $alumno1;
        $alumnos[] = $alumno2;

        return $alumnos;
    }

    public function mostrarAsignaturas() {
        echo "Asignaturas matriculadas: " . implode(", ", $this->asignaturas) . "\n";
    }
}

$alumnos = Alumno::crearAlumnosDeMuestra();
foreach ($alumnos as $index => $alumno) {
    echo "Alumno " . ($index + 1) . ":\n";
    $alumno->mostrarAsignaturas();
    echo "\n";
}
?>
