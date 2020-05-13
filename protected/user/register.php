<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'fname' => $_POST['first_name'],
		'lname' => $_POST['last_name'],
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'password2' => $_POST['password2']
	];

	if(empty($postData['fname']) || empty($postData['lname']) || empty($postData['email']) || empty($postData['password']) || empty($postData['password2'])) {
		echo "Hiányzó adat(ok)!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if ($postData['password'] != $postData['password2']) {
		echo "A jelszavak nem egyeznek!";
	} else if(strlen($postData['password']) < 6) {
		echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
	} else if(!UserRegister($postData['email'], $postData['password'], $postData['fname'], $postData['lname'])) {
		echo "Sikertelen regisztráció!";
	}

	$postData['password'] = $postData['password2'] = "";
}
?>

<div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-10">
                              <form name="contact-form" id="contact-form" method="post" action="">
                              <ul>
							  <li class="wow fadeInUp" data-wow-delay="1.2s">
								<center><h1><label for="login">Regisztráció</label></h1></center>
							  </li>
                              <li class="wow fadeInUp" data-wow-delay="1.2s">
                                    <label for="last_name">Vezetéknév: </label>
                                    <div class="textarea">
                                          <input type="text" name="last_name" id="last_name" value="<?=isset($postData) ? $postData['lname'] : "";?>" required>
                                    </div>
                              </li>	  
							 <li class="wow fadeInUp" data-wow-delay="1.2s">
                                    <label for="first_name">Keresztnév: </label>
                                    <div class="textarea">
                                          <input type="text" name="first_name" id="first_name" value="<?=isset($postData) ? $postData['fname'] : "";?>" required>
                                    </div>
                              </li>
							  <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <label for="email">Email: </label>
                                    <div class="textarea">
                                          <input type="text" name="email" id="email" value="<?=isset($postData) ? $postData['email'] : "";?>" required>
                                    </div>
                              </li>
                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="password">Jelszó: </label>
                                    <div class="textarea">
                                          <input type="password" name="password" id="password" value="" required>
                                    </div>
                              </li>
							  <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="password2">Jelszó újra: </label>
                                    <div class="textarea">
                                          <input type="password" name="password2" id="password2" value="" required>
                                    </div>
                              </li>
                              </ul>
                              <center><button type="submit" name="register" id="register" class="send wow fadeInUp" data-wow-delay="2.0s">Regisztrálás</button></center>
                              </form>
                        </div>
                  </div>
</div>