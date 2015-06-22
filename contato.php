<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
		// If there are no errors, send the email
		if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			} else {
				$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height, maximum-scale=1, user-scalable=no">
	<script src="components/loader.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    
	<link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/index.js"></script>
    <title>Infodigital GBV</title>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>    
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="navbar-left"><img src="images/Logo vetor 360.png" alt="Seu empreendimento no Google"></li>
<!--
				<li><a href="index.html"><span class="glyphicon glyphicon-home"></span></span> &nbsp; Home</a></li>
				<li><a href="duvidas.html"><span class="glyphicon glyphicon-question-sign"></span> &nbsp; Dúvidas Frequentes</a></li>
				<li><a href="relatos.html"><span class="glyphicon glyphicon-comment"></span></span> &nbsp; Relatos</a></li>
-->
				<li class="active"><a href="contato.php"><span class="glyphicon glyphicon-earphone"></span> &nbsp; Contato</a></li>
<!--
				<li class="navbar-right"><img src="images/TA-Badge-v1-BR-sm.png" alt="Agência de Confiança Google"></li>
-->
			</ul>
		</div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/banner01.jpg" alt="Sua empresa em 360° no Google Maps!">
			</div>

			<div class="item">
				<img src="images/banner02.jpg" alt="Todas as informações de seu empreendimento para acesso rápido">
			</div>

			<div class="item">
				<img src="images/banner03.jpg" alt="24 Horas por dia, no Google, acesso rápido em todos os dispositivos!!">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<div class="container">
		<div class="jumbotron">
			<h1>Cabeçalho</h1>      
			<p>Texto 1</p>      
			<a href="#" class="btn btn-info btn-lg">Botão</a>
		</div>

		<div class="row">
			<div class="col-md-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="col-md-3"> 
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-md-3"> 
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
			</div>
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Submenu 1-1</a></li>
							<li><a href="#">Submenu 1-2</a></li>
							<li><a href="#">Submenu 1-3</a></li>                        
						</ul>
					</li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				</ul>
			</div>
			<div class="clearfix visible-lg"></div>
		</div>
		
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Form Example</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
<!----------------------------------------------------------------------------------------------------------------->
	


	<form method="GET" action="mailto:newton.arruda@gmail.com" enctype="text/plain">
		<table>
			<tr>
				<td  id ="cabecalho" colspan="2">
					<img src="images/devices.png" alt="images/devices.png">
				</td>
			</tr>
			<tr>
				<td  id ="menu" colspan="2">
					<img src="images/menuEx.png" alt="images/menuEx.png">
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>Nome:</div>
				</td>
				<td style="text-align: left;">
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>Empresa:</div>
				</td>
				<td style="text-align: left;">
					<input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>E-mail:</div>
				</td>
				<td style="text-align: left;">
					<input type="email" name="name">
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>Telefone:</div>
				</td>
				<td style="text-align: left;">
					<input type="tel" name="name">
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>Motivo:</div>
				</td>
				<td style="text-align: left;">
					<select name="cars">
						<option value="duvida">Dúvida</option>
						<option value="orcamento">Orçamento</option>
						<option value="relato">Relato</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<div>Descrição:</div>
				</td>
				<td style="text-align: left;">
					<textarea name="message" rows="10" cols="30">
						The cat was playing in the garden.
					</textarea>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					<input type="submit" value="Enviar">
				</td>
				<td style="text-align: left;"><td>
			<tr>
				<td  id ="rodape" colspan="2">
					Textos do rodapé
					Textos do rodapé
					Textos do rodapé
					Textos do rodapé
				</td>
			</tr>
		</table>
	</form>
</body>
</html>