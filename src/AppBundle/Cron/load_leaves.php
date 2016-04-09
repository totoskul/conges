<?php
require_once "config.php";
require_once "db_connect.php";
$rq = "select * from ".DB_DATABASE.".fos_user where enabled=1";
$res_user = db_select($rq);
// Add current month
$time_uniq = date('Ym');
$year = date('Y');
$month = date('m');
$previous_month = date("m", strtotime("first day of previous month"));
$month_name = date('F');

// initialisation
/*$time_uniq = "201603";
$year = "2016";
$month = "03";
$previous_month = "02";
$month_name = "March";*/

$rq = "select * from ".DB_DATABASE.".Time where timeName = '".$time_uniq."'";
$res = db_select($rq);
if(!$res['count'])
{
	// insertion si le mois n'existe pas
	$rq = "insert into ".DB_DATABASE.".Time (timeName, month, year, monthName) " .
			"VALUES ('".$time_uniq."', '".$month."', '".$year."', '".$month_name."')";
	db_query($rq);
	$rq = "select * from ".DB_DATABASE.".Time where timeName = '".$time_uniq."'";
	$res = db_select($rq);
	
	
}

if($res['count'] )
{
	$time_id = $res['values'][0]['id'];
}
if($res_user['count'])
{
	foreach($res_user['values'] as $user)
	{
		
		// RAZ des RTT fixes des mois anciens
		//$rq = "update ".DB_DATABASE.".UserLeaveMonth set nbAvailable = 0 where leave_type_id = 3 and user_id = ".$user['id'];
		//db_query($rq);
		// raz des -1 / 0 sur les CP le 1er juin....
		if($month == '06')
		{
			$rq = "update UserLeaveMonth set nbUsed = nbAvailable where leave_type_id=1 and `year` = -1";
			db_query($rq);
			$rq = "update UserLeaveMonth set `year` = `year`-1";
			db_query($rq);
		}
		// ajout des 3 types de congés
		// CP
		// on vérifie si les congés n'ont pas déjà été ajoutés
		// Les stagiaires ne doivent pas en recevoir
		if($user['contract_type_id'] != 3)
		{
			$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
					"and leave_type_id = 1 and time_id = ".$time_id;
			$nb = db_select($rq);
			if(!$nb['count'])
			{
				// si non, on les ajoute
				$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
						"VALUES (".$user['id'].", 1, '".$time_id."', 2.08, 0)";
				echo $rq."\n";
				db_query($rq);	
			}	
		}
		else
		{
			$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
					"and leave_type_id = 1 and time_id = ".$time_id;
			$nb = db_select($rq);
			if(!$nb['count'])
			{
				// si non, on les ajoute
				$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
						"VALUES (".$user['id'].", 1, '".$time_id."', 0, 0)";
				echo $rq."\n";
				db_query($rq);	
			}	
		}
		// RTT variables 
		
		if($month == '01')
		{
			// on vérifie si les congés n'ont pas déjà été ajoutés
			$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
					"and leave_type_id = 2 and time_id = ".$time_id;
			$nb = db_select($rq);
			if(!$nb['count'])
			{
				// si non, on les ajoute
				$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
						"VALUES (".$user['id'] .",2, '".$time_id."', 12, 0)";
				db_query($rq);	
			}	
		}
		
		
		if($month == '01')
		{
			// RTT Fixes chargés le 1er janvier de chaque année
			// on vérifie si les congés n'ont pas déjà été ajoutés
			$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
					"and leave_type_id = 3 and time_id = ".$time_id;
			$nb = db_select($rq);
			if(!$nb['count'])
			{
				// si non, on les ajoute
				$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
						"VALUES (".$user['id'].", 3, '".$time_id."', 11, 0)";
				db_query($rq);	
			}	
		}
		// Congés sans solde
		// on vérifie si les congés n'ont pas déjà été ajoutés
		$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
				"and leave_type_id = 4 and time_id = ".$time_id;
		$nb = db_select($rq);
		if(!$nb['count'])
		{
			// si non, on les ajoute
			$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
					"VALUES (".$user['id'].", 4, '".$time_id."', 20, 0)";
			db_query($rq);	
		}
					
		
		// Congés récup 
		// on vérifie si les congés n'ont pas déjà été ajoutés
		$rq = "select id from ".DB_DATABASE.".UserLeaveMonth where user_id = ".$user['id']." " .
				"and leave_type_id = 5 and time_id = ".$time_id;
		$nb = db_select($rq);
		if(!$nb['count'])
		{
			// si non, on les ajoute
			$rq = "insert into ".DB_DATABASE.".UserLeaveMonth (user_id, leave_type_id, time_id, nbAvailable, nbUsed) " .
					"VALUES (".$user['id'].", 5, '".$time_id."', 20, 0)";
			db_query($rq);	
		}		
		// TODO
		// Gestion des proratas. Si date de fin dans l'année, alors, on vire des congés au delà de la date en question...
		
		// décrémenter les RTTF de 1 chaque mois si aucun RTTF n'a été pris. SAUF si on est en décembre, auquel cas, 
		// on vérifie si 10 RTT ont déjà été" pris, sinon, on ne décrémente pas... argh
		if($month != '12')
		{
			$rq = "select id from ".DB_DATABASE.".LeaveDetail where leave_type_id = 3 and startDate 
				between '".$year."-".$previous_month."-01' and '".$year."-".$previous_month."-31 23:59:59' and user_id = ".$user['id'];
			$res = db_select($rq);
			// si aucun congé n'a été pris sur le mois précédent, on décrémente le nombre de RTTF disponibles
			/*if(!$res['count'])
			{
				$rq = "update ".DB_DATABASE.".UserLeaveMonth a join ".DB_DATABASE.".Time b on b.id = a.time_id
				set nbAvailable = nbAvailable - 1 where user_id = ".$user['id']." and leave_type_id = 3 
				and b.timeName = '".$year."01'";
				db_query($rq);	
			}*/
		}
		// fonctionne tout le temps sauf pour les CDD ou les stages qui ont un prorata
		// Si la date de fin du contrat est supérieure à la date courante ==> Disabled
		
		// Si la date de fin de contrat est définie et dans l'année en cours ==> Prorata de RTT
		
		
	}
}
