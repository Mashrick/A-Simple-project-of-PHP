






<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<!-- Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Away</title>

	<!-- Bootstrap CSS Only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Own Style Sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
	<body>


		<?php 

			if (isset($_POST['contact-button'])) {

				echo "Welcome to our Commiunity";

			}


		?>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<h1>Contact Form</h1>

						<h3>Fill Up This Form to contact Us</h3>

							<form action="" method="POST">
								
								<div class="form-group">

									<label>Username</label>							

									<input type="text" name="fullname" class="form-control" placeholder="Full Name" autocomplete="off" required>
							
								</div>


								<div class="form-group">

									<label>Email</label>
									
									<input type="email" name="emailadress" class="form-control" placeholder="example@gmail.com" autocomplete="off" required>
								
								</div>


								<div class="form-group">

									<label>Messege</label>

									
									<textarea name="messege" class="form-control" placeholder="Write massage here"></textarea>

									<br>
								
								</div>


								<div class="form-group">
									
									<button type="submit" class="btn btn-primary btn-lg" name="contact-button">Submit</button>
								
								</div>


							</form>

							
							
						
					</div>
				</div>
			</div>
		</section>
		


		
		<!--Bootstrap jquery -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>


		<!--Bootstrap JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

	</body>
</html>
