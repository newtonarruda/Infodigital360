<?php
$subjectPrefix = '[Contato via Site]';
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
		<div class="container">
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
						<a class="page-scroll" href="#page-top"><img src="images/logo_infodigital360.jpg" alt="Seu empreendimento no Google" width="150" height="28"></a>
					</li>
					<li>
						<a class="page-scroll" href="#gbv"><span class="glyphicon glyphicon-ok"></span> &nbsp; Google Business View</a>
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
					<img class="navbar-right" src="images/TA-Badge-v1-BR-sm.png" alt="Agência de confiança Google" width="50" height="50">
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div> 
		<!-- /.container-fluid -->
	</nav>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/banner001.jpg" alt="Sua empresa em 360° no Google Maps!">
			</div>

			<div class="item">
				<img src="images/banner002.jpg" alt="Todas as informações de seu empreendimento para acesso rápido">
			</div>

			<div class="item">
				<img src="images/banner003.jpg" alt="24 Horas por dia, no Google, acesso rápido em todos os dispositivos!!">
			</div>

			<div class="item">
				<img src="images/banner004.jpg" alt="24 Horas por dia, no Google, acesso rápido em todos os dispositivos!!">
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
						O Google Maps Business View é um tour virtual interativo de alta qualidade de 360
						graus da empresa otimizado pela tecnologia do Street View. É simples, rápido e
						acessível.
					</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
						<img src="images/entre_contato.jpg" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">1º Passo</h4>
                    <p class="text-muted">Entre em contato com a nossa equipe de vendas.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="images/agende_sessao.jpg" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">2º Passo</h4>
                    <p class="text-muted">Agende uma sessão de fotos quando for mais conveniente para sua empresa.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="images/nossa_equipe_edit.jpg" alt="Agência de confiança Google" width="150" height="112">
                    </span>
                    <h4 class="service-heading">3º Passo</h4>
                    <p class="text-muted">Relaxe! A nossa equipe vai processar as fotos e publicar o Google Bussines View da sua empresa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vantagens Section -->
    <section id="vantagens" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vantagens para sua empresa</h2>
                    <h3 class="section-subheading text-muted">	​Estar bem posicionado e aparecendo com as suas principais informações na Maior ferramenta de divulgação web do Mundo ​​o Google ​, 
																através do Google Business View é a ​certeza da empresa estar nos principais serviços do Google (Google Maps, Google Pesquisa e Google+),
																ganhando a confiança de seus clientes​, aumentando o número de visitas diárias á sua página​,​ aumentando o numero de clientes e o consequente sucesso de seu empreendimento. 
																A ferramenta ​com Tour virtual em 360 gruas, também pode pode ser inserida em seu site facilmente. 
																​Entre em contato com nosso setor comercial, que um de nossos representantes irá lhe atender pessoalmente.
<!--
																Contratar o Google Business View é a chance de ser visto e reconhecido no mundo digital e expandir seu negócio. 
																Sua empresa vai estar nos principais serviços do Google (Google Maps, Google Pesquisa e Google+), 
																facilitando a entrada de novos clientes, aumentando o número de visitas diárias á sua página e ganhando a confiança de seus clientes. 
																A ferramenta é compacta, possui uma navegação fluída e pode ser inserida em seu site facilmente. 
																Confira abaixo alguns clientes que contrataram o serviço e obtiveram resultados positivos.
-->
					</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 vantagens-item">
                    <a href="#vantagensModal1" class="vantagens-link" data-toggle="modal">
                        <div class="vantagens-hover">
                            <div class="vantagens-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/vantagens/img01.png" class="img-responsive" alt="">
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
                        <img src="images/vantagens/img02.png" class="img-responsive" alt="">
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
                        <img src="images/vantagens/img03.png" class="img-responsive" alt="">
                    </a>
                    <div class="vantagens-caption">
                        <h4>Adicione fotografias de alta qualidade à sua presença em todo o Google</h4>
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
    <!-- Dúvidas Section -->
    <section id="duvidas" class="bg-light-gray">
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
							O Business View aparece nos resultados da Pesquisa do Google, no Google Maps e
							no Google+, em computadores, smartphones ou tablets.
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
								<button type="submit" class="btn btn-default">Enviar</button>
							</div>
						</div>
					</form>
                </div>
				<?php endif; ?>

			</div>
        </div>
    </section>

	<div class="jumbotron">
		<div class="col-md-4 text-justify text-muted">
			<h4>NOSSA MISSÃO:</h4>
			<h>Incluir CLIENTES nos mecanismos de Marketing e Busca via Web do Google,  com a melhor solução para atingir aumento de vendas.</h>
		</div>
		<div class="col-md-4 text-justify text-muted">
			<h4>OBJETIVO:</h4>
			<h>A máxima satisfação de nossos clientes.</h>
		</div>
		<div class="col-md-4 text-justify text-muted">
			<h4>NOSSOS VALORES:</h4>
			<h>Honestidade, Profissionalismo, Ética, Comprometimento, Reconhecimento.</h>
		</div>
		<div class="clearfix visible-lg"></div>
	</div>
	
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
