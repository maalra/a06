<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A06</title>
  </head>
  <body>
  <?php
include "Alumno.php";
    $alumno1 = new Alumno();
    $alumno1->setNombre('Marc');
echo "NOMBRE: " .$alumno1->getNombre();
    $alumno1->setEdad('18');
echo "</br> EDAD: " .$alumno1->getEdad();
        $alumno1->setCurso('2');
echo "</br> CURSO: " .$alumno1->getCurso();
        $alumno1->setCiclo('DesarolloAplicacionesWeb');
echo "</br> CICLO: " .$alumno1->getCiclo();
    ?>
  </body>
</html>
