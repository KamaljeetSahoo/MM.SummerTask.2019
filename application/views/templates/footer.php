<!-- FOOTER -->
    <div class="navbar navbar-inverse navbar-static-bottom">
      <div class="container">
        
        <div class="navbar-text pull-left">
          <p>Copyright &copy; 2019 - MondayMorningNITRKL</p>
        </div>

        <div class="navbar-text pull-right">
          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
        </div>

      </div>
    </div>

<script>
  var input = document.getElementById("myInput");
  var text = document.getElementById("text");
  // input.addEventListener("keyup", function(event) {

  // if (event.getModifierState("CapsLock")) {
  //     text.style.display = "block";
  //   } else {
  //     text.style.display = "none"
  //   }
  // });

  function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  }
  else {
    x.type = "password";
  }
  }
</script>
<script>
  function show_more_function(){
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("Read_more_btn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function show_more_function_1(){
    var dots_1 = document.getElementById("dots_1");
    var moreText_1 = document.getElementById("more_1");
    var btnText_1 = document.getElementById("Read_more_btn_1");

    if (dots_1.style.display === "none") {
      dots_1.style.display = "inline";
      btnText_1.innerHTML = "Read more"; 
      moreText_1.style.display = "none";
    } else {
      dots_1.style.display = "none";
      btnText_1.innerHTML = "Read less"; 
      moreText_1.style.display = "inline";
    }
  }
  function show_more_function_2(){
    var dots_2 = document.getElementById("dots_2");
    var moreText_2 = document.getElementById("more_2");
    var btnText_2 = document.getElementById("Read_more_btn_2");

    if (dots_2.style.display === "none") {
      dots_2.style.display = "inline";
      btnText_2.innerHTML = "Read more"; 
      moreText_2.style.display = "none";
    } else {
      dots_2.style.display = "none";
      btnText_2.innerHTML = "Read less"; 
      moreText_2.style.display = "inline";
    }
  }

  function show_more_function_3(){
    var dots_3 = document.getElementById("dots_3");
    var moreText_3 = document.getElementById("more_3");
    var btnText_3 = document.getElementById("Read_more_btn_3");

    if (dots_3.style.display === "none") {
      dots_3.style.display = "inline";
      btnText_3.innerHTML = "Read more"; 
      moreText_3.style.display = "none";
    } else {
      dots_3.style.display = "none";
      btnText_3.innerHTML = "Read less"; 
      moreText_3.style.display = "inline";
    }
  }
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
  </body>
</html>