<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Loulier Guillaume - Freelance</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

    		<!-- BootStrap Core -->
    		<link href="css/bootstrap_Perso.css" rel="stylesheet">

    		<!-- Custom style -->
    		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    		<!-- Old Browser -->
    		<!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    </head>
<body>
<?php
include 'php/navbar.php';
?>

<!-- Contact -->
<div id="propos_hub">
	<div class="container">
		<div class="row">
			<h3>Me Contacter</h3>
		</div>
	</div>
</div>

<!-- Formulaire Contact -->
  <div class="container" id="contact">
			<div class="row">
					<h1 class="centered">Merci de votre visite</h1>
					<hr>
					<br>
					<br>
					<div class="col-lg-4">
					<h3>Me contacter</h3>
						<span class="fa fa-home"></span> Adresse -----<br/>
						<span class="fa fa-phone"></span> Téléphone -----<br/>
						<span class="fa fa-mobile"></span> +3300000000<br/>
						<span class="fa fa-envelope"></span><a href="#"> adresse@adresse.com</a><br/>
						<span class="fa fa-twitter"></span><a href="#"> @twitter</a><br/>
						<span class="fa fa-facebook"></span><a href="#"> Facebook</a><br/>
					</div>
					<div class="col-lg-4">
					<h3>Me contacter par email</h3>
						<p>Une question, une idée, des suggestions ? Contacter moi ici !</p>
						<p>
							<form class="form-horizontal" role="form" action="send_mail.php" method="post">
								<div class="form-group">
								<label for="inputEmail1" class="col-lg-4 control-label"></label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="inputEmail1" placeholder="Email">
								</div>
								</div>
								<div class="form-group">
									<label for="text1" class="col-lg-4 control-label"></label>
									<div class="col-lg-10">
									<input type="text" class="form-control" id="text1" placeholder="Nom">
									</div>
								</div>

								<div class="form-group">
									<label for="text" class="col-lg-4 control-label"></label>
									<div class="col-lg-10">
									<input type="text" class="form-control" id="text1" placeholder="Message">
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-10">
										<buton type="submit" class="btn btn-theme">Envoyer</buton>
									</div>
								</div>
							</form>
						</p>
					</div>

				<div class="col-lg-4">
						<h3>Pourquoi me contacter ?</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
			</div>
		</div>

<?php
include 'php/javascript.php';
?>
</body>
</html>
