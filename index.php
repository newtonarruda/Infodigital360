<?php
$subjectPrefix = '[Contato via Infodigital360]';
$emailTo = 'newton.arruda@gmail.com';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }
    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);
    if($name && $email && $emailIsValid && $subject && $message){
        $subject = "$subjectPrefix $subject";
        $body = "Nome: $name <br /> Email: $email <br /> Mensagem: $message";
        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height, maximum-scale=1, user-scalable=no">

    <title>Infodigital GBV</title>
	    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>
<body id="page-top">

	<nav class="navbar navbar-default navbar-fixed-top margin-bottom">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="navbar-left">
						<a class="page-scroll" href="#page-top"><img src="images/logo_infodigital360.png" alt="Seu empreendimento no Google" width="300" height="56"></a>

					</li>
					<li>
						<a class="page-scroll" href="#gbv"><span class="glyphicon glyphicon-home"></span> &nbsp; Google Business View</a>
					</li>
					<li>
						<a class="page-scroll" href="#trabalhos"><span class="glyphicon glyphicon-ok"></span> &nbsp; Trabalhos Realizados</a>
					</li>
					<li>
						<a class="page-scroll" href="#vantagens"><span class="glyphicon glyphicon-star"></span> &nbsp; Vantagens</a>
					</li>
<!--
					<li>
						<a class="page-scroll" href="#relatos"><span class="glyphicon glyphicon-comment"></span></span> &nbsp; Relatos</a>
					</li>
-->
					<li>
						<a class="page-scroll" href="#duvidas"><span class="glyphicon glyphicon-question-sign"></span> &nbsp; Dúvidas Frequentes</a>
					</li>
					<li>
						<a class="page-scroll" href="#contato"><span class="glyphicon glyphicon-user"></span> &nbsp; Contato</a>
					</li>
<!--                    <img class="navbar-right" src="images/TA-Badge-v1-BR-sm.png" alt="Agência de confiança Google" width="140" height="140"> -->
					<img class="navbar-right" src="images/TrustedProBadge_Portuguese_BR_Portrait_A_P.png" alt="Agência de confiança Google">
					<br>
<!--
					<li>
						<a class="page-scroll" href="listaTrabalhos.html"><span class="glyphicon glyphicon-ok"></span> &nbsp; Trabalhos Realizados</a>
					</li>
-->
			</div>
			<!-- /.navbar-collapse -->
		<!-- /.container-fluid -->
	</nav>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
<!--			<li data-target="#myCarousel" data-slide-to="9"></li> -->
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/banner01.jpg" alt="">
			</div>
<!--
			<div class="item">
				<img src="images/banner02.jpg" alt="">
			</div>
-->
			<div class="item">
				<img src="images/banner03.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner04.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner05.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner06.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner07.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner08.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner09.jpg" alt="">
			</div>
			<div class="item">
				<img src="images/banner10.jpg" alt="">
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
    <!-- Google Business View Section -->
    <section id="gbv">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sua empresa em 360° no Google Maps</h2>
                    <h3 class="section-subheading text-muted">
						O Google Maps Business View é um tour virtual interativo de seu empreendimento, em 360 graus, de alta qualidade, otimizado pela tecnologia Street View. 
						Mostrando sua empresa, seus produtos e serviços, aumenta consideravelmente as facilidades de busca e exposição de seu negócio.
					</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
						<img src="images/entre_contato.jpg" class="img-rounded" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">1º Passo</h4>
                    <p class="text-muted">Entre em contato com a nossa equipe de vendas.</p>
					<p class="text-muted">(11) 2061-7549</p>
					<p class="text-muted">(11) 99636-3132</p>
					<p class="text-muted">E-mail: <a class="page-scroll" href="#contato">vendas@infodigital.com.br</a></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="images/agende_sessao.jpg" class="img-rounded" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">2º Passo</h4>
                    <p class="text-muted">Agende uma sessão de fotos quando for mais conveniente para sua empresa.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="images/nossa_equipe_edit.jpg" class="img-rounded" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">3º Passo</h4>
                    <p class="text-muted">Relaxe ! Nossa equipe vai processar suas fotos do Business View e exibí-las no Google.</p>
                </div>
            </div>
<!--
			<div class="row">
                <div class="col-lg-12 text-center">			
					<a class="page-scroll" href="listaTrabalhos.html"><h2 class="section-heading">Trabalhos Realizados</h2></a>
				</div>
			</div>
-->
        </div>
    </section>

    <!-- Trabalhos Section -->
    <section id="trabalhos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Trabalhos Realizados</h2>
                    <h3 class="section-subheading text-muted"><b>Veja alguns de nossos trabalhos</b> </h3>
                </div>
            </div>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseAcademia">Academias</a>
						</h4>
					</div>
					<div id="collapseAcademia" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Youngers/@-23.5786791,-46.6294229,3a,75y,264h,90t/data=!3m8!1e1!3m6!1sSrQI4bp5CmcAAAQun2T4WA!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DSrQI4bp5CmcAAAQun2T4WA%26w%3D124%26h%3D75%26yaw%3D264%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.578679,-46.629423!7i13312!8i6656!4m5!1m2!2m1!1sdiamond+gym+aclimacao!3m1!1s0x0000000000000000:0x45c907ead7d1ba18!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/diamond_gyn.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Academia Diamond GYN</h4>
										<p class="text-muted"></p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseBar">Bares</a>
						</h4>
					</div>
					<div id="collapseBar" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Viva+M%C3%A9xico/@-23.5576573,-46.6902457,3a,75y,74.47h,90t/data=!3m7!1e1!3m5!1sDhfIK9nuFZ8AAAQrALnNRg!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x4ba15579981ef198!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/viva_mexico.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Viva México</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Genial+Bar/@-23.5554032,-46.6890887,3a,75y,107.35h,90t/data=!3m7!1e1!3m5!1slfHNAboFBqgAAAQuhbL_eA!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xb6a9983851169e6e!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/genial_bar.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Genial Bar</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Filial/@-23.55718,-46.6892304,3a,75y,80.97h,90t/data=!3m7!1e1!3m5!1sJTaLtkH0oIUAAAQukDQvIw!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xbe313d85e5596aa8!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/filial_bar.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Filial Bar</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Gen%C3%A9sio+Pasta+e+Chopp/@-23.5572519,-46.689409,3a,75y,236.15h,90t/data=!3m7!1e1!3m5!1slMcHnoBuXe4AAAQrAE95Zg!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xeb7ebd811fdba8b3!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/genesio_bar.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Genésio Bar</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Presley+Pub/@-23.5581964,-46.6911374,3a,75y,232h,90t/data=!3m8!1e1!3m6!1sQrB2Ssg_4vgAAAQo8T3K6Q!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DQrB2Ssg_4vgAAAQo8T3K6Q%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D232.53516%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce57a2cb2c5e61:0x1f8eb4b272cd63df!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/presley_pub.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Presley Pub</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Bar+Nossa+Senhora/@-23.5920329,-46.7183851,3a,75y,242h,90t/data=!3m8!1e1!3m6!1spUo_yRoesIwAAAQo8YTg2g!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DpUo_yRoesIwAAAQo8YTg2g%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D242.41771%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce56e610c2e6ed:0x7d6823213d75669c!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/bar_nossa_senhora.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Bar Nossa Senhora</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseResort">Resort</a>
						</h4>
					</div>
					<div id="collapseResort" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Hotel+Fazenda+7+Belo/@-22.565014,-46.538674,3a,75y,173.12h,78t/data=!3m8!1e1!3m6!1s3ZAx_a1biPgAAAQ0HHpEcA!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3D3ZAx_a1biPgAAAQ0HHpEcA%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D129%26h%3D106%26yaw%3D181.12579%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94c9159b71cf8bc9:0x46bb94178160c2f4!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/7_belo.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Hotel Fazenda 7 Belo</h4>
										<p class="text-muted"></p>
									</div>
								</div>
<!--
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4></h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4></h4>
										<p class="text-muted"></p>
									</div>
								</div>
-->
							</div>
<!--
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4></h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4></h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4></h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
-->
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseLanchonete">Lanchonetes</a>
						</h4>
					</div>
					<div id="collapseLanchonete" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Hooters/@-23.5797023,-46.5945851,3a,75y,238.9h,90t/data=!3m7!1e1!3m5!1s7E-e0b_cDEcAAAQq2wdlmQ!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x789ecbb02033bbf9!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/hooters_mooca.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Hooters - Shooping Mooca</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/hooters_vila_olimpia.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Hooters - Vila Olímpia</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Hooters+Paulista+Lanchonete/@-23.5667552,-46.6516222,3a,75y,287h,90t/data=!3m8!1e1!3m6!1sFd1Q-ySxC0gAAAQfDnyTCQ!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3DFd1Q-ySxC0gAAAQfDnyTCQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D287.3085%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce59c76537b94f:0x645684ad440657ac!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/hooters_paulista_lanchonete.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Hooters Paulista Lanchonete</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Black+Dog/@-23.5666753,-46.6518499,3a,75y,339.42h,83.21t/data=!3m8!1e1!3m6!1seq3sPKF6vbQAAAQ0Bg6sSw!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3Deq3sPKF6vbQAAAQ0Bg6sSw%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D273.75543%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce59c765bc8e59:0x4132f9015528673e!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/black_dog_paulista.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>BalckDog Paulista</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Jaber+-+Para%C3%ADso/@-23.5779543,-46.6410938,3a,75y,265.97h,90t/data=!3m7!1e1!3m5!1shlepfaaCocEAAAQq3Rrang!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xb9adc8f35a461842!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/jaber_paraiso.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Jaber - Paraiso</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Jaber+Bar+e+Restaurante/@-23.5875057,-46.6446493,3a,75y,158.89h,90t/data=!3m7!1e1!3m5!1sFXaBQnkodhEAAAQq3LDeHQ!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xa44ecd429ce1612d!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/jaber_vila_mariana.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Jaber - Vila Mariana</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Jaber+-+Pinheiros/@-23.5638417,-46.6875176,3a,75y,232h,90t/data=!3m8!1e1!3m6!1sHTOBSMx2uWwAAAQuq1Nakw!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DHTOBSMx2uWwAAAQuq1Nakw%26w%3D124%26h%3D75%26yaw%3D232%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.563842,-46.687518!7i13312!8i6656!4m2!3m1!1s0x94ce579efe099c59:0xcdef59cd2faf918f!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/jaber_pinheiros.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Jaber - Pinheiros</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Jaber/@-23.6214367,-46.6889063,3a,75y,8h,90t/data=!3m8!1e1!3m6!1s0PexolLu9MoAAAQfDolWZw!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3D0PexolLu9MoAAAQfDolWZw%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D8.744236%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce50bf73c28d8b:0xe67c47e225194a1c!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/jaber_morumbi.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Jaber - Morumbi</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Jt+Burger/@-23.5869495,-46.6436245,3a,75y,184.15h,90t/data=!3m7!1e1!3m5!1sUZQ4ICnAl7UAAAQq3tkE3A!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x830669468aa03bfd!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/jt_burger.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>JT Burger</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseLoja">Lojas</a>
						</h4>
					</div>
					<div id="collapseLoja" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/PONTO+DE+CONTATO+Tennis+Shop/@-23.4915655,-46.8418105,3a,75y,175h,90t/data=!3m8!1e1!3m6!1s_NamBD0M4MEAAAQfDngNBg!2e0!3e2!6s%2F%2Fgeo1.ggpht.com%2Fcbk%3Fpanoid%3D_NamBD0M4MEAAAQfDngNBg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D175.76143%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94cf0217eb9786eb:0x64712370b67532c0!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/ponto_de_contato.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Ponto de Contato - Tennis Shop</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Fatto+Criativo/@-23.5652323,-46.6851956,3a,75y,323h,90t/data=!3m8!1e1!3m6!1sSA61ppLZ7sIAAAQuotRTJw!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DSA61ppLZ7sIAAAQuotRTJw%26w%3D124%26h%3D75%26yaw%3D323%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.565232,-46.685196!7i13312!8i6656!4m2!3m1!1s0x94ce579e07c0efff:0x374bed397094eb03!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/fatto_criativo.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Fatto Criativo</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5709618,-46.6226141,3a,75y,304.13h,76.64t/data=!3m7!1e1!3m5!1sub47n2r5Ny4AAAQ0MXbDtw!2e0!3e2!7i13312!8i6656!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/logo_castelo_magico.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Castelo Mágico</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Tatuap%C3%A9+-+Radial+Leste+(Loja+01)/@-23.5392112,-46.5685883,3a,75y,95h,90t/data=!3m8!1e1!3m6!1s1oBQsgmLWqwAAAQo8WmADQ!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3D1oBQsgmLWqwAAAQo8WmADQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D95.763779%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce5eeeae357a2d:0xde3dde1c3c19fb83!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_1.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 1</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5827156,-46.6680773,3a,75y,331.48h,81.76t/data=!3m7!1e1!3m5!1sz-HMDdAsDPoAAAQn7zIxSg!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_3.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 3</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Bel%C3%A9m+(Loja+04)/@-23.5394382,-46.5966338,3a,75y,227.06h,77.1t/data=!3m8!1e1!3m6!1sFraZ2vVeIToAAAQn7zGZUg!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DFraZ2vVeIToAAAQn7zGZUg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D246.40674%26pitch%3D0!7i13312!8i6656!4m6!1m3!3m2!1s0x0000000000000000:0xde3dde1c3c19fb83!2sExclusiva+Sex+Shop+-+Tatuap%C3%A9+-+Radial+Leste+(Loja+01)!3m1!1s0x0000000000000000:0x8979bbbf49461901!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_4.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 4</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Globalmar+Aquecedores+e+Acess%C3%B3rios+para+Piscinas/@-23.5106136,-46.6246905,3a,75y,77.09h,76.95t/data=!3m8!1e1!3m6!1sw25YxQVyajIAAAQ0Ac7RPg!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fpanoid%3Dw25YxQVyajIAAAQ0Ac7RPg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D129%26h%3D106%26yaw%3D107.43478%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce58839c2ec071:0xe62d1b67858ef49f!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/logo_globalmar.PNG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Globalmar</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5018488,-46.5903566,3a,75y,71.92h,81.07t/data=!3m7!1e1!3m5!1smxvAU-5p8xgAAAQ0HEPmiA!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/sotomano.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Sotomano</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
<!--
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Penha+(Loja+05)/@-23.5244004,-46.5493953,3a,75y,327h,90t/data=!3m8!1e1!3m6!1sTWi4H5OtdSkAAAQn7zJ3HQ!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fpanoid%3DTWi4H5OtdSkAAAQn7zJ3HQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D327.92441%26pitch%3D0!7i13312!8i6656!4m6!1m3!3m2!1s0x0000000000000000:0xde3dde1c3c19fb83!2sExclusiva+Sex+Shop+-+Tatuap%C3%A9+-+Radial+Leste+(Loja+01)!3m1!1s0x0000000000000000:0x584d7cb323d0650a!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_5.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 5</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.6225792,-46.6519757,3a,75y,158.84h,73.6t/data=!3m7!1e1!3m5!1sqdEjGvUTMPQAAAQn7zMgBA!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_6.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 6</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Canind%C3%A9+(Loja+07)/@-23.5244126,-46.6027395,3a,75y,207h,90t/data=!3m8!1e1!3m6!1sX8z-k2aP7HQAAAQo8WmA-w!2e0!3e2!6s%2F%2Fgeo1.ggpht.com%2Fcbk%3Fpanoid%3DX8z-k2aP7HQAAAQo8WmA-w%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D207.3138%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x0000000000000000:0x99d6565fd9eedb00!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_7.JPG" class="img-responsive img-rounded" alt="" height="300">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 7</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Santana+(Loja+08)/@-23.5020152,-46.6173671,3a,75y,351h,90t/data=!3m8!1e1!3m6!1sVsq_mTgl6qMAAAQfDnpNNg!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DVsq_mTgl6qMAAAQfDnpNNg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D351.59848%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExclusiva+Sex+Shop!3m1!1s0x0000000000000000:0xeaf051f38d9f68c8!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_8.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 8</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Vila+Ol%C3%ADmpia+-+(Loja+09)/@-23.6088315,-46.6759355,3a,75y,22h,90t/data=!3m8!1e1!3m6!1sf2pPVgix4O8AAAQo8YmaeA!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3Df2pPVgix4O8AAAQo8YmaeA%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D22.18461%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x94ce50af4eb5f351:0x42b307c1de51382c!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_9.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 9</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Santo+Amaro+(Loja+10)/@-23.6336961,-46.6935885,3a,75y,301h,90t/data=!3m8!1e1!3m6!1s8hkV8h4fylkAAAQo8WrPtQ!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3D8hkV8h4fylkAAAQo8WrPtQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D301.67032%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x0000000000000000:0x7b08e054eb49ca94!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_10.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 10</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Imigrantes+(Loja+11)/@-23.6148586,-46.6267528,3a,75y,51.96h,86.6t/data=!3m8!1e1!3m6!1s6kAIPZKxhj4AAAQo8WgcPw!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3D6kAIPZKxhj4AAAQo8WgcPw%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D57.109909%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x94ce5bae81a6ece1:0xddd349735933dd6e!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_11.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 11</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+S%C3%A3o+Caetano+do+Sul+(Loja+12)/@-23.6156349,-46.5731318,3a,75y,318h,90t/data=!3m8!1e1!3m6!1sUX07TE0d9s8AAAQo8YhPQQ!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DUX07TE0d9s8AAAQo8YhPQQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D318.65869%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x0000000000000000:0xbd2879876cb6224f!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_12.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 12</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+%C3%81gua+Branca+(Loja+13)/@-23.5282554,-46.6748297,3a,75y,207h,90t/data=!3m8!1e1!3m6!1snPoC3TDL2GYAAAQo8WpIwg!2e0!3e2!6s%2F%2Fgeo1.ggpht.com%2Fcbk%3Fpanoid%3DnPoC3TDL2GYAAAQo8WpIwg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D207.90216%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x0000000000000000:0x7592e24c78cdcc21!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_13.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 13</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Exclusiva+Sex+Shop+-+Sumarezinho+(Loja+14)/@-23.5454035,-46.6926581,3a,75y,183h,90t/data=!3m8!1e1!3m6!1sqbQvl1E_ypcAAAQo8WhawA!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3DqbQvl1E_ypcAAAQo8WhawA%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D183.62224%26pitch%3D0!7i13312!8i6656!4m5!1m2!2m1!1sExcluiva+Sex+Shop!3m1!1s0x0000000000000000:0xf9e59eaf1ba0454d!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/exclusiva_sex_14.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Exclusiva Sex Shop - Loja 14</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
-->
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapsePadaria">Panificadoras</a>
						</h4>
					</div>
					<div id="collapsePadaria" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Panificadora+Karol/@-23.5770742,-46.6223295,3a,75y,27h,90t/data=!3m8!1e1!3m6!1sjA-_65cP8H4AAAQurG1n8Q!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DjA-_65cP8H4AAAQurG1n8Q%26w%3D124%26h%3D75%26yaw%3D27%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.577074,-46.622329!7i13312!8i6656!4m2!3m1!1s0x94ce597b5268c851:0xc949b63187f71a5f!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/karol_basilio.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Panificadora Karol - Basilio</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Panificadora+e+Confeitaria+Karol+do+Bosque/@-23.6116406,-46.6320101,3a,75y,347h,90t/data=!3m8!1e1!3m6!1s5x1id1KOk_oAAAQfDou6Qw!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3D5x1id1KOk_oAAAQfDou6Qw%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D347.56119%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce5a4d2b1da983:0x8817e1216ef0da30!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/karol_bosque.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Panificadora Karol do Bosque</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5728121,-46.6226321,3a,75y,136.43h,70.49t/data=!3m7!1e1!3m5!1sDEGB4VGM0H0AAAQ0Ac7UCw!2e0!3e2!7i13312!8i6656!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/la_fornatta.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Panificadora La Fornatta</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseAlaCarte">Restaurantes À la carte</a>
						</h4>
					</div>
					<div id="collapseAlaCarte" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Lellis+Trattoria+Campinas/@-23.5734479,-46.6604208,3a,75y,165.71h,90t/data=!3m7!1e1!3m5!1sTkSr6yEgM3cAAAQq3u3tnw!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x1eb5a2281d847614!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/lellis_trattoria_campinas.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Lellis Trattoria Campinas</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5667026,-46.6526771,3a,75y,285.76h,82.32t/data=!3m7!1e1!3m5!1strzWRxwlH8kAAAQ0CO4Jzg!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/america_al_santos.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante América Al. Santos</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Villa+Roma+Pizzaria/@-23.5459189,-46.5714312,3a,75y,76h,90t/data=!3m8!1e1!3m6!1s4GIrerLVnjIAAAQzT6Qlhg!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3D4GIrerLVnjIAAAQzT6Qlhg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D129%26h%3D106%26yaw%3D76.433769%26pitch%3D0!7i13312!8i6656!4m6!1m3!3m2!1s0x94ce5e94d55fc4bb:0xa4fa93d16ac33280!2sVilla+Roma+Pizzaria!3m1!1s0x94ce5e94d55fc4bb:0xa4fa93d16ac33280!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/villa_roma_pizzaria.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Villa Roma Pizzaria</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Veridiana/@-23.5344305,-46.6642204,3a,75y,65.65h,75.43t/data=!3m8!1e1!3m6!1sq6B_3awZ-IwAAAQo8YkY_g!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fpanoid%3Dq6B_3awZ-IwAAAQo8YkY_g%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D75.78746%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x0:0x9c22666887bf19d!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/veridiana_perdizes.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante Veridiana Perdizes</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5690543,-46.6570955,3a,75y,239.73h,83.67t/data=!3m7!1e1!3m5!1s9sxME5TS83oAAAQpdmYvVQ!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/veridiana_jardim_paulista.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante Veridiana Jardins</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5452041,-46.6519488,3a,75y,98.31h,77.21t/data=!3m7!1e1!3m5!1sdxMPD1wZAyQAAAQn703jLA!2e0!3e2!7i13312!8i6656?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/veridiana_higienopolis.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante Veridiana Higienópolis</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Galinheiro+Grill/@-23.5598932,-46.6890883,3a,75y,145h,90t/data=!3m8!1e1!3m6!1s_zKV2xQ1dLMAAAQul1TBOw!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3D_zKV2xQ1dLMAAAQul1TBOw%26w%3D124%26h%3D75%26yaw%3D145%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.559893,-46.689088!7i13312!8i6656!4m2!3m1!1s0x94ce5798633a4c27:0x89efd9d89216c7a!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/galinheiro_grill.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Galinheiro Grill</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Twelve+Bistro/@-23.5594094,-46.6917461,3a,75y,245h,90t/data=!3m8!1e1!3m6!1ssMjETYti0yIAAAQuoQAq8g!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DsMjETYti0yIAAAQuoQAq8g%26w%3D124%26h%3D75%26yaw%3D245%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.559409,-46.691746!7i13312!8i6656!4m2!3m1!1s0x94ce57a2dc6238af:0x7a0c2e7efb5db037!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/twelve_bistro.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Twelve Bistro</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Pasta+Nostra+Ristorante/@-23.5877973,-46.6454184,3a,75y,257.94h,73.43t/data=!3m7!1e1!3m5!1s5GwigF16TOsAAAQo8ZKZiQ!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x5e417a8ccbced994!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/pasta_nostra.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Pasta Nostra Ristorante</h4>
										<p class="text-muted"></p>
									</div>
								</div>
				            </div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Choppi/@-23.3968272,-45.8845838,3a,75y,295.41h,90t/data=!3m7!1e1!3m5!1szlXRGj5qeMQAAAQo8art9g!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0xa7f15d327ed7f7b0!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/choppi.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Choppi</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Restaurante+Deck/@-23.3831812,-45.8926589,3a,75y,192.26h,83.34t/data=!3m8!1e1!3m6!1sNm7RsiFVb28AAAQo8aj_wQ!2e0!3e2!6s%2F%2Fgeo3.ggpht.com%2Fcbk%3Fpanoid%3DNm7RsiFVb28AAAQo8aj_wQ%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D129%26h%3D106%26yaw%3D222.76445%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x0000000000000000:0xd145c5d40173bf3d!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/deck.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante Deck</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Trattoria+do+Piero/@-23.5743897,-46.6587004,3a,75y,231h,90t/data=!3m8!1e1!3m6!1sF1geMAsbDywAAAQuoeHn8g!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DF1geMAsbDywAAAQuoeHn8g%26w%3D124%26h%3D75%26yaw%3D231%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.574390,-46.658700!7i10998!8i5499!4m2!3m1!1s0x94ce59c2f4d4439d:0xa92fa1bb20d0f2dc!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/trattoria_piero.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Trattoria do Piero</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Cal%C3%A0+del+Grau+-+Cocina+de+espa%C3%B1a/@-23.5872291,-46.6446262,3a,75y,333.82h,90t/data=!3m7!1e1!3m5!1sm4EbRcLX6uYAAAQfr9IjlA!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x154e3dc5b55c3687!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/cala_del_grau.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Calà del Grau</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSelfService">Restaurantes Self-Service</a>
						</h4>
					</div>
					<div id="collapseSelfService" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/A+Lajota/@-23.6039646,-46.6373566,3a,75y,357.83h,90t/data=!3m7!1e1!3m5!1sDG9vwVNwvzkAAAQukAMF-w!2e0!3e2!7i9000!8i4500!4m2!3m1!1s0x0:0x481d465bafa89c2d!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/a_lajota.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>A Lajota</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Alternativa+Casa+do+Natural/@-23.5592898,-46.6890332,3a,75y,56.84h,90t/data=!3m7!1e1!3m5!1sBioIGso2angAAAQfr8sNtw!2e0!3e2!7i13312!8i6656!4m2!3m1!1s0x0:0x89d740bcf9ad625c!6m1!1e1" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/alternativa_casa_natural.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Alternativa Casa do Natural</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.582383,-46.6783396,3a,75y,40h,90t/data=!3m7!1e1!3m5!1sCQrL4JyCWt0AAAQfDnqsRA!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/cachoeira_natural.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Restaurante Cahoeira Natural</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSalaoBeleza">Salão de Beleza</a>
						</h4>
					</div>
					<div id="collapseSalaoBeleza" class="panel-collapse collapse">
						<div class="panel-body">
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/M+%26+M+Hair+%26+Beauty/@-23.5649833,-46.6850931,3a,75y,64h,90t/data=!3m8!1e1!3m6!1scRle65fldq4AAAQutWytxA!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DcRle65fldq4AAAQutWytxA%26w%3D124%26h%3D75%26yaw%3D64%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.564983,-46.685093!7i13312!8i6656!4m2!3m1!1s0x94ce579e08148487:0xdc05c4c9eab566cd!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/mm_hair_beauty.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>M&M Hair Beauty</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Cesar+Martins+Cabelo+e+Est%C3%A9tica/@-23.5770672,-46.6235869,3a,75y,85.84h,8.21t/data=!3m8!1e1!3m6!1sU2nGjR0f1dsAAAQutfHTTA!2e0!3e2!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3DU2nGjR0f1dsAAAQutfHTTA%26w%3D124%26h%3D75%26yaw%3D94%26pitch%3D0%26thumbfov%3D103%26ll%3D-23.577067,-46.623587!7i13312!8i6656!4m5!1m2!2m1!1scesar+martins!3m1!1s0x94ce597b68e8130d:0xcb3edf802536de89!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/cesar_martins.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Cesar Martins Cabeleireiros</h4>
										<p class="text-muted"></p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/place/Sal%C3%A3o+Masuaki/@-23.5832906,-46.6785354,3a,75y,102h,90t/data=!3m8!1e1!3m6!1sOjTwZ_IzuF4AAAQurRMmRg!2e0!3e2!6s%2F%2Fgeo1.ggpht.com%2Fcbk%3Fpanoid%3DOjTwZ_IzuF4AAAQurRMmRg%26output%3Dthumbnail%26cb_client%3Dsearch.TACTILE.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D102.38255%26pitch%3D0!7i13312!8i6656!4m2!3m1!1s0x94ce575d7012ce4b:0x6ee64e7686e16bb3!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/salao_masuaki.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Salão Masuaki</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
				            <div class="row">
								<div class="col-md-4 col-sm-6 trabalhos-item">
									<a href="https://www.google.com.br/maps/@-23.5719845,-46.6228675,3a,75y,257.46h,63.8t/data=!3m7!1e1!3m5!1sMxOjd92H-uEAAAQzzp5C_A!2e0!3e2!7i13312!8i6656!6m1!1e1?hl=pt-BR" class="trabalhos-link" target="_blank">
										<div class="trabalhos-hover">
											<div class="trabalhos-hover-content">
												<i class="fa fa-plus fa-3x"></i>
											</div>
										</div>
										<img src="images/trabalhos/terapia_funcional.JPG" class="img-responsive img-rounded" alt="">
									</a>
									<div class="trabalhos-caption">
										<h4>Espaço Terapias Funcional</h4>
										<p class="text-muted"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <!-- Vantagens Section -->
    <section id="vantagens">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vantagens para sua empresa</h2>
					<div class="text-left bg-light-gray">
							<li>Estar bem posicionado e aparecer com as suas principais informações na maior ferramenta de divulgação web do mundo, o Google.</li>
							<li>Certeza de estar nos principais serviços do Google (Google Maps, Google Pesquisa e Google +).</li>
							<li>Aumentar o número de visitas diárias à sua página.</li>
							<li>Aumentar o número de clientes e o consequente sucesso de seu empreendimento.</li>
							<li>Uma vitrine virtual de seus produtos e serviços 24 horas por dia.</li>
							<li>Compartilhe seu tour virtual no facebook.</li>
							<li>Baixo investimento ! Pagamento único, sem taxas ou manutenções mensais.</li>
							<li>Seu Business View ficará no servidor do Google.</li>
							<li>Incorpore o tour virtual no site de sua empresa, sem custos adicionais.</li>
							<li>Compatível com todas as mídias existentes: tablets, computadores, smartphones e notebooks.</li>
							<li>Possibilidade de inclusão no Google, de fotos profissionais de seu local e produtos.</li>
					</div>
                </div>
            </div>
			<br>
            <div class="row">
                <div class="col-md-4 col-sm-6 vantagens-item">
                    <a href="#vantagensModal1" class="vantagens-link" data-toggle="modal">
                        <div class="vantagens-hover">
                            <div class="vantagens-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/vantagens/img01.png" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="vantagens-caption">
                        <h4>Aumente o engajamento on-line com sua empresa</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 vantagens-item">
                    <a href="#vantagensModal2" class="vantagens-link" data-toggle="modal">
                        <div class="vantagens-hover">
                            <div class="vantagens-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/vantagens/img02.png" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="vantagens-caption">
                        <h4>Convide os clientes a entrar no seu estabelecimento e ver o ambiente e a decoração com a navegação familiar do Street View</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 vantagens-item">
                    <a href="#vantagensModal3" class="vantagens-link" data-toggle="modal">
                        <div class="vantagens-hover">
                            <div class="vantagens-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/vantagens/img03.png" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="vantagens-caption">
                        <h4>Adicione fotos de alta qualidade do seu local em todo o Google</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
	</section>

    <!-- Relatos Section -->
<!--
    <section id="relatos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Relatos</h2>
                    <h3 class="section-subheading text-muted">Texto 01</h3>
                </div>
            </div>
			<div align="center" class="embed-responsive embed-responsive-16by9">
				<video width="320" height="240" controls>
					<source src="videos/Testimonial Video V7_2014.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>		
        </div>
    </section>
-->

    <!-- Videos Section -->
    <section id="videos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Videos</h2>
                    <h3 class="section-subheading text-muted">Veja alguns videos mostrando o Google Business View e como voce pode aumentar a visibilidade de seu empreendimento</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 videos-item">
                    <a href="#videosModal1" class="videos-link" data-toggle="modal">
                        <div class="videos-hover">
                            <div class="videos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="videos/video01_thumb.jpg" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="videos-caption">
                        <h4>Veja a completa integração entre Google Maps e Google Business View</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 videos-item">
                    <a href="#videosModal2" class="videos-link" data-toggle="modal">
                        <div class="videos-hover">
                            <div class="videos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="videos/video02_thumb.jpg" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="videos-caption">
                        <h4>Depoimentos e relatos  sobre o Google Busines View no mundo</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 videos-item">
                    <a href="#videosModal3" class="videos-link" data-toggle="modal">
                        <div class="videos-hover">
                            <div class="videos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="videos/video03_thumb.jpg" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="videos-caption">
                        <h4>Google Business View - Passeando pelo restaurante</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 videos-item">
                    <a href="#videosModal4" class="videos-link" data-toggle="modal">
                        <div class="videos-hover">
                            <div class="videos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="videos/video04_thumb.jpg" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="videos-caption">
                        <h4>Google Business View - Passeando pela loja de calçados</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 videos-item">
                    <a href="#videosModal5" class="videos-link" data-toggle="modal">
                        <div class="videos-hover">
                            <div class="videos-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="videos/video05_thumb.jpg" class="img-responsive img-rounded" alt="">
                    </a>
                    <div class="videos-caption">
                        <h4>Google Business View - Passeando pelo salão de beleza</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dúvidas Section -->
    <section id="duvidas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Dúvidas Frequentes</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Onde as pessoas visualizam o Business View?</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
							O Business View aparece nos resultados da Pesquisa do Google, no Google Maps e no Google+, em computadores, smartphones ou tablets. 
							<br>
							Você também pode incorporar o Business View no seu website e acompanhar o engajamento com o Google Analytics e Google Maps Business View.  
						</div>
						<img src="images/vantagens/img01.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">O Business View pode ser incorporado no meu website?</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							Sim, o Business View pode ser incorporado no seu website e acompanhar o engajamento com o Google Analytics
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Quanto tempo leva o processo do Business View?</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							As sessões de fotos do Business View dependem da programação do seu
							estabelecimento e são projetadas para causar o mínimo impacto das suas
							operações. Elas são concluídas geralmente em algumas horas. 
							<br><br>
							Depois da sessão, é	só aguardar. Nossa equipe fará o upload das imagens em alta resolução no Google.
							<br><br>
							Todas as suas fotos do Business View serão exibidas no Google em apenas alguns dias.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Por que incorporar o Business View?</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
							Aumentar o engajamento on-line com sua empresa. 
							<br>
							Convide os clientes a entrar no seu estabelecimento e ver o ambiente e a decoração com a navegação familiar do Street View.
							<br>
							Adicione fotografias de alta qualidade de seu local em todo o Google. 
						</div>
					</div>
				</div>
<!--
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Como o programa Business View funciona?</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="panel-body">
							O Google treina e certifica fotógrafos independentes e agências de fotografia para realizar sessões de fotos do Business View com equipamentos profissionais qualificados. 
						</div>
					</div>
				</div>
-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Qual é o valor do Business View?</a>
						</h4>
					</div>
					<div id="collapseSix" class="panel-collapse collapse">
						<div class="panel-body">
							O sistema de preços pode variar entre os fornecedores, e isso depende do tamanho da área dos locais e quantidade de pontos. Entre em contato com nosso setor de vendas para saber o sistema de preços.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Contato Section -->
    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Entre em contato</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
			
			<?php if(!empty($emailSent)): ?>
				<div class="col-md-6 col-md-offset-3">
					<div class="alert alert-success text-center">Sua mensagem foi enviada com sucesso.</div>
				</div>
			<?php else: ?>
				<?php if(!empty($hasError)): ?>
				<div class="col-md-5 col-md-offset-4">
					<div class="alert alert-danger text-center">Houve um erro no envio, tente novamente mais tarde.</div>
				</div>
				<?php endif; ?>
			
            <div class="row">
				<div class="col-lg-12">
					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
						<div class="form-group">
							<label for="name" class="col-lg-2 control-label">Nome</label>
							<div class="col-lg-10">
								<input type="text" class="form-control required" id="form-name" name="form-name" placeholder="Nome" />
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="email" class="form-control required" id="form-email" name="form-email" placeholder="Email" />
							</div>
						</div>
						<div class="form-group">
							<label for="assunto" class="col-lg-2 control-label">Assunto</label>
							<div class="col-lg-10">
								<input type="text" class="form-control required" id="form-subject" name="form-subject" placeholder="Assunto" />
							</div>
						</div>
						<div class="form-group">
							<label for="mensagem" class="col-lg-2 control-label">Mensagem</label>
							<div class="col-lg-10">
								<textarea class="form-control required" rows="3" id="form-message" name="form-message" placeholder="Mensagem" /></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</form>
                </div>
				<?php endif; ?>

			</div>
        </div>
    </section>
	
    <!-- Rodapé Section -->
<!--    <section id="rodape" class="bg-light-gray"> -->
	<div class="div-rodape bg-light-gray">
        <div class="container">
            <div class="row text-left">
                <div class="col-md-4">
					<img src="images/Logo vetor 360.png" alt="Infodigital Tecnologia em Informática." width="140" height="93">
                    <p class="text-muted">Informações de contato</p>
					<p class="text-muted">(11) 2061-7549</p>
					<p class="text-muted">(11) 99636-3132</p>
					<p class="text-muted">E-mail: <a class="page-scroll" href="#contato">vendas@infodigital.com.br</a></p>
                </div>
                <div class="col-md-4">
                    <img src="images/logo_infodigital360.png" alt="Seu empreendimento no Google" width="150" height="28">
					<br>
					<br>
<!--                    <img src="images/TA-Badge-v1-BR-sm.png" alt="Agência de Confiança Google" width="140" height="140"> -->
                    <img src="images/TrustedProBadge_Portuguese_BR_Portrait_A_P.png" alt="Agência de Confiança Google">
                </div>
                <div class="col-md-4">
                    <p class="text-muted"><b>NOSSA MISSÃO:</b> Incluir CLIENTES nos mecanismos de Marketing e Busca via Web do Google,  com a melhor solução para atingir aumento de vendas.</p>
                    <p class="text-muted"><b>OBJETIVO:</b> A máxima satisfação de nossos clientes.</p>
                    <p class="text-muted"><b>NOSSOS VALORES:</b> Honestidade, Profissionalismo, Ética, Comprometimento, Reconhecimento.</p>
                    <p class="text-muted"><a href="#historiaModal1" data-toggle="modal">Um pouco mais sobre a Infodigital</a></p>
                </div>
            </div>
        </div>
	</div>
<!--    </section> -->

    <!-- Vantagens Modal 1 -->
    <div class="portfolio-modal modal fade" id="vantagensModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Aumente o engajamento on-line com sua empresa</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="images/vantagens/img01.png" alt="">
                            <p>Com o Google Business View, seu estabelecimento se torna mais visivel nas pesquisas Google</p>
                            <p>As informações importantes da sua empresa como Endereço, Horarios de atendimento e Produtos ficam facilmente disponíveis para seu clientes</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vantagens Modal 2 -->
    <div class="portfolio-modal modal fade" id="vantagensModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Convide os clientes a entrar no seu estabelecimento</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="images/vantagens/img02.png" alt="">
                            <p>Com o Google Business View, seus clientes podem fazer uma visita virtual e conhecer seu estabelecimento</p>
                            <p>A visita virtual é simples e facil como a navegação do Street View</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vantagens Modal 3 -->
    <div class="portfolio-modal modal fade" id="vantagensModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Adicione fotografias à sua presença no Google</h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="images/vantagens/img03.png" alt="">
                            <p>Com o Google Business View, voce pode adicionar fotos de alta qualidade para a sua presença no Google</p>
                            <p>Adicione fotos de produtos em destaque ou de detalhes de seu estabelecimento facilmente</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vantagens Modal 4 -->
    <div class="portfolio-modal modal fade" id="vantagensModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Um pouco da história da Infodigital</h2>
                            <p class="item-intro text-muted"></p>
                            <img src="images/Logo vetor 360.png" alt="Infodigital Tecnologia em Informática." width="140" height="93">
                            <p>A Infodigital nasceu em 4 de Maio de 2001. É Pioneira no Brasil com serviços em Tour Virtual 360 graus (inclusive quando os programas ainda eram em Java) e conteúdos para websites. </p>
							<p>Sediada em São Paulo, ao longo destes anos, prestou serviços em diversas localidades e ramos de empreendimentos, como o “Primeiro Tour Virtual 360°” em locais como: Ilha de Fernando de Noronha, Ilha Bela, Morro de São Paulo na Bahia, Rio Grande do Norte em diversos Hotéis, Coca-Cola em Ribeirão Preto, Observatório Nacional no Rio de Janeiro, Teatro Municipal e Parque do Ibirapuera em São Paulo; enfim, diversos ramos e locais do Brasil. </p>
							<p>Com todos estes trabalhos ao longo de 15 anos de serviços por todo o Brasil, foi selecionada e Certificada pelo Google, como “Agência de Confiança”, para o programa do Google Business View,( Agencia Infodigital360° ), site <a href="http://www.infodigital.com.br" target="_blank">www.infodigital.com.br</a> </p>
                            <br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

    <!-- História Infodigital Modal 1 -->
    <div class="portfolio-modal modal fade" id="historiaModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Um pouco da história da Infodigital</h2>
                            <p class="item-intro text-muted"></p>
                            <img src="images/Logo vetor 360.png" alt="Infodigital Tecnologia em Informática." width="140" height="93">
                            <p>A Infodigital nasceu em 4 de Maio de 2001. É Pioneira no Brasil com serviços em Tour Virtual 360 graus (inclusive quando os programas ainda eram em Java) e conteúdos para websites. </p>
							<p>Sediada em São Paulo, ao longo destes anos, prestou serviços em diversas localidades e ramos de empreendimentos, como o “Primeiro Tour Virtual 360°” em locais como: Ilha de Fernando de Noronha, Ilha Bela, Morro de São Paulo na Bahia, Rio Grande do Norte em diversos Hotéis, Coca-Cola em Ribeirão Preto, Observatório Nacional no Rio de Janeiro, Teatro Municipal e Parque do Ibirapuera em São Paulo; enfim, diversos ramos e locais do Brasil. </p>
							<p>Com todos estes trabalhos ao longo de 15 anos de serviços por todo o Brasil, foi selecionada e Certificada pelo Google, como “Agência de Confiança”, para o programa do Google Business View,( Agencia Infodigital360° ), site <a href="http://www.infodigital.com.br" target="_blank">www.infodigital.com.br</a> </p>
                            <br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

   <!-- Videos Modal 1 -->
    <div class="portfolio-modal modal fade" id="videosModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>
									<source src="videos/video01.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>		
							<br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
 
   <!-- Videos Modal 2 -->
    <div class="portfolio-modal modal fade" id="videosModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>
									<source src="videos/video02.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>		
							<br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
 
   <!-- Videos Modal 3 -->
    <div class="portfolio-modal modal fade" id="videosModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>
									<source src="videos/video03.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>		
							<br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
 
   <!-- Videos Modal 4 -->
    <div class="portfolio-modal modal fade" id="videosModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>
									<source src="videos/video04.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>		
							<br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
 
   <!-- Videos Modal 5 -->
    <div class="portfolio-modal modal fade" id="videosModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<video width="320" height="240" controls>
									<source src="videos/video05.mp4" type="video/mp4">
									Your browser does not support the video tag.
								</video>
							</div>		
							<br>
							<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
<!--    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
<!--    <script src="js/classie.js"></script>-->
<!--    <script src="js/cbpAnimatedHeader.js"></script>-->

    <!-- Contact Form JavaScript -->
<!--    <script src="js/jqBootstrapValidation.js"></script>-->
<!--    <script src="js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="js/index.js"></script>

</body>
</html>
