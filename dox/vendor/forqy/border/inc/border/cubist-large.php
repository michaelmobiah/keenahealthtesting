<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="30"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 30" aria-hidden="true">
	<defs>
		<pattern id="pattern-cubist-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="1280" height="30" patternUnits="userSpaceOnUse">
            <polygon class="shape" points="1139,8 1059,20 645,0 478,19 267,11 0,21 0,30 1280,30 1280,21"/>
		</pattern>
	</defs>

	<rect x="0" y="0" width="100%" height="30" fill="url(#pattern-cubist-<?php echo esc_attr( $number ); ?>)"/>
</svg>