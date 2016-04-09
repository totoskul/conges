<?php

namespace AppBundle\Helper;

class DateHelper
{
    static public function isNonWorkedDay($year, $month, $day)
    {
        $isNonWorkedDay = false;

        $numDay = date('N', mktime(0, 0, 0, $month, $day, $year));
        $nbDays = date("t", mktime(0, 0, 0, $month, 1, $year));

        if($nbDays < $day) {
            $isNonWorkedDay = true;
        } elseif($numDay != 6 && $numDay != 7) {
            $date  = mktime(0, 0, 0, $month, $day, $year);

            $holidays[] = mktime(0, 0, 0, 1, 1, $year); // Jour de l'an
            $holidays[] = mktime(0, 0, 0, 5, 1, $year); // Fête du travail
            $holidays[] = mktime(0, 0, 0, 5, 8, $year); // Victoire 1945
            $holidays[] = mktime(0, 0, 0, 7, 14, $year); // Fête nationale
            $holidays[] = mktime(0, 0, 0, 8, 15, $year); // Assomption
            $holidays[] = mktime(0, 0, 0, 11, 1, $year); // Toussaint
            $holidays[] = mktime(0, 0, 0, 11, 11, $year); // Armistice 1918
            $holidays[] = mktime(0, 0, 0, 12, 25, $year); // Noël

            // Récupération de Pâques qui permet ensuite d'obtenir le jour de l'Ascension et celui de la Pentecôte
            $easterDate  = easter_date($year);
            $easterDay   = date('d', $easterDate);
            $easterMonth = date('m', $easterDate);
            $easterYear  = date('Y', $easterDate);

            $holidays[] = mktime(0, 0, 0, $easterMonth, $easterDay + 1, $easterYear); // Lundi de Pâques
            $holidays[] = mktime(0, 0, 0, $easterMonth, $easterDay + 39, $easterYear); // Ascension
            $holidays[] = mktime(0, 0, 0, $easterMonth, $easterDay + 50, $easterYear); // Pentecôte

            // Si ce n'est pas un jour férié et que c'est un lundi ou un vendredi
            if(in_array($date, $holidays)) {
                $isNonWorkedDay = true;
            }
        } else {
            $isNonWorkedDay = true;
        }

        return $isNonWorkedDay;
    }
    
    static public function computeDaysNumber($date_start, $date_stop)
    {
    	$arr_bank_holidays = array(); // Tableau des jours feriés	
	
		// On boucle dans le cas où l'année de départ serait différente de l'année d'arrivée
		$diff_year = date('Y', $date_stop) - date('Y', $date_start);
		for ($i = 0; $i <= $diff_year; $i++) 
		{			
			$year = (int)date('Y', $date_start) + $i;
			// Liste des jours feriés
			$arr_bank_holidays[] = '1_1_'.$year; // Jour de l'an
			$arr_bank_holidays[] = '1_5_'.$year; // Fete du travail
			$arr_bank_holidays[] = '8_5_'.$year; // Victoire 1945
			$arr_bank_holidays[] = '14_7_'.$year; // Fete nationale
			$arr_bank_holidays[] = '15_8_'.$year; // Assomption
			$arr_bank_holidays[] = '1_11_'.$year; // Toussaint
			$arr_bank_holidays[] = '11_11_'.$year; // Armistice 1918
			$arr_bank_holidays[] = '25_12_'.$year; // Noel
					
			// Récupération de paques. Permet ensuite d'obtenir le jour de l'ascension et celui de la pentecote	
			$easter = easter_date($year);
			$arr_bank_holidays[] = date('j_n_'.$year, $easter + 86400); // Paques
			$arr_bank_holidays[] = date('j_n_'.$year, $easter + (86400*39)); // Ascension
			$arr_bank_holidays[] = date('j_n_'.$year, $easter + (86400*50)); // Pentecote	
		}
		$nb_days_open = 0;
		// Mettre <= si on souhaite prendre en compte le dernier jour dans le décompte	
		while ($date_start <= $date_stop) 
		{
			// Si le jour suivant n'est ni un dimanche (0) ou un samedi (6), ni un jour férié, on incrémente les jours ouvrés	
			if (!in_array(date('w', $date_start), array(0, 6)) 
			&& !in_array(date('j_n_'.date('Y', $date_start), $date_start), $arr_bank_holidays)) 
			{
				$nb_days_open++;		
			}
			$date_start = mktime(date('H', $date_start), date('i', $date_start), date('s', $date_start), date('m', $date_start), date('d', $date_start) + 1, date('Y', $date_start));			
		}	
		return $nb_days_open;
    }
    
    static public function translateDay($date)
    {
    	$joursem = array('dim', 'lun', 'mar', 'mer', 'jeu', 'ven', 'sam');
    	list($annee, $mois, $jour) = explode('-', $date);
    	$timestamp = mktime (0, 0, 0, $mois, $jour, $annee);
    	return $joursem[date("w",$timestamp)];
    }

    public function getName()
    {
        return 'DateHelper';
    }
}