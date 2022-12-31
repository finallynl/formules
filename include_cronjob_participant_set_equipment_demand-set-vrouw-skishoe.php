<?php if ($yesh == 1) {
	
	/*
	Check: Shoesize
	*/
	if($participant_shoesize > 43) {
		$type = 'EVO';
	} else {
		$type = 'KELIA';
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
		
		break;
		
		case 'KELIA':
		
			if(
				$participant_shoesize == 34.5 ||
				$participant_shoesize == 35
			){ 
				$needed_size = 35;
			}
			
			if(
				$participant_shoesize == 36
			){ 
				$needed_size = 36;
			}
			
			if(
				$participant_shoesize == 36.5
			){ 
				$needed_size = 36.5;
			}
			
			if(
				$participant_shoesize == 37
			){ 
				$needed_size = 37;
			}
			
			if(
				$participant_shoesize == 37.5 ||
				$participant_shoesize == 38
			){ 
				$needed_size = 38;
			}
			
			if(
				$participant_shoesize == 38.5
			){ 
				$needed_size = 39;
			}
			
			if(
				$participant_shoesize == 39 ||
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
			
		break;
		
	}

}
?>