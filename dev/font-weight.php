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
      'titulo'        => 'Font Weight | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'font weight - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'font weight, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,5]
    );

    require $root."templates/head_links.phtml";
?>

</head>

<body>
  <?php require $root."templates/header.phtml";?>
  <div class="app-wrap">

    <main class="main">

      <div class="container box">

        <div class="row mb-3">

          <div class="col-12 border-bottom mb-3">
            <h1 class="h1 "><strong>Font Size</strong> </h1>
          </div>

          <div class="col-12">
            <h2> .fs-x-* </h2>
            <hr>
          </div>

          <div class="col-12 fs-x-10">
            .fs-x-10
          </div>

          <div class="col-12 fs-x-11">
            .fs-x-11
          </div>

          <div class="col-12 fs-x-12">
            .fs-x-12
          </div>

          <div class="col-12 fs-x-13">
            .fs-x-13
          </div>

          <div class="col-12 fs-x-14">
            .fs-x-14
          </div>

          <div class="col-12 fs-x-15">
            .fs-x-15
          </div>

          <div class="col-12 fs-x-18">
            .fs-x-18
          </div>

          <div class="col-12 fs-x-22">
            .fs-x-22
          </div>

        </div>

        <div class="row mb-3">

          <div class="col-12">
            <h2> .fs-1x-* </h2>
            <hr>
          </div>

          <div class="col-12 fs-1x">
            .fs-1x
          </div>

          <div class="col-12 fs-1x-25">
            .fs-1x-25
          </div>

          <div class="col-12 fs-1x-50">
            .fs-1x-50
          </div>

          <div class="col-12 fs-1x-75">
            .fs-1x-75
          </div>

        </div>

        <div class="row mb-3">

          <div class="col-12">
            <h2> .fs-2x-* </h2>
            <hr>
          </div>

          <div class="col-12 fs-2x">
            .fs-2x
          </div>

          <div class="col-12 fs-2x-25">
            .fs-2x-25
          </div>

          <div class="col-12 fs-2x-50">
            .fs-2x-50
          </div>

          <div class="col-12 fs-2x-75">
            .fs-2x-75
          </div>

        </div>

        <div class="row mb-3">

          <div class="col-12">
            <h2> .fs-3x-* </h2>
            <hr>
          </div>

          <div class="col-12 fs-3x">
            .fs-3x
          </div>

          <div class="col-12 fs-3x-25">
            .fs-3x-25
          </div>

          <div class="col-12 fs-3x-50">
            .fs-3x-50
          </div>

          <div class="col-12 fs-3x-75">
            .fs-3x-75
          </div>

        </div>

        <div class="row mb-3">

          <div class="col-12">
            <h2> .fs-4x-* </h2>
            <hr>
          </div>

          <div class="col-12 fs-4x">
            .fs-4x
          </div>

        </div>

        <div class="row mb-3">

          <div class="col-12">
            <h2> All Class </h2>
            <hr>
          </div>

          <div class="col-12">
            .fs-1x-* .fs-sm-1x-* .fs-md-1x-* .fs-lg-1x-*
          </div>

          <div class="col-12">
            .fs-2x-* .fs-sm-2x-* .fs-md-2x-* .fs-lg-2x-*
          </div>

          <div class="col-12">
            .fs-3x-* .fs-sm-3x-* .fs-md-3x-* .fs-lg-3x-*
          </div>

          <div class="col-12">
            .fs-4x-* .fs-sm-4x-* .fs-md-4x-* .fs-lg-4x-*
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>