#!/usr/bin/php

<?php
function recommend($recommend, $groupID, $db)
{
    $locations = strtolower($recommend);
    $location_arr = explode(",", $locations);
    if (empty($location_arr)) {
        echo "empty";
        return;
    }

    foreach ($location_arr as $location) {
        echo $location;
        $query = "INSERT INTO recommend (location, groupid) VALUES('$location', $groupID)";
        $result = pg_query($db, $query);
        if (!$result) {
            echo "Error inserting location!";
        }
    }
}
?>