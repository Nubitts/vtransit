<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transito Unidades Ingenio El Carmen</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body ng-app="hr" ng-controller="hrController as hr1" data-ng-init="init('CORRALON')">
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.php" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">INCA</strong><strong>Transito</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">I</strong><strong>T</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
      </div>
    </nav>
  </header>
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="#" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">User Gen</h1>
          <p>Visualizador</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
        <li><a href="batey.php"> <i class="icon-grid"></i>Batey </a></li>
        <li class="active"><a href="corralon.php"> <i class="fa fa-bar-chart"></i>Corralon </a></li>
        <li><a href="transito.php"> <i class="icon-padnote"></i>Transito </a></li>

    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <!-- Page Header-->
      <div class="page-header no-margin-bottom">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Corralon</h2>
        </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Corralon </li>
        </ul>
      </div>
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="block margin-bottom-sm">
                <div class="title"><strong>Unidades Ubicadas</strong></div>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Zona</th>
                        <th>Ticket</th>
                        <th>Descripcion</th>
                        <th>Tons</th>
                        <th>Entrada</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="x in hr1.datad">
                        <th scope="row">{{ x.zona }}</th>
                        <td>{{ x.ticket }}</td>
                        <td>{{ x.descrip }}</td>
                        <td>{{ x.pesob }}</td>
                        <td>{{ x.entry }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="block margin-bottom-sm">
                <div class="title"><strong>Resumen</strong></div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Ubicacion</th>
                        <th>Zona</th>
                        <th>Tipo</th>
                        <th>Unidades</th>
                        <th>Tons</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="x in hr1.datag">
                        <th scope=" row">{{ x.location }}</th>
                        <td>{{ x.zona }}</td>
                        <td>{{ x.tpocan }}</td>
                        <td>{{ x.unidades }}</td>
                        <td>{{ x.toneladas }}</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__block block no-margin-bottom">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">2021 &copy; Ingenio El Carmen SA de CV Design by <a href="#">Informatica departamento</a>.</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/front.js"></script>

  <script src="js/angularjs/angular.min.js"></script>
  <script src="js/angularjs/angular-route.min.js"></script>
  <script src="js/angularjs/angular-resource.min.js"></script>

  <script src="js/listdataco.js"></script>


</body>

</html>