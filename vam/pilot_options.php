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
<?php
	require('check_login.php');
?>
<h1 class="margbott25"><?php echo PILOT_ACTIONS; ?></h1>

<div class="row">
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=mails"><img src="images/internalmail.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_MAIL; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=route_selection_stage1"><img src="images/notebook.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_ROUTE_RESERVE; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="#" data-toggle="modal" data-target="#JumpModal"><img src="images/changelocation.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_CHANGE_LOCATION; ?></strong></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=my_bank"><img src="images/myfinances.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_BANK; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=pirep_manual_create"><img src="images/manualpirep.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_MANUAL_PIREP; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=my_profile"><img src="images/user.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_PROFILE; ?></strong></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=my_stats"><img src="images/mystats.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_STATS; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=vaparameters_info"><img src="images/settings.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_VA_PARAMETER; ?></strong></p>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=download"><img src="images/downloads.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_DOWNLOADS; ?></strong></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4 col-sm-4">
		<div class="thumbnail">
			<div class="taille">
				<a href="./index_vam_op.php?page=tours_pilot"><img src="images/reporttourleg.png"></a>
			</div>
			<div class="caption">
				<p class="text-center"><strong><?php echo OPTION_TOUR; ?></strong></p>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="JumpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><?php echo CHANGE_LOCATION; ?></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="change-location-form" action="./index_vam_op.php?page=jump_insert"
				      role="form" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="destiny"><?php echo CHANGE_LOCATION_ICAO; ?></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="destiny" id="destiny"
							       placeholder="Enter Callsign">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit"
							        class="btn btn-primary"><?php echo CHANGE_LOCATION_SUBMIT_BTN; ?></button>
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