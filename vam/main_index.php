<?php
/**
 * @Project: Virtual Airlines Manager (VAM)
 * @Author: Alejandro Garcia
 * @Web http://virtualairlinesmanager.net
 * Copyright (c) 2013 - 2015 Alejandro Garcia
 * VAM is licensed under the following license:
 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fly Airlines VA</title>
    <meta charset="utf-8">
    <meta name="keywords"
          content="Fly Airlines, VA, Virtuel Airlines, Compagnie Aérenienne virtuel, IVAO, VATSIM, XPlan, P3D, Prépar3D, FSX, Avion, PLane"/>
    <meta name="description"
          content="Fly Airlines VA est une compagnie aérienne Virtuel évoluant sur principalement sur le réseau IVAO."/>
    <meta name="author" content="Quentin R">
    <meta name="viewport" content="width=device-width, initial-scale=1"
    <meta name="google-site-verification" content="Z5sdNiY6xd9OuYDe4U5WbvIRk57dHqj5Fnv8K04dbSQ"/>

    <link rel="author" href="https://plus.google.com/u/0/108665243705425046932/"
          title="Virtual Airlines Manager on Google+"/>
    <link rel="icon" href="images/LOGOFB2.ico" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="images/LOGOFB2.ico">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">


    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link rel="stylesheet" type="text/css" href="css/icons.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="css/flyairlines.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css"/>


    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <![endif]-->

    <script src="js/jquery1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
    <script src="Charts/Chart.js"></script>
    <script src="js/vam.js" type="text/javascript"></script>
    <script src="js/jquery.confirm.min.js" type="text/javascript"></script>
    <script src="js/boutonhaut.js" type="text/javascript"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-64212625-2', 'auto');
        ga('send', 'pageview');

    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5782d4391ca3e686763c9fae/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</head>
<body>

<header class="head-section">
    <div class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Fly Airlines VA</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="./index.php">Home</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ABOUT; ?>
                        <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="./index.php?page=staff"><?php echo STAFF; ?></a></li>
                        <li><a href="./index.php?page=rules"><?php echo "Réglement"; ?></a></li>
                        <li><a href="./index.php?page=school"><?php echo "Formations"; ?></a></li>
                        <li><a href="./index.php?page=events"><?php echo "Events"; ?></a></li>
                        <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Pilotes</a>
                            <ul class="dropdown-menu">
                                <li><a href="./index.php?page=pilots_public"><?php echo "Nos Pilotes"; ?></a></li>
                                <li><a href="./index.php?page=ranks"><?php echo "Salaires et Grades"; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="#"><?php echo "La compagnie"; ?>
                        <i class="fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="./index.php?page=fleet_public"><?php echo FLEET; ?></a></li>
                            <li><a href="./index.php?page=route_public"><?php echo ROUTES; ?></a></li>
                            <li><a href="./index.php?page=hubs"><?php echo HUBS; ?></a></li>
                            <li><a href="./index.php?page=tours"><?php echo TOURS; ?></a></li>
                            <!--<li><a href="./index.php?page=awards"><?php echo AWARDS; ?></a></li>-->
                        </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="#"><?php echo "Finance et Stats"; ?>
                        <i class="fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="./index.php?page=stats"><?php echo STATS; ?></a></li>
                            <li><a href="./index.php?page=va_global_financial_report"><?php echo GLOBAL_FINANCES; ?></a>
                            </li>
                        </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                        href="#"><?php echo "Contacts"; ?>
                        <i class="fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                            <li><a href="./index.php?page=contact"><?php echo "Envoyez-nous un mail"; ?></a></li>
                            <li><a href="http://flyairlinesva-membres.esy.es/forum"><?php echo FORUM; ?></a></li>
                            </li>
                        </ul>
                </li>
            </ul>
            <?php if ($user_logged == 0) : ?>
                <ul class="nav navbar-nav navbar-right register">
                    <li><a href="./index.php?page=pilot_register"><span class="glyphicon glyphicon-user"></span>
                            Register</a></li>
                    <li><a href="#myModal" role="button" data-toggle="modal" rel="tooltip"
                           data-original-title='Hello'><span
                                class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
            <?php else : ?>
                <ul class="nav navbar-nav navbar-right register">
                    <li><a href="./index_vam.php" role="button"><span class="glyphicon glyphicon-home"></span>
                            System</a>
                    </li>
                    <li><a href="./index.php?page=logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
                    </li>

                </ul>
            <?php endif; ?>
        </div>
    </div>
    <a href="http://localhost/flyairlines/vam/index.php?lang=fr"><img class="fr" src="./images/country-flags/FR.png"></img></a>
    <a href="http://localhost/flyairlines/vam/index.php?lang=en"><img class="bg" src="./images/country-flags/GB.png"></img></a>
</header>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login Fly Airlines System</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="login-form" action="./login.php" role="form"
                      method="post">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="user">Callsign:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user" id="user"
                                   placeholder="Enter Callsign">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="password">Password:</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <a href="./index.php?page=password_recover">Recover Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div id="carousel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="./images/slider/1.jpg" alt="...">

                        <div class="carousel-caption">
                            <h3></h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/slider/2.jpg" alt="...">

                        <div class="carousel-caption">
                            <h3></h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/slider/3.jpg" alt="...">

                        <div class="carousel-caption">
                            <h3></h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/slider/4.jpg" alt="...">

                        <div class="carousel-caption">
                            <h3></h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/slider/5.jpg" alt="...">

                        <div class="carousel-caption">
                            <h3></h3>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- Carousel -->
        </div>
    </div>
</div>

<!-- HOME PAGE begin -->
<br>
<br>

<div class="container">
    <?php
    if (!isset($_GET["page"]) || trim($_GET["page"]) == "") {
    $sql = 'select callsign, arrival, departure, flight_status, name, surname, pending_nm, plane_type from vam_live_flights vf, gvausers gu where gu.gvauser_id = vf.gvauser_id ';
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    $row_cnt = $result->num_rows;

    $sql = "SELECT flight_id FROM `vam_live_flights` WHERE TIMESTAMPDIFF( MINUTE ,NOW( ) , last_update )<-3";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    while ($row = $result->fetch_assoc()) {
        $sql_inner = "delete from vam_live_acars where flight_id='" . $row["flight_id"] . "'";

        if (!$result_acars = $db->query($sql_inner)) {
            die('There was an error running the query [' . $db->error . ']');
        }
        $sql_inner = "delete from vam_live_flights where flight_id='" . $row["flight_id"] . "'";
        if (!$result_acars = $db->query($sql_inner)) {
            die('There was an error running the query [' . $db->error . ']');
        }
    }
    ?>

    <?php if ($row_cnt > 0) : ?>
        <div class="row" id="live_flights">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">LIVE FIGHTS</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="live_flights_table">
                                <tr>
                                    <th><?php echo LF_CALLSIG ?></th>
                                    <th><?php echo LF_PILOT ?></th>
                                    <th><?php echo LF_DEPARTURE ?></th>
                                    <th><?php echo LF_ARRIVAL ?></th>
                                    <th><?php echo FLIGHT_STAGE ?></th>
                                    <th><?php echo BOOK_ROUTE_ARICRAFT_TYPE ?></th>
                                    <th><?php echo PERC_DONE ?></th>
                                    <th><?php echo PENDING_NM ?></th>
                                </tr>
                            </table>
                            <?php include('./vam_live_flights_map.php') ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-12">
            <h3>Welcome to Fly Airlines</h3>
            <p>Bienvenu sur le site de la Fly Airlines, La compagnie Simple Jeune et Dinamyque, profité d'un
                staff a votre écoutes et des event tous les mois.
                Nous recrutons <b>des pilotes</b> <i>(du débutant au confirmé)</i> n'hésitez pas, envoyez de
                suite votre candidature grace au <u>bouton Inscription</u></p>
            <img src="images/LOGOFACEBOOK.png" sizes="100x100">
        </div>
        <div class="hr">
            <span class="hr-inner"></span>
        </div>


        <div class="col-md-12">
            <div class="stats h-service ovh">
                <h2 class="Open_Sans_Light statistique"><strong><?php echo STATISTICS_VA; ?></strong></h2>
                <div class="col-md-12">
                    <img src="images/users.png" class="img_users img_carre"></img>
                    <div class="carre_avion carre_yelow text_avions">
                        <h3 class="color_white center2 Open_Sans_Light"><?php echo ST_NUMPILOTS; ?></h3>
                        <h2 class="chiffre center2 color_white Open_Sans_Light"><?php echo $num_pilots; ?></h2>
                    </div>

                    <img src="images/time.png" class="img_time img_carre"></img>
                    <div class="carre3 carre_blue text_time">
                        <h3 class="color_white center2 Open_Sans_Light"><?php echo "Avions"; ?></h3>
                        <h2 class="chiffre center2 color_white Open_Sans_Light"><?php echo $num_planes; ?></h2>
                    </div>

                    <img src="images/total_vols.png" class="img_vols_totals img_carre"></img>
                    <div class="carre3 carre_green text_vols_totals">
                        <h3 class="color_white center2 Open_Sans_Light"><?php echo ST_NUMROUTES; ?></h3>
                        <h2 class="chiffre center2 color_white Open_Sans_Light"><?php echo $num_routes; ?></h2>
                    </div>

                    <img src="images/régulier.png" class="img_vols_regulier img_carre"></img>
                    <div class="carre3 carre_pirpple text_vols_regulier">
                        <h3 class="color_white center2 Open_Sans_Light"><?php echo "Heures" ?></h3>
                        <h2 class="chiffre color_white Open_Sans_Light"><?php echo 0 + $va_hours; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="hr">
            <span class="hr-inner"></span>
        </div>
        <div id="home-services" class="staff">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong>LE STAFF</strong></h2>
                    </div>
                    <div class="col-md-3">
                        <div class="h-service">
                            <div class="icon-wrap ico-bg round-fifty wow fadeInDown pad2">
                                <span class="flyva-ceo"></span>
                            </div>
                            <div class="h-service-content wow fadeInUp">
                                <h3>
                                    Quentin RAULT
                                </h3>
                                <p>
                                    Fondateur et PDG,<br>
                                    de Fly Airlines depuis<br>
                                    Juillet 2015.<br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h-service">
                            <div class="icon-wrap ico-bg round-fifty wow fadeInDown pad2">
                                <span class="flyva-artistic-brush"></span>
                            </div>
                            <div class="h-service-content wow fadeInUp">
                                <h3>
                                    Célia BOUCHET
                                </h3>
                                <a href="http://cellyacreations.wixsite.com/portfolio">
                                    <h5>
                                        Céllya Créations
                                    </h5>
                                </a>
                                <p>
                                    Graphiste, et en partenariat<br>
                                    Célia, nous réalises toutes nos bannière, logo etc...
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h-service">
                            <div class="icon-wrap ico-bg round-fifty wow fadeInDown pad2">
                                <span class="flyva-route"></span>
                            </div>
                            <div class="h-service-content wow fadeInUp">
                                <h3>
                                    Lilian Vivenot
                                </h3>
                                <p>
                                    Directeur des Opération,<br>
                                    modifie ou creer les route<br>
                                    de la compagnie.<br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h-service">
                            <div class="icon-wrap ico-bg round-fifty wow fadeInDown pad2">
                                <span class="flyva-eventl"></span>
                            </div>
                            <div class="h-service-content wow fadeInUp">
                                <h3>
                                    Clément GUINAMANT
                                </h3>
                                <p>
                                    Directeur Event<br>
                                    Il importe de l'animation<br>
                                    dans la compagnie, en créent<br>
                                    des évent, tours, etc ...
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 2 -->
        <div class="hr">
            <span class="hr-inner"></span>
        </div>

        <div class="container">

            <div class="col-md-16">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo "Nos Actualitées"; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $db = new mysqli($db_host, $db_username, $db_password, $db_database);
                        $db->set_charset("utf8");
                        if ($db->connect_errno > 0) {
                            die('Unable to connect to database [' . $db->connect_error . ']');
                        }
                        $sql = "select notam_id,notam_name,DATE_FORMAT(publish_date,'%d-%m-%Y') as publish_date_web ,DATE_FORMAT(publish_date,'%Y%m%d') as publish_date,DATE_FORMAT(hide_date,'%Y%m%d') as hide_date, DATE_FORMAT(now(),'%Y%m%d') as currdat 
from notams order by publish_date asc limit 5";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        ?>
                        <table class="table table-striped">
                            <?php
                            echo "<tr><th>" . "INFO" . "</th><th>" . NOTAM_DATE . "</th></tr>" . $row["publish_date"];
                            while ($row = $result->fetch_assoc()) {
                                if (($row["publish_date"] - $row["currdat"] <= 0) && ($row["hide_date"] - $row["currdat"] > 0)) {
                                    echo '<tr><td>';
                                    echo '<a href="index.php?page=notam&notam_id=' . $row["notam_id"] . '">' . $row["notam_name"] . '</a>' . '</td><td>';
                                    echo $row["publish_date_web"] . '</td></tr>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>

            <div class="hr">
                <span class="hr-inner"></span>
            </div>

            <div class="row mar-b-50 our-clients">
                <div class="col-md-3">
                    <h2>
                        <strong>Nos Partenaires</strong>
                    </h2>
                    <a href="nospartenariat.php">
                        <u>Tous nos partenariats</u>
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="outside">
                        <p>
                            <span id="slider-prev"></span>
                            |
                            <span id="slider-next"></span>
                        </p>
                    </div>
                    <ul class="bxslider1 clients-list">
                        <li>
                            <a href="#">
                                <img src="images/fsradio.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/favi1.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/opensky.png" alt=""/>

                                <img src="images/opensky.png" class="color-img" alt=""/>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- END CLIENTS -->
    </div>

    <!-- REMOVE COMMENTS to display ONLNE NETWORKS section
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><?php //echo FLIGHT_NETWORKS; ?></h3>
					</div>
					<div class="panel-body">
						<div class="container">
							<?php
    /*
        if ($ivao == 1) {
            echo '<img src="./images/ivao.gif" height="50" width="50">';
        }
        if ($vatsim == 1) {
            echo '<img src="./images/Vatsim.png" height="50" width="50">';
        }
    */
    ?>
						</div>
					</div>
				</div>
				<div class="clearfix visible-lg"></div>
			</div> -->
