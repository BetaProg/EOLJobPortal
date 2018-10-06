<?php  
	include 'dbconfig.php';
?>
<?php
	$jobs_count_sql = mysql_query("SELECT * from job_details");
	$jobs_count = mysql_num_rows($jobs_count_sql);
?>