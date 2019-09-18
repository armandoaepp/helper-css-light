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
      'titulo'        => 'Borders Radius | Helper Css Light | Bootstrap4 ',
      'follow'        => '',
      'description'   => 'borders radius - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'borders radius, helper css, sass, scss,bootstrap4',
      'navbar_active' => [3,2]
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

          <div class="col-12 border-bottom mb-3">
            <h1 class="h1 "><strong>Border Radius</strong> Property</h1>
          </div>


          <div class="col-12">
            <h2> .radius-* </h2>
          </div>
          <div class="col item radius-0">
            .radius-0
          </div>

          <div class="col item radius-2">
            .radius-2
          </div>

          <div class="col item radius">
            radius
          </div>

          <div class="col item radius-8">
            .radius-8
          </div>

          <div class="col item radius-16">
            .radius-16
          </div>

          <div class="col item radius-circle">
            <span>.radius-circle</span>
          </div>

          <div class="col item radius-pill ">
            <span>.radius-pill </span>
          </div>

        </div>




        <!-- radius 2 -->
        <div class="row">
          <div class="col-12">
            <h2> .radius-2 .radius-* </h2>
            <hr>
          </div>

          <div class="col item radius-2">
            .radius-2
          </div>

          <div class="col item radius-2 radius-top">
            .radius-2 .radius-top
          </div>

          <div class="col item radius-2 radius-right">
            .radius-2 .radius-right
          </div>

          <div class="col item radius-2 radius-bottom">
            .radius-2 .radius-bottom
          </div>
          <div class="col item radius-2 radius-left">
            .radius-2 .radius-left
          </div>

          <div class="col item radius-2 radius-top-left ">
            .radius-2 .radius-top-left
          </div>

          <div class="col item radius-2 radius-top-left ">
            .radius-2 .radius-top-left
          </div>

          <div class="col item radius-2 radius-bottom-left ">
            .radius-2 .radius-bottom-left
          </div>

          <div class="col item radius-2 radius-bottom-right ">
            .radius-2 .radius-bottom-right
          </div>

          <div class="col item radius-2 radius-diagonal-1 ">
            .radius-2 .radius-diagonal-1
          </div>

          <div class="col item radius-2 radius-diagonal-2 ">
            .radius-2 .radius-diagonal-2
          </div>
        </div>


        <!-- radius -->
        <div class="row">
          <div class="col-12">
            <h2> .radius .radius-* </h2>
            <hr>
          </div>
          <div class="col item radius">
            .radius
          </div>
          <div class="col item radius radius-top">
            .radius .radius-top
          </div>

          <div class="col item radius radius-right">
            .radius .radius-right
          </div>

          <div class="col item radius radius-bottom">
            .radius .radius-bottom
          </div>
          <div class="col item radius radius-left">
            .radius .radius-left
          </div>

          <div class="col item radius radius-top-left ">
            .radius .radius-top-left
          </div>

          <div class="col item radius radius-top-left ">
            .radius .radius-top-left
          </div>

          <div class="col item radius radius-bottom-left ">
            .radius .radius-bottom-left
          </div>

          <div class="col item radius radius-bottom-right ">
            .radius .radius-bottom-right
          </div>

          <div class="col item radius radius-diagonal-1 ">
            .radius .radius-diagonal-1
          </div>

          <div class="col item radius radius-diagonal-2 ">
            .radius .radius-diagonal-2
          </div>
        </div>

        <!-- radius 8 -->
        <div class="row">
          <div class="col-12">
            <h2> .radius-8 .radius-* </h2>
            <hr>
          </div>
          <div class="col item radius-8">
            .radius-8
          </div>
          <div class="col item radius-8 radius-top">
            .radius-8 .radius-top
          </div>

          <div class="col item radius-8 radius-right">
            .radius-8 .radius-right
          </div>

          <div class="col item radius-8 radius-bottom">
            .radius-8 .radius-bottom
          </div>
          <div class="col item radius-8 radius-left">
            .radius-8 .radius-left
          </div>

          <div class="col item radius-8 radius-top-left ">
            .radius-8 .radius-top-left
          </div>

          <div class="col item radius-8 radius-top-left ">
            .radius-8 .radius-top-left
          </div>

          <div class="col item radius-8 radius-bottom-left ">
            .radius-8 .radius-bottom-left
          </div>

          <div class="col item radius-8 radius-bottom-right ">
            .radius-8 .radius-bottom-right
          </div>

          <div class="col item radius-8 radius-diagonal-1 ">
            .radius-8 .radius-diagonal-1
          </div>

          <div class="col item radius-8 radius-diagonal-2 ">
            .radius-8 .radius-diagonal-2
          </div>
        </div>

        <!-- radius 8 -->
        <div class="row">
          <div class="col-12">
            <h2> .radius-16 .radius-* </h2>
            <hr>
          </div>
          <div class="col item radius-16">
            .radius-16
          </div>
          <div class="col item radius-16 radius-top">
            .radius-16 .radius-top
          </div>

          <div class="col item radius-16 radius-right">
            .radius-16 .radius-right
          </div>

          <div class="col item radius-16 radius-bottom">
            .radius-16 .radius-bottom
          </div>
          <div class="col item radius-16 radius-left">
            .radius-16 .radius-left
          </div>

          <div class="col item radius-16 radius-top-left ">
            .radius-16 .radius-top-left
          </div>

          <div class="col item radius-16 radius-top-left ">
            .radius-16 .radius-top-left
          </div>

          <div class="col item radius-16 radius-bottom-left ">
            .radius-16 .radius-bottom-left
          </div>

          <div class="col item radius-16 radius-bottom-right ">
            .radius-16 .radius-bottom-right
          </div>

          <div class="col item radius-16 radius-diagonal-1 ">
            .radius-16 .radius-diagonal-1
          </div>

          <div class="col item radius-16 radius-diagonal-2 ">
            .radius-16 .radius-diagonal-2
          </div>
        </div>


      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>