<!-- Buatlah file yang berisi code form login 

Di form_login.php buat fungsi cekLogin($username, $password)

Di fungsi tersebut, cek username dan passwordnya

Jika username = admin dan password = mimin diarahkan ke halaman landing page admin (buat file admin.php)

masukan source ke github dan copy ke LMS -->

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Login Masuk</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>


				<div class="card ">
					<div class="card-title text-center">
						<h1>Login Page Admin</h1>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label for="username">Username : </label>
								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">

							</div>
							<div class="form-group">
								<label for="password">Password : </label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>
</html>

<?php

$list_user = [
    [
        'username' => 'ahmad',
        'password' => 'ahmad123'
    ],
    [
        'username' => 'admin',
        'password' => 'admin'
    ]
];

$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

$not_found = false;

foreach ($list_user as $key => $registered_user) {

    if ($registered_user['username'] == $user['username']) {

        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Berhasil login ke dalam sistem.';

            header("Location: parta.php");
            break;
        } else {
            $_SESSION['error'] = 'Password anda salah';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Password anda salah';
    }
}
