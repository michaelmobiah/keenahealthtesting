<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 40" aria-hidden="true">
    <defs>
        <pattern id="pattern-peak-2-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="2560" height="40" patternUnits="userSpaceOnUse">
            <polygon class="shape" points="1280,0 0,40 2560,40"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="40" fill="url(#pattern-peak-2-<?php echo esc_attr( $number ); ?>)"/>
</svg>
