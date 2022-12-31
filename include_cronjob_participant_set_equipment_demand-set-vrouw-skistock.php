<?php if ($yesh == 1) {
	
	/*
	Default
	*/
	$type = 'SKISTOK';
	
	/*
	Check: Length
	*/
	if(
		$participant_length <= 165
	) {

		$needed_length = 110;

	} else if (
		$participant_length > 165 && 
		$participant_length <= 175
	) {

		$needed_length = 115;

	} else if (
		$participant_length > 175 && 
		$participant_length <= 183
	) {

		$needed_length = 120;

	} else if (
		$participant_length > 183 && 
		$participant_length <= 190
	) {

		$needed_length = 125;

	} else if (
		$participant_length > 190 && 
		$participant_length <= 195
	) {

		$needed_length = 130;

	} else if (
		$participant_length > 195
	) {

		$needed_length = 135;

	};

	//$needed_length = ((0.568 * $participant_length) + 18.8);

}
?>