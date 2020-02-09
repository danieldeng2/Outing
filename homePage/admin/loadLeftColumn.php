#!/usr/bin/php
<?php
    @ob_end_clean();
    include("../../includes/dbconnect.php");
    $result = pg_query($db, "SELECT members FROM groups WHERE groupid=".$_POST["groupNo"]);
    while (($row = pg_fetch_assoc($result))) {

    $members = preg_split ("/\,/", $row["members"]);
    foreach ($members as &$member) {       
        $users = pg_query($db, "SELECT username,bankaccount,sortcode,paymentlink FROM users WHERE userid=".$member);
        while (($user = pg_fetch_assoc($users))) {
            echo '
            <li class="list-group-item border-0">
            <div class="row no-gutters">
              <div class="col-auto">
                <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
              </div>
              <div class="col">
                <div class="card-block px-2">
                  <h6 class="card-title mb-0">'.$user["username"].' <small class="card-subtitle text-muted">5 mins</small> </h6>

                  <small class="card-text"><b>Payment Info: </b>'.checkEmpty($user["bankaccount"]).' '.$user["sortcode"].' <a href="'.$user["paymentlink"].'">link</a></small>
                </div>
              </div>
            </div>
          </li>
            ';
        }
    };

    }

    function checkEmpty($var){
        return ($var==""?"Not Given":$var);
    }
    $db.pg_close();
?>