</div>


<!-- HOME PAGE End -->
<?php
}
if (!isset($_GET["page"]) || trim($_GET["page"]) == "") {
} else {
    $Existe = file_exists($_GET["page"] . ".php");
    if ($Existe == true) {
        include($_GET["page"] . ".php");
    } else {
        echo "Page Not Found";
    }
}
?>
<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    contact info
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i>75000, Paris</p>
                    <p><i class="fa fa-envelope pr-10"></i>Email : <a
                            href="javascript:;">contact.flyairlines@gmail.com</a></p>
                </address>
            </div>
            <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
                <h1>facebook</h1>
                <div class="tweet-box">
                    <i class="fa fa-facebook"></i>
                    <em>
                        Un TS pour la VA es mis en place a l'adresse: flyairlinesva.miki-heberg.fr
                    </em>
                </div>
                <div class="tweet-box">
                    <i class="fa fa-facebook"></i>
                    <em>
                        Please follow
                        <a href="javascript:;">@example</a>
                        for all future updates of us!
                        <a href="javascript:;">twitter.com/acme</a>
                    </em>
                </div>
                <div class="tweet-box">
                    <i class="fa fa-facebook"></i>
                    <em>
                        Please follow
                        <a href="javascript:;">@example</a>
                        for all future updates of us!
                        <a href="javascript:;">twitter.com/acme</a>
                    </em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        Our Company
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="./index.php?page=about-us">About Us</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="./index.php?page=support">Support</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="./index.php?page=rules">Réglement</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="./index.php?page=nospartenariat">Partenariats</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    <h1>
                    </h1>
                    <p>
                    <h1>Fly Airline,</h1>
                      La compagnie Simple, Jeune, et Dynamique.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a
                            href="https://www.facebook.com/flyairlineva"><i class="fa fa-facebook"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a
                            href="https://twitter.com/flyairlinesva"><i class="fa fa-twitter"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i
                                class="fa fa-skype"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i
                                class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Copyright - Acme Theme by cosmic.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--small footer end-->
