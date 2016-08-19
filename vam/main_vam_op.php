<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2015 Alejandro Garcia
	 * VAM is licenced under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<!DOCTYPE html>

<html lang="en">

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

<?php

	require('check_login.php');

	include('get_pilot_data.php');

?>

<nav class="navbar navbar-inverse" role=" navigation">

<div class="container">

	<div class="navbar-header">

		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"

		        aria-expanded="false" aria-controls="navbar">

			<span class="sr-only">Toggle navigation</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

		</button>

		<a class="navbar-brand" href="./index.php">Virtual Airlines Manager</a>

	</div>

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
							<li><a href="./index.php?page=rules"><?php echo RULES; ?></a></li>
							<li><a href="./index.php?page=school"><?php echo SCHOOL; ?></a></li>
							<li><a href="./index.php?page=nospartenariat"><?php echo "Nos Partenariats"; ?></a></li>
							<li><a href="http://flyairlinesva-membres.esy.es/forum"><?php echo FORUM; ?></a></li>
							<li><a href="./index.php?page=pilot_register"><?php echo REGISTER; ?></a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
											href="#"><?php echo OPERATIONS; ?>
							<i class="fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="./index.php?page=fleet_public"><?php echo FLEET; ?></a></li>
								<li><a href="./index.php?page=route_public"><?php echo ROUTES; ?></a></li>
								<li><a href="./index.php?page=events"><?php echo "Nos Events"; ?></a></li>
								<li><a href="./index.php?page=hubs"><?php echo HUBS; ?></a></li>
								<li><a href="./index.php?page=tours"><?php echo TOURS; ?></a></li>
								<li><a href="./index.php?page=ranks"><?php echo PILOT_RANKS; ?></a></li>
								<li><a href="./index.php?page=awards"><?php echo AWARDS; ?></a></li>
								<li><a href="./index.php?page=va_global_financial_report"><?php echo GLOBAL_FINANCES; ?></a>
								</li>
							</ul>
					</li>
					<li><a href="./index.php?page=pilots_public"><?php echo PILOTS; ?></a></li>
					<li><a href="./index.php?page=stats"><?php echo STATS; ?></a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo LANGUAGES; ?>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<?php echo $linklanguage; ?>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right"><?php if ($_SESSION["access_administration_panel"] == 1) { ?>
						<li><a href="../vamcore/Gvausers"><span class="glyphicon glyphicon-briefcase"></span> <?php echo ADMIN; ?></a></li> <?php } ?>
					<li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> <?php echo 'Log out ' . $_SESSION["user"]; ?></a></li>
				</ul>
			</div>
		</div>
