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
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading"><?php echo "STAFF"; ?></div>

            <!-- Table -->
            <table class="table table-hover">
                <tr>
                    <td width="30%" align="center">
                        <h4>Quentin R</h4>
                        <img src="images/pilot_staff.png" width="30%" height="30%" >
                        <p>PDG Fly Airlines</p>
                        <p><a href="mailto:contact.flyairlines@gmail.com">contact.flyairlines@gmail.com</a></p>
                    </td>
                    <td width="70%"><u>President Directeur Generale</u>, gere la compagnie aerienne depuis sa creation en Juillet 2015</td>
                </tr>
                <tr>
                    <td width="30%" align="center">
                        <h4>Clement G</h4>
                        <img src="images/pilot_staff.png" width="30%" height="30%" >
                        <p>Formateur</p>
                        <p><a href="event.flyairlines@gmail.com">contact.flyairlines@gmail.com</a></p>
                    </td>
                    <td width="70%">Il est <u>formateur </u>, (IFR) Boeing/ Airbus, ou autre et VFR BE58 principalement </td>
                </tr>
                <tr>
                    <td width="30%" align="center">
                        <h4>Cellya Crea's</h4>
                        <img
                            src="https://static.wixstatic.com/media/3ad7b0_2134d35f3ea3486aa1b8abad54df5208.jpg/v1/fill/w_80,h_79,al_c,q_80,usm_0.66_1.00_0.01/3ad7b0_2134d35f3ea3486aa1b8abad54df5208.jpg
" width="30%" height="42%" >
                        <p>Infographiste</p>
                        <p><a href="http://cellyacreations.wix.com/portfolio#!blank-1/cfaf">Contact ICI </a></p>
                    </td>
                    <td width="70%">Créations de logo, bannieres, flyers etc sur commande via son site :<a href="http://cellyacreations.wix.com/portfolio">cliquez-ici</a>
                    </td>
                </tr>
                <tr>
                    <td width="30%" align="center">
                        <h4>VACCAN</h4>
                        <img src="images/pilot_staff.png" width="30%" height="30%" >
                        <p>Expert Comptable</p>
                        <p><a href="mailto:comptable.flyairlines@gmail.com">comptable.flyairlines@gmail.com</a></p>
                    </td>
                    <td width="70%">Gere la <u>finance</u> dans la compagnie<p>
                </tr>
                <tr>
                    <td width="30%" align="center">
                        <h4>Lilian V</h4>
                        <img src="images/pilot_staff.png" width="30%" height="30%" >
                        <p>Directeur des Operations</p>
                        <p><a href="mailto:operations.flyairlines@gmail.com">operations.flyairlines@gmail.com</a></p>
                    </td>
                    <td width="70%">Crée les routes et geres les operations. </td>
                </tr>
                <tr>
                    <td width="30%" align="center">
                        <h4>VACCAN</h4>
                        <img src="images/pilot_staff.png" width="30%" height="30%" >
                        <p>Directeur Event</p>
                        <p><a href="event.flyairlines@gmail.com">event.flyairlines@gmail.com</a></p>
                    </td>
                    <td width="70%">Il est <u>le createur des events </u>, et celui ci propose tout plein d'event divers et varies </td>
                </tr>
            </table>


        </div>
    </div>
    <p> *Formateur agree Fly Airlines= un formateur ayant ete suivant durant son recrutement et ayant plusieurs qualification</p>
</div>

<td width="70%">Clement G, est l'un de <u>nos formateurs agree Fly Airline*</u>, et celui ci propose des formation VFR, IFR, ATC pour tous niveaux jusqu'a <FONT COLOR="red"
    >ADC PP</FONT>  <FONT COLOR="green" >(Qualification Airbus)</FONT></tr>