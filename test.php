<?php
include("sql_connect.inc.php");
$sql2 = " SELECT * FROM `renter_af` ";
    $retval = mysql_query($sql2);
    $arrayData = array();
    $i = 0;
    while($row1 = mysql_fetch_row($retval)) {
        $arrayData[$i] = $row1;
        $i++;
    }
    print_r($arrayData);
?>