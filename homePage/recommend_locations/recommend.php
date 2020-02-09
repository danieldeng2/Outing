#!/usr/bin/php

<?php
function recommend($recommend, $groupID)
{
    include __DIR__ . "../../includes/dbconnect.php";
    $locations = strtolower($recommend->LOCATION);
    $location_arr = explode(",", $locations);
    if (empty($location)) {
        return;
    }

    foreach ($location_arr as $location) {
        $query = "INSERT INTO recommends (location, groupid) VALUES('$location', $groupID)";
        $result = pg_query($db, $query);
        if (!$result) {
            echo "Error inserting location!";
        }
    }
}
?>