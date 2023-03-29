<?php
// Generate a random number for getting a unique ID for a pattern
$number = rand();
?>

<svg class="border" width="2560" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 40" aria-hidden="true">
    <defs>
        <pattern id="pattern-wave-2-<?php echo esc_attr( $number ); ?>" x="0" y="0" width="2560" height="40" patternUnits="userSpaceOnUse">
            <path class="shape"
                  d="M2240,40h320V20C2440,30,2320,40,2240,40z M0,20v20h960C800,40,480,0,320,0C240,0,120,10,0,20z M1280,20 c-120,10-240,20-320,20h1280c-160,0-480-40-640-40C1520,0,1400,10,1280,20z"/>
        </pattern>
    </defs>

    <rect x="0" y="0" width="100%" height="40" fill="url(#pattern-wave-2-<?php echo esc_attr( $number ); ?>)"/>
</svg>
