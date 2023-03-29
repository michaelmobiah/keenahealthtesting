<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 40" aria-hidden="true">
    <defs>
        <pattern id="pattern-cubist-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="1280" height="40"
                 patternUnits="userSpaceOnUse">
            <polygon class="shape" points="1208,17 1101,25 1029,7 952,28 811,2 658,30 570,12 530,29 323,0 239,27 134,16 0,33 0,40 1280,40 1280,33"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="40" fill="url(#pattern-cubist-<?php echo esc_attr( $number ); ?>)"/>
</svg>