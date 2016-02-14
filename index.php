<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Bundesliga</title>
	
	<meta name="description" content="Masz problem z komputerem, skontaktuj się ze mną a naprawię go za Ciebie. Oprócz tego oferuje tworzenie stron internetowych w: HTML, CSS, JavaScript, PHP" />
	<meta name="keywords" content="zamów, stronę, tworzenie, www, programista, portfolio, php, javascript, html, css, serwis, komputerów, komputer, nie, działa, przegrzewa, wolno, działa" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
	<script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>
	<script src="js/app.js"></script>
	
</head>

<body ng-app="Bundesliga">
	<div id="container">

		<div id="header">
			<div id="logo"></div>
		</div>
		<div id="navbar">
			<ol>
				<li><a href="#/">Strona główna</a></li>
				<li><a ui-sref="terminarz">Terminarz</a></li>
				<li><a ui-sref="tabela">Tabela</a></li>
				<li><a ui-sref="strzelcy">Klasyfikacja</a>
					<ul>
						<li><a ui-sref="strzelcy">Strzelców</a></li>
						<li><a ui-sref="strzelcy">Asystentów</a></li>
						<li><a ui-sref="strzelcy">Kanadyjska</a></li>
					</ul>
				</li>
				<li><a ui-sref="zespoly">Zespoły</a></li>
				<li><a ui-sref="autor">O autorze</a></li>
			</ol>
		</div>
		<div id="content">
			<div ui-view></div>
		</div>
		<div id="footer"></div>


	</div>
	
</body>
</html>