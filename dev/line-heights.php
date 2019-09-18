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
      'titulo'        => 'Line heights | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'line heights - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'line heights, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,6]
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
            <h1 class="h1 "><strong>Line Heights</strong> </h1>
          </div>

          <div class="col-12">
            <h3> .lh </h3>
            <hr class="hr">
            <p class="lh">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

          <div class="col-12">
            <h3> .lh-1x </h3>
            <hr class="hr">
            <p class="lh-1x">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

          <div class="col-12">
            <h3> .lh-1x-25 </h3>
            <hr class="hr">
            <p class="lh-1x-25">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

          <div class="col-12">
            <h3> .lh-1x-50 </h3>
            <hr class="hr">
            <p class="lh-1x-50">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

          <div class="col-12">
            <h3> .lh-1x-75 </h3>
            <hr class="hr">
            <p class="lh-1x-75">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

          <div class="col-12">
            <h3> .lh-2x </h3>
            <hr class="hr">
            <p class="lh-2x">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis nesciunt quia soluta quis
              esse, aspernatur temporibus architecto, cumque, molestiae error harum mollitia maiores nostrum a placeat
              doloremque perspiciatis est animi.
            </p>
          </div>

        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>