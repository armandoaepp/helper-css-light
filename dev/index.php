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
      'titulo'        => 'Bordes, font-szes, rotates | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'Bordes, font-szes, rotates, heading, lists, opacities - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'Bordes, font-szes, rotates, heading, lists, opacities, helper css, sass, scss,bootstrap4',
      'navbar_active' => [1,1]
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
        <h1 class="h1 "><strong>Borders</strong> Property</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .border-* </h2>
        <hr>
      </div>
      <div class="col item border"> .border </div>
      <div class="col item border-top"> .border-top </div>
      <div class="col item border-right"> .border-right </div>
      <div class="col item border-bottom"> .border-bottom </div>
      <div class="col item border-left"> .border-left </div>
      <div class="col item border-x"> .border-x </div>
      <div class="col item border-y"> .border-y </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .border .border-*-0 </h2>
        <hr>
      </div>
      <div class="col item border border-0"></div>
      <div class="col item border border-top-0"></div>
      <div class="col item border border-right-0"></div>
      <div class="col item border border-bottom-0"></div>
      <div class="col item border border-left-0"></div>

    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .border .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-primary"> .border .border-primary </div>
      <div class="col item border border-secondary"> .border .border-secondary </div>
      <div class="col item border border-success"> .border .border-success </div>
      <div class="col item border border-danger"> .border .border-danger </div>
      <div class="col item border border-warning"> .border .border-warning </div>
      <div class="col item border border-info"> .border .border-info </div>
      <div class="col item border border-light"> .border .border-light </div>
      <div class="col item border border-dark"> .border .border-dark </div>
      <div class="col item border border-white"> .border .border-white </div>
    </div>


    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .border .border-2 .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-2 border-primary"> .border .border-2 .border-primary </div>
      <div class="col item border border-2 border-secondary"> .border .border-2 .border-secondary </div>
      <div class="col item border border-2 border-success"> .border .border-2 .border-success </div>
      <div class="col item border border-2 border-danger"> .border .border-2 .border-danger </div>
      <div class="col item border border-2 border-warning"> .border .border-2 .border-warning </div>
      <div class="col item border border-2 border-info"> .border .border-2 .border-info </div>
      <div class="col item border border-2 border-light"> .border .border-2 .border-light </div>
      <div class="col item border border-2 border-dark"> .border .border-2 .border-dark </div>
      <div class="col item border border-2 border-white"> .border .border-2 .border-white </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .border .border-3 .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-3 border-primary"> .border .border-3 .border-primary </div>
      <div class="col item border border-3 border-secondary"> .border .border-3 .border-secondary </div>
      <div class="col item border border-3 border-success"> .border .border-3 .border-success </div>
      <div class="col item border border-3 border-danger"> .border .border-3 .border-danger </div>
      <div class="col item border border-3 border-warning"> .border .border-3 .border-warning </div>
      <div class="col item border border-3 border-info"> .border .border-3 .border-info </div>
      <div class="col item border border-3 border-light"> .border .border-3 .border-light </div>
      <div class="col item border border-3 border-dark"> .border .border-3 .border-dark </div>
      <div class="col item border border-3 border-white"> .border .border-3 .border-white </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .border .border-4 .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-4 border-primary"> .border .border-4 .border-primary </div>
      <div class="col item border border-4 border-secondary"> .border .border-4 .border-secondary </div>
      <div class="col item border border-4 border-success"> .border .border-4 .border-success </div>
      <div class="col item border border-4 border-danger"> .border .border-4 .border-danger </div>
      <div class="col item border border-4 border-warning"> .border .border-4 .border-warning </div>
      <div class="col item border border-4 border-info"> .border .border-4 .border-info </div>
      <div class="col item border border-4 border-light"> .border .border-4 .border-light </div>
      <div class="col item border border-4 border-dark"> .border .border-4 .border-dark </div>
      <div class="col item border border-4 border-white"> .border .border-4 .border-white </div>
    </div>




    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> Borders conbinados: .border .border-* .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-top border-primary"> .border .border-top .border-primary </div>
      <div class="col item border border-bottom border-primary"> .border .border-bottom .border-primary </div>
      <div class="col item border border-left border-primary"> .border .border-left .border-primary </div>
      <div class="col item border border-right border-primary"> .border .border-right .border-primary </div>
      <div class="col item border border-x border-primary"> .border .border-x .border-primary </div>
      <div class="col item border border-y border-primary"> .border .border-y .border-primary </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> Borders conbinados con radius: .border .border-* .border-*(color) </h2>
        <hr>
      </div>
      <div class="col item border border-primary radius "> .border .border-primary .radius </div>
      <div class="col item border border-secondary radius radius-top"> .border .border-secondary .radius .radius-top
      </div>
      <div class="col item border border-success radius radius-bottom"> .border .border-success .radius .radius-bottom
      </div>
      <div class="col item border border-danger radius radius-right"> .border .border-danger .radius radius-right </div>
      <div class="col item border border-warning radius radius-left"> .border .border-warning .radius radius-left </div>
      <div class="col item border border-info radius"> .border .border-info .radius </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2> .border-* </h2>
        <hr>
      </div>

      <div class="col item border border-primary border-2"> .border </div>
      <div class="col item border-top border-primary border-2"> .border-top </div>
      <div class="col item border-right border-primary border-2"> .border-right </div>
      <div class="col item border-bottom border-primary border-2"> .border-bottom </div>
      <div class="col item border-left border-primary border-2"> .border-left </div>
      <div class="col item border-x border-primary border-2"> .border-x </div>
      <div class="col item border-y border-primary border-2"> .border-y </div>
    </div>


    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2> .border-style </h2>
        <hr>
      </div>
      <div class="col item border border-4 border-primary border-dotted"> .border-dotted </div>
      <div class="col item border border-4 border-primary border-dashed"> .border-dashed </div>
      <div class="col item border border-4 border-primary border-solid"> .border-solid </div>
      <div class="col item border border-4 border-primary border-double"> .border-double </div>
      <div class="col item border border-4 border-primary border-groove"> .border-groove </div>
      <div class="col item border border-4 border-primary border-ridge"> .border-ridge </div>
      <div class="col item border border-4 border-primary border-inset"> .border-inset </div>
      <div class="col item border border-4 border-primary border-outset"> .border-outset </div>
      <div class="col item border border-4 border-primary border-none"> .border-none </div>
      <div class="col item border border-4 border-primary border-hidden"> .border-hidden </div>
    </div>

  </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>