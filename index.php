<?php
error_reporting(0);
include 'includes/connect.php';
#include 'includes/wallet.php';


if ($_SESSION['admin_sid'] == session_id()) {
  header("location:admin-page.php");
} else {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Order Food</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen,projection">

    <style type="text/css">
      .input-field div.error {
        position: relative;
        top: -1rem;
        left: 0rem;
        font-size: 0.8rem;
        color: #FF4081;
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        -o-transform: translateY(0%);
        transform: translateY(0%);
      }

      .input-field label.active {
        width: 100%;
      }

      .left-alert input[type=text]+label:after,
      .left-alert input[type=password]+label:after,
      .left-alert input[type=email]+label:after,
      .left-alert input[type=url]+label:after,
      .left-alert input[type=time]+label:after,
      .left-alert input[type=date]+label:after,
      .left-alert input[type=datetime-local]+label:after,
      .left-alert input[type=tel]+label:after,
      .left-alert input[type=number]+label:after,
      .left-alert input[type=search]+label:after,
      .left-alert textarea.materialize-textarea+label:after {
        left: 0px;
      }

      .right-alert input[type=text]+label:after,
      .right-alert input[type=password]+label:after,
      .right-alert input[type=email]+label:after,
      .right-alert input[type=url]+label:after,
      .right-alert input[type=time]+label:after,
      .right-alert input[type=date]+label:after,
      .right-alert input[type=datetime-local]+label:after,
      .right-alert input[type=tel]+label:after,
      .right-alert input[type=number]+label:after,
      .right-alert input[type=search]+label:after,
      .right-alert textarea.materialize-textarea+label:after {
        right: 70px;
      }
    </style>
  </head>

  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1">
                    My Loco
                  </a> <span class="logo-text">Logo</span></h1>
              </li>
            </ul>

          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">



          <!--start container-->
          <div class="container">
            <div class="divider"></div>
            <form class="formValidate" id="formValidate" method="get" action="place-order.php?ms=<?php echo $_GET["ms"]; ?>" novalidate="novalidate">
              <div class="row">
                <div class="col s12 m4 l3">
                  <h4 class="header">Haz tu pedido:</h4>
                </div>
                <div>
                  <table id="data-table-customer" class=" display container" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nombre:</th>
                        <th>Precio:</th>
                        <th>Cantidad:</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $result = mysqli_query($con, "SELECT * FROM items where not deleted;");
                      while ($row = mysqli_fetch_array($result)) {
                        echo '<tr><td>' . $row["name"] . '</td><td>' . $row["price"] . '</td>';
                        echo '<td><div class="input-field col s12"><label for=' . $row["id"] . ' class="">Quantity</label>';
                        echo '<input id="' . $row["id"] . '" name="' . $row['id'] . '" type="text" data-error=".errorTxt' . $row["id"] . '"><div class="errorTxt' . $row["id"] . '"></div></td></tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <div id="any_note" class="input-field col s12">
                  <i class="mdi-editor-mode-edit prefix"></i>
                  <textarea id="description" name="description" class="materialize-textarea"></textarea>
                  <label for="description" class="">Any note(optional)</label>
                </div>
                <button id="order_buttom" class="btn cyan waves-effect waves-light btn-center" type="submit" name="action">Ordenar
                  <i class="mdi-content-send right"></i>
                </button>

            </form>
            <div class="divider"></div>

          </div>
      </div>
      <!--end container-->

      </section>
      <!-- END CONTENT -->


    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
      <div class="center">


        <div>

          <span>Copyright © 2022 <a class="grey-text text-lighten-4" href="#" target="_blank">My Loco</a> All rights reserved.</span>
        </div>
        <div>
          <span> Design and Developed by <a class="grey-text text-lighten-4" href="#">Freddy Javier S&aacute;ez &Aacute;vila</a></span>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>

    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
      $("#formValidate").validate({
            rules: {
              <?php
              $result = mysqli_query($con, "SELECT * FROM items where not deleted;");
              while ($row = mysqli_fetch_array($result)) {
                echo $row["id"] . ':{
				min: 0,
				max: 10
				},
				';
              }
              echo '},';
              ?>
              messages: {
                <?php
                $result = mysqli_query($con, "SELECT * FROM items where not deleted;");
                while ($row = mysqli_fetch_array($result)) {
                  echo $row["id"] . ':{
				min: "Minimum 0",
				max: "Maximum 10"
				},
				';
                }
                echo '},';
                ?>
                errorElement: 'div',
                errorPlacement: function(error, element) {
                  var placement = $(element).data('error');
                  if (placement) {
                    $(placement).append(error)
                  } else {
                    error.insertAfter(element);
                  }
                }
              });
    </script>
  </body>

  </html>
<?php
}

?>