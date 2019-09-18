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
      'titulo'        => 'Borders | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'borders - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'borders, helper css, sass, scss,bootstrap4',
      'navbar_active' => [3,1]
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
        <h1 class="h1 "><strong>bs</strong> Property</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-* </h2>
        <hr>
      </div>
      <div class="col item b"> .b </div>
      <div class="col item b-top"> .b-top </div>
      <div class="col item b-right"> .b-right </div>
      <div class="col item b-bottom"> .b-bottom </div>
      <div class="col item b-left"> .b-left </div>
      <div class="col item b-x"> .b-x </div>
      <div class="col item b-y"> .b-y </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .b .b-*-0 </h2>
        <hr>
      </div>
      <div class="col item b b-0"></div>
      <div class="col item b b-top-0"></div>
      <div class="col item b b-right-0"></div>
      <div class="col item b b-bottom-0"></div>
      <div class="col item b b-left-0"></div>

    </div>

    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .b .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-primary"> .b .b-primary </div>
      <div class="col item b b-secondary"> .b .b-secondary </div>
      <div class="col item b b-success"> .b .b-success </div>
      <div class="col item b b-danger"> .b .b-danger </div>
      <div class="col item b b-warning"> .b .b-warning </div>
      <div class="col item b b-info"> .b .b-info </div>
      <div class="col item b b-light"> .b .b-light </div>
      <div class="col item b b-dark"> .b .b-dark </div>
      <div class="col item b b-white"> .b .b-white </div>
    </div>


    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .b .b-2 .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-2 b-primary"> .b .b-2 .b-primary </div>
      <div class="col item b b-2 b-secondary"> .b .b-2 .b-secondary </div>
      <div class="col item b b-2 b-success"> .b .b-2 .b-success </div>
      <div class="col item b b-2 b-danger"> .b .b-2 .b-danger </div>
      <div class="col item b b-2 b-warning"> .b .b-2 .b-warning </div>
      <div class="col item b b-2 b-info"> .b .b-2 .b-info </div>
      <div class="col item b b-2 b-light"> .b .b-2 .b-light </div>
      <div class="col item b b-2 b-dark"> .b .b-2 .b-dark </div>
      <div class="col item b b-2 b-white"> .b .b-2 .b-white </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .b .b-3 .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-3 b-primary"> .b .b-3 .b-primary </div>
      <div class="col item b b-3 b-secondary"> .b .b-3 .b-secondary </div>
      <div class="col item b b-3 b-success"> .b .b-3 .b-success </div>
      <div class="col item b b-3 b-danger"> .b .b-3 .b-danger </div>
      <div class="col item b b-3 b-warning"> .b .b-3 .b-warning </div>
      <div class="col item b b-3 b-info"> .b .b-3 .b-info </div>
      <div class="col item b b-3 b-light"> .b .b-3 .b-light </div>
      <div class="col item b b-3 b-dark"> .b .b-3 .b-dark </div>
      <div class="col item b b-3 b-white"> .b .b-3 .b-white </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> .b .b-4 .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-4 b-primary"> .b .b-4 .b-primary </div>
      <div class="col item b b-4 b-secondary"> .b .b-4 .b-secondary </div>
      <div class="col item b b-4 b-success"> .b .b-4 .b-success </div>
      <div class="col item b b-4 b-danger"> .b .b-4 .b-danger </div>
      <div class="col item b b-4 b-warning"> .b .b-4 .b-warning </div>
      <div class="col item b b-4 b-info"> .b .b-4 .b-info </div>
      <div class="col item b b-4 b-light"> .b .b-4 .b-light </div>
      <div class="col item b b-4 b-dark"> .b .b-4 .b-dark </div>
      <div class="col item b b-4 b-white"> .b .b-4 .b-white </div>
    </div>




    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> bs conbinados: .b .b-* .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-top b-primary"> .b .b-top .b-primary </div>
      <div class="col item b b-bottom b-primary"> .b .b-bottom .b-primary </div>
      <div class="col item b b-left b-primary"> .b .b-left .b-primary </div>
      <div class="col item b b-right b-primary"> .b .b-right .b-primary </div>
      <div class="col item b b-x b-primary"> .b .b-x .b-primary </div>
      <div class="col item b b-y b-primary"> .b .b-y .b-primary </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2 class="mt-3"> bs conbinados con radius: .b .b-* .b-*(color) </h2>
        <hr>
      </div>
      <div class="col item b b-primary radius "> .b .b-primary .radius </div>
      <div class="col item b b-secondary radius radius-top"> .b .b-secondary .radius .radius-top
      </div>
      <div class="col item b b-success radius radius-bottom"> .b .b-success .radius .radius-bottom
      </div>
      <div class="col item b b-danger radius radius-right"> .b .b-danger .radius radius-right </div>
      <div class="col item b b-warning radius radius-left"> .b .b-warning .radius radius-left </div>
      <div class="col item b b-info radius"> .b .b-info .radius </div>
    </div>



    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2> .b-* </h2>
        <hr>
      </div>

      <div class="col item b b-primary b-2"> .b </div>
      <div class="col item b-top b-primary b-2"> .b-top </div>
      <div class="col item b-right b-primary b-2"> .b-right </div>
      <div class="col item b-bottom b-primary b-2"> .b-bottom </div>
      <div class="col item b-left b-primary b-2"> .b-left </div>
      <div class="col item b-x b-primary b-2"> .b-x </div>
      <div class="col item b-y b-primary b-2"> .b-y </div>
    </div>


    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2> .b-style </h2>
        <hr>
      </div>
      <div class="col item b b-4 b-primary b-dotted"> .b-dotted </div>
      <div class="col item b b-4 b-primary b-dashed"> .b-dashed </div>
      <div class="col item b b-4 b-primary b-solid"> .b-solid </div>
      <div class="col item b b-4 b-primary b-double"> .b-double </div>
      <div class="col item b b-4 b-primary b-groove"> .b-groove </div>
      <div class="col item b b-4 b-primary b-ridge"> .b-ridge </div>
      <div class="col item b b-4 b-primary b-inset"> .b-inset </div>
      <div class="col item b b-4 b-primary b-outset"> .b-outset </div>
      <div class="col item b b-4 b-primary b-none"> .b-none </div>
      <div class="col item b b-4 b-primary b-hidden"> .b-hidden </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-12">
        <h2> .b-dotted-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-dotted"> .b-dotted </div>
      <div class="col item b-4 b-primary b-top b-top-dotted"> .b-top-dotted </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-dotted"> .b-bottom-dotted </div>
      <div class="col item b-4 b-primary b-left b-left-dotted"> .b-left-dotted </div>
      <div class="col item b-4 b-primary b-right b-right-dotted"> .b-right-dotted </div>
      <div class="col item b-4 b-primary b-x b-x-dotted"> .b-x-dotted </div>
      <div class="col item b-4 b-primary b-y b-y-dotted"> .b-y-dotted </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-dashed-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-dashed"> .b-dashed </div>
      <div class="col item b-4 b-primary b-top b-top-dashed"> .b-top-dashed </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-dashed"> .b-bottom-dashed </div>
      <div class="col item b-4 b-primary b-left b-left-dashed"> .b-left-dashed </div>
      <div class="col item b-4 b-primary b-right b-right-dashed"> .b-right-dashed </div>
      <div class="col item b-4 b-primary b-x b-x-dashed"> .b-x-dashed </div>
      <div class="col item b-4 b-primary b-y b-y-dashed"> .b-y-dashed </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-solid-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-solid"> .b-solid </div>
      <div class="col item b-4 b-primary b-top b-top-solid"> .b-top-solid </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-solid"> .b-bottom-solid </div>
      <div class="col item b-4 b-primary b-left b-left-solid"> .b-left-solid </div>
      <div class="col item b-4 b-primary b-right b-right-solid"> .b-right-solid </div>
      <div class="col item b-4 b-primary b-x b-x-solid"> .b-x-solid </div>
      <div class="col item b-4 b-primary b-y b-y-solid"> .b-y-solid </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-double-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-double"> .b-double </div>
      <div class="col item b-4 b-primary b-top b-top-double"> .b-top-double </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-double"> .b-bottom-double </div>
      <div class="col item b-4 b-primary b-left b-left-double"> .b-left-double </div>
      <div class="col item b-4 b-primary b-right b-right-double"> .b-right-double </div>
      <div class="col item b-4 b-primary b-x b-x-double"> .b-x-double </div>
      <div class="col item b-4 b-primary b-y b-y-double"> .b-y-double </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-groove-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-groove"> .b-groove </div>
      <div class="col item b-4 b-primary b-top b-top-groove"> .b-top-groove </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-groove"> .b-bottom-groove </div>
      <div class="col item b-4 b-primary b-left b-left-groove"> .b-left-groove </div>
      <div class="col item b-4 b-primary b-right b-right-groove"> .b-right-groove </div>
      <div class="col item b-4 b-primary b-x b-x-groove"> .b-x-groove </div>
      <div class="col item b-4 b-primary b-y b-y-groove"> .b-y-groove </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-ridge-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-ridge"> .b-ridge </div>
      <div class="col item b-4 b-primary b-top b-top-ridge"> .b-top-ridge </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-ridge"> .b-bottom-ridge </div>
      <div class="col item b-4 b-primary b-left b-left-ridge"> .b-left-ridge </div>
      <div class="col item b-4 b-primary b-right b-right-ridge"> .b-right-ridge </div>
      <div class="col item b-4 b-primary b-x b-x-ridge"> .b-x-ridge </div>
      <div class="col item b-4 b-primary b-y b-y-ridge"> .b-y-ridge </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-inset-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-inset"> .b-inset </div>
      <div class="col item b-4 b-primary b-top b-top-inset"> .b-top-inset </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-inset"> .b-bottom-inset </div>
      <div class="col item b-4 b-primary b-left b-left-inset"> .b-left-inset </div>
      <div class="col item b-4 b-primary b-right b-right-inset"> .b-right-inset </div>
      <div class="col item b-4 b-primary b-x b-x-inset"> .b-x-inset </div>
      <div class="col item b-4 b-primary b-y b-y-inset"> .b-y-inset </div>
    </div>

    <div class="row">
      <div class="col-12">
        <h2> .b-outset-style </h2>
        <hr>
      </div>
      <div class="col item b-4 b-primary b b-outset"> .b-outset </div>
      <div class="col item b-4 b-primary b-top b-top-outset"> .b-top-outset </div>
      <div class="col item b-4 b-primary b-bottom b-bottom-outset"> .b-bottom-outset </div>
      <div class="col item b-4 b-primary b-left b-left-outset"> .b-left-outset </div>
      <div class="col item b-4 b-primary b-right b-right-outset"> .b-right-outset </div>
      <div class="col item b-4 b-primary b-x b-x-outset"> .b-x-outset </div>
      <div class="col item b-4 b-primary b-y b-y-outset"> .b-y-outset </div>

    </div>

  </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>