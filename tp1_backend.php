<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello World</h1>
    <hr>

    
    <h2>Practica 1</h2>
    <?php $saludillo="Hola World";
    echo "$saludillo";?>
    <hr>

    <h2>Celsius a Fahrenheit</h2>
    <?php
    $grados=20;
    $dato1=1.8;
    $dato2=32;
    $fahrenheit=$grados*$dato1+$dato2;
    echo "$grados*$dato1+$dato2=$fahrenheit<br>";?>
    <hr>

    <h2>Rectangulo Perimetro</h2>
    <?php
    $n1=12;
    $n2=18;
    $resultado1=$n1+$n2+$n1+$n2;
    echo "$n1+$n2+$n1+$n2=$resultado1<br>";?>
    <hr>

     <h2>Rectangulo Area</h2>
     <?php
     $ladoaltura=12;
     $ladobase=18;
     $resultado2=$ladoaltura*$ladobase*$ladoaltura*$ladobase;
     echo "$ladoaltura*$ladobase*$ladoaltura*$ladobase=$resultado2<br>";?>
     <hr>

      <h2>Circulo Perimetro</h2>
      <?php
      $radio=30;
      $pi=3.14;
      $perimetro2=2*$pi*$radio;
      echo "$pi*$radio=$perimetro2<br>";?>
      <hr>


      <h2>Circulo Area</h2>
      <?php
      $radio1=30;
      $pi1=3.14;
      $area=$radio1*$radio1*$pi1;
      echo "$radio1*$radio1*$pi=$area<br>";?>
      <hr>


  </body>
</html>
