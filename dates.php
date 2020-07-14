<?php
    echo date('d'); // Day
    echo '<br>';
    echo date('m'); // Month
    echo '<br>';
    echo date('Y'); // Year
    echo '<br>';
    echo date('l'); // Day of the week
    echo '<br>';
    echo date('d/m/Y'); // Full date
    echo '<br>';
    echo date('h'); // Hours
    echo '<br>';
    echo date('i'); // Minutes
    echo '<br>';
    echo date('s'); // Seconds
    echo '<br>';
    echo date('a'); // AM or PM
    echo '<br>';

    // Set Time Zone
    date_default_timezone_set('Israel');
    echo date('h:i:sa');
    echo '<br>';

    // Timestamp
    $timestamp = mktime(13,0,0,07,22,1980);  //hours,minutes,seconds,day,month,year
    echo $timestamp;
    echo '<br>';
    echo date('d/m/Y h:i:sa',$timestamp);
    echo '<br>';

    $timestamp2 = strtotime('7:00pm March 22 2016'); //string to date
    $timestamp3 = strtotime('tomorrow'); //tomorrow to date
    $timestamp4 = strtotime('next Sunday'); //next Sunday to date
    $timestamp5 = strtotime('+2 Months'); //+2 months to date
    $timestamp6 = strtotime('+2 Days'); //+2 days to date
    echo $timestamp6;
    echo '<br>';
    echo date('d/m/Y h:i:sa',$timestamp6);
    echo '<br>';
?>