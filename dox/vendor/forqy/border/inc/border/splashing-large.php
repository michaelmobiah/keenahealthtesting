<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 60" aria-hidden="true">
	<defs>
		<pattern id="pattern-splashing-2-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="500" height="60" patternUnits="userSpaceOnUse">
			<path d="M366,57.4c-50.6,0-65.3-56.9-134.5-57.4c-0.3,0-0.7,0-1,0c-70.1,0-85.7,47.8-127.2,47.8c-0.6,0-1.2,0-1.7,0
			C61.6,47,55.9,16.5,0,16.5C0,28.8,0,60,0,60h500c0,0,0-31.2,0-43.5c-73.7,0-83,40-132.3,40.9C367.1,57.4,366.6,57.4,366,57.4z"/>
		</pattern>
	</defs>

	<rect x="0" y="0" width="100%" height="60" fill="url(#pattern-splashing-2-<?php echo esc_attr( $number ); ?>)"/>
</svg>