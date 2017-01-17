<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensoue.php)
 */

$cakeDescription = __d('cake_dev', 'Virtual Airlines Manager');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
<?php
	echo $this->Html->meta('icon');
  // VAM begin Added for VAM Boostrap and JQuery libraries
	echo $this->Html->css(array('vamstyle.css','bootstrap.min.css','bootstrap-theme.min.css','bootstrap.css.map','bootstrap.min.css.map'));
  echo $this->Html->script(array('jquery.min','docs.min','bootstrap.min.js','bootstrap.js','npm.js'));
  // VAM end Added for VAM Boostrap and JQuery libraries
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
  $id='zzz';
  $usertype='zzz';
  session_start();
  if (isset($_SESSION["id"]))
  {
    $id = $_SESSION["id"] ;
  }
  if (isset($_SESSION["usertype"]))
  {
    $admin_access= $_SESSION["access_administration_panel"] == 1 ;
  }


  if ($id=='' || $admin_access!=1) {
    echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://virtualairlinesmanager.net\">";
  }
  else{



?>

</head>
<body>



<?php include ('../../../vam/languages/lang_en.php'); ?>

  <!-- Fixed navbar -->

  <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          AdminLTE Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Virtual Airlines Manager</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link('Exit administration',
                    '../../vam/index_vam_op.php?page=pilot_options'); ?></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="container theme-showcase" role="main">
  <!-- VAM 2.1 Icons menu Begin-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo 'VAM Administration Panel';?></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("vaparameters.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'VaParameters', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_PARA;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("hub.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Hubs', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_HUB_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("fleet.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Fleettypes', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_FLEET_TYPE_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("aircraft.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Fleets', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_FLEET_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("rank.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Ranks', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_PILOT_RANK_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("pilot.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Gvausers', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_PILOT_MGR;?></strong></p>
            </div>
          </div>
        </div>
      </div>
    <!-- row 2 -->
    <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("routes.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Routes', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_ROUTE_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("fleet_route.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'FleettypesRoutes', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_ROUTE_FLEET_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("user_type.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'UserTypes', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_USER_TYPE_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->link($this->Html->image('jump.png',array('alt'=>'passanger', 'height'=>'64','width'=>'64')),'../../vam/index_vam_op.php?page=validate_jumps', array('target'=>'_blank','escape'=>false)); ?>
              <p class="text-center"><strong><?php echo ADM_JUMP_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->link($this->Html->image('validate.png',array('alt'=>'Validate Flights', 'height'=>'64','width'=>'64')),'../../vam/index_vam_op.php?page=validate_flights', array('target'=>'_blank','escape'=>false)); ?>
              <p class="text-center"><strong><?php echo ADM_FLIGHT_MGR;?></strong></p>
            </div>
          </div>
        </div>
      <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("event.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Events', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_EVENT_MGR;?></strong></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 3 -->
     <div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("notam.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Notams', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_NOTAM_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("email.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'ConfigEmails', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_EMAIL_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("languages.gif", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Languages', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_LANGUAGES_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("acars.jpg", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'VamacarsParameters', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_ACARS_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("icon-treasure.gif", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'FinancialParameters', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_FINANTIAL_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("tour.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Tours', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_TOUR_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>

      </div>

<!-- row 4 -->
<div class="row">
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("pilot_award.jpg", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Awards', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_AWARDS_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("pilot_award.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'AwardPilots', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_AWARDS_PILOR_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("new.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Gvausers', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_NEW_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("new.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Gvausers', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_NEW_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("new.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Gvausers', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_NEW_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 col-md-2">
          <div class="thumbnail">
            <div class="caption">
              <?php echo $this->Html->image("new.png", array(
                    'height' => 64, 'width' => 64,
                    'url' => array('controller' => 'Gvausers', 'action' => 'index')
              ));?>
              <p class="text-center"><strong><?php echo ADM_NEW_MODULE_MGR;?></strong></p>
            </div>
          </div>
        </div>

      </div>

<! ROW 4 END -->




    </div>
  </div>


  <!-- VAM 2.1 Icons menu End-->




  </div> <!-- marca -->




<div class="container theme-showcase" role="main">

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content');
      }?>
</div>



</body>
</html>
