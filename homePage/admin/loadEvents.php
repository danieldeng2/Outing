#!/usr/bin/php
<?php
    @ob_end_clean();
    include("../../includes/dbconnect.php");
    $result = pg_query($db, "SELECT * FROM groups");
    
    while (($row = pg_fetch_assoc($result))) {
        $eventId = $row['groupid'];
        $eventName = $row['name'];
        $eventDescription = $row['description'];
        $eventStatus = $row['status'];
        $eventDestination = $row['destination'];
        $eventTime = $row['datetime'];
        $eventMembers = $row['members'];
        $createdTime = $row['createdate'];
        $membersConfirm = $row['membersconfirmed'];

        switch ($eventStatus) {
            case 0:
                loadPlanning($eventId, $eventName, $eventDescription);
                break;
            case 1:
                loadPolling($db, $eventId, $eventName); 
                break;
            case 2:
                loadPlanned($eventId, $eventName, $eventTime, $eventDestination);
                break;
            case 3:
                loadStarting($eventId, $eventName, $eventTime, $eventDestination);
                break;
            case 4:
                loadCompleted($db, $eventId, $eventName);
                break;
        }

    }

    $db.pg_close();

    function loadPlanning($eventId, $eventName, $eventDescription){
        echo '
        <div class="col-lg-8 mt-4" style="margin: auto;">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="d-inline-block card-title"><a href="chat.html?id='.$eventId.'">'.$eventName.'</a></h4>
            <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Planning</h6>
            <p class="card-text">'.$eventDescription.'</p>
            <a href="chat.html?id='.$eventId.'" class="btn btn-primary">
              <img src="icons/chat-24px.svg" width="20" height="20" alt="New">
              Chat
            </a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#newPollModalCenter" text-color="white">
              <img src="icons/poll-24px.svg" width="20" height="20" alt="New">
              Poll
            </button>
          </div>
        </div>
      </div>';
    }

    function loadPolling($db, $eventId, $eventName){
        $polling = pg_query($db, "SELECT polltitle, array_to_json(optionstext)  FROM polls WHERE groupId=$eventId AND isactive=TRUE");
        echo '
        <div class="col-lg-8 mt-4" style="margin: auto;">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="d-inline-block card-title"><a href="chat.html?id='.$eventId.'">'.$eventName.'</a></h4>
            <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Polling</h6>
        ';

        echo ' <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
       
        for ($i = 1; $i < pg_num_rows($polling) ; $i++) {
            echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
        }

        echo '</ol>
        <div class="carousel-inner">';

        $active = TRUE;
        while (($row = pg_fetch_array($polling))) {
            // pollid groupid isactive duetime optionsdate optionstext optionsresult voteduser
            echo '
            <div class="carousel-item '.($active ? 'active' : '').'">

            <div class="col-lg-12 mt-4" style="margin: auto;">
              <div class="card h-100 mb-4">
              <div class="card-body">
              <h4 class="d-inline-block card-title">'.$row["polltitle"].'</h4>';
            
            $j = 0;
            foreach (json_decode($row[1]) as &$optionstext) {            
                echo '<div class="form-check">
                    <input class="form-check-input" type="radio" name="pollRadios" id="pollRadios'.$j.'" value="option'.$j.'">
                    <label class="form-check-label" for="pollRadios'.$j.'">'.$optionstext.'</label>
                    </div> ';
                $j++;
            }
            echo '                    
              <a href="#" class="btn btn-primary mt-2 float-right">Submit</a>
                    </div>
                    </div>
                    </div>

                </div>';
            $active = FALSE;
        }

        echo '</div> </div>
                <a href="chat.html?id='.$eventId.'" class="btn btn-primary">
                <img src="icons/chat-24px.svg" width="20" height="20" alt="New">
                Chat
                </a>
            </div>
            </div>
        </div>';

    }
    
    function loadStarting($eventId, $eventName, $eventTime, $eventDestination){
        echo '
        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="chat.html?id='.$eventId.'">'.$eventName.'</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Starting</h6>
              <p><img class="mb-1 mr-1" src="icons/calendar_today_black-24px.svg" width="15" height="15"><b>Time: </b>'.$eventTime.'</p>
              <p><img class="mb-1 mr-1" src="icons/location_on_black-24px.svg" width="15" height="15"><b>Location: </b>'.$eventDestination.'</p>

              <a href="chat.html?id='.$eventId.'" class="btn btn-primary">
                <img src="icons/chat-24px.svg" width="20" height="20">
                Chat
              </a>
              <a href="#" class="btn btn-primary">
                <img src="icons/location_on-24px.svg" width="20" height="20">
                Map
              </a>
            </div>
          </div>
        </div>
        ';
    }

    function loadPlanned($eventId, $eventName, $eventTime, $eventDestination){
        echo '
        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="chat.html?id='.$eventId.'">'.$eventName.'</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Planned</h6>
              <p><img class="mb-1 mr-1" src="icons/calendar_today_black-24px.svg" width="15" height="15"><b>Time: </b>'.$eventTime.'</p>
              <p><img class="mb-1 mr-1" src="icons/location_on_black-24px.svg" width="15" height="15"><b>Location: </b>'.$eventDestination.'</p>

              <a href="chat.html?id='.$eventId.'" class="btn btn-primary">
                <img src="icons/chat-24px.svg" width="20" height="20">
                Chat
              </a>
              <a href="#" class="btn btn-primary">
                <img src="icons/calendar_today-24px.svg" width="20" height="20">
                Calendar
              </a>
            </div>
          </div>
        </div>
        ';
    }


    function loadCompleted($db, $eventId, $eventName){
        $polling = pg_query($db, "SELECT username,amount,message,bankaccount,sortcode FROM payments JOIN users ON receiverId=userId WHERE groupId=$eventId AND iscomplete=FALSE"); //AND senderId = this
        echo '
            <div class="col-lg-8 mt-4" style="margin: auto;">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="d-inline-block card-title"><a href="#">Event Five</a></h4>
                <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Completed</h6>';

        while (($row = pg_fetch_assoc($polling))) {
            $username = $row['username'];
            $amount = $row['amount'];
            $message = $row['message'];
            $bankaccount = $row['bankaccount'];
            $sortcode = $row['sortcode'];

            echo '
                <p class="card-text">Please pay <b>'.$username.'</b> <b>'.($amount/100).'</b> for <b>'.$message.'</b>.</p>
                <p class="card-text"><b>Payment Info: '.$bankaccount.' '.$sortcode.'</b></p>
            ';
        }
        echo '                <p class="card-text">This event will be deleted <b>3 days</b> after payment. </p>
        <a href="chat.html" class="btn btn-primary">
          <img src="icons/chat-24px.svg" width="20" height="20">
          Chat
        </a>
        <a href="#" class="btn btn-primary">
          <img src="icons/payment-24px.svg" width="20" height="20">
          Pay
        </a>
      </div>
    </div>
  </div>';
    }

?>