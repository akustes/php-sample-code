<?php
header('Content-Type: application/json');
// Return JSON string from AJAX POST
if(isset($_POST))
{
	echo json_encode($_POST['ajax-name']);
}