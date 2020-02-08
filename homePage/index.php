<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Outings</title>
  <style>
    .carousel-indicators li {
    height: 8px!important;
    width: 8px!important;
    border-radius: 50%!important;
    background-color: black!important;
    }
    .carousel-indicators {
     bottom:-20px!important;
    }
    body{
    padding-bottom:3.5rem;
    }
  </style>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="#">Event One</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Planning</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              <a href="chat.html" class="btn btn-primary">
                <img src="icons/chat-24px.svg" width="20" height="20" alt="New">
                Chat
              </a>
              <button class="btn btn-primary" data-toggle="modal" data-target="#newPollModalCenter" text-color="white">
                <img src="icons/poll-24px.svg" width="20" height="20" alt="New">
                Poll
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="#">Event Two</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Polling</h6>
              
  
              <div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active"  >
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
                  <div class="carousel-item">

                    <div class="col-lg-12 mt-4" style="margin: auto;">
                      <div class="card h-100 mb-4">
                        <div class="card-body">
                          <h4 class="card-title">When?</h4>
                            <h6 class="card-subtitle text-muted">Day 1</h6>
                            <div class="progress mb-3 mt-1" >
                              <div class="progress-bar" id="pollBar1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="card-subtitle text-muted">Day 2</h6>
                            <div class="progress mb-3 mt-1">
                              <div class="progress-bar" id="pollBar2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6 class="card-subtitle text-muted">Day 3</h6>
                            <div class="progress mb-3 mt-1">
                              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>        

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
  
            
              </div>
  
              
              <a href="chat.html" class="btn btn-primary">
                <img src="icons/chat-24px.svg" width="20" height="20" alt="New">
                Chat
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="#">Event Three</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Planned</h6>
              <p><img class="mb-1 mr-1" src="icons/calendar_today_black-24px.svg" width="15" height="15"><b>Time: </b> 2001-09-11 09:00:00</p>
              <p><img class="mb-1 mr-1" src="icons/location_on_black-24px.svg" width="15" height="15"><b>Location: </b> World Trade Centre</p>

              <a href="chat.html" class="btn btn-primary">
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

        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="#">Event Four</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Starting</h6>
              <p><img class="mb-1 mr-1" src="icons/calendar_today_black-24px.svg" width="15" height="15"><b>Time: </b> 2001-09-11 09:00:00</p>
              <p><img class="mb-1 mr-1" src="icons/location_on_black-24px.svg" width="15" height="15"><b>Location: </b> World Trade Centre</p>

              <a href="chat.html" class="btn btn-primary">
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
        
        <div class="col-lg-8 mt-4" style="margin: auto;">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="d-inline-block card-title"><a href="#">Event Five</a></h4>
              <h6 class="d-inline-block card-subtitle text-muted float-right margin-top" style="margin-top:.2rem;">Status: Completed</h6>
              <p class="card-text">Please pay <b>Osama Bin Laden</b> <b>$100.00</b> for <b>providing the bombs</b>.</p>
              <p class="card-text"><b>Payment Info: 696969 420420</b></p>
              <p class="card-text">This event will be deleted <b>3 days</b> after payment. </p>
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
        <form action="/" id="signUpForm">

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
              <input type="text" class="form-control" name="signUpUserName" placeholder="required">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
              </div>
              <input type="password" class="form-control" name="signUpPassword" placeholder="required">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
              </div>
              <input type="text" class="form-control" name="signUpEmail" placeholder="Optional">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Bank Account</span>
              </div>
              <input type="text" class="form-control" name="signUpBankAccount" placeholder="Optional">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Sort Code</span>
              </div>
              <input type="text" class="form-control" name="signUpSortCode" placeholder="Optional">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Payment Link</span>
              </div>
              <input type="url" class="form-control" name="signUpPayment" placeholder="Optional">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>
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
  <script src="js/homePage.js"></script>

</body>

</html>
