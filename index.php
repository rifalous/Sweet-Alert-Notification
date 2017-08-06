<html>
	<head>
		<title>Notification</title>
		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script>
			function myFunction() {
				swal("Here's a message!", "It's pretty, isn't it?");
			}
			function awal() {
				swal("Notification", "Have you played DotA today?");
			}
		</script>
	</head>
	<body onload="awal();">
		<main>
		  <div>
			<p align="center">
				A very good design alert/notification using sweetAlert. <br>
				Coded by : Rivaldy Fauzan Mu'taz <br>
				Follow me at <a href="http://github.com/rifalous/" target="_blank">Github</a> <br>
				<br>
				<button onclick="myFunction();">Try It!</button>
			</p>
		  </div>
		</main>
	</body>
</html>