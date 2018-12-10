<!DOCTYPE html>
<html>
	<head>
		<title>
			TasksApp: A Simple To-Do-List
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style3.css" />
		<script src="file.js"></script>
	</head>
	<body>
			<div class="container">
				<div class ="top">
					<div class="col-lg-12"> 
						<h1 class="tleft">Tasks App</h1>
						<h4 class="tright">A Simple To-Do-list</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<img src="list.jpg" alt="To-Do-List">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-6">
						<a href="index.html" class="button">Home</a>
					</div>
					<div class="col-lg-6">
						<a href="view.php" class="button">Add Tasks</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<p></p>
						<p>You have entered the following Task to do:</p>
						<script>
							var formData = location.search;
							formData = formData.substring(1, formData.length);
							 while (formData.indexOf("+") !== -1) {
								formData = formData.replace("+", " ");
							 }
							 formData = decodeURIComponent(formData);
							 var formArray = formData.split("&");
							 for (var i = 0; i < formArray.length; i = i + 1) {
								document.write("<p>" + formArray[i] + "</p>");
							 }
						 </script>
						<p>Below are your previously entered tasks:</p>
						<p><?php
							$xml=simplexml_load_file("tasks.xml") or die("Error: Cannot create object");
							echo $xml->task[0]->Details . "<br>";
							echo $xml->task[0]->Time . "<br>";
							echo $xml->task[0]->Date . "<br>";
							echo $xml->task[1]->Details . "<br>";
							echo $xml->task[1]->Time . "<br>";
							echo $xml->task[1]->Date . "<br>";
							echo $xml->task[2]->Details . "<br>";
							echo $xml->task[2]->Time . "<br>";
							echo $xml->task[2]->Date . "<br>";
							echo $xml->task[3]->Details . "<br>";
							echo $xml->task[3]->Time . "<br>";
							echo $xml->task[3]->Date . "<br>";
							?> 
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10">
						<p id="line"></p>
						<h6 id="con">
							<button onclick="myFunction()">Samsung API</button>
						</h6>
						<p id="copy"></p>
						<script>
							function myFunction() {
								var d = new Date();
								var n =d.getFullYear();
									document.getElementById("copy").innerHTML = n;
							}
						</script>
					</div>
				</div>
			</div>
			
	</body>
</html>