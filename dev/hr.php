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
      'titulo'        => 'Hrs | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'hrs - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'hrs, helper css, sass, scss,bootstrap4',
      'navbar_active' => [3,3]
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
            <h1 class="h1 "><strong>Hr</strong> </h1>
          </div>

          <div class="col-12">
            .hr
            <hr class="hr">
          </div>

          <div class="col-12">
            .hr.double
            <hr class="hr double">
          </div>

          <div class="col-12">
            .hr.dashed
            <hr class="hr dashed">
          </div>

          <div class="col-12">
            .hr.dotted
            <hr class="hr dotted">
          </div>

          <div class="col-12">
            .hr.dotted
            <hr class="hr dotted">
          </div>

          <div class="col-12">
            .hr.hr-2x
            <hr class="hr hr-2x">
          </div>

          <div class="col-12">
            .hr.hr-3x
            <hr class="hr hr-3x">
          </div>

          <div class="col-12">
            .hr.hr-white
            <hr class="hr hr-white">
          </div>

          <div class="col-12">
            .hr.hr-black
            <hr class="hr hr-black">
          </div>

        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>