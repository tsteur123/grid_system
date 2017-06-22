<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Example of the Responsive Grid System</title>
	<meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
	<meta name="keywords" content="responsive, grid, system, web design">

	<meta name="author" content="www.grahamrobertsonmiller.co.uk">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">

	<style type="text/css">

	/*
	========================
	- Note: These styles are just to pretty the basic page up a bit.
	You should ignore these when copying and pasting into your site
	because your stylesheet should take care of making it look pretty!
	========================
	*/
	body { padding:2em; font : 100%/1.4 'Helvetica Neue', arial, helvetica, helve, sans-serif;
 }
	h1 { font-size:2.2em; padding:0 0 .5em 0; }
	h2 { font-size:1.5em; }
	.header { padding:1em 0; }
	.col { background: #ccc; padding:1em 0; text-align:center;}

	</style>

</head>
    <body>
        <div class="section group">
			// in de class kun je selecteren hoeveel collomen je wil gebruiken hier gebruik je 1 van de 3
            <div class="col span_1_of_3">
            <img src="img/logo.png" alt="" class="img" style="width: 25%">
            </div>
			// in de class kun je selecteren hoeveel collomen je wil gebruiken hier gebruik je 2 van de 3
            <div class="col span_2_of_3">
            <h1>Responsive grid system</h1>
            </div>
        </div>
        <div class="section group">
			// in de class kun je selecteren hoeveel collomen je wil gebruiken hier gebruik je 2 van de 2
            <div class="col span_2_of_2">
				<h1>nadelen</h1>
				Er zitten niet echt nadelen aan dit design.<br> Het is gebruiksvriendelijk maar ook moet je rekening houden met het design van de website omdat als je het grafisch te zwaar maakt dat niet alle apparaten de webpagina goed kunnen weergeven.<br> Nog een nadeel is dat het een lange ontwikkeltijd heeft ondanks dat je de codes van de website af kan halen.<br> Daarnaast als je een website hebt met veel webinhoud is het ook lastiger omdat je zelf nog heel veel moet toevoegen door middle van de html code.<br> Maar ook het design met kleuren en finetuning in de CSS kan ook veel tijd gaan vergen.
            </div>
        </div>
        <div class="section group">
			// in de class kun je selecteren hoeveel collomen je wil gebruiken hier gebruik je 2 van de 2
            <div class="col span_2_of_2">
				<h1>een tutorial</h1>
            <a href="tutorial.php"><img src="img/tutorial.jpg" alt=""></a>
            </div>
        </div>
        <div class="section group">
            <div class="col span_1_of_3">
			<a href="beschrijving.php"><h1>beschrijving</h1></a>
            </div>
            <div class="col span_1_of_3">
			<a href="voordelen.php"><h1>voordelen</h1></a>
            </div>
            <div class="col span_1_of_3">
				<a href="nadelen.php"><h1>nadelen</h1></a>
            </div>
        </div>
        <div class="section group">
            <div class="col span_2_of_2">
				<p class="coppyright">Copyright &copy; 2017 <i>Ontworpen door: Thomas Steur & Tom Roelfsma</i>
		        Alle rechten voorbehouden.</p>
            </div>
        </div>
    </body>
</html>
