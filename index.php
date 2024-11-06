<?php

require_once 'clases/miembro.php';
require_once 'clases/profesor.php';
require_once 'clases/alumno.php';
require_once 'clases/asignaturas.php';
require_once 'clases/trianglegenerator.php';


$asignaturas = ["DWES", "DEWC", "DIW","DAW"];

$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas); 


echo "<h2>Alumnos</h2>";
foreach ($alumnos as $alumno) {
    echo ", Nombre: " . $alumno->getNombre() . 
         ", Apellidos: " . $alumno->getApellidos() . 
         ", Email: " . $alumno->getEmail() . 
         ", Edad: " . $alumno->getEdad() . 
         ", Curso Abonado: " . ($alumno->isCursoAbonado() ? "Sí" : "No") . 
         ", Asignaturas: " . implode(", ", $alumno->getAsignaturas()) . 
         " }<br>";
}

$profesores = Profesor::crearProfesoresDeMuestra($asignaturas);

echo "<h2>Listado profesores</h2>";
foreach ($profesores as $profesor) {
    echo $profesor . "<br>"; 
}


$asignaturas = Asignatura::crearAsignaturasDeMuestra();

echo "<h2>Listado de Asignaturas</h2>";
foreach ($asignaturas as $asignatura) {
    echo ", Nombre: " . $asignatura->getNombre() . ", Créditos: " . $asignatura->getCreditos() . " }<br>";
}

$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);


$alumnosFiltrados = array_filter($alumnos, function($alumno) {
    return $alumno->getEdad() <= 23;
});

echo "<h2>Listado de Alumnos (<= 23 años)</h2>";
foreach ($alumnosFiltrados as $alumno) {
    echo  ", Nombre: " . $alumno->getNombre() . 
         ", Apellidos: " . $alumno->getApellidos() . 
         ", Email: " . $alumno->getEmail() . 
         ", Edad: " . $alumno->getEdad() . 
         ", Curso Abonado: " . ($alumno->isCursoAbonado() ? "Sí" : "No") . 
         ", Asignaturas: " . implode(", ", $alumno->getAsignaturas()) . 
         " }<br>";
}
$alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);


echo "<h2>Alumnos con al menos dos asignaturas</h2>";
foreach ($alumnos as $alumno) {
    if (count($alumno->getAsignaturas()) >= 2) { 
        echo "Nombre: " . $alumno->getNombre() . ", Email: " . $alumno->getEmail() . "<br>";
    }
}
?>


