<!DOCTYPE html>
<html>
	<head>
		<title>
			TasksApp: A Simple To-Do-List
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style2.css" />
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
						<a href="view.php" class="button">View Tasks</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<article>
						  <h2>Enter a Tasks to do:</h2>
						  <form action="view.php" novalidate="novalidate">
							<div id="errorText"></div> 
							<div id="numErrorText"></div>
							<fieldset id="task">
							  <label for="details">
								Details:
							  </label>
							  <input type="text" id="detailstf" name="Details" required="required" placeholder="What do you need to do?" />
							  <br>
							  <label for="t1">
								Time:
							  </label>
							  <input type="text" id="t1" name="Time" class="t" maxlength="5" required="required" placeholder="00:00" />
							  <br>
							  <label for="d1" id="d1label">
								Date:
							  </label>
							  <input type="number" id="d1" name="Date" class="d" maxlength="2" required="required" placeholder="DD" />
							  <label for="d2" id="d2label">
							  </label>
							  <input type="number" id="d2" name="Month" class="d" maxlength="2" required="required" placeholder="MM" />
							  <label for="d3" id="d3label">
							  </label>
							  <input type="number" id="d3" name="Year" class="d" maxlength="4" required="required" placeholder="YYYY" />
							</fieldset>
							<fieldset id="submitsection">
							  <input type="submit" id="submitBtn" value="Submit" />
							</fieldset>
						 </form>

					   </article>
					   <script src="script.js"></script>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10">
						<p id="line"></p>
						<h6 id="con">
							<iframe src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=f0e8hpm4lsirimiltf8jh0475k%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FDublin" style="border-width:0" width="500" height="300" frameborder="0" scrolling="no"></iframe>
						</h6>
					</div>
				</div>
			</div>
			
	</body>
</html>
