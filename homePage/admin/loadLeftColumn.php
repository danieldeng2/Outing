#!/usr/bin/php
<?php
    @ob_end_clean();
    include("../../includes/dbconnect.php");

    function checkEmpty($var){
        return ($var==""?"Not Given":$var);
    }


    $result = pg_query($db, "SELECT * FROM payments WHERE groupid=".$_POST["groupNo"]);
    while (($row = pg_fetch_assoc($result))) {
      $receivernameres = pg_query($db, "SELECT username FROM users WHERE userid=" . $row["receiverid"]);
      $receiverrow = pg_fetch_assoc($receivernameres);
      $receivername = $receiverrow["username"];
      $sendernameres = pg_query($db, "SELECT username FROM users WHERE userid=" . $row["senderid"]);
      $senderrow = pg_fetch_assoc($sendernameres);
      $sendername = $senderrow["username"];
      $amount = $row["amount"] / 100;
      $iscomplete = $row["iscomplete"];
            echo '
            <li class="list-group-item border-0">
            <div class="row no-gutters">
              <div class="col-auto">
                <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
              </div>
              <div class="col">
                <div class="card-block px-2">
                  <h6 class="card-title mb-0">'.$sendername.' <small class="card-subtitle text-muted">to ' .$receivername. '</small> </h6>

                  <small class="card-text"><b>Payment Info: </b>'.checkEmpty($user["bankaccount"]).' '.$user["sortcode"].' <a href="'.$user["paymentlink"].'">link</a></small>
                  <small class="card-text"><b>Amount: </b>'. $amount .'</small>
                  </div>
              </div>
            </div>
          </li>
            ';

    }
    $db.pg_close();
?>