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
      'titulo'        => 'Text decoration | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'text decoration - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'text decoration, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,3]
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
            <h1 class="h1 "><strong>Text Decoration</strong> </h1>
          </div>

          <div class="col-12">

            <p class="text-underline">
              .text-underline
            </p>
            <p class="text-overline">
              .text-overline
            </p>
            <p class="text-line-through">
              .text-line-through
            </p>
            <p class="text-blink">
              .text-blink
            </p>
            <p class="text-under-over">
              .text-underover
            </p>

            <p class="text-wavy">
              .text-wavy
            </p>

            <p>
              <a class="none" href="#">.none or .link-text</a>
            </p>

          </div>
        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>