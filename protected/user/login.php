<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['kuld'])) {
  $postData = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];

  if(empty($postData['email']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Hibás email formátum!";
  } else if(!UserLogin($postData['email'], $postData['password'])) {
    echo "Hibás email cím vagy jelszó!";
  }

  $postData['password'] = "";
}
?>

<div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-10">
                              <form name="contact-form" id="contact-form" method="post" action="">
                              <ul>
							  <li class="wow fadeInUp" data-wow-delay="1.4s">
								<center><h1><label for="login">Bejelentkezés</label></h1></center>
							  </li>
                              <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <label for="email">Email cím: </label>
                                    <div class="textarea">
                                          <input type="text" name="email" id="email" value="" required>
                                    </div>
                              </li>
                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="password">Jelszó: </label>
                                    <div class="textarea">
                                          <input type="password" name="password" id="password" value="" required>
                                    </div>
                              </li>
                              </ul>
                              <center><button type="submit" name="kuld" id="kuld" class="send wow fadeInUp" data-wow-delay="2.0s">Bejelentkez</button></center>
                              </form>
                        </div>
                  </div>
</div>