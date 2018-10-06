<?php  
	include 'dbconfig.php';
?>
<?php
	$jobs_count_sql = mysql_query("SELECT * from job_details");
	$jobs_count = mysql_num_rows($jobs_count_sql);
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="styles/cstm-styles.css" />
		<script src="scripts/jquery.min.js"></script>
		<script src="scripts/popper.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
		<title>EOL | Home</title>
	</head>
	<body>
		<div class="cstm-main-content">
			<nav class="navbar navbar-dark bg-dark sticky-top">
			  <span class="navbar-brand mb-0 h1">EOL</span>
			</nav>
			<div class="cstm-left-content">
				<div class="cstm-drop-section">
					<div class="cstm-filter-div">
						<a class="cstm-filter-search" href="#">Apply filter</a>
					</div>
					<div class="cstm-drop-section1">
						<h4>Organisation:</h4>
						<select class="custom-select">
							<option selected>Select</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<div class="cstm-drop-section2">
						<h4>Engineering Stream:</h4>
						<select class="custom-select">
							<option selected>Select</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
					<div class="cstm-drop-section3">
						<h4>Application mode:</h4>
						<select class="custom-select">
							<option selected>Select</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					</div>
				</div>
				<div class="cstm-check-section">
					<div class="cstm-filter-div">
						<a class="cstm-filter-search" href="#">Clear all/ Select all</a>
					</div>
					<div class="cstm-check-section1">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Selection Procedure</label>
						</div>
					</div>
					<div class="cstm-check-section2">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck2">
							<label class="custom-control-label" for="customCheck2">Technical Interview</label>
						</div>
					</div>
					<div class="cstm-check-section3">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck3">
							<label class="custom-control-label" for="customCheck3">Analytical Questions</label>
						</div>
					</div>
					<div class="cstm-check-section4">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck4">
							<label class="custom-control-label" for="customCheck4">HR Questions</label>
						</div>
					</div>
					<div class="cstm-check-section5">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck5">
							<label class="custom-control-label" for="customCheck5">Suggestions</label>
						</div>
					</div>
				</div>
			</div>
			<div class="cstm-right-content">
				<div class="interview-details-content">
					<div class="interviews-list-content">
						<?php 
							if((mysql_num_rows($jobs_count_sql))>0){
								while($row_all_jobs = mysql_fetch_array($jobs_count_sql)){
								$job_id = $row_all_jobs['job_id'];
								$job_location = $row_all_jobs['job_location'];
								$job_organisation = $row_all_jobs['job_organisation'];
								$job_application_mode = $row_all_jobs['job_application_mode'];
								$job_selection_procedure = $row_all_jobs['job_selection_procedure'];
								$job_technical_interview = $row_all_jobs['job_technical_interview'];
								$job_analytical_questions = $row_all_jobs['job_analytical_questions'];
								$job_hr_questions = $row_all_jobs['job_hr_questions'];
								$job_suggestions = $row_all_jobs['job_suggestions'];
								$job_shared_by = $row_all_jobs['job_shared_by'];
								$job_posted_date = $row_all_jobs['job_posted_date'];
								
								echo "<div>
									<div class='card'>
									  <h5 class='card-header'>Interview Experiences of : ";?><?php echo $job_organisation ?><?php echo "</h5>
									  <div class='card-body'>
			<label>Job Location : </label><b> "?><?php echo $job_location ?><?php echo "							</b><br>
			<label>Organisation : </label><b> "?><?php echo $job_organisation ?><?php echo "							</b>
			<br>
			<label>Application Mode : </label><b> "?><?php echo $job_application_mode ?><?php echo "							</b>
			<br>
			<label>Selection Procedure : </label><b> "?><?php echo $job_selection_procedure ?><?php echo "							</b>
			<br>
			<label>Technical Interview : </label><b> "?><?php echo $job_technical_interview ?><?php echo "							</b>
			<br>
			<label>Analytical Questions : </label><b> "?><?php echo $job_analytical_questions ?><?php echo "							</b>
			<br>
			<label>HR Questions : </label><b> "?><?php echo $job_hr_questions ?><?php echo "							</b>
			<br>
			<label>Suggestions : </label><b> "?><?php echo $job_suggestions ?><?php echo "							</b>
			<br>
			<label>Shared By: </label><b> "?><?php echo $job_shared_by ?><?php echo "							</b>
									  </div>
									  <a href='#' class='btn btn-primary'>View Details</a>
									</div>
								</div>";
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
