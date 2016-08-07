<?php
/**
 * Created by PhpStorm.
 * User: Volk
 * Date: 07-Aug-16
 * Time: 01:46
 */

function getDbConnection()
{
    $cred = getDbCredentials();
    $db = new mysqli($cred['host'], $cred['username'], $cred['password'], $cred['database']);
    $db->set_charset("utf8");
    if ($db->connect_errno > 0) {
        die('Unable to connect to database [' . $db->connect_error . ']');
    }

    return $db;
}

function getNewestPilots()
{
    $db = getDbConnection();

    $sql = "SELECT concat(callsign,'-',name,' ',surname) AS pilot , DATE_FORMAT(register_date,'%d-%m-%Y') AS register_date FROM gvausers WHERE activation=1 ORDER BY DATE_FORMAT(register_date,'%Y%m%d') desc limit 5";

    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }

    return $result;
}

function getLatestFlights()
{
    $db = getDbConnection();

    $sql = "select callsign,pilot_name,departure,arrival,DATE_FORMAT(date,'%d-%m-%Y') as date_string, date, format(time,2) as time from v_last_5_flights where time is not null order by date desc";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }

    return $result;
}

function getFutureEvents()
{
    $db = getDbConnection();

    $sql = "select event_id,event_name,DATE_FORMAT(publish_date,'%d-%m-%Y') as publish_date_web ,DATE_FORMAT(publish_date,'%Y%m%d') as publish_date,DATE_FORMAT(hide_date,'%Y%m%d') as hide_date, DATE_FORMAT(now(),'%Y%m%d') as currdat 
from events order by publish_date asc limit 5";
    if (!$result = $db->query($sql)) {
        die('There was an error running the query [' . $db->error . ']');
    }

    return $result;
}