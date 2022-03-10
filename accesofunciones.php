<?php
  
  include "fruta.php";

  $guayaba = new fruta("guayaba","amarilla");

  $guayaba->nombre = "guava";
  $guayaba->peso = "400gr";

   echo $guayaba->nombre;
   echo $guayaba->color;