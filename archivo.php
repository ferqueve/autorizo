
<?php
  $fh = fopen("Pepe.json", 'w') or die("Se produjo un error al crear el archivo");
  
  $texto = <<<_END
{ "nombre": "Juan",
 "apellido": "Perez"
}
_END;
  
  fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas";
?>