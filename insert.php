<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
	$data = $_POST["data"];

	$sql = "INSERT INTO Movies (movieName, movieDuration, movieYear, movieRating, movieDescription, movieCategory, movieActors, movieInstructor, movieCountry, movieTotalGross) VALUES(:movieName, :movieDuration, :movieYear, :movieRating, :movieDescription, :movieCategory, :movieActors,:movieInstructor, :movieCountry, :movieTotalGross)";
	$bind = [":movieName" => $data["movieName"], ":movieDuration" => $data["movieDuration"], ":movieYear" => $data["movieYear"], ":movieRating" => $data["movieRating"], ":movieDescription" => $data["movieDescription"], ":movieCategory" => $data["movieCategory"], ":movieActors" => $data["movieActors"], ":movieInstructor" => $data["movieInstructor"], ":movieCountry" => $data["movieCountry"], "movieTotalGross" => $data["movieTotalGross"]];

	$db->sql($sql, $bind, false);
	echo "Produktet er nu indsat. <a href='insert.php'>Indsæt et produkt mere</a>";
	exit;
}
?>
<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
	<!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
	<meta charset="utf-8">

	<!-- Titel som ses oppe i browserens tab mv. -->
	<title>Movies</title>

	<!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<script src="https://cdn.tiny.cloud/1/c3gxd3xav4sxycyo311dp8v3xjzvl503qdtmr21nhjppero3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="container-main p-5">
	<h1>Opret Film</h1>
	<form method="post" action="insert.php">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieName">Movie Name</label>
					<input type="text" class="form-control shadow border-0" name="data[movieName]" id="movieName" placeholder="Movie name" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieDuration">Movie Duration</label>
					<input type="time" class="form-control shadow border-0" name="data[movieDuration]" id="movieDuration" placeholder="Movie duration" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieYear">Movie Year</label>
					<input type="number" maxlength="4" class="form-control shadow border-0" step="0" name="data[movieYear]" id="movieYear" placeholder="Movie year" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieRating">Movie Rating</label>
					<input type="text" maxlength="3" class="form-control shadow border-0" step="0" name="data[movieRating]" id="movieRating" placeholder="Movie rating" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieCategory">Movie Category</label>
					<input type="text" class="form-control shadow border-0" step="0" name="data[movieCategory]" id="movieCategory" placeholder="Movie category" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieActors">Movie Actors</label>
					<input type="text" class="form-control shadow border-0" step="0" name="data[movieActors]" id="movieActors" placeholder="Movie actors" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieInstructor">Movie Instructor</label>
					<input type="text" class="form-control shadow border-0" step="0" name="data[movieInstructor]" id="movieInstructor" placeholder="Movie instructor" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieCountry">Movie Country</label>
					<input type="text" class="form-control shadow border-0" step="0" name="data[movieCountry]" id="movieCountry" placeholder="Movie country" value="">
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="form-group py-3">
					<label for="movieTotalGross">Movie Total Gross</label>
					<input type="number" class="form-control shadow border-0" step="0" name="data[movieTotalGross]" id="movieTotalGross" placeholder="Movie total gross" value="">
				</div>
			</div>

			<div class="col-12 pt-5 pb-5">
				<div class="form-group">
					<label for="movieDescription">Movie Description</label>
					<textarea class="form-control" name="data[movieDescription]" id="movieDescription"></textarea>
				</div>
			</div>

			<div class="col-12 d-flex justify-content-end">
				<button class="btn-opret btn btn-primary" type="submit" id="btnSubmit">Opret</button>
			</div>

		</div>
	</form>
</div>


<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

</body>
</html>
