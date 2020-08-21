<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WebApp</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="base/syncscroll.js"></script>
    <script src="base/data.js"></script>
    <script src="ajax.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">
    <!-- FontAwessome CSS -->
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <!-- pdfjs CSS -->
    <link rel="stylesheet" href="pdfjs/viewer.css">
    <!-- custom pdfjs CSS -->
    <link rel="stylesheet" href="css/viewer.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- This snippet is used in production (included from viewer.html) -->
    <script src="pdfjs/build/pdf.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<main role="main" class="container">

  <div class="starter-template">
<div class="spinner-border">loading....</div>
        <?php
        if(!empty($_POST['test'])){
            require_once("ajax.php");
            $data = new data();
            $data->insertData('testtable', 'Value', $_POST['test']);
        }
        ?>
        <form method='POST'>
                <input class='form-control mr-sm-2' name='test' type='text'>
                <button class='btn btn-secondary my-2 my-sm-0 button' value="insert">save</button>
        </form>
        <button class='btn btn-secondary my-2 my-sm-0 button' value='select'>show latest data</button>
        <button class='btn btn-secondary my-2 my-sm-0 button' value='destroy'>clear</button>
        <div id='data'></div>
  </div>

</main><!-- /.container -->
      <script src="assets/dist/js/bootstrap.bundle.js"></script></body>
</html>