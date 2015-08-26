<?php
$subjectPrefix = '[Contato via Infodigital360]';
$emailTo = 'waldemararruda@gmail.com';
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
						<a class="page-scroll" href="#page-top"><img src="images/logo_infodigital360.png" alt="Seu empreendimento no Google" width="300" height="56"></a>

					</li>
					<li>
						<a class="page-scroll" href="#gbv"><span class="glyphicon glyphicon-home"></span> &nbsp; Google Business View</a>
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
                    <img class="navbar-right" src="images/TA-Badge-v1-BR-sm.png" alt="Agência de confiança Google" width="140" height="140">
					<br>
					<li>
						<a class="page-scroll" href="listaTrabalhos.html"><span class="glyphicon glyphicon-ok"></span> &nbsp; Trabalhos Realizados</a>
					</li>
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
			<div class="row">
                <div class="col-lg-12 text-center">			
					<a class="page-scroll" href="listaTrabalhos.html"><h2 class="section-heading">Trabalhos Realizados</h2></a>
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
                    <img src="images/TA-Badge-v1-BR-sm.png" alt="Agência de Confiança Google" width="140" height="140">
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
