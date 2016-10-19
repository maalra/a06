<?php
//clase
class Alumno
{
//Declaración de los aributos
public $Nombre ="";
public $Edad ="";
public $Curso ="";
public $Ciclo ="";

public function setNombre($nuevoNombre){
$this->Nombre=$nuevoNombre;
}
public function getNombre(){
return $this->Nombre;
}
public function setEdad($nuevoEdad){
if ($nuevoEdad<18){
    $this->Edad=18;
  }else{
    $this->Edad=$nuevoEdad;
  }
}
public function getEdad(){
return $this->Edad;
}

public function setCurso ($nuevoCurso){
      if ($nuevoCurso=1){
        $this->Curso=$nuevoCurso;
      }elseif ($nuevoCurso=2){
        $this->Curso=$nuevoCurso;
      }else{
        $this->curso=1;
      }
    }
public function getCurso (){
      return $this->Curso;
}

public function setCiclo($nuevoCiclo){
      $this->Ciclo=$nuevoCiclo;
  }
public function getCiclo(){
      return $this->Ciclo;
  }
}
?>
