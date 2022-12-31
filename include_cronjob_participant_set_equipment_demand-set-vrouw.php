<?php if ($yesh == 1) {
	
	$advanced 	= 0;
	$weight		= 0;

	switch($category) {
		
		/*
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		*/
		case 1:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-ski.php');
			
		break;
		
		/*
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		*/
		case 2:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-vipski.php');
			
		break;
		
		/*
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES *****************************************************************************
		*/
		case 3:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-skishoe.php');
			
		break;
		
		/*
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK *****************************************************************************
		*/
		case 4:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-skistock.php');
		
		break;
		
		/*
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD *****************************************************************************
		*/
		case 5:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-snowboard.php');
			
		break;
		
		/*
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD *****************************************************************************
		*/
		case 6:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-vipsnowboard.php');
			
		break;
		
		/*
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES *****************************************************************************
		*/
		case 7:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-snowboardshoe.php');
		
		break;
		
		/*
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS *****************************************************************************
		*/
		// case 8:
		
		// 	$type 			= 'SBBSTILETTO';
			
		// 	if($participant_shoesize >= 34 && $participant_shoesize < 36.5) {
		// 		$needed_size = 'S';
		// 	}
		// 	if($participant_shoesize >= 36.5 && $participant_shoesize < 40) {
		// 		$needed_size = 'M';
		// 	}
		// 	if($participant_shoesize >= 40) {
		// 		$needed_size = 'L';
		// 	}
		
		// break;
		
		/*
		Formula VIPSNOWBOARDBINDINGS ***************************************************************************
		Formula VIPSNOWBOARDBINDINGS ***************************************************************************
		Formula VIPSNOWBOARDBINDINGS ***************************************************************************
		Formula VIPSNOWBOARDBINDINGS *****************************************************************************
		*/
		// case 9:
		
		// 	$type 			= 'SBBDIVA';
			
		// 	$needed_size 	= 'S/M';
		
		// break;
		
		/*
		Formula HELMET ***************************************************************************
		Formula HELMET ***************************************************************************
		Formula HELMET ***************************************************************************
		Formula HELMET *****************************************************************************
		*/
		case 10:
		
			include('include_cronjob_participant_set_equipment_demand-set-vrouw-helmet.php');
		
		break;
		
	}

}
?>