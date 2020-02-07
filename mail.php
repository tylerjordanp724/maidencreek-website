<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta property="og:image" content="img/fb-share.jpg"/>
	<link rel="shortcut icon" href="img/favicon.ico">
	<title>Maidencreek | Tagline goes here</title>
	<link rel="stylesheet" href="https://use.typekit.net/nhy0ygq.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
	
	
  <!--[if lt IE 9]>
	  <script src="/js/respond.js"></script>
  <![endif]-->


	<!-- Google Analytics -->
	
</head>
<body>
	<div id="page" class="site">
		
		<div class="main-content">
			<div class="content-row bg--yellow response">
				<div class="content-row-header row d-block no-gutters py-3">
					<div class="container-fluid">
                        <div class="d-flex py-1 border-y--dk-green"></div>
                            <?php 
                            $firstname = $_POST['first-name'];
                            $lastname = $_POST['last-name'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            $formcontent="From: $firstname $lastname \n Message: $message";
                            $recipient = "florals@cohere.com";
                            $subject = "Maidencreek Contact";
                            $mailheader = "From: $email \r\n";
                            mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                            echo '<div class="repsonse text-center">'.'<h1 class="text-center text--green">Thank You!<br/></h1>'.'<a href="/">back to home</a>'.'</div>';
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>