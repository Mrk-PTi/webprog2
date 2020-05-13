<!DOCTYPE html>
<html lang="hu">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="Project">

      <title>Kapcsolat | Portfólió Weblap</title>

      <link rel="stylesheet" href="../public/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
      <link rel="stylesheet" href="../public/animate.css">
      <script src="../wow.min.js"></script>

</head>
<body>
      <div class="wrapper">
            <nav>
                  <span id="brand">
                        <a href="../index.php">Project</a>
                  </span>

                  <ul id="menu">
                        <li><a href="../index.php">Home<span>.</span></a></li>
                        <li><a href="description.php">Description<span>.</span></a></li>
                        <li><a href="about.php">About Me<span>.</span></a></li>
                        <li><a href="contact.php">Contact<span>.</span></a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <li><a href="../index.php">Home<span>.</span></a></li>
                        <li><a href="description.php">Description<span>.</span></a></li>
                        <li><a href="about.php">About Me<span>.</span></a></li>
                        <li><a href="contact.php">Contact<span>.</span></a></li>
                  </ul>
            </div>

            <div class="whitespace"></div>

            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-8">

                                    <h3 class="wow fadeInUp" data-wow-delay="1s">Hello!</h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">Ha kérdés merül fel benned, küldj üzenetet. (fejlesztés alatt)</p>

                              </div>
                        </div>
                  </div>
            </div>
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-8">
                              <form name="contact-form" id="contact-form" method="post" action="">

                              <ul>

                              <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <label for="contact-name">Név: </label>
                                    <div class="textarea">
                                          <input type="text" name="contact-name" id="contact-name" value="" required>
                                    </div>
                              </li>

                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="contact-email">Email: </label>
                                    <div class="textarea">
                                          <input type="email" name="contact-email" id="contact-email" value="" required>
                                    </div>
                              </li>

                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="contact-project">Üzenet: </label>
                                    <div class="textarea">
                                          <textarea type="email" name="contact-project" id="contact-project" rows="6" value="" required>
                                          </textarea>
                                    </div>
                              </li>

                              </ul>

                              <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp" data-wow-delay="2.0s">Küldés</button>

                              </form>
                        </div>
                  </div>
            </div>

            <div class="whitespace"></div>

            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">A design és a kialakítás forrása: "CodeGrid" csatorna</p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">Csatlakozz</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">Insta: @project</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">Kövess</p>

                                          <ul>
                                                <li id="fb" class="wow fadeInUp" data-wow-delay="0.4s">FB</li>
                                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s">Insta</li>
                                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s">Twitter</li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">Email</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">project@gmail.com</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <br><br><br><br>

      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript">

      $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
      });

      TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
      }, 0.1);

      new WOW().init();


      </script>
</body>
</html>
