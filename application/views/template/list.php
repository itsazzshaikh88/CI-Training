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
						<th>Mobile</th>
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
								<td><?= $user['MOBILE_NO'] ?></td>
								<td>
									<a href="<?= base_url('template/add/' . $user['ID']) ?>">
										Edit </a>
									<a class="text-danger ms-2" href="<?= base_url('template/add/' . $user['ID'] . '/delete') ?>">
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
