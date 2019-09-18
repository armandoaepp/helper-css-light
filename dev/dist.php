<?php
$folders = array(
  'content' ,
  'dashboard' ,
  'navigation' ,
  'pages' ,
  'ui-elements' ,
  'utilities' ,
  'admin' ,
  'theme-variants' ,
);

$themes = array(
  'default',
  'blue',
  'teal',
  'purple',
) ;

$theme = !empty($_GET['theme']) ? $_GET['theme'] : 'default'  ;

// $theme = 'default' ;
// $theme = 'blue' ;
// $theme = 'teal' ;
// $theme = 'purple' ;

if(in_array($theme, $themes))
{
  dirToArray($folders, $theme);
}
else {
  echo " THEME NO EXISTE " ;
}





function dirToArray($folders, $theme) {


  $dir_prod = './dist/'.$theme ;

  // path_dist = para imagenes en produccion
  $path_dist = "../../" ;


  // $dir_prod = './dist/cyan' ;

  if (!file_exists($dir_prod)) {
    mkdir($dir_prod, 0777);
  }

  foreach ($folders as  &$dir_name)
  {

    // $dir_name = basename(__DIR__) ;

      $dir_prod_full = $dir_prod.DIRECTORY_SEPARATOR.$dir_name ;
      // $dir_prod_full = $dir_prod.DIRECTORY_SEPARATOR."navigation" ;


      if (!file_exists($dir_prod_full)) {
        mkdir($dir_prod_full, 0777);
      }

      $cdir = scandir($dir_name);


      foreach ($cdir as $key => $value)
      {
        if ( !in_array($value,array(".","..")) ) {
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
  echo "Dist Theme: ".$theme." OK <br>" ;
  print_r($folders) ;
  echo "</pre>";

}


/* GENERAR INDEX */

// include "dist-index.php" ;