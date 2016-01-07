<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">

	<title>Meilleurs vœux 2016 - Ville de Rungis</title>

	<link rel="stylesheet" href="./css/jquery-ui.structure.min.css"/>
	<link rel="stylesheet" href="./css/jquery-ui.min.css"/>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/animated.min.css" rel="stylesheet">
	<link href="css/carte.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="display: none;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Project name</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container">

	<div class="content">
		<?php if (empty($card_variables)): ?>
			<?php if (!empty($link)): ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-success" role="alert">
							Votre message a bien été envoyé
						</div>
					</div>
				</div>
			<?php endif; ?>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 card_form">
				<form action="index.php" role="form" method="post">
					<input type="hidden" name="new_card" value="1"/>
					<div class="form-group">
						<label for="recipient">Destinataire</label>
						<input type="text" class="form-control" id="recipient" name="recipient" placeholder="Entrer le nom du destinataire" />
					</div>
					<div class="form-group">
						<label for="recipient">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Entrer l'adresse email du destinataire" required="required" />
					</div>
					<div class="form-group">
						<label for="sender">Mon Prénom et Nom</label>
						<input type="text" class="form-control" id="sender" name="sender" placeholder="Entrer votre prénom et votre Nom" />
					</div>
					<div class="form-group">
						<label for="sender_email">Mon Email</label>
						<input type="email" class="form-control" id="sender_email" name="sender_email" placeholder="Entrer votre adresse email" required="required" />
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" id="message" class="form-control"  cols="30" rows="5"></textarea>
					</div>
					<button class="btn btn-default bit btn-test">Visualiser</button>
					<button type="submit" class="btn btn-default bit">Envoyer</button>
				</form>
				<br />
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<div class="card_render" style="display: none">
					<img src="img/carte.gif" id="card_background" alt="carte"/>
					<div class="over_text line1" style="display: none"></div>
					<div class="over_text line2" style="display: none"></div>
					<div class="card_text"><?php if(!empty($card_variables->message)) echo $card_variables->message ?></div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/card.js"></script>
<?php if (!empty($card_variables)): ?>
	<script type="text/javascript">
		animate();
	</script>
<?php endif; ?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
