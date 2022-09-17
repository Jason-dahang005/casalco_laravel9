<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<title>CASALCO - Capitol Savings And Loan Cooperative</title>
	<!--
	TemplateMo 558 Klassy Cafe
	https://templatemo.com/tm-558-klassy-cafe
	-->
	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="../klassy/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../klassy/css/font-awesome.css">
	<link rel="stylesheet" href="../klassy/css/templatemo-klassy-cafe.css">
	<link rel="stylesheet" href="../klassy/css/owl-carousel.css">
	<link rel="stylesheet" href="../klassy/css/lightbox.css">
	
</head>
<body>
	@include('client.header')

	@yield('client_content')

	@if(!Request::is("login") && !Request::is("register") && !Request::is("membership-application") && !Request::is("pre_seminar") )
		@include('client.footer')
	@endif

	<!-- jQuery -->
	<script src="../klassy/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="../klassy/js/popper.js"></script>
	<script src="../klassy/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="../klassy/js/owl-carousel.js"></script>
	<script src="../klassy/js/accordions.js"></script>
	<script src="../klassy/js/datepicker.js"></script>
	<script src="../klassy/js/scrollreveal.min.js"></script>
	<script src="../klassy/js/waypoints.min.js"></script>
	<script src="../klassy/js/jquery.counterup.min.js"></script>
	<script src="../klassy/js/imgfix.min.js"></script> 
	<script src="../klassy/js/slick.js"></script> 
	<script src="../klassy/js/lightbox.js"></script> 
	<script src="../klassy/js/isotope.js"></script> 
	
	<!-- Global Init -->
	<script src="../klassy/js/custom.js"></script>
	
	<script>

		$(function() {
			var selectedClass = "";
			$("p").click(function(){
			selectedClass = $(this).attr("data-rel");
			$("#portfolio").fadeTo(50, 0.1);
					$("#portfolio div").not("."+selectedClass).fadeOut();
			setTimeout(function() {
				$("."+selectedClass).fadeIn();
				$("#portfolio").fadeTo(50, 1);
			}, 500);
					
			});
		});

	</script>
</body>
</html>