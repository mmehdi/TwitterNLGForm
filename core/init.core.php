<?php
	//Start session:

	//Development mode:
	define("APIURL","http://139.133.73.79:8080/TwitterNLGService/");
	//define("APIURL","http://sj.abdn.ac.uk:8585/TwitterNLGService/");
	
	//define('BASE_URL', 'http://sj.abdn.ac.uk/TweetingTravel');
	define('BASE_URL', 'http://sj.abdn.ac.uk:8585/TwitterNLGService/NLGService');

	//Path to file:
	include dirname(__FILE__)."/inc/rest.inc.php";
?>