<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 18" aria-hidden="true">
	<defs>
		<pattern id="pattern-greek-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="16" height="18" patternUnits="userSpaceOnUse">
			<path class="shape"
			      d="M8,2h4v2h-2v2h4V0H0v6h4V4H2V2h4v6H0v2h14v6h-4v-2h2v-2H8v6h8v-2h0v-6h0V8H8V2z M2,14h2v2H0v2h6v-6H2V14z M16,0v6h0L16,0L16,0z"/>
		</pattern>
	</defs>

	<rect x="0" y="0" width="100%" height="18" fill="url(#pattern-greek-<?php echo esc_attr( $number ); ?>)"/>
</svg>