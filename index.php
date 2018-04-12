
<!DOCTYPE html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109521497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109521497-1');
</script>




		<meta charset="utf-8">
		<title>NI Sistemas Web | Criação de sites e sistemas informáticos em SP</title>
		<meta name="viewport" content="width=device-width" initial-scale="1.0" />
		<meta name="description" content="Criação de Sites em Cajamar SP e Barueri SP. SitesResponsivos, SEO e geração de leads. Acesse o Site e Conheça Nossos Preços Promocionais!" />
		<link rel="shortcut icon" href="img/logo-copyright-nisistemas.png"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

		<!-- <link rel="stylesheet" type="text/css" href="./css/estilo.css"> -->


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.nisistemas.com.br",
  "name": "Ni Sistemas Premium",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+11 999914755",
    "contactType": "Sales"
  }
}
</script>

	</head>
	
			
	<body data-spy="scroll" data-target=".navbar" data-offset="50" class="container-full">
		
		<!-- CABEECALHO-->
		<div class="container">
			<?php include_once "cabecalho.php" ?>
		</div>	

	
		
	<!-- ============================================================ -->
	<!-- ==================WRAPPER====WRAPPER===WRAPPER==================== -->
	<!-- ============================================================ -->
<div id="corpo" class="container-full">
		<header >
			
			 <?php include_once "destaque.php" ?> 
		</header>
		<?php
	if (isset ($_GET["enviado"]) && $_GET["enviado"] == "true"):
		echo "<div class='container'><div class='alert alert-success'><i class='material-icons'>error_outline</i> A mensagem foi enviada com sucesso!</div> </div";
	elseif(isset ($_GET["enviado"]) && $_GET["enviado"] == "false"):
		echo "<div class='container'><div class='alert alert-danger'><i class='material-icons'>error_outline</i> Não foi possivel enviar a mensagem</div></div>";
	endif;
	?>
		<div class="container-full">	
			<?php include_once "quemSomos.php" ?>
		</div>

		<div class="container-full servicos">
			<?php include_once "tecnologias.php" ?>
		</div>

		<div class="container-full criacaoDeSite">
			<?php include_once "criacaoDeSite.php" ?>
		</div>

		<div class="container-full criacaoDeSite">
			<?php include_once "criacaoDeSistema.php" ?>
		</div>

		<div class="container-full nihelpdesk">	
			<?php include_once "nihelpdesk.php" ?>
		</div>

		
</div>		
	
		<!-- FOOTER -->
		<div class="container">
			<?php include_once "footer.php" ?>
		</div>	

</body>
</html>