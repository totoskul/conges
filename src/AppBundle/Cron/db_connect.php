<?php
function db_connect($host, $login, $password, $database)
{
	$link = new mysqli($host, $login, $password, $database);
	
	/* Vérification de la connexion */
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());
		exit();
	}
	
	
	return $link;
}


function db_close($link)
{
	$link->close();
}

function db_query($rq, $db = DB_DATABASE)
{
	$link  = db_connect(DB_HOST, DB_LOGIN,DB_PASSWORD, $db);
	$res = $link->query($rq);
	print_r($res);
	if(!is_object($res))
	{
		if(!$res)
		{
			// on a une erreur. Ce serait bien de coller du throw exception, mais c'est trop large là... on va se contenter d'un print
			echo 'Erreur de requête : '.$link->error;
		}
	}
	db_close($link);
	return $res;
}

function db_select($rq, $db = NULL)
{
	
	$res = db_query($rq, $db);
	$array_return = array();
	$count = 0;
	if(is_object($res))
	{
		while($row = $res->fetch_assoc())
		{
			$count++;
			$array_return['values'][] = $row;
		}
	}
	$array_return['count'] = $count;
	return $array_return;
	
}