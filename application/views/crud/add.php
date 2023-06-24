<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=s, initial-scale=1.0">
	<title>Add User</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<?php include 'navbar.php' ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4 mt-5">
				<div class="card" style="background-color: #e7e7e7;">
					<div class="card-body">
						<form action="<?= base_url('crud/add') ?>" method="POST">
							<div class="form-group">
								<label for="username">Name</label>
								<input type="text" class="form-control" name="NAME" id="NAME" placeholder="Enter name of user" value="<?= $record == null ? '' : $record['NAME'] ?>">
								<input type="hidden" name="ID" id="ID" value="<?= $record == null ? '0' : $record['ID'] ?>">
							</div>
							<div class="form-group">
								<label for="username">Email</label>
								<input type="email" class="form-control" name="EMAIL" id="EMAIL" placeholder="Enter email address of user" value="<?= $record == null ? '' : $record['EMAIL'] ?>">
							</div>
							<div class="form-group">
								<label for="username">Mobile No</label>
								<input type="text" class="form-control" name="MOBILE_NO" id="MOBILE_NO" placeholder="Create Strong Password" value="<?= $record == null ? '' : $record['MOBILE_NO'] ?>">
							</div>
							<?php if ($record == null) : ?>
								<div class="form-group">
									<label for="username">Password</label>
									<input type="password" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="Create Strong Password">
								</div>
							<?php endif; ?>
							<div class="form-group mt-2">
								<button class="btn btn-success w-100"><?= $record == null ? 'Add User' : 'Update User' ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
