<?php if ($yesh == 1) {
	
	$type_array = array(
					'BIOM',
					'RAIDER',
					'PROGRESS'
				);

	$type 			= $type_array[rand(0,2)];
			
	$needed_size 	= $participant_helmetsize;

	/*
	Helm L or XL
	*/
	if($needed_size == 'L') {
		
		$random = rand(0,100);
		
		if($random % 2 == 0) {
			$needed_size = 'L';
		} else {
			$needed_size = 'XL';
		}

	}

	/*
	Extra randomness
	*/
	if(
		$needed_size == 'M' &&
		$type == 'RAIDER'
	) {
		
		$random = rand(0,100);

		if($random % 2 == 0) {
			$type = 'BIOM';
		} else {
			$type = 'RAIDER';
		}

	}

}
?>