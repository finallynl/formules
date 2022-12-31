<?php if ($yesh == 1) {
	
	/*
	Check: Level
	*/
	switch($participant_level) {
		case 'beginner':
			$type = 'RADIUS';	
		break;
		case 'slightly advanced':
			$type = 'RADIUS';
		break;
		case 'advanced':
			$type = 'PROCES';
		break;
	}
	
	/*
	Check: Length
	*/
	$needed_length = ($participant_length - 22);
	
	/*
	Check: Weight
	*/
	if($participant_weight <= 75) {
		
		$extra_cm = 0;
		
	} else {
		
		switch($participant_weight) {
			
			case 76:
				$extra_cm = 0.2;
			break;
			case 77:
				$extra_cm = 0.4;
			break;
			case 78:
				$extra_cm = 0.6;
			break;
			case 79:
				$extra_cm = 0.8;
			break;
			case 80:
				$extra_cm = 1;
			break;
			case 81:
				$extra_cm = 1.2;
			break;
			case 82:
				$extra_cm = 1.4;
			break;
			case 83:
				$extra_cm = 1.6;
			break;
			case 84:
				$extra_cm = 1.8;
			break;
			case 85:
				$extra_cm = 2;
			break;
			case 86:
				$extra_cm = 2.2;
			break;
			case 87:
				$extra_cm = 2.4;
			break;
			case 88:
				$extra_cm = 2.6;
			break;
			case 89:
				$extra_cm = 2.8;
			break;
			case 90:
				$extra_cm = 3;
			break;
			case 91:
				$extra_cm = 3.2;
			break;
			case 92:
				$extra_cm = 3.4;
			break;
			case 93:
				$extra_cm = 3.6;
			break;
			case 94:
				$extra_cm = 3.8;
			break;
			case 95:
				$extra_cm = 4;
			break;
			case 96:
				$extra_cm = 4.2;
			break;
			case 97:
				$extra_cm = 4.4;
			break;
			case 98:
				$extra_cm = 4.6;
			break;
			case 99:
				$extra_cm = 4.8;
			break;
			
		}
	
		if($participant_weight >= 100) {
			$extra_cm = 5;
		}
		
	}
		
	/*
	Needed: W?
	*/
	if($participant_shoesize > 44.5) {
		$needed_extra	= 'W';
	}
	
	$needed_length = ($needed_length + $extra_cm);

}
?>