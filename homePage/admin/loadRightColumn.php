#!/usr/bin/php
<?php
    @ob_end_clean();
    include("../../includes/dbconnect.php");
    if (!isset($_COOKIE["userid"])){echo "Please log in. ";}
    $result = pg_query($db, "SELECT * FROM groups WHERE groupid=".$_POST["groupNo"]);
    // echo $_COOKIE["userid"];
    // echo $_COOKIE["username"];



    while (($row = pg_fetch_assoc($result))) {
        $eventName = checkEmpty($row['name']);
        $eventDescription = checkEmpty($row['description']);
        $eventStatus = $row['status'];
        $eventDestination = checkEmpty($row['destination']);
        $eventTime = checkEmpty($row['datetime']);
        $eventMembers = checkEmpty($row['members']);
        $membersConfirm = checkEmpty($row['membersconfirmed']);

        $members = preg_split ("/\,/", $eventMembers);  
        if (isset($_COOKIE["userid"])){
            loadDescription($eventName, $eventDescription,$eventStatus);
            loadPolls($db, $eventName);

            echo '<div class="card-body">
            <p><img class="mb-1 mr-1" src="icons/calendar_today_black-24px.svg" width="20" height="15">
              <font size="4.5"><b>Time: </b> '.$eventTime.'</font>
            </p>
            <p><img class="mb-1 mr-1" src="icons/location_on_black-24px.svg" width="20" height="15">
              <font size="4.5"><b>Location: </b>'.$eventDestination.'</font>
            </p>';
            loadPayment($db, $eventName);
        }
    }
    function loadDescription($eventName, $eventDescription,$eventStatus){
        echo '
        <div class="card-body">
          <h4 class="d-inline-block card-title">'.$eventName.'</h4>
          <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: '.decodeStatus($eventStatus).'</h6>
          <p class="card-text">'.$eventDescription.'</p>
        </div>
        ';
        echo '</div>';

    }

    function loadPayment($db, $eventName){
        $payment = pg_query($db, "SELECT username,amount,message,bankaccount,sortcode FROM payments JOIN users ON receiverId=userId WHERE groupId=".$_POST["groupNo"]." AND iscomplete=FALSE"); //AND senderId = this
        while (($row = pg_fetch_assoc($payment))) {
            $username = $row['username'];
            $amount = $row['amount'];
            $message = $row['message'];
            $bankaccount = $row['bankaccount'];
            $sortcode = $row['sortcode'];

            echo '
                <p class="card-text">Please pay <b>'.$username.'</b> <b>'.($amount/100).'</b> for <b>'.$message.'</b>.</p>
                <p class="card-text"><b>Payment Info: '.checkEmpty($bankaccount).' '.$sortcode.'</b></p>
            ';
        }
    }

    function loadPolls($db, $eventName){
        $polling = pg_query($db, "SELECT polltitle, array_to_json(optionstext),array_to_json(voteduser),array_to_json(optionsresult),pollid  FROM polls WHERE groupId=".$_POST["groupNo"]." AND isactive=TRUE");
        echo '
        <div class="col-lg-12 mt-4" style="margin: auto;">
          <div>
            <h5 class="d-inline-block" style="color:#0080ff;">
              <img src="icons/poll-icon.png" width="20" height="20"> <a data-toggle="modal" data-target="#newPollModalCenter">Poll +</a>
            </h5>
          </div>
        ';
       
        while (($row = pg_fetch_array($polling))) {
            if (in_array($_COOKIE["userid"],json_decode($row[2]))){
                echo '

                <div class="col-lg-12 mt-4" style="margin: auto;">
                  <div class="card h-100 mb-4">
                    <div class="card-body">
                      <h4 class="card-title">'.$row["polltitle"].'</h4>';

                      $totalvote = array_sum(json_decode($row[3]));
                      $j = 0;
                      foreach (json_decode($row[1]) as &$optionstext) {       
                          $voteNum = (int) json_decode($row[3])[$j];     
                          echo '<h6 class="card-subtitle text-muted">'.$optionstext.'</h6>
                          <div class="progress mb-3 mt-1" >
                            <div class="progress-bar" role="progressbar" style="width:'.((int) $voteNum/($totalvote+1)*100).'%" aria-valuenow="'.$voteNum.'" aria-valuemin="0" aria-valuemax="'.$totalvote.'"></div>
                          </div> ';
                          $j++;
                      };
            }else{
                echo '
                
                <form action="/" id="PollForm'.$row["pollid"].'">
                <input type="hidden" name="pollId" value="'.$row["pollid"].'">
                <div class="col-lg-12 mt-4" style="margin: auto;">
                <div class="card h-100 mb-4">
                <div class="card-body">
                <h4 class="d-inline-block card-title">'.$row["polltitle"].'</h4>';
                
                $j = 0;
                foreach (json_decode($row[1]) as &$optionstext) {            
                    echo '<div class="form-check">
                        <input class="form-check-input" type="radio" name="pollRadios" id="pollRadios'.$j.'" value="'.$j.'">
                        <label class="form-check-label" for="pollRadios'.$j.'">'.$optionstext.'</label>
                        </div> ';
                    $j++;
                }
                echo '<button class="btn btn-primary mt-2 float-right" type="submit" id="PollButton'.$row["pollid"].'">Submit</button>';
                echo '<script>setPollSubmit('.$row["pollid"].');</script>';
            
            }
            echo '      
                    </div>
                </div>
                </div>';
        }
        echo '</div>';


    }
    function checkEmpty($var){
        return ($var==""?"Not Given":$var);
    }
    function decodeStatus($i){
        switch ($i) {
            case 0:
                return "planning";
                break;
            case 1:
                return "polling";
                break;
            case 2:
                return "planned";
                break;
            case 3:
                return "starting";
                break;
            case 4:
                return "completed";
                break;
        };
    }
    $db.pg_close();

    
?>