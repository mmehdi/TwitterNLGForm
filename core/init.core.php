<?php
	//Start session:
	session_start();

	//echo 'key: '. $_SESSION['account']['apiKey'];
	//die();
	//Create an exception page array:
	$exceptions = array('register','login');

	//Find out the current page name:
	$exploded = explode('/', $_SERVER['SCRIPT_NAME']);
	$page = substr(end($exploded),0,-4);


/*	if(isset($_SESSION['status']) && $_SESSION['status']=='verified'){
					header('Location: index.php');
	}

	else{
			header('Location: login.php');
			die();
	}*/
	//Check if the current page is an exception and if a user is already stored in the session:
	/*if( in_array($page, $exceptions) === false){
		if (isset($_SESSION['account']) === false){
			header('Location: login.php');
			die();
		}
	}*/

	//API URL constant:

	//Application Authorization Key
	//define("API_APP_KEY","aafa460be460462dcb7e56fda6d2217a");

	//Development mode:
	//define("APIURL","http://139.133.73.55:8081/ecosystem-social-twitter/service");
	define("APIURL","http://139.133.73.79:8080/TwitterNLGService");
	
	//define('BASE_URL', 'http://sj.abdn.ac.uk/TweetingTravel');
	define('BASE_URL', 'http://139.133.73.79:8080/TwitterNLGService/NLGService');
	//twitter constants
	
	//Deployment mode:
	//define("APIURL","http://localhost:8080/smile-server/api-1.1");

	//Path to file:
	include dirname(__FILE__)."/inc/rest.inc.php";
	include dirname(__FILE__)."/inc/dynamic-form.inc.php";
	include dirname(__FILE__)."/inc/db-connector.inc.php";


	// include dirname(__FILE__)."/inc/user.inc.php";
?>