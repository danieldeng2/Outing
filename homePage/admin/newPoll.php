#!/usr/bin/php
<?php
@ob_end_clean();
include "../../includes/dbconnect.php";

// newPollTitle newPollOp1 newPollOp2 newPollOp3 newPollOp4 groupNo
$optionsText = "\"".$_POST["newPollOp1"]."\",\"".$_POST["newPollOp2"]."\",\"".$_POST["newPollOp3"]."\",\"".$_POST["newPollOp4"]."\"";

pg_query ($db, "INSERT INTO polls (groupid, isActive, optionsText, optionsresult, voteduser,polltitle)
VALUES (".$_POST["groupNo"].", TRUE, '{".$optionsText."}', '{0,0,0,0}', '{}', '".$_POST["newPollTitle"]."')");
?>