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
      'titulo'        => 'Lists | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'lists - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'lists, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,7]
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
            <h1 class="h1 "><strong>list-style-type Property</strong> </h1>
          </div>

          <div class="col-12">


            <p>Example of unordered lists:</p>

            <p>
              <strong> List 1( .list-style-none )</strong>
            </p>
            <ul class="list-style-none">
              <li>List Item1</li>
              <li>List Item2</li>
              <li>List Item3</li>
              <li>List Item4</li>
            </ul>

            <p>
              <strong> List 2(.list-circle)</strong>
            </p>
            <ul class="list-circle">
              <li>List Item1</li>
              <li>List Item2</li>
              <li>List Item3</li>
              <li>List Item4</li>
            </ul>

            <p>
              <strong> List 3(.list-square)</strong>
            </p>
            <ul class="list-square">
              <li>List Item A</li>
              <li>List Item B</li>
              <li>List Item C</li>
              <li>List Item D</li>
            </ul>

            <p>Example of ordered lists:</p>

            <p>
              <strong> List 3(.list-upper-roman)</strong>
            </p>
            <ol class="list-upper-roman">
              <li>List Item1</li>
              <li>List Item2</li>
              <li>List Item3</li>
              <li>List Item4</li>
            </ol>

            List 3(.list-lower-alpha)

            <ol class="list-lower-alpha">
              <li>List Item A</li>
              <li>List Item B</li>
              <li>List Item C</li>
              <li>List Item D</li>
            </ol>

          </div>
        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>