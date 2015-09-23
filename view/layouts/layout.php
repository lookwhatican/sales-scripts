<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kate</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/web/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 panel">
				<a href="/question/add" class="btn btn-default">Add question</a>
				<a href="/answer/add" class="btn btn-default">Add answer</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<?= $questions ?>
				
				<?= $answers ?>

				<?= $question_add ?>

			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/web/js/script.js"></script>
</body>
</html>