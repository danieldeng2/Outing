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
                loadPolling($eventId, $eventName); 
                break;
            case 2:
                loadPlanned($eventId, $eventName, $eventTime, $eventDestination);
                break;
            case 3:
                loadStarting($eventId, $eventName, $eventTime, $eventDestination);
                break;
            case 4:
                loadCompleted($eventId, $eventName);
                break;
        }

    }

    $db.pg_close();

    function loadPlanning($eventId, $eventName, $eventDescription){
        echo '
        <div class="col-lg-8 mt-4" style="margin: auto;">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="d-inline-block card-title"><a href="chat.html?id="'.$eventId.'">'.$eventName.'</a></h4>
            <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Planning</h6>
            <p class="card-text">'.$eventDescription.'</p>
            <a href="chat.html?id="'.$eventId.'"" class="btn btn-primary">
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
    

?>