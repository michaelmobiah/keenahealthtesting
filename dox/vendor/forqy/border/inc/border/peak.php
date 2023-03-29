<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 20" aria-hidden="true">
    <defs>
        <pattern id="pattern-peak-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="2560" height="20" patternUnits="userSpaceOnUse">
            <polygon class="shape" points="1280,0 0,20 2560,20"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="20" fill="url(#pattern-peak-<?php echo esc_attr( $number ); ?>)"/>
</svg>
