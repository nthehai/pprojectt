<?php 
	function check($result,$query){
		global $dbc;
		if (!$result) {
			die("Query {$query} <br/> MSQL Errors :".mysqli_error($dbc));
		}
	}
?>