</nav>
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
						<div class="item active"><img src="./images/slider/1.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/2.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/3.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/4.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
						<div class="item"><img src="./images/slider/5.jpg" alt="...">

							<div class="carousel-caption"><h3>Virtual Airlines Manager</h3></div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span> </a></div>
				<!-- Carousel -->
			</div>
		</div>
	</div>

	<!-- Content begin -->

	<br>



	<?php

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
							<a href="about.html">About Us</a>
						</li>
						<li>
							<i class="fa fa-angle-right"></i>
							<a href="faq.html">Support</a>
						</li>
						<li>
							<i class="fa fa-angle-right"></i>
							<a href="privacy-policy.html">Privacy Policy</a>
						</li>
						<li>
							<i class="fa fa-angle-right"></i>
							<a href="terms.html">Term & condition</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-3">
				<div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
					<h1>
					</h1>
					<p>
					<h1>Fly Airline,</h1>la compagnie Simple, Jeune, et Dynamique.
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

	$(document).ready(function () {



		// Validation for change location form

		var validator_change_location = $("#change-location-form").bootstrapValidator({

			feedbackIcons: {

				valid: "glyphicon glyphicon-ok",

				invalid: "glyphicon glyphicon-remove",

				validating: "glyphicon glyphicon-refresh"

			},

			fields: {

				destiny: {

					message: "Airport (ICAO) Location is required",

					validators: {

						notEmpty: {

							message: "Airport (ICAO) Location"

						}, stringLength: {

							min: 4,

							max: 4,

							message: "Airport ICAO code must be 4 characters long"

						}

					}

				}

			}

		});



		// Validation for my-profile-form

		var validator_my_profile = $("#my-profile-form").bootstrapValidator({

			feedbackIcons: {

				valid: "glyphicon glyphicon-ok",

				invalid: "glyphicon glyphicon-remove",

				validating: "glyphicon glyphicon-refresh"

			},

			fields: {

				password: {

					validators: {

						notEmpty: {

							message: "Password is required"

						},

						stringLength: {

							min: 6,

							message: "Password must be 6 characters long"

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

				}

			}

		});

		// Validation for pirep form

		var validator_manual_pirep_form = $("#manual-pirep-form").bootstrapValidator({

			feedbackIcons: {

				valid: "glyphicon glyphicon-ok",

				invalid: "glyphicon glyphicon-remove",

				validating: "glyphicon glyphicon-refresh"

			},

			fields: {

				departure: {

					message: "Departure  is required",

					validators: {

						notEmpty: {

							message: "Please provide a Departure"

						},

						stringLength: {

							message: 'Minimum 4 characters',

							min: 4

						}

					}

				},

				arrival: {

					message: "Departure  is required",

					validators: {

						notEmpty: {

							message: "Please provide a Departure"

						},

						stringLength: {

							message: 'Minimum 4 characters',

							min: 4

						}

					}

				},

				flight_date: {

					message: "Flight date is required",

					validators: {

						notEmpty: {

							message: "Please provide a Flight date"

						},

						date: {

							format: 'DD/MM/YYYY',

							message: 'The format is dd/mm/yyyy'

						}

					}

				},

				fuel: {

					message: "Fuel must be a number",

					validators: {

						integer: {

							message: 'The value is not an integer'

						},

						stringLength: {

							message: 'Maximun 12 digits',

							max: 12

						},

						notEmpty: {

							message: "Fuel is required"

						}

					}

				},

				distance: {

					message: "Distance must be a number",

					validators: {

						integer: {

							message: 'The value is not an integer'

						},

						stringLength: {

							message: 'Maximun 10 digits',

							max: 10

						},

						notEmpty: {

							message: "Distance is required"

						}

					}

				},

				duration: {

					validators: {

						notEmpty: {

							message: 'The price is required'

						},

						numeric: {

							message: 'The price must be a number',

							transformer: function($field, validatorName) {

								var value = $field.val();

								return value.replace(',', '');

							}

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

			$('#manual-pirep-form').bootstrapValidator('revalidateField', 'flight_date');

		});

		

		// Ajax calls for valiation VAM PIREPS

    	$( "#addcommentbtn" ).click(function( event ) {

		  var flight=  $("#vamflightid").val();

		  var comment = $("#comment").val();

		  var dataString = 'action=addcomment&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/vampirep.php",

			data: dataString,

			cache: false,

			success: function(result){

				location.reload();

				

			}

			});

		    $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#acceptbtn" ).click(function( event ) {

		  

		  var flight=  $("#vamflightid").val();

		  var comment = $("#comment").val();

		  var dataString = 'action=acceptflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/vampirep.php",

			data: dataString,

			cache: false,

			success: function(result){				

				location.reload();

			}

			});

		  $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#rejectbtn" ).click(function( event ) {

		  

		  var flight=  $("#vamflightid").val();

		  var comment = $("#comment").val();

		  var dataString = 'action=rejectflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/vampirep.php",

			data: dataString,

			cache: false,

			success: function(result){

				location.reload();			 

			}

			});

		   

			$("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

			 

		  

		});





		$( "#deletebtn" ).click(function( event ) {



			$.confirm({

				text: "This is a confirmation dialog! Operation can not be rolled back!! Please confirm you want to delete the flight",

				confirm: function(button) {

					alert("You just confirmed. The flight is deleted!");

					var flight=  $("#vamflightid").val();

					var comment = $("#comment").val();

					var dataString = 'action=deleteflight&flightid='+ flight + '&comment='+ comment;

					$.ajax({

						type: "POST",

						url: "ajax/vampirep.php",

						data: dataString,

						cache: false,

						success: function(result){

							history.go(-1);

						}

					});

				},

				cancel: function(button) {

					alert("You cancelled.");

				}

			});













		});





		// Ajax calls for valiation FS KEEPER PIREPS

    	$( "#fskeeperaddcommentbtn" ).click(function( event ) {

		  var flight=  $("#fskeeperid").val();

		  var comment = $("#fskeepercomment").val();

		  var dataString = 'action=addcomment&flightid='+ flight + '&comment='+ comment;



		  $.ajax({

			type: "POST",

			url: "ajax/fskeeperpirep.php",

			data: dataString,

			cache: false,

			success: function(result){



				location.reload();

			$('#fskeepercomment').html(comment);

			}

			});

		    $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#fskeeperacceptbtn" ).click(function( event ) {

		  

		  var flight=  $("#fskeeperid").val();

		  var comment = $("#fskeepercomment").val();

		  var dataString = 'action=acceptflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/fskeeperpirep.php",

			data: dataString,

			cache: false,

			success: function(result){

				

			location.reload();

			$('#fskeepercomment').html(comment);

			}

			});

		  $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#fskeeperrejectbtn" ).click(function( event ) {

		  

		  var flight=  $("#fskeeperid").val();

		  var comment = $("#fskeepercomment").val();

		  var dataString = 'action=rejectflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/fskeeperpirep.php",

			data: dataString,

			cache: false,

			success: function(result){

				

				location.reload();

			 

			}

			});

		   

			$("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

			 

		  

		});



		$( "#fskeeperdeletebtn" ).click(function( event ) {



			$.confirm({

				text: "This is a confirmation dialog! Operation can not be rolled back!! Please confirm you want to delete the flight",

				confirm: function(button) {

					alert("You just confirmed. The flight is deleted!");

					var flight=  $("#fskeeperid").val();

					var comment = $("#fskeepercomment").val();

					var dataString = 'action=deleteflight&flightid='+ flight + '&comment='+ comment;

					$.ajax({

						type: "POST",

						url: "ajax/fskeeperpirep.php",

						data: dataString,

						cache: false,

						success: function(result){

							history.go(-1);

						}

					});



				},

				cancel: function(button) {

					alert("You cancelled.");

				}

			});





		});



		// Ajax calls for valiation Manual reports

    	$( "#manualaddcommentbtn" ).click(function( event ) {

		  var flight=  $("#manualflightid").val();

		  var comment = $("#manualcomment").val();

		  var dataString = 'action=addcomment&flightid='+ flight + '&comment='+ comment;

		  

		  $.ajax({

			type: "POST",

			url: "ajax/manualpirep.php",

			data: dataString,

			cache: false,

			error: function(result){				

				location.reload();				

			},

			success: function(result){				

				location.reload();

			$('#manualcomment').html(comment);

			}

			});

		    $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#manualacceptbtn" ).click(function( event ) {

		  

		  var flight=  $("#manualflightid").val();

		  var comment = $("#manualcomment").val();

		  var dataString = 'action=acceptflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/manualpirep.php",

			data: dataString,

			cache: false,

			success: function(result){

				location.reload();

			$('#manualcomment').html(comment);

			}

			});

		  $("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

		});



		$( "#manualrejectbtn" ).click(function( event ) {

		  

		  var flight=  $("#manualflightid").val();

		  var comment = $("#manualcomment").val();

		  var dataString = 'action=rejectflight&flightid='+ flight + '&comment='+ comment;

		  $.ajax({

			type: "POST",

			url: "ajax/manualpirep.php",

			data: dataString,

			cache: false,

			success: function(result){				

				location.reload();			 

			}

			});

		   

			$("#result").html('Successfully updated '); 

			$("#result").addClass("alert alert-success").delay( 2000 );

			 

		  

		});



		$( "#manualdeletebtn" ).click(function( event ) {

			$.confirm({

				text: "This is a confirmation dialog! Operation can not be rolled back!! Please confirm you want to delete the flight",

				confirm: function(button) {

					alert("You just confirmed. The flight is deleted!");

					var flight=  $("#manualflightid").val();

					var comment = $("#manualcomment").val();

					var dataString = 'action=deleteflight&flightid='+ flight + '&comment='+ comment;

					$.ajax({

						type: "POST",

						url: "ajax/manualpirep.php",

						data: dataString,

						cache: false,

						success: function(result){

							history.go(-1);

						}

					});



				},

				cancel: function(button) {

					alert("You cancelled.");

				}

			});

		});









    

	});

</script>









</html>

