<?php
$folders = array(
  './' ,
  // 'dashboard' ,
);

dirToArray($folders) ;
function dirToArray($folders) {

  $files_not_prod = array(".",".." , 'dist.php', 'paths.php', 'img','css', 'templates') ;


  $dir_prod = '../examples/' ;

  // path_dist = para imagenes en produccion
  $path_dist = "../../" ;


  // $dir_prod = './dist/cyan' ;

  if (!file_exists($dir_prod)) {
    mkdir($dir_prod, 0777);
  }

  foreach ($folders as  &$dir_name)
  {

    // $dir_name = basename(__DIR__) ;
      echo "dir:: ".$dir_name;
      $dir_prod_full = $dir_prod.DIRECTORY_SEPARATOR.$dir_name ;
      // $dir_prod_full = $dir_prod.DIRECTORY_SEPARATOR."navigation" ;


      if (!file_exists($dir_prod_full)) {
        mkdir($dir_prod_full, 0777);
      }

      $cdir = scandir($dir_name);


      foreach ($cdir as $key => $value)
      {
        // if ( !in_array($value,array(".","..")) ) {
          if ( !in_array($value, $files_not_prod) ) {
          // echo $key ." === " .$value."<br>";

          # ============================================================
          $filePath = $dir_name.DIRECTORY_SEPARATOR.$value ;

          // echo "filePath: ".$filePath. "<br>" ;

          $extension = ".html";

          if($value != 'dist.php'){

          ob_start(); # apertura de bufer

          include $filePath;

          $file_arr = explode(".", $value);

          $file_name = $dir_prod_full.DIRECTORY_SEPARATOR.$file_arr[0].$extension;

          // echo "name file: ". $file_name."<br>";

          $texto = ob_get_contents();
          // $nomarchivo = "demo";

          $abrir      = fopen($file_name, "w");

          fwrite($abrir, $texto);
          fclose($abrir);
          ob_end_clean(); # cierre de bufer
          }
          # ============================================================


        }
      }
  }

  echo "<pre>";
  echo "Dist Theme:  OK <br>" ;
  print_r($folders) ;
  echo "</pre>";

}


/* GENERAR INDEX */

// include "dist-index.php" ;