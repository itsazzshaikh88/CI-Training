<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<?php include 'navbar.php' ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mt-2">
				<table class="table table-sm table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>User ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Edit</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$i = 0;
						if ($all_users != null) :
							foreach ($all_users as $user) :
						?>
								<tr>
									<td><?= ++$i; ?></td>
									<td><?= $user['USER_ID'] ?></td>
									<td><?= $user['NAME'] ?></td>
									<td><?= $user['EMAIL'] ?></td>
									<td>
										<a href="<?= base_url('welcome/edit/' . $user['ID']) ?>">
											Edit </a>
										<a class="text-danger ms-2" href="<?= base_url('welcome/delete/' . $user['ID']) ?>">
											Delete</a>
									</td>
								</tr>
							<?php
							endforeach;
						else :
							?>
							<tr>
								<td colspan="5" class="text-center">No Data Available</td>
							</tr>

						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