<!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
<script type="text/javascript" src="js/hover-dropdown.js">
</script>
<script defer src="js/jquery.flexslider.js">
</script>
<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
</script>

<script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
</script>
<script src="js/wow.min.js">
</script>
<script src="assets/owlcarousel/owl.carousel.js">
</script>

<script src="js/jquery.easing.min.js">
</script>
<script src="js/link-hover.js">
</script>
<script src="js/superfish.js">
</script>
<script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
</script>
<script type="text/javascript">
    $(function () {

        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 100
        });

    });
</script>


<!--common script for all pages-->
<script src="js/common-scripts.js">
</script>

<script type="text/javascript">
    jQuery(document).ready(function () {


        $('.bxslider1').bxSlider({
            minSlides: 5,
            maxSlides: 6,
            slideWidth: 360,
            slideMargin: 2,
            moveSlides: 1,
            responsive: true,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: 'Onward →',
            prevText: '← Go back'
        });

    });


</script>


<script>
    $('a.info').tooltip();

    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            items: 4

        });

    });

    jQuery(document).ready(function () {
        jQuery('ul.superfish').superfish();
    });

    new WOW().init();


</script>

<script type="text/javascript" src="js/moment-with-locales.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // Validation for change location form
        var validator_recover_password = $("#login-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                user: {
                    message: "Callsign is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide Callsign"
                        }
                    }
                },
                password: {
                    message: "Password is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide Password"
                        }
                    }
                }

            }
        });

        // Validation for password reset form
        var validator_recover_password = $("#password-recover-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                callsign: {
                    message: "Callsign is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide Callsign"
                        }
                    }
                },
                email: {
                    message: "Email address is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide Email address"
                        },
                        emailAddress: {
                            message: "Email address was invalid"
                        }
                    }
                }

            }
        });

        // Validation for register form
        var validator_register_form = $("#register-form").bootstrapValidator({
            feedbackIcons: {
                valid: "glyphicon glyphicon-ok",
                invalid: "glyphicon glyphicon-remove",
                validating: "glyphicon glyphicon-refresh"
            },
            fields: {
                name: {
                    message: "Name  is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide a Name"
                        }
                    }
                },
                surname: {
                    message: "Last name is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide a Last name"
                        }
                    }
                },
                city: {
                    message: "City is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide City"
                        }
                    }
                },
                email: {
                    message: "Email address is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide Email address"
                        },
                        emailAddress: {
                            message: "Email address was invalid"
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Password is required"
                        },
                        stringLength: {
                            min: 6,
                            message: "Password must be 6 characters long"
                        },
                        different: {
                            field: "email",
                            message: "Email address and password can not match"
                        }
                    }
                },
                password2: {
                    validators: {
                        notEmpty: {
                            message: "Confirm password field is required"
                        },
                        identical: {
                            field: "password",
                            message: "Password and confirmation must match"
                        }
                    }
                },
                birthdate: {
                    message: "Birthdate is required",
                    validators: {
                        notEmpty: {
                            message: "Please provide a Birthdate"
                        },
                        date: {
                            format: 'DD/MM/YYYY',
                            message: 'The format is dd/mm/yyyy'
                        }
                    }
                },
                ivao: {
                    message: "IVAO VID must be a number",
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                        },
                        stringLength: {
                            message: 'Maximun 8 digits',
                            max: 8
                        }
                    }
                },
                vatsim: {
                    message: "IVAO VID must be a number",
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                        },
                        stringLength: {
                            message: 'Maximun 8 digits',
                            max: 8
                        }
                    }
                }


            }
        });

        $('#datetimepicker').datetimepicker({
            pickTime: false,
            language: 'es'
        });
        $("#datetimepicker").on("dp.change", function (e) {
            $('#register-form').bootstrapValidator('revalidateField', 'birthdate');
        });


    });
