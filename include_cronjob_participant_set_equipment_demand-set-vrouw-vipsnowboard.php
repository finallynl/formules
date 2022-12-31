<?php if ($yesh == 1) {
	
	/*
	Check: Type
	*/
	if($participant_length > 175) {

		$type = 'JIBSAW';
		
	} else {

		/*
		Diva of Airis
		*/
		$type_array = array(
					'DIVA',
					'AIRIS'
				);

		$type = $type_array[rand(0,1)];

	}
	
	/*
	Check: Length
	*/
	$needed_length = ($participant_length - 24);
	
	/*
	Check: Weight
	*/
	if($participant_weight <= 60) {
		
		$extra_cm = 0;
		
	} else {
		
		switch($participant_weight) {
			
			case 61:
				$extra_cm = 0.2;
			break;
			case 62:
				$extra_cm = 0.4;
			break;
			case 63:
				$extra_cm = 0.6;
			break;
			case 64:
				$extra_cm = 0.8;
			break;
			case 65:
				$extra_cm = 1;
			break;
			case 66:
				$extra_cm = 1.2;
			break;
			case 67:
				$extra_cm = 1.4;
			break;
			case 68:
				$extra_cm = 1.6;
			break;
			case 69:
				$extra_cm = 1.8;
			break;
			case 70:
				$extra_cm = 2;
			break;
			case 71:
				$extra_cm = 2.2;
			break;
			case 72:
				$extra_cm = 2.4;
			break;
			case 73:
				$extra_cm = 2.6;
			break;
			case 74:
				$extra_cm = 2.8;
			break;
			case 75:
				$extra_cm = 3;
			break;
			case 76:
				$extra_cm = 3.2;
			break;
			case 77:
				$extra_cm = 3.4;
			break;
			case 78:
				$extra_cm = 3.6;
			break;
			case 79:
				$extra_cm = 3.8;
			break;
			case 80:
				$extra_cm = 4;
			break;
			case 81:
				$extra_cm = 4.2;
			break;
			case 82:
				$extra_cm = 4.4;
			break;
			case 83:
				$extra_cm = 4.6;
			break;
			case 84:
				$extra_cm = 4.8;
			break;
			
		}
	
		if($participant_weight >= 85) {
			$extra_cm = 5;
		}
		
	}
		
	$needed_length = ($needed_length + $extra_cm);
	
	/*
	Needed: W?
	*/
	if($participant_shoesize > 44.5) {
		$type 			= 'JIBSAW';
		$needed_extra	= 'W';
		$needed_length	= 158;
	}

}
?>