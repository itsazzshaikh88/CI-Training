<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card" style="background-color: #e7e7e7;">
				<div class="card-body">
					<form action="<?= base_url('template/add') ?>" method="POST">
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
							<button class="btn btn-success w-100"><?= $record == null ? 'Add User' : 'Update User'; ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
