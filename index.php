<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html lang="hu">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="author" content="Project">

      <title>Portfólió Weblap | Mark_Szalai</title>

      <link rel="stylesheet" href="<?=PUBLIC_DIR.'style.css'?>">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
      <script src="t.min.js"></script>
      <link rel="stylesheet" href="<?=PUBLIC_DIR.'animate.css'?>">
      <script src="wow.min.js"></script>

</head>
<body>
      <div class="wrapper">
            <nav>
                  <span id="brand">
                        <a href="index.php">Project</a>
                  </span>

                  <ul id="menu">
                        <li><a href="index.php">Home<span>.</span></a></li>
						<?php if(!IsUserLoggedIn()) : ?>
						<li><a href="index.php?P=login">Login<span>.</span></a></li>
						<li><a href="index.php?P=register">Register<span>.</span></a></li>
						<?php else : ?>
							<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
								<li><a href="index.php?P=admin_panel">Admin panel<span>.</span></a></li>
							<?php endif; ?>
                        <li><a href="index.php?P=description">Description<span>.</span></a></li>
                        <li><a href="index.php?P=about">About Me<span>.</span></a></li>
                        <li><a href="index.php?P=contact">Contact<span>.</span></a></li>
						<li><a href="index.php?P=logout">Logout<span>.</span></a></li>
						<li></li>
						<li><u>Bejelentkezve:</u> <?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></li>
						<?php endif; ?>
                  </ul>
				  
                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <div id="resize">
                  <div class="close-btn">close</div>

                  <ul id="menu">
                        <li><a href="index.php">Home<span>.</span></a></li>
						<?php if(!IsUserLoggedIn()) : ?>
						<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
						<li><a href="index.php?P=admin_panel">Admin panel<span>.</span></a></li>
						<?php endif; ?>
						<li><a href="index.php?P=login">Login<span>.</span></a></li>
						<li><a href="index.php?P=register">Register<span>.</span></a></li>
						<?php else : ?>
                        <li><a href="index.php?P=description">Description<span>.</span></a></li>
                        <li><a href="index.php?P=about">About Me<span>.</span></a></li>
                        <li><a href="index.php?P=contact">Contact<span>.</span></a></li>
						<li><a href="index.php?P=logout">Logout<span>.</span></a></li>
						<?php endif; ?>
                  </ul>
            </div>

            <div class="hero">
                  <div class="header">
                        <h1 class="line anim-typewriter">Üdvözöllek a weboldalon!</h1>
						<?php require_once PROTECTED_DIR.'routing.php'; ?>
                  </div>
            </div>
			<?php if(!IsUserLoggedIn()) : ?>
			
			<?php else : ?>
			<div class="scroll-down"></div>
			
		   <div class="container-fluid">
                  <br><br><br>

                  <h3>Képek</h3>
				  <h6>A képek kattinthatóak</h6>

                  <div class="vertical"></div>
                  <br>

                  <div class="whitespace"></div>
                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-8"></div>

                        <div class="col-lg-4 project project1 wow fadeInUp" onclick="location.href='protected/images.php'"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-6 project project2 wow fadeInUp" onclick="location.href='protected/images.php'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-7"></div>

                        <div class="col-lg-4 project project3 wow fadeInUp" onclick="location.href='protected/images.php'"></div>

                        <div class="col-lg-1"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row">
                        <div class="col-lg-1"></div>

                        <div class="col-lg-5 project project4 wow fadeInUp" onclick="location.href='protected/images.php'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>
            </div>

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
	  <?php endif; ?>

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
