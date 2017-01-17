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
<?php
	require('check_login.php');
	require_once('create_template_fskeeper.php');
	require_once('create_template_fsacars.php');
	$id = $_SESSION["id"];
	$link_fskeeper = "tmp_templates/vam_fskeeper_$id.zip";
	$link_fsacars = "tmp_templates/vam_fsacars_$id.zip";
?>

<div class="row">
<h1 class="margbott25"><?php echo DOWNLOADS; ?></h1>
<!-- Table -->
	<table class="table table-hover">
		<tr>
			<th> <?php echo DOWNLOAD_NAME; ?> </th>
			<th> <?php echo DOWNLOAD_LINK; ?> </th>
		</tr>
		<tr>
			<td>
				VAM ACARS 1.4.0
			</td>
			<td>
				<a href="<?php echo "vamacars/SIM_ACARS_1.4.0.zip" ; ?>  ">Link</a>
			</td>
		</tr>
		<tr>
			<td>
				TEXTURE PMDG 737-800
			</td>
			<td>
				<a href="<?php echo "download/pmdg737flyairlines.zip" ; ?>  ">Link</a>
			</td>
		</tr>
		<tr>
			<td>
				TEXTURE AIRUS-X A319 IAE
			</td>
			<td>
				<a href="<?php echo "download/AIRBUSXA319IAEflyairlines.rar" ; ?>  ">Link</a>
			</td>
		</tr>
	</table>
</div>

