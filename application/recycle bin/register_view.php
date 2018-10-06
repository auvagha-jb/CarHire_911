<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" style="margin-bottom: 20px;">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-icon">
				<span class="fa fa-4x fa-car"></span>
			</div>
			<div class="info">
				<div id="registration">
					<h1>Register for online access</h1>
					<hr />

					<?php
					if (!empty($errors)) {
						echo "<h3>Please review errors below<hr /></h3>";
					}
					if (isset($errors['registered'])) {
						echo "<h4>" . $errors['registered'] . "</h4>";
					}
					?>

					<form id="register" method="post" action="<?php echo base_url(); ?>register">
						<div>
							<label for="customer_first_name"<?php echo (isset($errors['fname'])) ? " class='error'" : ""; ?>>First Name: </label>
							<input type="text" name="customer_first_name" id="customer_first_name" value="<?php echo (isset($_POST['fname'])) ? $_POST['fname'] : ''; ?>" />
						</div>

						<div>
							<label for="customer_last_name"<?php echo (isset($errors['lname'])) ? " class='error'" : ""; ?>>Last Name: </label>
							<input type="text" name="customer_last_name" id="customer_last_name" value="<?php echo (isset($_POST['lname'])) ? $_POST['lname'] : ''; ?>" />
						</div>

						<div>
							<label for="customer_email"<?php echo (isset($errors['customer_email'])) ? " class='error'" : ""; ?>>Email Address: </label>
							<input type="text" name="customer_email" id="customer_email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" />
						</div>

						<div>
							<label for="user_type"<?php echo (isset($errors['user_type'])) ? " class='error'" : ""; ?>>User Type: </label>
							<input type="text" name="user_type" id="user_type" value="<?php echo (isset($_POST['user_type'])) ? $_POST['user_type'] : ''; ?>" />
						</div>

						<?php
						if (isset($errors['password'])) {
							echo "<p>You must enter a password that is at least 5 characters in length and make sure that the passwords you entered match.</p>";
						}
						?>

						<div>
							<label for="password"<?php echo (isset($errors['password'])) ? " class='error'" : ""; ?>>Password: </label>
							<input type="password" name="password" id="password" />
						</div>

						<div>
							<label for="password_repeat"<?php echo (isset($errors['password'])) ? " class='error'" : ""; ?>>Repeat Password: </label>
							<input type="password" name="password_repeat" id="password_repeat" />
						</div>

						<div>
							<label for="register_submit"></label>
							<input type="submit" name="register_submit" id="register_submit" value="Register" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
