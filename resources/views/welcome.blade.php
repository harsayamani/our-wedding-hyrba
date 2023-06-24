<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Harsa Yamani and Rien Balqis Afifah Weddings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="/template/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/template/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/template/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/template/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/template/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/template/css/style.css">

	<!-- Modernizr JS -->
	<script src="/template/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/images/atasv4.jpeg); bottom:0;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h2><b>Hi</b>, {{$name}}</h2>
                            <h2>You are invited to :</h2>
                            <br>
                            <h1><b>Harsa &amp; Balqis'</b></h1>
							<h1>Wedding</h1>
                            <h2>1 Juli 2023</h2>
                            <br>
                            <br>
                            <a href="/invitation/to/{{$name}}/details" class="btn btn-primary">Open &#10174;</a>
							{{-- <div class="simply-countdown simply-countdown-one"></div> --}}
							{{-- <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- jQuery -->
	<script src="/template/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/template/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/template/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/template/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/template/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/template/js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="/template/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/template/js/jquery.magnific-popup.min.js"></script>
	<script src="/template/js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="/template/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="/template/js/main.js"></script>

	<script>
        var d = new Date(2023, 6, 1);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>

	</body>
</html>
