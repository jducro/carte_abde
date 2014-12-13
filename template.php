<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/favicon.ico">

	<title>## CARTE DE VOEUX TITRE ##</title>

	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="carte.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 card_form">
				<form action="index.php" role="form" method="post">
					<input type="hidden" name="new_card" value="1"/>
					<div class="form-group">
						<label for="recipient">Destinataire</label>
						<input type="text" class="form-control" id="recipient" name="recipient" placeholder="Entrer le destinataire">
					</div>
					<div class="form-group">
						<label for="recipient">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Entrer l'adresse email">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea name="message" id="message" class="form-control"  cols="30" rows="5"></textarea>
					</div>
					<button class="btn btn-default bit btn-test">Tester</button>
					<button type="submit" class="btn btn-default bit">Envoyer</button>
				</form>
				<br />
				<?php if (!empty($link)): ?>
					<a href="<?php echo $link; ?>"><?php echo $link; ?></a>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 card_render" style="display: none">
				<img src="img/carte.jpg" id="card_background" alt="carte"/>
				<div class="card_text"><?php if(!empty($card_variables->message)) echo $card_variables->message ?></div>
				<canvas id="snow"></canvas>
			</div>
		</div>
	</div>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
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
