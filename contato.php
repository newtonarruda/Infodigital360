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
<body>
    <div class="jumbotron">
        <h1>Simple PHP Contact Form</h1>
        <p>A Simple Contact Form developed in PHP with VanillaJS Form validation.</p>
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

    <div class="col-md-6 col-md-offset-3">
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
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>