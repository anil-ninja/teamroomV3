<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error 404 | Collap| You may be loadt place go to Home.</title>

  <?php include_once 'views/header/header.php'; ?>
		

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="cls-container">
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="images/logo.png" class="brand-icon"> -->
					<span class="brand-title">Collap.com <span class="text-thin"><i>Let's grow together</i></span></span>
				</a>
			</div>
		</div>
		
		<!-- CONTENT -->
		<!--===================================================-->
		<div class="cls-content">
			<h1 class="error-code text-warning">404</h1>
			<p class="h4 text-thin pad-btm mar-btm">
				<i class="fa fa-exclamation-circle fa-fw"></i>
				Sorry, but the page you are looking for has not been found on our server.
			</p>
			<div class="row mar-btm">
				<form class="col-xs-12 col-sm-10 col-sm-offset-1" method="post" action="pages-search-results.html">
					<input type="text" placeholder="Search.." class="form-control input-lg error-search">
				</form>
			</div>
			<br>
			<div class="pad-top"><a class="btn-link" href="<?= $baseUrl ?>">Back to Homepage</a></div>
		</div>
		
		
	</div>
	
<?php include_once 'views/footer/footer.php'; ?>
</body>
</html>

