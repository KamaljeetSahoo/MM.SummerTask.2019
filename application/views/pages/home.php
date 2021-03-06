<!-- CONTENT -->
<div class="container">
  <div class="jumbotron text-center">
    <h1>MAIN ARTICLE AREA</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span id="dots">...</span>
    <span id="more">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>

    <button type="button" onclick="show_more_function()" id="Read_more_btn" class="btn btn-lg btn-primary">READ MORE</button>
    <p></p>
    <button type="button" class="btn btn-sm btn-primary">MORE SIMILAR ARTICLES</button>
    <!-- <button type="button" class="btn btn-sm btn-primary">READ MORE</button> -->
    <!-- <button type="button" class="btn btn-sm btn-primary">READ MORE</button> -->
    <!-- <button type="button" class="btn btn-primary">READ MORE</button> -->
  </div>
</div>


<div class="container">

    <!-- CAROUSEL -->
  <div class="row">
    
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo base_url(); ?>assets/images/la.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h2>THEME 1</h2>
            </div>
          </div>

          <div class="item">
            <img src="<?php echo base_url(); ?>assets/images/chicago.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
              <h2>THEME 2</h2>
            </div>
          </div>
        
          <div class="item">
            <img src="<?php echo base_url(); ?>assets/images/ny.jpg" alt="New york" style="width:100%;">
            <div class="carousel-caption">
              <h2>THEME 3</h2>
            </div>
          </div>
        </div>

         <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
</div>

<!-- SPACE -->
  <div class="space"></div>

<div class="container">
  <div class="row">

    <div class="col-md-4">
      <div class="well">
        <h3>ARTICLE 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span id="dots_1">...</span>
        <span id="more_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>

        <p></p>
        <button type="button" onclick="show_more_function_1()" id="Read_more_btn_1" class="btn btn-sm btn-primary">READ MORE</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="well">
        <h3>ARTICLE 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span id="dots_2">...</span>
        <span id="more_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>

        <p></p>
        <button type="button" onclick="show_more_function_2()" id="Read_more_btn_2" class="btn btn-sm btn-primary">READ MORE</button>
      </div>
    </div>

    <div class="col-md-4">
      <div class="well">
        <h3>ARTICLE 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span id="dots_3">...</span>
        <span id="more_3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>

        <p></p>
        <button type="button" onclick="show_more_function_3()" id="Read_more_btn_3" class="btn btn-sm btn-primary">READ MORE</button>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">LOGIN</button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">LOGIN</h4>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <label style="text-align: center;" for="uname"><b>Username</b></label>
                        <input id="myInput" type="text" placeholder="Enter Username" name="uname" required>
                        <p id="text">Caps Lock Is On</p>
                        <p></p>
                        <label for="psw"><b>Password</b></label>
                        <input id="myinput" type="password" placeholder="Enter Password" name="psw" required>
                        <br>
                        <input type="checkbox" onclick="myFunction()">Show Password
                        <p></p>  
                        <button type="submit">Login</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="pull-left">If not registered Register Here</p>
                      <button type="button" class="btn btn-primary">REGISTER</button>
                    </div>
                  </div> 
                </div>
              </div>
</div>

<!-- ASK A QUESTION AND POLL SECTION -->

<div class="container">
  <div class="row">
    <div class="col-md-6 pull-left">
      <div id="comment-box">
      <h1 class="abcd">COMMENT BOX</h1>
      
      <h3 class="heading">Comments and Responses</h3>
    

      <div id="comment-name" class="form-row">
      <input type = "text" placeholder = "Name (required)" name = "dname"  id = "name" >
      </div>
      <div id="comment-email" class="form-row">
      <input type = "text" placeholder = "Mail (will not be published) (required)" name = "demail"  id = "email">
      </div>
      <div id="comment-url" class="form-row">
      <input type = "text" placeholder = "Website" name = "url"  id = "url" >
      </div>
      <div id="comment-message" class="form-row">
      <textarea name = "comment" placeholder = "Message" id = "comment" ></textarea>
      </div>
      <a href="#"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment"></a>
      <br>
      <input type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
      <p1><b>Notify me when new comments are added.</b></p1>
      </form>
      </div>

    </div>

    <div class="col-md-4 pull-right">
      <div class="poll-box">
        <h1>POLL SECTION</h1>
        <h3>Poll Questions to be asked</h3>
        <div class="poll-question-box">
          <form>
            <input type="radio" name="vote" value="1">Option 1</br>
            <input type="radio" name="vote" value="2">Option 2</br>
            <input type="radio" name="vote" value="3">Option 3</br>
            <input type="submit" value="Vote" class="btn btn-primary" id="voteb">
          </form>
          <button type="button" class="btn btn-sm btn-primary">SEE RESULTS</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SPACE -->
  <div class="space"></div>

<!-- UPLOAD ARTICLE SECTION -->

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="contribution-box">
        <h1>WANT TO CONTRIBUTE</h1>
        <h3>Upload your article here</h3>
        <br></br>
        <div class="upload-box">
          <a href="#"><i class="fa fa-upload fa-4x"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SPACE -->
  <div class="space"></div>