<html>
<head>
	<title>Task 1 Implement HTML, CSS, JS With Bootsrap & Material Design</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/material-design/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/material-design/ripples.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom/style.css">
</head>
<body>
	<div class="container"> 
		<!--NAVBAR-->
		@include('shared.head_nav')
		<!-- END OF NAVBAR-->

		<!--CONTENT-->
		@yield("content")
		<!--END OF CONTENT-->
	</div>
</body>
	<script type="text/javascript" src="/assets/js/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="/assets/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/js/material-design/material.js"></script>
    <script type="text/javascript" src="/assets/js/material-design/ripples.js"></script>
    <script>
      $.material.init();
    </script>
</html>