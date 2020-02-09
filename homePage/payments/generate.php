#!/usr/bin/php

<?php
function ($generate, $groupID) {
    include __DIR__ . "../../includes/dbconnect.php";
    $people = strtolower($generate->PERSON);
    $price_str = $generate->PRICE;
    $receiver = $_COOKIE["userid"];
    preg_match_all('!\d+!', $price_str, $matches);
    $price = implode(' ', $matches[0]);

    if (empty($people) || empty($price_str)) {
        return;
    }

    if ($people == 'everyone') {
        $query = "SELECT members FROM groups WHERE groupid ='$groupID'";
        $result = pg_query($db, $query);
        $row = pg_fetch_assoc($result);
        $members = $row["members"];
        $member_arr = explode(",", $members);
        $member_num = sizeof($member_arr);
        $price_each = intdiv($price, $member_num);

        foreach ($members as $member) {
            $query = "INSERT INTO payments (INSERT INTO payments (senderid, receiverid, amount, groupid, iscomplete)
                VALUES('$member', '$receiver', '$price_each', '$groupID', FALSE)";
            $result = pg_query($db, $query);
            if (!$result) {
                echo "Database insert error!";
            }
        }
    } else {
      $members = explode(",", $people);
      foreach ($members as $member) {
        $query = "SELECT username, id FROM users WHERE username='$member'";
        $result = pg_query($db, $query);
        $row = pg_fetch_assoc($result);
        $memberid[] = $row["id"];
      }

      if (sizeof($members) != sizeof($memberid)) {
        return;
      }

      
    }

}
?>