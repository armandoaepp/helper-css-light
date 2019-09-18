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
      'titulo'        => 'Opacities | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'opacities - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'opacities, helper css, sass, scss,bootstrap4',
      'navbar_active' => [4,1]
    );

    require $root."templates/head_links.phtml";
?>

</head>

<body>
  <?php require $root."templates/header.phtml";?>
  <div class="app-wrap">

    <main class="main">

    <div class="container">
    <div class="row">
      <div class="col-12 border-bottom mb-3">
        <h1 class="h1 "><strong>Opacities</strong> </h1>
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-100</h5>
        <img src="img/img_1.jpg" class="opacity-100 img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-90</h5>
        <img src="img/img_1.jpg" class="opacity-90 img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-80</h5>
        <img src="img/img_1.jpg" class="opacity-80 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-70</h5>
        <img src="img/img_1.jpg" class="opacity-70 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-60</h5>
        <img src="img/img_1.jpg" class="opacity-60 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-50</h5>
        <img src="img/img_1.jpg" class="opacity-50 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-40</h5>
        <img src="img/img_1.jpg" class="opacity-40 img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-30</h5>
        <img src="img/img_1.jpg" class="opacity-30 img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-20</h5>
        <img src="img/img_1.jpg" class="opacity-20 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-10</h5>
        <img src="img/img_1.jpg" class="opacity-10 img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .opacity-0</h5>
        <img src="img/img_1.jpg" class="opacity-0 img-fluid" alt="">
      </div>




    </div>
    <h1 class="my-4"> Opacities Hover </h1>
    <div class="row">
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-100 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-100 opacity img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-90 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-90 opacity img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-80 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-80 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-70 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-70 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-60 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-60 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-50 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-50 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-40 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-40 opacity img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-30 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-30 opacity img-fluid" alt="">
      </div>
      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-20 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-20 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-10 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-10 opacity img-fluid" alt="">
      </div>

      <div class="col-md-4 mb-4 ">
        <h5 class="text-center"> .hvr-opacity-0 opacity</h5>
        <img src="img/img_1.jpg" class="hvr-opacity-0 opacity img-fluid" alt="">
      </div>

    </div>
  </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>