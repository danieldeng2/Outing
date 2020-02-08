<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Outings</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
  <link href="stylesheets/messaging.css" rel="stylesheet" type="text/css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" data-toggle="modal" data-target="#signUpModalCenter">
        <img src="icons/account_circle-24px.svg" width="36" height="36" alt="My Info">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="navbar-brand" data-toggle="modal" data-target="#newModalCenter">
              <img src="icons/fiber_new-24px.svg" width="36" height="36" alt="New">
            </a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" data-toggle="modal" data-target="#joinModalCenter">
              <img src="icons/group_add-24px.svg" width="36" height="36" alt="Join">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
    <div class="container-fluid h-100">
      <div class="row w-100 h-100">

        <div class="col col-lg-3.5 border-right h-100 px-0 sidebar">
          <ul class="list-group list-group-flush h-50 border-bottom peopleList">
            <li class="list-group-item border-0">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            <h6 class="card-title mb-0">Hoang Vu <small class="card-subtitle text-muted">5 mins</small> </h6>

                            <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item  border-0">
              <div class="row no-gutters">
                <div class="col-auto">
                    <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h6 class="card-title mb-0">Jamie Liao <small class="card-subtitle text-muted">10 mins</small> </h6>

                        <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                    </div>
                </div>
            </div>
            </li>
            <li class="list-group-item  border-0">
              <div class="row no-gutters">
                <div class="col-auto">
                    <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h6 class="card-title mb-0">Jamie Liao <small class="card-subtitle text-muted">10 mins</small> </h6>

                        <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                    </div>
                </div>
            </div>
            </li>
            <li class="list-group-item  border-0">
              <div class="row no-gutters">
                <div class="col-auto">
                    <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h6 class="card-title mb-0">Jamie Liao <small class="card-subtitle text-muted">10 mins</small> </h6>

                        <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                    </div>
                </div>
            </div>
            </li>
            <li class="list-group-item  border-0">
              <div class="row no-gutters">
                <div class="col-auto">
                    <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h6 class="card-title mb-0">Jamie Liao <small class="card-subtitle text-muted">10 mins</small> </h6>

                        <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                    </div>
                </div>
            </div>
            </li>
            <li class="list-group-item  border-0">
              <div class="row no-gutters">
                <div class="col-auto">
                    <img src="icons/profile.png" width="64" height="64" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h6 class="card-title mb-0">Jamie Liao <small class="card-subtitle text-muted">10 mins</small> </h6>

                        <small class="card-text" ><b>Payment Info: </b>696969 420420 <a href="#">link</a></small>
                    </div>
                </div>
            </div>
            </li>
          </ul>
        </div>


        <div class="col col-lg-5 h-100 px-0 chat">
          <div class="chat-container pb-4">
            <div class="messaging">
              <div class="inbox_msg">
                <div class="mesgs">
                  <div id="msg_history">
                    <img id="loader" src='http://opengraphicdesign.com/wp-content/uploads/2009/01/loader64.gif'>

                    <!-- <div class="incoming_msg">
=======

                    <div class="incoming_msg">
>>>>>>> 8495ca18e3aae55e3a5edafd5952cb99b7013d75:homePage/chat.html
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test which is a new approach to have all
                            solutions</p>
                          <span class="time_date"> 11:01 AM | June 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Test which is a new approach to have all
                          solutions</p>
                        <span class="time_date"> 11:01 AM | June 9</span>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Test which is a new approach to have all
                          solutions</p>
                        <span class="time_date"> 11:01 AM | June 9</span>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Test which is a new approach to have all
                          solutions</p>
                        <span class="time_date"> 11:01 AM | June 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Test, which is a new approach to have</p>
                          <span class="time_date"> 11:01 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Apollo University, Delhi, India Test</p>
                        <span class="time_date"> 11:01 AM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="icons/profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>We work directly with our designers and suppliers,
                            and sell direct to you, which means quality, exclusive
                            products, at a price anyone can afford.</p>
                          <span class="time_date"> 11:01 AM | Today</span>
                        </div>
                      </div>
<<<<<<< HEAD:homePage/chat.php
                    </div> -->
=======
                    </div>
>>>>>

                  </div>

                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message" />
                      <button class="msg_send_btn" type="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-lg-3.5 border-left h-100 sidebar">
          <div class="col-lg-12 mt-4" style="margin: auto;">
            <div class="card h-100 mb-4">
              <div class="card-body">
                <h4 class="d-inline-block card-title">When?</h4>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pollRadios" id="pollRadios1" value="option1">
                    <label class="form-check-label" for="pollRadios1">
                      First day
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pollRadios" id="pollRadios2" value="option2">
                    <label class="form-check-label" for="pollRadios2">
                      Second day
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="pollRadios" id="pollRadios2" value="option2">
                    <label class="form-check-label" for="pollRadios2">
                      Third day
                    </label>
                  </div>
                <a href="#" class="btn btn-primary mt-2 float-right">Submit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Join Modal -->
  <div class="modal fade" id="joinModalCenter" tabindex="-1" role="dialog" aria-labelledby="joinModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="joinModalCenterTitle">Join Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="6 digit code">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Join</button>
        </div>

      </div>
    </div>
  </div>

  <!-- New Event Modal -->
  <div class="modal fade" id="newModalCenter" tabindex="-1" role="dialog" aria-labelledby="newModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newModalCenterTitle">New Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Event Name">
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Destination">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Time</span>
              </div>
              <input type="datetime-local" class="form-control">
            </div>

            <div class="input-group">
              <textarea class="form-control" aria-label="description" placeholder="Description"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Create</button>
          </div>

        </div>
      </div>
  </div>

  <!-- SignUp Modal -->
  <div class="modal fade" id="signUpModalCenter" tabindex="-1" role="dialog" aria-labelledby="signUpModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signUpModalCenterTitle">Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Username</span>
            </div>
            <input type="text" class="form-control" placeholder="required">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Password</span>
            </div>
            <input type="password" class="form-control" placeholder="required">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" placeholder="Optional">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Bank Account</span>
            </div>
            <input type="text" class="form-control" placeholder="Optional">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Sort Code</span>
            </div>
            <input type="text" class="form-control" placeholder="Optional">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Payment Link</span>
            </div>
            <input type="url" class="form-control" placeholder="Optional">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Sign Up</button>
        </div>

      </div>
    </div>
  </div>

  <!-- New Poll Modal -->
  <div class="modal fade" id="newPollModalCenter" tabindex="-1" role="dialog" aria-labelledby="newPollModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newPollModalCenterTitle">New Poll</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Title</span>
            </div>
            <input type="text" class="form-control" placeholder="required">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Option 1</span>
            </div>
            <input type="text" class="form-control" placeholder="required">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Option 2</span>
            </div>
            <input type="text" class="form-control" placeholder="required">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Option 3</span>
            </div>
            <input type="text" class="form-control" placeholder="Optional">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Option 4</span>
            </div>
            <input type="text" class="form-control" placeholder="Optional">
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Create</button>
        </div>

      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>