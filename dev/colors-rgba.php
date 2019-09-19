<!DOCTYPE html>
<html lang="es_ES">

<head>
  <?php

  // require_once dirname(__DIR__).'/paths.php' ;
  require_once './paths.php' ;
  $root = ROOT.DS;

    // $path = '../';
    // $path_sidebar = $path ;
    // $path = !empty($path_dist) ? $path_dist : $path ;

    $setvar = array(
      'titulo'        => 'Colors Rbga | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'Colors Rbga - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'Colors Rbga, helper css, sass, scss,bootstrap4',
      'navbar_active' => [5,2]
    );

    require $root."templates/head_links.phtml";
?>

</head>

<body>
  <?php require $root."templates/header.phtml";?>
  <div class="app-wrap">

    <main class="main">

      <div class="container box">
        <div class="row">
          <div class="col-12 b-bottom mb-3">
            <h1 class="h1 "><strong>Background</strong> default RGBA</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h2> .bg-black-* </h2>
            <hr>
          </div>
          <div class="col item text-white bg-black-15"> bg-black-15 </div>
          <div class="col item text-white bg-black-25"> bg-black-25 </div>
          <div class="col item text-white bg-black-50"> bg-black-50 </div>
          <div class="col item text-white bg-black-60"> bg-black-60 </div>
          <div class="col item text-white bg-black-75"> bg-black-75 </div>
          <div class="col item text-white bg-black-85"> bg-black-85 </div>
        </div>

        <div class="row">
          <div class="col-12">
            <h2> .bg-white-* </h2>
            <hr>
          </div>
          <div class="col item bg-white-15"> bg-white-15 </div>
          <div class="col item bg-white-25"> bg-white-25 </div>
          <div class="col item bg-white-50"> bg-white-50 </div>
          <div class="col item bg-white-60"> bg-white-60 </div>
          <div class="col item bg-white-75"> bg-white-75 </div>
          <div class="col item bg-white-85"> bg-white-85 </div>
        </div>


      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>