<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Weonly Health Exercise">
    <meta name="author" content="Weonly">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>We Only Health Exercise</title>

    <!-- Sweetalert2 core CSS -->
    <link href="<?php echo base_url("vendor/swal/css/sweetalert2.min.css") ?>" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/fontawesome.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.css") ?>">
  </head>

  <body>
    <div class="sequence">
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
    </div>

    <div class="logo">
        <h1>Weonly</h1>
        <h2>W</h2>
    </div>
    <nav>
      <ul>
        <li><a href="#1"><img src="<?php echo base_url("assets/images/icon-1.png") ?>" alt=""> <em>Homepage</em></a></li>
        <li><a href="#2"><img src="<?php echo base_url("assets/images/icon-2.png") ?>" alt=""> <em>About Us</em></a></li>
        <li><a href="#3"><img src="<?php echo base_url("assets/images/icon-3.png") ?>" alt=""> <em>Our Gallery</em></a></li>
        <li><a href="#4"><img src="<?php echo base_url("assets/images/icon-4.png") ?>" alt=""> <em>Contact Us</em></a></li>
      </ul>
    </nav>

    <div id="preview_video" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg vertical-align-center">
        <div class="modal-content">
          <div class="modal-body">
		        <video width="100%" controls src=""></video>
            <center><button data-dismiss="modal" class="btn btn-default">Close</button></center>
          </div>
        </div>
      </div>
    </div>
    
    <div class="slides">
      <div class="slide" id="1">
        <div id="slider-wrapper">
          <div id="image-slider">
            <ul>
              <li class="active-img">
                <div class="slide-caption">
                  <h6>Weonly</h6>
                  <h2>Health<br>Exercise</h2>
                </div>
              </li>
              <li>
                <div class="slide-caption">
                  <h6>Weonly</h6>
                  <h2>Muscle<br>Exercise</h2>
                </div>
              </li>
              <li>
                <div class="slide-caption">
                  <h6>Weonly</h6>
                  <h2>Strong<br>Exercise</h2>
                </div>
              </li>
              <li>
                <div class="slide-caption">
                  <h6>Weonly</h6>
                  <h2>Healthy<br>Food</h2>
                </div>
              </li>
              <li>
                <div class="slide-caption">
                  <h6>Weonly</h6>
                  <h2>Positive<br>Mind</h2>
                </div>
              </li>
            </ul>
          </div>
          <div id="thumbnail">
            <ul>
              <li class="active"><img src="<?php echo base_url("assets/images/thumb-1.jpg") ?>" alt="Health" /></li>
              <li><img src="<?php echo base_url("assets/images/thumb-2.jpg") ?>" alt="Muscle" /></li>
              <li><img src="<?php echo base_url("assets/images/thumb-3.jpg") ?>" alt="Strong" /></li>
              <li><img src="<?php echo base_url("assets/images/thumb-4.jpg") ?>" alt="Healthy" /></li>
              <li><img src="<?php echo base_url("assets/images/thumb-5.jpg") ?>" alt="Positive" /></li>    
            </ul>
          </div>
        </div>
      </div>

      <div class="slide" id="2">
          <div class="content second-content">
              <div id='tabs'>
                <ul>
                  <li><a href='#tabs-1'><span class='fa fa-desktop'></span></a></li>
                  <li><a href='#tabs-2'><span class='fa fa-users'></span></a></li>
                  <li><a href='#tabs-3'><span class='fa fa-mobile'></span></a></li>
                </ul>
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <h2>What We Offer?</h2>
                    <span>Do it online or offline training</span>
                    <p>You can make an appointment with the class coach you appointed to do the exercises. Even when you are in home or wherever you are. We are flexible everything what you want.</p>
                    <p>Just send us your contact E-Mail and choose what class do you want. And that's it you can training if you want do it online or offline! </p>
                    <p>Follow our <a href="https://instagram.com/wendi_af?igshid=YmMyMTA2M2Y=">Instagram!</a></p>
                  </article>
                  <article id='tabs-2'>
                    <h2>Offline Training</h2>
                    <span>Just Set Where, When!</span>
                    <p>In offline training you just set nearest gym from your place. And set schedule you can do a training with your coach.</p>
                    <p>After you send your contact to us, our coach will contact you immediately and set schedule and everything do you want.</p>
                  </article>
                  <article id='tabs-3'>
                    <h2>Online Training</h2>
                    <span>Do It Everywhere!</span>
                    <p>if you are far from our gym, or just want to do some home training. Then online training is the right thing for you!</p> 
                    <p>You only need to provide an email contact, then your trainer will contact you directly and conduct online training properly and professionally.</p>
                  </article>
                </section>
              </div>
          </div>
      </div>

      <div class="slide" id="3">
          <div class="content third-content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="owl-carousel owl-theme">
                          <div class="col-md-12">
                              <div class="featured-item"> 
                                <a href="#" data-vid="<?php echo base_url("assets/videos/Zumba.mp4") ?>"><img src="<?php echo base_url("assets/images/item-01.jpg") ?>" alt="Zumba"></a>
                                  <div class="down-content">
                                  <h4>Zumba Class</h4>
                                      <h6>$5.00/Day</h6>
                                      <h6>$25.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                  <a href="#" data-vid="<?php echo base_url("assets/videos/MuayThai.mp4") ?>"><img src="<?php echo base_url("assets/images/item-02.jpg") ?>" alt="MuayThai"></a>
                                  <div class="down-content">
                                      <h4>MuayThai Class</h4>
                                      <h6>$8.00/Day</h6>
                                      <h6>$35.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/Calis.mp4") ?>"><img src="<?php echo base_url("assets/images/item-03.jpg") ?>" alt="Calisthenics"></a>
                                  <div class="down-content">
                                      <h4>Calisthenics</h4>
                                      <h6>$4.00/Day</h6>
                                      <h6>$25.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/Yoga.mp4") ?>"><img src="<?php echo base_url("assets/images/item-04.jpg") ?>" alt="Yoga"></a>
                                <div class="down-content">
                                    <h4>Yoga Class</h4>
                                    <h6>$8.00/Day</h6>
                                    <h6>$37.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/Pilates.mp4") ?>"><img src="<?php echo base_url("assets/images/item-05.jpg") ?>" alt="Pilates"></a>
                                <div class="down-content">
                                    <h4>Pilates Class</h4>
                                    <h6>$10.00/Day</h6>
                                    <h6>$47.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/PoleDance.mp4") ?>"><img src="<?php echo base_url("assets/images/item-06.jpg") ?>" alt="PoleDance"></a>
                                <div class="down-content">
                                    <h4>Pole Dance</h4>
                                    <h6>$12.00/Day</h6>
                                    <h6>$52.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/MicroGym.mp4") ?>"><img src="<?php echo base_url("assets/images/item-07.jpg") ?>" alt="MicroGym"></a>
                                <div class="down-content">
                                    <h4>Micro Gym</h4>
                                    <h6>$4.00/Day</h6>
                                    <h6>$20.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/TRX.mp4") ?>"><img src="<?php echo base_url("assets/images/item-08.jpg") ?>" alt="TRX"></a>
                                <div class="down-content">
                                    <h4>TRX Class</h4>
                                    <h6>$9.00/Day</h6>
                                    <h6>$46.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/BodyCombat.mp4") ?>"><img src="<?php echo base_url("assets/images/item-09.jpg") ?>" alt="BodyCombat"></a>
                                <div class="down-content">
                                    <h4>Body Combat</h4>
                                    <h6>$8.00/Day</h6>
                                    <h6>$42.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/PoundFit.mp4") ?>"><img src="<?php echo base_url("assets/images/item-10.jpg") ?>" alt="PoundFit"></a>
                                <div class="down-content">
                                    <h4>Pound Fit</h4>
                                    <h6>$10.00/Day</h6>
                                    <h6>$50.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/HIIT.mp4") ?>"><img src="<?php echo base_url("assets/images/item-11.jpg") ?>" alt="HIIT"></a>
                                <div class="down-content">
                                    <h4>HIIT Class</h4>
                                    <h6>$4.00/Day</h6>
                                    <h6>$30.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="featured-item">
                                <a href="#" data-vid="<?php echo base_url("assets/videos/Boxing.mp4") ?>"><img src="<?php echo base_url("assets/images/item-12.jpg") ?>" alt="Boxing"></a>
                                <div class="down-content">
                                    <h4>Boxing Class</h4>
                                    <h6>$12.00/Day</h6>
                                    <h6>$60.00/Month (Member)</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="slide" id="4">
          <div class="content fourth-content">
              <div class="container-fluid">
                  <form id="contact" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <h2>Send Your Contact! <br/>We Will Give Our Best!</h2>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <button id="form-submit" class="button">Send Now</button>
                          </fieldset>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url("vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

    <!-- Sweetalert2 core JavaScript -->
    <script src="<?php echo base_url("vendor/swal/sweetalert2.all.min.js") ?>"></script>

    <!-- Additional Scripts -->
    <script src="<?php echo base_url("assets/js/owl.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/accordations.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/main.js") ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // navigation click actions 
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');         
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }

        // funtion for preview video
        $(document).on('click', '.featured-item a', function(e){
          e.preventDefault();
          var video = $(this).attr('data-vid');
          
          $('#preview_video video').attr('src', video);
          $('#preview_video').modal('show');
          $('#preview_video video')[0].play();
        });

        $('#preview_video').on('hidden.bs.modal', function (e) {
          $('#preview_video video')[0].pause();
          $('#preview_video video').attr('src', '');
        });

        // Send message using ajax
        $("#form-submit").click(function(e) {
          e.preventDefault();

          if($('#name').val().length <= 0 || $('#email').val().length <= 0 || $('#message').val().length <= 0) {
            Swal.fire(
              'Warning',
              'Please complete your data',
              'warning'
            )

            return false;
          }

          $.ajax({
            url: "<?php echo base_url('home/send'); ?>",
            method: "POST",
            data: $('form#contact').serialize(),
            dataType: "JSON",
            success: function(data){
              if(data.status){
                Swal.fire(
                  'Success',
                  'Successfully send message',
                  'success'
                )

                $('form#contact')[0].reset();
              }else{
                Swal.fire(
                  'Warning',
                  'Failed send message',
                  'warning'
                )
              }
            },
            error: function(jqXHR, textStatus, errorThrown){
              Swal.fire(
                'Error',
                'Error send message',
                'error'
              )
            }
          });
        })
    </script>
  </body>
</html>
