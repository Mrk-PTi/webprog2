<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
	$postData = [
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'email' => $_POST['email'],
		'password' => $_POST['password'],
		'permission' => $_POST['permission']
	];

	if(empty($postData['first_name']) || empty($postData['last_name']) || empty($postData['email']) || empty($postData['password'])) {
		echo "Hiányzó adat(ok)!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if(strlen($postData['password']) < 6) {
		echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
	}
	else {
			$query = "INSERT INTO users (first_name, last_name, email, password, permission) VALUES (:first_name, :last_name, :email, :password, :permission)";
			$params = [
				':first_name' => $postData['first_name'],
				':last_name' => $postData['last_name'],
				':email' => $postData['email'],
				':password' => $postData['password'],
				':permission' => $postData['permission']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php');
		}
}
?>

<div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-10">
                              <form name="contact-form" id="contact-form" method="post" action="">
                              <ul>
							  <li class="wow fadeInUp" data-wow-delay="1.2s">
								<center><h1><label for="login">User Hozzáadás</label></h1></center>
							  </li>
                              <li class="wow fadeInUp" data-wow-delay="1.2s">
                                    <label for="last_name">Vezetéknév: </label>
                                    <div class="textarea">
                                          <input type="text" name="last_name" id="last_name" required>
                                    </div>
                              </li>	  
							 <li class="wow fadeInUp" data-wow-delay="1.2s">
                                    <label for="first_name">Keresztnév: </label>
                                    <div class="textarea">
                                          <input type="text" name="first_name" id="first_name" required>
                                    </div>
                              </li>
							  <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <label for="email">Email: </label>
                                    <div class="textarea">
                                          <input type="text" name="email" id="email" required>
                                    </div>
                              </li>
                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="password">Jelszó: </label>
                                    <div class="textarea">
                                          <input type="password" name="password" id="password" required>
                                    </div>
                              </li>
							  <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="permission">Joga: </label>
                                    <div class="textarea">
                                          <input type="number" name="permission" id="permission" min="0" max="2" value="0" required>
                                    </div>
                              </li>
                              </ul>
                              <center><button type="submit" name="add" id="add" class="send wow fadeInUp" data-wow-delay="2.0s">Hozzáadás</button></center>
                              </form>
                        </div>
                  </div>
</div>