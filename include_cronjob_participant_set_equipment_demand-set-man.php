<?php if ($yesh == 1) {
	
	$beginner 	= 0;
	$weight		= 0;

	switch($category) {
		
		/*
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		Formula SKI *****************************************************************************
		*/
		case 1:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-ski.php');
			
		break;
		
		/*
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		Formula VIPSKI *****************************************************************************
		*/
		case 2:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-vipski.php');
			
		break;
		
		/*
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES ***************************************************************************
		Formula SKISHOES *****************************************************************************
		*/
		case 3:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-skishoe.php');
			
		break;
		
		/*
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK ***************************************************************************
		Formula SKISTOCK *****************************************************************************
		*/
		case 4:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-skistock.php');
		
		break;
		
		/*
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD ***************************************************************************
		Formula SNOWBOARD *****************************************************************************
		*/
		case 5:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-snowboard.php');
			
		break;
		
		/*
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD ***************************************************************************
		Formula VIP SNOWBOARD *****************************************************************************
		*/
		case 6:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-vipsnowboard.php');
			
		break;
		
		/*
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES ***************************************************************************
		Formula SNOWBOARDSHOES *****************************************************************************
		*/
		case 7:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-snowboardshoe.php');
		
		break;
		
		/*
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS ***************************************************************************
		Formula SNOWBOARDBINDINGS *****************************************************************************
		*/
		// case 8:
		
		// 	$type 			= 'SBBCUSTOM';
			
		// 	if($participant_shoesize >= 38 && $participant_shoesize < 41) {
		// 		$needed_size = 'S';
		// 	}
		// 	if($participant_shoesize >= 41 && $participant_shoesize < 43.5) {
		// 		$needed_size = 'M';
		// 	}
		// 	if($participant_shoesize >= 44) {
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
		
		// 	$type 			= 'SBBXV';
			
		// 	$needed_size 	= 'M/L';
		
		// break;
		
		/*
		Formula HELMET ***************************************************************************
		Formula HELMET ***************************************************************************
		Formula HELMET ***************************************************************************
		Formula HELMET *****************************************************************************
		*/
		case 10:
		
			include('include_cronjob_participant_set_equipment_demand-set-man-helmet.php');
		
		break;
		
	}

}
?>