</script>


<script id="source" language="javascript" type="text/javascript">


    var semaforo = 1;
    function refreshflightsdiv() {
        $.ajax({
            url: 'get_live_flights.php',
            data: "",
            dataType: 'json',
            success: function (data, textStatus, jqXHR) {
                drawTable(data);
            }
        });

    }
    ;

    function drawTable(data) {
        $("#live_flights_table").find("tr:gt(0)").remove();
        for (var i = 0; i < data.length; i++) {
            drawRow(data[i]);
        }
    }

    function drawRow(rowData) {

        var row = $("<tr />")

        $("#live_flights_table").append(row);
        row.append($("<td>" + rowData.callsign + "</td>"));
        row.append($("<td>" + rowData.name + " " + rowData.surname + "</td>"));
        row.append($("<td>" + rowData.departure + "</td>"));
        row.append($("<td>" + rowData.arrival + "</td>"));
        row.append($("<td>" + rowData.flight_status + "</td>"));
        row.append($("<td>" + rowData.plane_type + "</td>"));
        row.append($("<td>" + rowData.perc_completed + "%</td>"));
        row.append($("<td>" + rowData.pending_nm + "</td>"));
    }

    $(document).ready(refreshflights);

    var contador = 0;
    function refreshflights() {
        refreshflightsdiv();
        setInterval(function () {
            $.ajax({
                url: 'get_live_flights.php',
                data: "",
                dataType: 'json',
                success: function (data, textStatus, jqXHR) {
                    drawTable(data);
                }
            })
        }, 120000);
    }
</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
