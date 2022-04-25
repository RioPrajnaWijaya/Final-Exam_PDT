<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PDT Shop | Online Shopping Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">  
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?><br><br><br>
  <div>

     <!-- ======= Team Section ======= -->
     <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>TEAM</h2>
                </div>

                <div class="row"> 
                  <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
                          <div class="member d-flex align-items-start">
                              <div class="pic"><img src="images/team/arina.jpeg" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Arina Sabilahaq</h4>
                                  <span></span>
                                  <p>001202100049</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
                          <div class="member d-flex align-items-start">
                              <div class="pic"><img src="images/team/bariq.png" class="img-fluid" alt=""></div>
                              <div class="member-info">
                                  <h4>Bariq Maulana</h4>
                                  <span></span>
                                  <p>001202100119</p>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-6 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <br>
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="images/team/rio.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Rio Prajna Wijaya</h4>
                                <span></span>
                                <p>001202100006</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <br>
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="images/team/thomas.png" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Thomas Agustian</h4>
                                <span></span>
                                <p>001202100124</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
      </section>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php 
if(isset($_GET['error'])) { 
  $z=$_GET['error']; 
  echo 
  "<script type='text/javascript'>
    $(document).ready(function(){
    $('#signup').modal('show');
    });
  </script>"; 
  echo 
  "<script type='text/javascript'>
    alert('".$z."')
  </script>";
} 
?>
<?php 
if(isset($_GET['errorl'])) { 
  $z=$_GET['errorl']; 
  echo 
  "<script type='text/javascript'>
    $(document).ready(function(){
    $('#login').modal('show');
    });
  </script>"; 
  echo 
  "<script type='text/javascript'>
    alert('".$z."')
  </script>";
} 
?>
</html>
