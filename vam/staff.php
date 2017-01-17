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
/* Connect to Database */
$db = new mysqli($db_host , $db_username , $db_password , $db_database);
$db->set_charset("utf8");
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
// Execute SQL query
$sql = "select * from va_parameters";
if (!$result = $db->query($sql)) {
    die('There was an error running the query  [' . $db->error . ']');
}
?>
<div class="row" style="margin-bottom: 150px">
    <h1>LE STAFF</h1>
    <br>
    <br>
    <h3>ADMINISTRATION</h3>
    <div class="col-md-3">
        <div class="h-service">
            <div class="center wow fadeInUp">
                <h3 class="margbott25 center">
                    Quentin RAULT
                </h3 class="center">
                <img class="imgcenter" src="images/pilot_staff.png" width="100px" height="100px" >
                <p class="center pad1">
                    <strong>Fondateur et PDG</strong>
                    <h6 class="center"><i>Président Directeur Générale</i></h6>
                </p>
                <br>
                    <!--Fondateur et PDG,<br>
                    de Fly Airlines depuis<br>
                    Juillet 2015.<br>-->
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="h-service">
            <div class="center3 wow fadeInUp">
                <h3 class="margbott25 center">
                    Lilian Vivenot
                </h3>
                <img class="imgcenter" src="images/pilot_staff.png" width="100px" height="100px" alt="" />
                </br>
                </br>
                <p class="center">
                    <strong>Directeur des Opérations</strong>
                    <!--Directeur des Opérations,<br>
                    modifie ou creer les route<br>
                    de la compagnie.<br>-->

                </p>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="h-service">
            <div class="center3 wow fadeInUp">
                <h3 class="margbott25 center">
                   Clément GUINAMANT
                </h3>

                <img class="imgcenter" src="images/pilot_staff.png" width="100px" height="100px" alt="" />
                <br>
                <br>
                <p class="center">
                    <strong>Directeur Events</strong>
                    <!--Directeur Event<br>
                    Il importe de l'animation<br>
                    dans la compagnie, en créent<br>
                    des évent, tours, etc ...
                    <br>-->
                </p>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="h-service">
            <div class="center wow fadeInUp">
                <h3 class="margbott25 center">
                    Célia BOUCHET
                </h3>
                <img class="imgcenter" src="images/pilot_staff.png" width="100px" height="100px" >
                <p class="center">
                    <strong>Graphiste</strong>
                    <a href="http://cellyacreations.wixsite.com/portfolio">
                        <h5 class="center">
                            Céllya Créations
                        </h5>
                    </a>
                    <!--Graphiste, et en partenariat<br>
                    Célia, nous réalises toutes nos<br>
                    bannière, logo etc...<br>-->
                </p>
                <br>
            </div>
        </div>
    </div>
</div>
</div>
