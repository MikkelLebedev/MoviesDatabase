<?php
require "settings/init.php";

$Movies = $db->sql("SELECT * FROM Movies");
?>
<!----------------------------------------------->

<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
	<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
	<meta charset="utf-8">

	<!-- Titel som ses oppe i browserens tab mv. -->
	<title>MJ Movies</title>

	<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
	<link href="css/movies_styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">


	<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php
foreach ($Movies as $movie){
?>

<div class="container-start">
	<div class="container m-left">
		<div class="row">
			<div class="col-12 col-md-6 mt-5 ">
				<h1 class="mb-2 fw-normal text-myColor"><?php echo $movie->movieName;?></h1>
			</div>
		</div>
		<div class="col-12 col-md-12 mb-2 d-flex align-items-baseline">
			<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
				<path id="Path_1" data-name="Path 1" d="M21.985,10.468a.976.976,0,0,0-.8-1.153l-5.7-.838-2.6-5.45a.8.8,0,0,0-.4-.419.987.987,0,0,0-1.4.419l-2.5,5.45-5.7.838a.6.6,0,0,0-.6.314,1.048,1.048,0,0,0,0,1.467l4.1,4.192-1,5.974a1.388,1.388,0,0,0,.1.629.987.987,0,0,0,1.4.419l5.1-2.83,5.1,2.83c.1.1.3.1.5.1h.2a1.086,1.086,0,0,0,.8-1.258l-1-5.974,4.1-4.192A.581.581,0,0,0,21.985,10.468Z" transform="translate(-2 -2.459)" fill="#ffc119"/>
			</svg>
			<p class="mx-3 mb-0 fs-5 lh-base text-myColor"><?php echo $movie->movieRating;?></p>
		</div>
		<div class="col-12 col-md-12 fw-light gap-4 d-flex text-myColor">
			<p><?php echo $movie->movieYear;?></p>
			<p>PG15</p>
			<p><?php echo $movie->movieDuration;?></p>
		</div>
	</div>

	<div class="container mt-3">
		<div class="row justify-content-center gap-3 flex-nowrap">
			<div class="col-md-3 col-12 p-2 rounded-3 bg-boxColor text-center text-myColor box-1"></div>
			<div class="col-md-6 col-12 p-2 rounded-3 bg-boxColor text-center text-myColor box-2"></div>
			<div class="col-md-3 col-12 p-2 rounded-3 bg-boxColor text-center text-myColor box-1"></div>
		</div>
	</div>

	<div class="container mt-4 text-myColor text-center ">
		<div class="row justify-content-center gap-3 flex-nowrap">
			<div class="col-12 col-md-3 p-2 rounded-3 bg-boxColor"><?php echo $movie->movieInstructor;?></div>
			<div class="col-12 col-md-6 p-2 rounded-3 bg-boxColor"><?php echo $movie->movieActors;?></div>
			<div class="col-12 col-md-3 p-2 rounded-3 bg-boxColor"><?php echo $movie->movieCategory;?></div>
		</div>
	</div>

	<div class="container text-myColor">
		<div class="row">
			<div class="col-12 col-md-12 my-5 p-0">
				<h2 class="title-desc">Movie description</h2>
				<p class="desc"><?php echo $movie->movieDescription;?></p>
			</div>
		</div>
	</div>

	<div class="container text-myColor">
		<div class="row gap-3">
			<div class="col-12 col-md-3 p-0">Country</div>
			<div class="col-12 col-md-3 p-0">Box Office</div>
		</div>
	</div>

	<div class="container text-myColor text-center py-4">
		<div class="row gap-3">
			<div class="col-12 col-md-3 rounded-3 bg-boxColor p-2"><?php echo $movie->movieCountry;?></div>
			<div class="col-12 col-md-3 rounded-3 bg-boxColor p-2">$<?php echo number_format($movie->movieTotalGross, 0, "", ",");?></div>
		</div>
	</div>
</div>

<?php
}?>
</body>
</html>