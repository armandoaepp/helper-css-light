<!DOCTYPE html>
<html lang="es_ES">

<head>
  <?php

    require_once './paths.php' ;
    $root = ROOT.DS;

    // $path = '../';
    // $path_sidebar = $path ;
    // $path = !empty($path_dist) ? $path_dist : $path ;

    $setvar = array(
      'titulo'        => 'Text Align Last | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'text align last - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'text align last, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,2]
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
            <h1 class="h1 "><strong>text-align-last</strong> Property</h1>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-auto</h3>
            <div class="text-last-auto">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-start</h3>
            <div class="text-last-start">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-end</h3>
            <div class="text-last-end">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-left</h3>
            <div class="text-last-left">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-right</h3>
            <div class="text-last-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-center</h3>
            <div class="text-last-center">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-justify</h3>
            <div class="text-last-justify">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

          <div class="col-md-6">
            <h3 class="h3">.text-last-initial</h3>
            <div class="text-last-initial">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at
                pulvinar
                felis
                blandit.
                Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut.</p>
            </div>
          </div>

        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>