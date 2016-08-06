﻿<?php
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
    <meta name="google-site-verification" content="Z5sdNiY6xd9OuYDe4U5WbvIRk57dHqj5Fnv8K04dbSQ" />
    <title> Fly Airlines VA </title>

<link rel=”author” href=”https://plus.google.com/u/0/108665243705425046932/“ title="Virtual Airlines Manager on Google+" />
<link rel="icon" href="images/LOGOFB2.ico" type="image/png" sizes="16x16">
<link rel="shortcut icon" href="images/LOGOFB2.ico" >
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="css/haut.css"/>
<link rel="stylesheet" type="text/css"  href="css/animate.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.min.css"/>
<script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="Charts/Chart.js"></script>
<script src="js/vam.js" type="text/javascript"></script>
<script src="js/jquery.confirm.min.js" type="text/javascript"></script>
<script src="js/boutonhaut.js" type="text/javascript"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64212625-2', 'auto');
    ga('send', 'pageview');

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5782d4391ca3e686763c9fae/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Custom styles for this template -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/social-vam.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div id="top"></div>
<a href="#top" id="mafleche"><img src="images/fleche.png" /> </a>

<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo ABOUT; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./index.php?page=staff"><?php echo STAFF; ?></a></li>
                        <li><a href="./index.php?page=rules"><?php echo RULES; ?></a></li>
                        <li><a href="./index.php?page=school"><?php echo SCHOOL; ?></a></li>
                        <li><a href="./index.php?page=nospartenariat"><?php echo "Nos Partenariats"; ?></a></li>
                        <li><a href="http://flyairlinesva-membres.esy.es/forum"><?php echo FORUM; ?></a></li>
                        <li><a href="./index.php?page=pilot_register"><?php echo REGISTER; ?></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo OPERATIONS; ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./index.php?page=fleet_public"><?php echo FLEET; ?></a></li>
                        <li><a href="./index.php?page=route_public"><?php echo ROUTES; ?></a></li>
                        <li><a href="./index.php?page=events"><?php echo "Nos Events"; ?></a></li>
                        <li><a href="./index.php?page=hubs"><?php echo HUBS; ?></a></li>
                        <li><a href="./index.php?page=tours"><?php echo TOURS; ?></a></li>
                        <li><a href="./index.php?page=ranks"><?php echo PILOT_RANKS; ?></a></li>
                        <li><a href="./index.php?page=awards"><?php echo AWARDS; ?></a></li>
                        <li><a href="./index.php?page=va_global_financial_report"><?php echo GLOBAL_FINANCES; ?></a></li>
                    </ul>
                </li>
                <li><a href="./index.php?page=pilots_public"><?php echo PILOTS; ?></a></li>
                <li><a href="./index.php?page=stats"><?php echo STATS; ?></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo LANGUAGES; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php echo $linklanguage; ?>
                    </ul>
                </li>
            </ul>
            <?php if ($user_logged==0) {
                ?>
                        <ul class="nav navbar-nav navbar-right register">
                            <li><a href="./index.php?page=pilot_register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                            <li><a href="#myModal" role="button" data-toggle="modal" rel="tooltip" data-original-title='Hello'><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        </ul>
                    </div>
                <?php
            }
            else{
                ?>
                <ul class="nav navbar-nav navbar-right register" >
                    <li><a href = "./index_vam.php" role = "button" ><span class="glyphicon glyphicon-home" ></span> System</a></li>
                    <li><a href = "./index.php?page=logout" ><span class="glyphicon glyphicon-log-out" ></span > Log out</a ></li>

                </ul>
                <?php
            }
            ?>

        </div>

    </div>
</nav>
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

