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
      'titulo'        => 'Hedings | Helper Css Light | Bootstrap4',
      'follow'        => '',
      'description'   => 'Hedings - helper css utilidades cs, utilidades bootstrap4 ',
      'keywords'      => 'Hedings, helper css, sass, scss,bootstrap4',
      'navbar_active' => [2,1]
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
            <h1 class="h1 "><strong>Heading</strong> </h1>
          </div>

          <div class="col-12">
            <h1> h1. heading</h1>
            <h2> h2. heading</h2>
            <h3> h3. heading</h3>
            <h4> h4. heading</h4>
            <h5> h5. heading</h5>
            <h6> h6. heading</h6>
            <table>
              <thead>
                <tr>
                  <th>Heading</th>
                  <th>Example</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>
                  </td>
                  <td>
                    <span class="h1">h1. Bootstrap heading</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>
                  </td>
                  <td>
                    <span class="h2">h2. Bootstrap heading</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>
                  </td>
                  <td>
                    <span class="h3">h3. Bootstrap heading</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>
                  </td>
                  <td>
                    <span class="h4">h4. Bootstrap heading</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      <code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>
                  </td>
                  <td>
                    <span class="h5">h5. Bootstrap heading</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>
                  </td>
                  <td>
                    <span class="h6">h6. Bootstrap heading</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </main>
  </div>


  <?php require $root."templates/foot_links.phtml" ;?>

</body>

</html>