<?php
/**
 * Created by PhpStorm.
 * User: RAULT
 * Date: 25/05/2016
 * Time: 20:01
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

$sql = "select * from events";

if (!$result = $db->query($sql)) {

    die('There was an error running the query  [' . $db->error . ']');

}

?>



<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo "Les Events"?></h3>
            </div>
            <div class="panel-body">
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=na7g3v3olpd4fadidd0agm84i8%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Europe%2FParis" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <!-- Table -->
                <table>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <p><b><u>Nom Event</b></u> : <? echo $row["event_name"]; ?></p>
                        <p><b><u>Date Event</b></u> :<? echo $row["publish_date"]; ?></p>
                        <p><b><u>Description</b></u> : <? echo $row["event_text"]; ?></p>
                        <hr />
                    <?php endwhile; ?>
                    <?php $db->close(); ?>
                </table>
            </div>
        </div>