<div class="container">
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

    <?php
    if (!isset($_GET["page"]) || trim($_GET["page"]) == "") {
    ?>
    <?php
    $sql = 'select callsign, arrival, departure, flight_status, name, surname, pending_nm, plane_type from vam_live_flights vf, gvausers gu where gu.gvauser_id = vf.gvauser_id ';
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    $row_cnt = $result->num_rows;
    $sql = "SELECT flight_id FROM `vam_live_flights` WHERE TIMESTAMPDIFF( MINUTE ,NOW( ) , last_update )<-3";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }
    while ($row = $result->fetch_assoc())
    {
        $sql_inner = "delete from vam_live_acars where flight_id='".$row["flight_id"]."'";

        if (!$result_acars = $db->query($sql_inner))
        {
            die('There was an error running the query [' . $db->error . ']');
        }
        $sql_inner = "delete from vam_live_flights where flight_id='".$row["flight_id"]."'";
        if (!$result_acars = $db->query($sql_inner))
        {
            die('There was an error running the query [' . $db->error . ']');
        }
    }

    if ($row_cnt>0){
    ?>

    <div class="row" id="live_flights">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo "LIVE FIGHTS" ?></h3>
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="live_flights_table">
                            <?php
                            echo "<tr><th>" . LF_CALLSIG . "</th><th>" . LF_PILOT . "</th><th>" . LF_DEPARTURE . "</th><th>" . LF_ARRIVAL . "</th><th>" . FLIGHT_STAGE . "</th><th>". BOOK_ROUTE_ARICRAFT_TYPE . "</th><th>" . PERC_DONE ."</th><th>" . PENDING_NM . "</th></tr>";

                            ?>

                        </table>
                        <?php include ('./vam_live_flights_map.php') ?>
                    </div>
                </div>
            </div>

        </div>

        <?php
        }
        ?>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3>Welcome to Fly Airlines</h3>
                        <p>Bienvenu sur le site de la Fly Airlines, La compagnie Simple Jeune et Dinamyque, profité d'un staff a votre écoutes et des event tous les mois.
                            Nous recrutons <b>des pilotes</b> <i>(du débutant au confirmé)</i> n'hésitez pas, envoyez de suite votre candidature grace au <u>bouton Inscription</u></p>
                        <img src="images/LOGOFACEBOOK.png" sizes="100x100">
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo STATISTICS_VA; ?></h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <td><?php echo ST_NUMPILOTS; ?></td>
                                <td><?php echo $num_pilots; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_NUMPLANES; ?></td>
                                <td><?php echo $num_planes; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_NUMROUTES; ?></td>
                                <td><?php echo $num_routes; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo PILOT_HOURS; ?></td>
                                <td><?php echo 0+ $va_hours; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_NUMFLIGHTS; ?></td>
                                <td><?php echo $num_fskeeper + $num_pireps + $num_reports + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected ; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_NUMREGULAR; ?></td>
                                <td><?php echo $num_fskeeper_reg + $num_pireps_reg + $num_reports_reg + $num_vamacars_reg - $num_pireps_reg_rejected - $num_fskeeper_reg_rejected - $num_fsacars_reg_rejected - $num_vamacars_reg_rejected; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_NUMCHARTER; ?></td>
                                <td><?php echo $num_pireps + $num_fskeeper + $num_fsacars + $num_vamacars - $num_pireps_reg - $num_fskeeper_reg - $num_fsacars_reg - $num_vamacars_reg ; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo ST_PERREGULAR; ?></td>
                                <td><?php if (($num_fskeeper + $num_pireps + $num_reports + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected) < 1) {
                                        echo '0 %';
                                    } else {
                                        echo number_format((100 * ($num_pireps_reg + $num_fskeeper_reg + $num_fsacars_reg + $num_vamacars_reg - $num_pireps_reg_rejected - $num_fskeeper_reg_rejected - $num_fsacars_reg_rejected - $num_vamacars_reg_rejected)) / ($num_pireps + $num_fskeeper + $num_fsacars + $num_vamacars - $num_fsacars_rejected - $num_fskeeper_rejected - $num_pireps_rejected - $num_vamacars_rejected) , 2) . ' %';
                                    }?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Nos Vols en ligne</h3>
                    </div>
                    <div class="panel-body">
                        <object id='RealtimeNG' codeBase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' align='middle' style='width:715px;height:391px' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' salign='t'><param name='Movie' value='http://www.utr-online.com/RealtimeNG.swf?refApt=FYA'><param name='bgcolor' value='#000000'><param name='menu' value='false'><param name='allowScriptAccess' value='always'><param name='FlashVars' value='fontcolor1=DD0000&fontcolor2=FF0000&fontcolor3=474444&network=IVAO&NRLines=15&switch=0&switchnetwork=0&locked=0&range=0&sound=0&logos=0&VAName=Fly Airlines VA'><embed src='http://www.utr-online.com/RealtimeNG.swf?refApt=FYA' allowScriptAccess='always' FlashVars='fontcolor1=DD0000&fontcolor2=FF0000&fontcolor3=474444&network=IVAO&NRLines=15&switch=0&switchnetwork=0&locked=0&range=0&sound=0&logos=0&VAName=Fly Airlines VA' quality='high' bgcolor='#000000' width='715' height='391' name='RealtimeNG' menu='false' align='middle' salign='t' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'></embed></object>                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo NOTAMS_VA; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $db = new mysqli($db_host , $db_username , $db_password , $db_database);
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
                            echo "<tr><th>" . NOTAM_NAME . "</th><th>" . NOTAM_DATE . "</th></tr>".$row["publish_date"] ;
                            while ($row = $result->fetch_assoc()) {
                                if (($row["publish_date"]-$row["currdat"] <=0) && ($row["hide_date"]-$row["currdat"]>0))
                                {
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

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo NEWEST_PILOTS_VA; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $db = new mysqli($db_host , $db_username , $db_password , $db_database);
                        $db->set_charset("utf8");
                        if ($db->connect_errno > 0) {
                            die('Unable to connect to database [' . $db->connect_error . ']');
                        }
                        $sql = "select concat(callsign,'-',name,' ',surname) as pilot , DATE_FORMAT(register_date,'%d-%m-%Y') as register_date from gvausers where activation=1 order by DATE_FORMAT(register_date,'%Y%m%d') desc limit 5";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        ?>
                        <table class="table table-hover">
                            <?php
                            echo "<tr><th>" . NEWPILOT . "</th><th>" . NEWJOINED . "</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<td>";
                                echo $row["pilot"] . '</td><td>';
                                echo $row["register_date"] . '</td></tr>';
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="clearfix visible-lg"></div>
            </div>

        </div>
        <!-- Row 2 -->
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo LATEST_FLIGHTS_VA; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $db = new mysqli($db_host , $db_username , $db_password , $db_database);
                        $db->set_charset("utf8");
                        if ($db->connect_errno > 0) {
                            die('Unable to connect to database [' . $db->connect_error . ']');
                        }
                        $sql = "select callsign,pilot_name,departure,arrival,DATE_FORMAT(date,'%d-%m-%Y') as date_string, date, format(time,2) as time from v_last_5_flights where time is not null order by date desc";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <?php
                                echo "<tr><th>" . LF_CALLSIG . "</th><th>" . LF_PILOT . "</th><th>" . LF_DEPARTURE . "</th><th>" . LF_ARRIVAL . "</th><th>" . LF_FLIGHTDATE . "</th><th>" . LF_FLIGHTTIME . "</th></tr>";
                                while ($row = $result->fetch_assoc()) {
                                    echo "<td>";
                                    echo $row["callsign"] . '</td><td>';
                                    echo $row["pilot_name"] . '</td><td>';
                                    echo $row["departure"] . '</td><td>';
                                    echo $row["arrival"] . '</td><td>';
                                    echo $row["date_string"] . '</td><td>';
                                    echo $row["time"] . '</td></tr>';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 3 -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo FUTURE_EVENTS; ?></h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        $db = new mysqli($db_host , $db_username , $db_password , $db_database);
                        $db->set_charset("utf8");
                        if ($db->connect_errno > 0) {
                            die('Unable to connect to database [' . $db->connect_error . ']');
                        }
                        //$sql = "select event_id,event_name as name, DATE_FORMAT(publish_date,'%d-%m-%Y') as publish_date from events where (DATE_FORMAT(NOW(),'%d-%m-%Y') BETWEEN DATE_FORMAT(publish_date,'%d-%m-%Y') AND DATE_FORMAT(DATE_ADD(hide_date,INTERVAL -1 DAY),'%d-%m-%Y')) order by publish_date asc limit 5";
                        $sql = "select event_id,event_name,DATE_FORMAT(publish_date,'%d-%m-%Y') as publish_date_web ,DATE_FORMAT(publish_date,'%Y%m%d') as publish_date,DATE_FORMAT(hide_date,'%Y%m%d') as hide_date, DATE_FORMAT(now(),'%Y%m%d') as currdat 
from events order by publish_date asc limit 5";
                        if (!$result = $db->query($sql)) {
                            die('There was an error running the query [' . $db->error . ']');
                        }
                        ?>
                        <table class="table table-striped">
                            <?php
                            echo "<tr><th>" . EVENT_NAME . "</th><th>" . EVENT_DATE . "</th></tr>";
                            while ($row = $result->fetch_assoc()) {
                                if (($row["publish_date"]-$row["currdat"] <=0) && ($row["hide_date"]-$row["currdat"]>0))
                                {
                                    echo '<tr><td>';
                                    echo '<a href="index.php?page=event&event_id=' . $row["event_id"] . '">' . $row["event_name"] . '</a>' . '</td><td>';
                                    echo $row["publish_date_web"] . '</td></tr>';
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo TWEETS; ?></h3>
                    </div>
                    <div class="panel-body">
                        <a class="twitter-timeline" href="https://twitter.com/flyairlinesva" data-widget-id="728543604591972353">Tweets de @flyairlinesva</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo "Nos Partenariats"?></h3>
                        </div>
                        <div class="panel-body">
                            <p><center><a href="http://fsradio.fr"><img src="./images/fsradio.png" style="width: 200px;"><td width="100%">&nbsp;</td><a href="http://cellyacreations.wix.com/portfolio"><img src="./images/favi1.png" style="width: 200px;"><td width="100%">&nbsp;</td><a href="http://www.openskyradio.fr/"><img src="./images/opensky.png" style="width: 200px;"></a></center></p>
                        </div>
                    </div>
                </div>
                <div src="http://soundcloud.apps.wix.com/index?cacheKiller=1463364522831&compId=comp-
io98s0fb&deviceType=desktop&instance=Vpq2U_lBUSz98Oxu50GrAgZWTaA_jt0K7loQtMdeEO8.eyJpbnN0YW5jZUlkIjoiOGNhYmY0NTItZmFlYS00YThiLTlmZTktNzIxYzIzMjE4NzBiIiwic2lnbkRhdGUiOiIyMDE2LTA1LTE2VDAyOjA4
OjQxLjI4N1oiLCJ1aWQiOm51bGwsInBlcm1pc3Npb25zIjpudWxsLCJpcEFuZFBvcnQiOiI5MC42Mi4yMDkuMTUwLzYwMzA5IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjcyOGQ2MTg3LWMwNGYtNGVmNC1iN
Dk4LTlkM2NlMDk4OGQ4MCIsImJpVG9rZW4iOiJkNDc0OWJmNi03OGI3LTBlNjEtMTE0ZS02ZWIwOTBkNjdjNzUiLCJzaXRlT3duZXJJZCI6IjNhZDdiMDlhLWM4YzQtNDk5Ny1iNjM1LTFjN2ZjOTUwNTA5MCJ9&locale=fr&viewMode=site&width
=202" style="top:75px;bottom:;left:195px;right:;width:31px;height:28px;position:absolute;" class="s4" data-state="autoplaye" id="comp-id29u1lc" data-reactid=".0.$SITE_ROOT.
$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc"><div id="comp-id29u1lcplayButton" class="s4playButton" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-
id29u1lc.0"><span data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc.0.0"></span></div><div id="comp-id29u1lcpauseButton" class="s4pauseButton" data-reactid=".0.
$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc.1"><span data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc.1.0"></span></div><div id="comp-
id29u1lcstopButton" class="s4stopButton" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc.2"><span data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.
$SITE_HEADER.1.1.$comp-id29u1lc.2.0"></span></div><div id="comp-id29u1lcloadingAnimation" class="s4loadingAnimation" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-
id29u1lc.3"><span data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$SITE_HEADER.1.1.$comp-id29u1lc.3.0"></span></div></div>
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



            <br>
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
        </div>
        <br>
        <div class="container-fluid">

            <hr>
            <div class="text-center center-block">
                <p class="txt-railway"><a href="http://virtualairlinesmanager.net">Powered by Virtual Airlines Manager</a></p>
                <a href="https://www.facebook.com/flyairlineva"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
                <a href="https://twitter.com/flyairlinesva"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
                <a href="https://plus.google.com/"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
                <a href="mailto:contact.flyairlines@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
                <br />
                <br />
                <a href="http://virtualairlinesmanager.net" target="_blank"><img src="images/logo_vam.png" /></a>
            </div>

        </div>

        <br/>

        </body>
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


            var semaforo=1;
            function refreshflightsdiv()
            {
                $.ajax({
                    url: 'get_live_flights.php',
                    data: "",
                    dataType: 'json',
                    success: function(data, textStatus, jqXHR) {
                        drawTable(data);
                    }
                });

            };

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

            $( document ).ready(refreshflights);

            var contador=0;
            function refreshflights(){
                refreshflightsdiv();
                setInterval(function () {$.ajax({
                    url: 'get_live_flights.php',
                    data: "",
                    dataType: 'json',
                    success: function(data, textStatus, jqXHR) {
                        drawTable(data);
                    }
                })}, 120000);
            }
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        </html>
