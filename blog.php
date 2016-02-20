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
					<h3>Le Blog</h3>
				</div>
			</div>
		</div>

<?php
// On initialise la connexion à la BDD
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// On sélectionne les articles puis on boucle afin de les afficher
$articles = $bdd->query('SELECT * FROM blog ORDER BY DESC LIMIT 0, 10'); ?>

<?php foreach($articles as $article): ?>
<article>
    <h2><?php echo $article['titre'] ?></h2>
    <p><?php echo $article['contenu'] ?></p>
</article>
<?php endforeach; ?>

<?php
include 'php/javascript.php';
?>
</body>
</html>
