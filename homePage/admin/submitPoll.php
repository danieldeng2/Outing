#!/usr/bin/php

<?php
@ob_end_clean();
include "../../includes/dbconnect.php";
$pid = $_POST["pollRadios"] + 1;
$part1 =  "UPDATE polls set optionsresult [";
$part2 = "]  = optionsresult[";
$part3 = "] + 1;";
pg_query($db, $part1 .$pid. $part2 .$pid. $part3);
pg_query($db, "UPDATE polls SET voteduser = voteduser || ".$_COOKIE["userid"]." WHERE pollid=".$_POST["pollId"]);

$polling = pg_query($db, "SELECT polltitle, array_to_json(optionstext),array_to_json(voteduser),array_to_json(optionsresult)  FROM polls WHERE pollid=".$_POST["pollId"]);
$j=0;
while (($row = pg_fetch_array($polling))) {
    echo '<div class="col-lg-12 mt-4" style="margin: auto;">
      <div class="card h-100 mb-4">
        <div class="card-body">
          <h4 class="card-title">'.$row["polltitle"].'</h4>';

          $totalvote = array_sum(json_decode($row[3]));
          
          foreach (json_decode($row[1]) as &$optionstext) {       
              $voteNum = (int) json_decode($row[3])[$j];     
              if($j = $_POST["pollRadios"]) {$voteNum++;};
              echo '<h6 class="card-subtitle text-muted">'.$optionstext.'</h6>
              <div class="progress mb-3 mt-1" >
                <div class="progress-bar" role="progressbar" style="width:'.((int) $voteNum/$totalvote*100).'%" aria-valuenow="'.$voteNum.'" aria-valuemin="0" aria-valuemax="'.$totalvote.'"></div>
              </div> ';
              $j++;
          };
    echo '  
    </div>
    </div>
    </div>';
}


$db . pg_close();
?>