<?php
    include "clases/TriangleGenerator.php";
    $triangleGenerator = new TriangleGenerator();
    echo $triangleGenerator->generateTriangle(9);
?>