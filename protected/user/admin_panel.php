<?php 
	$query = "SELECT id, first_name, last_name, email, permission FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	
	if(array_key_exists('id', $_GET) && !empty($_GET['id'])) 
	{
		$query = "DELETE FROM users WHERE id = :id";
		$params = [':id' => $_GET['id']];
		require_once DATABASE_CONTROLLER;
		if(!executeDML($query, $params)) 
		{
			echo "Hiba törlés közben!";
		}
	}
	?>
	<?php if(count($users) <= 0) : ?>
		<h1>No users found in the database.</h1>
	<?php else : ?>
		
		<div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-10">
                              <form name="contact-form" id="contact-form" method="post" action="">
                              <ul>
							  <li class="wow fadeInUp" data-wow-delay="1.4s">
								<center><h1><label for="admin_panel">Admin Panel</label></h1></center>
							  </li>
							  </ul>
							  </form>
                        </div>
                  </div>
			</div>
		<table class="table table-striped" data-wow-delay="1.6s">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Keresztnév</th>
					<th scope="col">Vezetéknév</th>
					<th scope="col">Email</th>
					<th scope="col">Jogok</th>
					<th scope="col">Törlés</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['first_name'] ?></td>
						<td><?=$u['last_name'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><center><?=$u['permission'] ?></center></td>
						<td><center><a href="?P=admin_panel&id=<?=$u['id'];?>" onClick="return confirm('Biztos törölni akarod? ')">X</a></center></td
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		<div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-10">
                              <form name="contact-form" id="contact-form" method="post" action="">
                              <ul>
							  <li class="wow fadeInUp" data-wow-delay="1.4s">
								<center><h3><label for="add"><a href="?P=add">User Hozzáadás</a></label></h3></center>
							  </li>
							  </ul>
							  </form>
                        </div>
                  </div>
			</div>
	<?php endif; ?>

