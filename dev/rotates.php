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
      'titulo'        => 'Rotates css  | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'rotates css - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'rotates css, helper css, sass, scss,bootstrap4',
      'navbar_active' => [4,2]
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
            <h1 class="h1"><strong>Rotates</strong> </h1>
          </div>

          <div class="col-12">
            <h2> .rotate-* </h2>
            <hr>
          </div>

          <div class="col item mb-4 rotate-0">
            <div>
              <h5 class="text-center"> .rotate-0</h5>
              <img src="img/img_1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-45">
            <div>
              <h5 class="text-center"> .rotate-45</h5>
              <img src="img/img_1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-90">
            <div>
              <h5 class="text-center"> .rotate-90</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-180">
            <div>
              <h5 class="text-center"> .rotate-180</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-270">
            <div>
              <h5 class="text-center"> .rotate-270</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-360">
            <div>
              <h5 class="text-center"> .rotate-360</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <h2> .rotate-x-* </h2>
            <hr>
          </div>

          <div class="col item mb-4 rotate-x-0">
            <div>
              <h5 class="text-center"> .rotate-x-0 </h5>
              <img src="img/img_1.jpg" class="img-fluid rotate-x-0" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-x-45">
            <div>
              <h5 class="text-center"> .rotate-x-45</h5>
              <img src="img/img_1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-x-90">
            <div>
              <h5 class="text-center"> .rotate-x-90</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-x-180">
            <div>
              <h5 class="text-center"> .rotate-x-180</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-x-270">
            <div>
              <h5 class="text-center"> .rotate-x-270</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-x-360">
            <div>
              <h5 class="text-center"> .rotate-x-360</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <h2> .rotate-y-* </h2>
            <hr>
          </div>

          <div class="col item mb-4 rotate-y-0">
            <div>
              <h5 class="text-center"> .rotate-y-0 </h5>
              <img src="img/img_1.jpg" class="img-fluid rotate-y-0" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-y-45">
            <div>
              <h5 class="text-center"> .rotate-y-45</h5>
              <img src="img/img_1.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-y-90">
            <div>
              <h5 class="text-center"> .rotate-y-90</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-y-180">
            <div>
              <h5 class="text-center"> .rotate-y-180</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-y-270">
            <div>
              <h5 class="text-center"> .rotate-y-270</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

          <div class="col item mb-4 rotate-y-360">
            <div>
              <h5 class="text-center"> .rotate-y-360</h5>
              <img src="img/img_1.jpg" class="img-fluid " alt="">
            </div>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>