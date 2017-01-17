<?php	/**	 *
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
/* Connect to Database */
$db = new mysqli($db_host , $db_username , $db_password , $db_database);
$db->set_charset("utf8");
if ($db->connect_errno > 0) {		die('Unable to connect to database [' . $db->connect_error . ']');	}
// Execute SQL query	$sql = "select * from va_parameters";
//if (!$result = $db->query($sql)) {		die('There was an error running the query  [' . $db->error . ']');	}
?>
<div class="row" style="margin-bottom: 150px">
    <h1>FORMATIONS PILOTES</h1>
    <div class="row text-center">
        <br>
        </br>
        <img class="margbott25" align="center" src="images/school.png" width=1000 height=500>
    </div>
    <p class="margbott25">La compagnie virtuel, "Fly Airlines", dispose également, d'un centre de formation pilotes. Celle ci, vous aideras à adopté les geste d'un pilotage correct et de bénéficier d'une évolution partagées au seins de la compagnie. La formation requière d'être incrit à Fly Airlines et d'avoir déjà effectuer plusieurs vols.
    <br>
    <br>
        Cette formations est appliquer par des formateurs agréer Fly Airlines, et, sont ici à titre de <strong>Bénévolat</strong>.
    </p>
    
    <h4>Si vous souhaitez obtenir une formation, contacter nos formateur via: <a href="formation.flyairlines@gmail.com">formation.flyairlines@gmail.com</a></h4>
    <h5 class="text_italique"><strong>[Dans ce mail veuillez absolument indiquer votre indicatif;  vos motivations à la formation;  ainsi que le motif de la formation . ]</strong></h5>
</div>
</div>