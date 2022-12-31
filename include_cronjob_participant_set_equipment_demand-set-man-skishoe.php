<?php if ($yesh == 1) {
	
	/*
	Check: Level
	*/
	switch($participant_level) {
		case 'beginner':
			$type = 'EVO';
		break;
		case 'slightly advanced':
		
			if($participant_weight > 82) {
				$type = 'ALIAS';
			} else {
				$type = 'EVO';
			}
			
		break;
		case 'advanced':
			$type = 'ALIAS';
		break;
	}
	
	switch($type) {
		
		case 'EVO':
		
			if(
				$participant_shoesize == 37 ||
				$participant_shoesize == 37.5 ||
				$participant_shoesize == 38
			){ 
				$needed_size = 38;
			}
			
			if(
				$participant_shoesize == 38.5 ||
				$participant_shoesize == 39
			){ 
				$needed_size = 39;
			}
			
			if(
				$participant_shoesize == 39.5
			){ 
				$needed_size = 39.5;
			}
			
			if(
				$participant_shoesize == 40
			){ 
				$needed_size = 40;
			}
			
			if(
				$participant_shoesize == 40.5 ||
				$participant_shoesize == 41
			){ 
				$needed_size = 41;
			}
			
			if(
				$participant_shoesize == 41.5 ||
				$participant_shoesize == 42
			){ 
				$needed_size = 42;
			}
			
			if(
				$participant_shoesize == 42.5
			){ 
				$needed_size = 42.5;
			}
			
			if(
				$participant_shoesize == 43
			){ 
				$needed_size = 43;
			}
			
			if(
				$participant_shoesize == 43.5 ||
				$participant_shoesize == 44
			){ 
				$needed_size = 44;
			}
			
			if(
				$participant_shoesize == 44.5 ||
				$participant_shoesize == 45
			){ 
				$needed_size = 45;
			}
			
			if(
				$participant_shoesize == 45.5 ||
				$participant_shoesize == 46
			){ 
				$needed_size = 46;
			}
			
			if(
				$participant_shoesize == 46.5
			){ 
				$type = 'ALIAS'; // overrule want EVO bestaat niet in deze maat
				$needed_size = 46.5;
			}
			
			if(
				$participant_shoesize == 47
			){ 
				$type = 'ALIAS'; // overrule want EVO bestaat niet in deze maat
				$needed_size = 47;
			}
			
			if(
				$participant_shoesize == 47.5 ||
				$participant_shoesize == 48
			){ 
				$type = 'ALIAS'; // overrule want EVO bestaat niet in deze maat
				$needed_size = 48;
			}
			
			if(
				$participant_shoesize == 48.5 ||
				$participant_shoesize == 49
			){ 
				$type = 'ALIAS'; // overrule want EVO bestaat niet in deze maat
				$needed_size = 49;
			}
		
		break;
		
		case 'ALIAS':
			
			if(
				$participant_shoesize == 37 ||
				$participant_shoesize == 37.5 ||
				$participant_shoesize == 38
			){ 
				$type = 'EVO'; // overrule want ALIAS bestaat niet in deze maat
				$needed_size = 38;
			}
			
			if(
				$participant_shoesize == 38.5 ||
				$participant_shoesize == 39
			){ 
				$needed_size = 39;
				$type = 'EVO'; // overrule want ALIAS bestaat niet in deze maat
			}
			
			if(
				$participant_shoesize == 39.5
			){ 
				$needed_size = 39.5;
				$type = 'EVO'; // overrule want ALIAS bestaat niet in deze maat
			}
			
			if(
				$participant_shoesize == 40
			){ 
				$type = 'EVO'; // overrule want ALIAS bestaat niet in deze maat
				$needed_size = 40;
			}
			
			if(
				$participant_shoesize == 40.5 ||
				$participant_shoesize == 41
			){ 
				$type = 'EVO'; // overrule want ALIAS bestaat niet in deze maat
				$needed_size = 41;
			}
			
			if(
				$participant_shoesize == 41.5 ||
				$participant_shoesize == 42
			){ 
				$needed_size = 42;
			}
			
			if(
				$participant_shoesize == 42.5
			){ 
				$needed_size = 42.5;
			}
			
			if(
				$participant_shoesize == 43
			){ 
				$needed_size = 43;
			}
			
			if(
				$participant_shoesize == 43.5 ||
				$participant_shoesize == 44
			){ 
				$needed_size = 44;
			}
			
			if(
				$participant_shoesize == 44.5 ||
				$participant_shoesize == 45
			){ 
				$needed_size = 45;
			}
			
			if(
				$participant_shoesize == 45.5 ||
				$participant_shoesize == 46
			){ 
				$needed_size = 46;
			}
			
			if(
				$participant_shoesize == 46.5
			){ 
				$needed_size = 46.5;
			}
			
			if(
				$participant_shoesize == 47
			){ 
				$needed_size = 47;
			}
			
			if(
				$participant_shoesize == 47.5 ||
				$participant_shoesize == 48
			){ 
				$needed_size = 48;
			}
			
			if(
				$participant_shoesize == 48.5 ||
				$participant_shoesize == 49
			){ 
				$needed_size = 49;
			}
			
			if(
				$participant_shoesize == 49.5 ||
				$participant_shoesize == 50
			){ 
				$needed_size = 50;
			}
			
			if(
				$participant_shoesize == 50.5 ||
				$participant_shoesize == 51 ||
				$participant_shoesize == 51.5
			){ 
				$needed_size = 51.5;
			}
		
		break;
		
	}

}
?>